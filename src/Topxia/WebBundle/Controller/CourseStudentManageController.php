<?php
namespace Topxia\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\ExportHelp;
use Topxia\Common\SimpleValidator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\Service\User\Impl\NotificationServiceImpl;

class CourseStudentManageController extends BaseController
{
    public function indexAction(Request $request, $id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        $fields    = $request->query->all();
        $condition = array();

        if (isset($fields['keyword']) && !empty($fields['keyword'])) {
            $condition['userIds'] = $this->getUserIds($fields['keyword']);
        }

        $condition = array_merge($condition, array('courseId' => $course['id'], 'role' => 'student'));

        $paginator = new Paginator(
            $request,
            $this->getCourseService()->searchMemberCount($condition),
            20
        );

        $students = $this->getCourseService()->searchMembers(
            $condition,
            array('createdTime', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        $studentUserIds = ArrayToolkit::column($students, 'userId');
        $users          = $this->getUserService()->findUsersByIds($studentUserIds);
        $followingIds   = $this->getUserService()->filterFollowingIds($this->getCurrentUser()->id, $studentUserIds);

        $progresses = array();

        foreach ($students as $student) {
            $progresses[$student['userId']] = $this->calculateUserLearnProgress($course, $student);
        }

        $courseSetting              = $this->getSettingService()->get('course', array());
        $isTeacherAuthManageStudent = !empty($courseSetting['teacher_manage_student']) ? 1 : 0;
        $default                    = $this->getSettingService()->get('default', array());
        return $this->render('TopxiaWebBundle:CourseStudentManage:student.html.twig', array(
            'course'                     => $course,
            'students'                   => $students,
            'users'                      => $users,
            'progresses'                 => $progresses,
            'followingIds'               => $followingIds,
            'isTeacherAuthManageStudent' => $isTeacherAuthManageStudent,
            'paginator'                  => $paginator,
            'canManage'                  => $this->getCourseService()->canManageCourse($course['id']),
            'default'                    => $default,
            'role'                       => 'student'
        ));
    }

    public function refundRecordAction(Request $request, $id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        $fields    = $request->query->all();
        $condition = array();

        if (isset($fields['keyword']) && !empty($fields['keyword'])) {
            $condition['userIds'] = $this->getUserIds($fields['keyword']);
        }

        $condition['targetId']   = $id;
        $condition['targetType'] = 'course';
        $condition['status']     = 'success';

        $paginator = new Paginator(
            $request,
            $this->getOrderService()->searchRefundCount($condition),
            20
        );

        $refunds = $this->getOrderService()->searchRefunds(
            $condition,
            'createdTime',
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        foreach ($refunds as $key => $refund) {
            $refunds[$key]['user'] = $this->getUserService()->getUser($refund['userId']);

            $refunds[$key]['order'] = $this->getOrderService()->getOrder($refund['orderId']);
        }

        return $this->render('TopxiaWebBundle:CourseStudentManage:quit-record.html.twig', array(
            'course'    => $course,
            'refunds'   => $refunds,
            'paginator' => $paginator,
            'role'      => 'student'
        ));
    }

    public function createAction(Request $request, $id)
    {
        $courseSetting = $this->getSettingService()->get('course', array());

        if (!empty($courseSetting['teacher_manage_student'])) {
            $course = $this->getCourseService()->tryManageCourse($id);
        } else {
            $course = $this->getCourseService()->tryAdminCourse($id);
        }

        $currentUser = $this->getCurrentUser();

        if ('POST' == $request->getMethod()) {
            $data = $request->request->all();
            $user = $this->getUserService()->getUserByLoginField($data['queryfield']);

            $data["isAdminAdded"] = 1;

            list($course, $member, $order) = $this->getCourseMemberService()->becomeStudentAndCreateOrder($user["id"], $course["id"], $data);
            return $this->createStudentTrResponse($course, $member);
        }

        $default = $this->getSettingService()->get('default', array());
        return $this->render('TopxiaWebBundle:CourseStudentManage:create-modal.html.twig', array(
            'course'  => $course,
            'default' => $default
        ));
    }

    public function removeAction(Request $request, $courseId, $userId)
    {
        $user          = $this->getCurrentUser();
        $courseSetting = $this->getSettingService()->get('course', array());

        if (!empty($courseSetting['teacher_manage_student'])) {
            $course = $this->getCourseService()->tryManageCourse($courseId);
        } else {
            $course = $this->getCourseService()->tryAdminCourse($courseId);
        }

        $condition = array(
            'targetType' => 'course',
            'targetId'   => $courseId,
            'userId'     => $userId,
            'status'     => 'paid'
        );
        $orders = $this->getOrderService()->searchOrders($condition, 'latest', 0, 1);
        foreach ($orders as $key => $value) {
            $order = $value;
        }
        $reason = array(
            'type'     => 'other',
            'note'     => '"'.$user['nickname'].'"'.' 手动移除',
            'operator' => $user['id']
        );
        $refund = $this->getOrderService()->applyRefundOrder($order['id'], null, $reason);

        $this->getCourseService()->removeStudent($courseId, $userId);

        $this->getNotificationService()->notify($userId, 'student-remove', array(
            'courseId'    => $course['id'],
            'courseTitle' => $course['title']
        ));

        return $this->createJsonResponse(true);
    }

    public function exportDatasAction(Request $request, $id)
    {
        list($start, $limit, $exportAllowCount) = ExportHelp::getMagicExportSetting($request);

        list($title, $students, $courseMemberCount) = $this->getExportContent($id, $start, $limit, $exportAllowCount);

        $file = '';
        if ($start == 0) {
            $file = ExportHelp::addFileTitle($request,'course_students', $title);
        }

        $content = implode("\r\n", $students);
        $file = ExportHelp::saveToTempFile($request, $content, $file);

        $status = ExportHelp::getNextMethod($start+$limit, $courseMemberCount);

        return $this->createJsonResponse(
            array(
                'status' => $status,
                'fileName' => $file,
                'start' => $start+$limit
            )
        );
    }

    public function exportCsvAction(Request $request, $id)
    {
        $fileName = sprintf("course-%s-students-(%s).csv", $id, date('Y-n-d'));
        return ExportHelp::exportCsv($request, $fileName);
    }
    
    private function getExportContent($id, $start, $limit, $exportAllowCount)
    {
        $gender        = array('female' => $this->getServiceKernel()->trans('女'), 'male' => $this->getServiceKernel()->trans('男'), 'secret' => $this->getServiceKernel()->trans('秘密'));
        $courseSetting = $this->getSettingService()->get('course', array());

        if (isset($courseSetting['teacher_export_student']) && $courseSetting['teacher_export_student'] == "1") {
            $course = $this->getCourseService()->tryManageCourse($id);
        } else {
            $course = $this->getCourseService()->tryAdminCourse($id);
        }

        $userinfoFields = array();

        if (isset($courseSetting['userinfoFields'])) {
            $userinfoFields = array_diff($courseSetting['userinfoFields'], array('truename', 'job', 'mobile', 'qq', 'company', 'gender', 'idcard', 'weixin'));
        }

        $condition = array(
            'courseId' => $course['id'],
            'role' => 'student'
        );

        $courseMemberCount = $this->getCourseService()->searchMemberCount($condition);

        $courseMemberCount = ($courseMemberCount>$exportAllowCount) ? $exportAllowCount:$courseMemberCount;
        if ($courseMemberCount < ($start + $limit + 1)) {
            $limit = $courseMemberCount - $start;
        }
        $courseMembers = $this->getCourseService()->searchMembers($condition, array('createdTime', 'DESC'), $start, $limit);
        $userFields = $this->getUserFieldService()->getAllFieldsOrderBySeqAndEnabled();

        $fields['weibo'] = $this->getServiceKernel()->trans('微博');

        foreach ($userFields as $userField) {
            $fields[$userField['fieldName']] = $userField['title'];
        }

        $userinfoFields = array_flip($userinfoFields);

        $fields = array_intersect_key($fields, $userinfoFields);

        if (empty($courseSetting['buy_fill_userinfo'])) {
            $fields = array();
        }

        $studentUserIds = ArrayToolkit::column($courseMembers, 'userId');

        $users = $this->getUserService()->findUsersByIds($studentUserIds);
        $users = ArrayToolkit::index($users, 'id');

        $profiles = $this->getUserService()->findUserProfilesByIds($studentUserIds);
        $profiles = ArrayToolkit::index($profiles, 'id');

        $progresses = array();

        foreach ($courseMembers as $student) {
            $progresses[$student['userId']] = $this->calculateUserLearnProgress($course, $student);
        }

        $str = $this->getServiceKernel()->trans('用户名,Email,加入学习时间,学习进度,姓名,性别,QQ号,微信号,手机号,公司,职业,头衔');

        foreach ($fields as $key => $value) {
            $str .= ",".$value;
        }

        $students = array();

        foreach ($courseMembers as $courseMember) {
            $member = "";
            $member .= $users[$courseMember['userId']]['nickname'].",";
            $member .= $users[$courseMember['userId']]['email'].",";
            $member .= date('Y-n-d H:i:s', $courseMember['createdTime']).",";
            $member .= $progresses[$courseMember['userId']]['percent'].",";
            $member .= $profiles[$courseMember['userId']]['truename'] ? $profiles[$courseMember['userId']]['truename']."," : "-".",";
            $member .= $gender[$profiles[$courseMember['userId']]['gender']].",";
            $member .= $profiles[$courseMember['userId']]['qq'] ? $profiles[$courseMember['userId']]['qq']."," : "-".",";
            $member .= $profiles[$courseMember['userId']]['weixin'] ? $profiles[$courseMember['userId']]['weixin']."," : "-".",";
            $member .= $profiles[$courseMember['userId']]['mobile'] ? $profiles[$courseMember['userId']]['mobile']."," : "-".",";
            $member .= $profiles[$courseMember['userId']]['company'] ? $profiles[$courseMember['userId']]['company']."," : "-".",";
            $member .= $profiles[$courseMember['userId']]['job'] ? $profiles[$courseMember['userId']]['job']."," : "-".",";
            $member .= $users[$courseMember['userId']]['title'] ? $users[$courseMember['userId']]['title']."," : "-".",";

            foreach ($fields as $key => $value) {
                $member .= $profiles[$courseMember['userId']][$key] ? $profiles[$courseMember['userId']][$key]."," : "-".",";
            }

            $students[] = $member;
        };

        return array($str, $students, $courseMemberCount);
    }

    public function remarkAction(Request $request, $courseId, $userId)
    {
        $course = $this->getCourseService()->tryManageCourse($courseId);
        $user   = $this->getUserService()->getUser($userId);
        $member = $this->getCourseService()->getCourseMember($courseId, $userId);
        if (empty($member)) {
            throw $this->createAccessDeniedException($this->getServiceKernel()->trans("学员#{$userId}不属于课程{#courseId}"));
        }

        if ('POST' == $request->getMethod()) {
            $data   = $request->request->all();
            $member = $this->getCourseService()->remarkStudent($course['id'], $user['id'], $data['remark']);
            return $this->createStudentTrResponse($course, $member);
        }

        $default = $this->getSettingService()->get('default', array());
        return $this->render('TopxiaWebBundle:CourseStudentManage:remark-modal.html.twig', array(
            'member'  => $member,
            'user'    => $user,
            'course'  => $course,
            'default' => $default
        ));
    }

    public function checkStudentAction(Request $request, $id)
    {
        $keyword = $request->query->get('value');
        $user    = $this->getUserService()->getUserByLoginField($keyword);

        if (!$user) {
            $response = array('success' => false, 'message' => $this->getServiceKernel()->trans('该用户不存在'));
        } else {
            $isCourseStudent = $this->getCourseService()->isCourseStudent($id, $user['id']);

            if ($isCourseStudent) {
                $response = array('success' => false, 'message' => $this->getServiceKernel()->trans('该用户已是本课程的学员了'));
            } else {
                $response = array('success' => true, 'message' => '');
            }

            $isCourseTeacher = $this->getCourseService()->isCourseTeacher($id, $user['id']);

            if ($isCourseTeacher) {
                $response = array('success' => false, 'message' => $this->getServiceKernel()->trans('该用户是本课程的教师，不能添加'));
            }
        }

        return $this->createJsonResponse($response);
    }

    public function showAction(Request $request, $courseId, $userId)
    {
        if (!$this->getCurrentUser()->isAdmin()) {
            throw $this->createAccessDeniedException($this->getServiceKernel()->trans('您无权查看学员详细信息！'));
        }

        return $this->forward('TopxiaWebBundle:Student:show', array(
            'request' => $request, 
            'userId' => $userId
        ));
    }

    public function definedShowAction(Request $request, $courseId, $userId)
    {
        $course = $this->getCourseService()->tryManageCourse($courseId);
        $member = $this->getCourseService()->getCourseMember($courseId, $userId);
        if (empty($member)) {
            throw $this->createAccessDeniedException($this->getServiceKernel()->trans("学员#{$userId}不属于课程{#courseId}"));
        }

        return $this->forward('TopxiaWebBundle:Student:definedShow', array(
            'request' => $request, 
            'userId' => $userId
        ));
    }

    public function importAction($id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);
        return $this->render('TopxiaWebBundle:CourseStudentManage:import.html.twig', array(
            'course' => $course
        ));
    }

    public function excelDataImportAction(Request $request, $id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        if ($course['status'] != 'published') {
            throw $this->createNotFoundException($this->getServiceKernel()->trans('未发布课程不能导入学员!'));
        }

        return $this->forward('TopxiaWebBundle:Importer:importExcelData', array(
            'request'    => $request,
            'targetId'   => $id,
            'targetType' => 'course'
        ));
    }

    private function getUserIds($keyword)
    {
        $userIds = array();

        if (SimpleValidator::email($keyword)) {
            $user = $this->getUserService()->getUserByEmail($keyword);

            $userIds[] = $user ? $user['id'] : null;
            return $userIds;
        } elseif (SimpleValidator::mobile($keyword)) {
            $mobileVerifiedUser = $this->getUserService()->getUserByVerifiedMobile($keyword);
            $profileUsers       = $this->getUserService()->searchUserProfiles(array('tel' => $keyword), array('id', 'DESC'), 0, PHP_INT_MAX);
            $mobileNameUser     = $this->getUserService()->getUserByNickname($keyword);
            $userIds            = $profileUsers ? ArrayToolkit::column($profileUsers, 'id') : null;

            $userIds[] = $mobileVerifiedUser ? $mobileVerifiedUser['id'] : null;
            $userIds[] = $mobileNameUser ? $mobileNameUser['id'] : null;

            $userIds = array_unique($userIds);

            $userIds = $userIds ? $userIds : null;
            return $userIds;
        } else {
            $user      = $this->getUserService()->getUserByNickname($keyword);
            $userIds[] = $user ? $user['id'] : null;
            return $userIds;
        }
    }

    protected function calculateUserLearnProgress($course, $member)
    {
        if ($course['lessonNum'] == 0) {
            return array('percent' => '0%', 'number' => 0, 'total' => 0);
        }

        $percent = intval($member['learnedNum'] / $course['lessonNum'] * 100).'%';

        return array(
            'percent' => $percent,
            'number'  => $member['learnedNum'],
            'total'   => $course['lessonNum']
        );
    }

    protected function createStudentTrResponse($course, $student)
    {
        $courseSetting              = $this->getSettingService()->get('course', array());
        $isTeacherAuthManageStudent = !empty($courseSetting['teacher_manage_student']) ? 1 : 0;

        $user        = $this->getUserService()->getUser($student['userId']);
        $isFollowing = $this->getUserService()->isFollowed($this->getCurrentUser()->id, $student['userId']);
        $progress    = $this->calculateUserLearnProgress($course, $student);
        $default     = $this->getSettingService()->get('default', array());
        return $this->render('TopxiaWebBundle:CourseStudentManage:tr.html.twig', array(
            'course'                     => $course,
            'student'                    => $student,
            'user'                       => $user,
            'progress'                   => $progress,
            'isFollowing'                => $isFollowing,
            'isTeacherAuthManageStudent' => $isTeacherAuthManageStudent,
            'default'                    => $default
        ));
    }

    protected function getCourseMemberService()
    {
        return $this->getServiceKernel()->createService('Course.CourseMemberService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    /**
     * @return NotificationServiceImpl
     */
    protected function getNotificationService()
    {
        return $this->getServiceKernel()->createService('User.NotificationService');
    }

    protected function getOrderService()
    {
        return $this->getServiceKernel()->createService('Order.OrderService');
    }

    protected function getUserFieldService()
    {
        return $this->getServiceKernel()->createService('User.UserFieldService');
    }

    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('User.UserService');
    }
}
