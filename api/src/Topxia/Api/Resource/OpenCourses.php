<?php


namespace Topxia\Api\Resource;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\OpenCourse\Impl\OpenCourseServiceImpl;
use Topxia\Service\Taxonomy\Impl\CategoryServiceImpl;
use Topxia\Service\Taxonomy\Impl\TagServiceImpl;

class OpenCourses extends BaseResource
{
    public function get(Application $app, Request $request)
    {
        $conditions = $request->query->all();

        $start = $request->query->get('start', 0);
        $limit = $request->query->get('limit', 20);

        if (isset($conditions['cursor'])) {
            $conditions['status']         = 'published';
            $conditions['parentId']       = 0;
            $conditions['updatedTime_GE'] = $conditions['cursor'];
            $openCourses                  = $this->getOpenCourseService()->searchCourses($conditions, array('createdTime', 'ASC'), $start, $limit);
            $openCourses                  = $this->assembly($openCourses);
            $next                         = $this->nextCursorPaging($conditions['cursor'], $start, $limit, $openCourses);

            return $this->wrap($this->filter($openCourses), $next);
        } else {
            $total       = $this->getOpenCourseService()->searchCourseCount($conditions);
            $openCourses = $this->getOpenCourseService()->searchCourses($conditions, array('createdTime', 'DESC'), $start, $limit);
            $openCourses = $this->assembly($openCourses);
            return $this->wrap($this->filter($openCourses), $total);
        }
    }

    protected function assembly(array $openCourses)
    {
        $categoryIds = ArrayToolkit::column($openCourses, 'categoryId');
        $categories  = $this->getCategoryService()->findCategoriesByIds($categoryIds);

        foreach ($openCourses as &$course) {
            if (isset($categories[$course['categoryId']])) {
                $course['category'] = array(
                    'id'   => $categories[$course['categoryId']]['id'],
                    'name' => $categories[$course['categoryId']]['name']
                );
            } else {
                $course['category'] = array();
            }
        }

        return $openCourses;
    }


    public function filter($res)
    {
        return $this->multicallFilter('OpenCourse', $res);
    }

    /**
     * @return OpenCourseServiceImpl
     */
    protected function getOpenCourseService()
    {
        return $this->getServiceKernel()->createService('OpenCourse.OpenCourseService');
    }

    /**
     * @return CategoryServiceImpl
     */
    protected function getCategoryService()
    {
        return $this->getServiceKernel()->createService('Taxonomy.CategoryService');
    }
}