<?php

namespace Topxia\Service\Course\Dao;

interface CourseMemberDao
{
    public function getMember($id);

    public function getMemberByCourseIdAndUserId($courseId, $userId);

    public function getMembersByCourseIds($courseIds);

    public function findMembersByUserIdAndRole($userId, $role, $start, $limit, $onlyPublished = true);

    public function findMembersNotInClassroomByUserIdAndRole($userId, $role, $start, $limit, $onlyPublished = true); //

    public function findMemberCountByUserIdAndRole($userId, $role, $onlyPublished = true);

    public function findMemberCountNotInClassroomByUserIdAndRole($userId, $role, $onlyPublished = true); //

    public function findMemberCountByUserIdAndCourseTypeAndIsLearned($userId, $role, $type, $isLearned);

    /*
     * 2017/3/1 为移动端提供服务，其他慎用
     */
    public function findMemberCountNotInClassroomByUserIdAndCourseTypeAndIsLearned($userId, $role, $type, $isLearned);

    public function findMembersByUserIdAndCourseTypeAndIsLearned($userId, $role, $type, $isLearned, $start, $limit);

    /*
     * 2017/3/1 为移动端提供服务，其他慎用
     */
    public function findMembersNotInClassroomByUserIdAndCourseTypeAndIsLearned($userId, $role, $type, $isLearned, $start, $limit);

    public function findMemberCountByUserIdAndRoleAndIsLearned($userId, $role, $isLearned);

    /*
     * 2017/3/1 为移动端提供服务，其他慎用
     */
    public function findMemberCountNotInClassroomByUserIdAndRoleAndIsLearned($userId, $role, $isLearned);

    public function findMobileVerifiedMemberCountByCourseId($courseId, $locked);

    public function findMembersByUserIdAndRoleAndIsLearned($userId, $role, $isLearned, $start, $limit);

    /*
     * 2017/3/1 为移动端提供服务，其他慎用
     */
    public function findMembersNotInClassroomByUserIdAndRoleAndIsLearned($userId, $role, $isLearned, $start, $limit);

    public function findMembersByCourseIdAndRole($courseId, $role, $start, $limit);

    public function findMemberCountByCourseIdAndRole($courseId, $role);

    public function findMembersByUserIdAndJoinType($userId, $joinedType);

    public function searchMemberCount($conditions);

    public function searchMembers($conditions, $orderBys, $start, $limit);

    public function searchMember($conditions, $start, $limit);

    public function countMembersByStartTimeAndEndTime($startTime, $endTime);

    public function searchMemberIds($conditions, $orderBy, $start, $limit);

    public function addMember($member);

    public function updateMember($id, $member);

    public function updateMembers($conditions, $updateFields);

    public function updateMemberDeadlineByClassroomIdAndUserId($classroomId, $userId, $deadline);

    public function updateMembersDeadlineByClassroomId($classroomId, $deadline);

    public function deleteMember($id);

    public function deleteMemberByCourseIdAndUserId($courseId, $userId);

    public function deleteMemberByCourseIdAndRole($courseId, $role);

    public function findCourseMembersByUserId($userId);

    public function deleteMembersByCourseId($courseId);

    public function findLearnedCoursesByCourseIdAndUserId($courseId, $userId);

    public function findCoursesByStudentIdAndCourseIds($studentId, $courseIds);

    public function findMemberUserIdsByCourseId($courseId);

    public function searchMemberCountGroupByFields($conditions, $groupBy, $start, $limit);

    /*
     * 2017/3/1 为移动端提供服务，其他慎用
     */
    public function findMembersNotInClassroomByUserIdAndRoleAndType($userId, $role, $type, $start, $limit, $onlyPublished = true);
}
