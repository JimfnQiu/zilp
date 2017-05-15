<?php

namespace Topxia\Service\Course\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Course\Dao\CourseDao;

class CourseDaoImpl extends BaseDao implements CourseDao
{
    protected $table = 'course';

    public function getCourse($id)
    {
        $that = $this;
        return $this->fetchCached("id:{$id}", $id, function ($id) use ($that) {
            $sql = "SELECT * FROM {$that->getTable()} WHERE id = ? LIMIT 1";
            return $that->getConnection()->fetchAssoc($sql, array($id)) ?: null;
        });
    }

    public function findCoursesByIds(array $ids)
    {
        if (empty($ids)) {
            return array();
        }

        $marks = str_repeat('?,', count($ids) - 1).'?';
        $sql   = "SELECT * FROM {$this->getTable()} WHERE id IN ({$marks});";
        return $this->getConnection()->fetchAll($sql, $ids);
    }

    public function findCoursesByParentIdAndLocked($parentId, $locked)
    {
        $that = $this;

        $versionKey = "{$this->table}:version:parentId:{$parentId}";
        $version    = $this->getCacheVersion($versionKey);

        return $this->fetchCached("parentId:{$parentId}:version:{$version}:locked:{$locked}", $parentId, $locked, function ($parentId, $locked) use ($that) {
            if (empty($parentId)) {
                return array();
            }

            $sql = "SELECT * FROM {$that->getTable()} WHERE parentId = ? AND locked = ?";
            return $that->getConnection()->fetchAll($sql, array($parentId, $locked));
        });
    }

    public function findCoursesByCourseIds(array $ids, $start, $limit)
    {
        if (empty($ids)) {
            return array();
        }

        $this->filterStartLimit($start, $limit);
        $marks = str_repeat('?,', count($ids) - 1).'?';
        $sql   = "SELECT * FROM {$this->getTable()} WHERE id IN ({$marks}) LIMIT {$start}, {$limit};";
        return $this->getConnection()->fetchAll($sql, $ids);
    }

    public function findCoursesByLikeTitle($title)
    {
        if (empty($title)) {
            return array();
        }

        $sql = "SELECT * FROM {$this->getTable()} WHERE `title` LIKE ?; ";
        return $this->getConnection()->fetchAll($sql, array('%'.$title.'%'));
    }

    public function findNormalCoursesByStatusAndCourseIds(array $courseIds, $status, $orderBy, $start, $limit)
    {
        if (empty($courseIds)) {
            return array();
        }

        $this->filterStartLimit($start, $limit);
        $this->checkOrderBy($orderBy);

        $orderSql = '';
        for ($i = 0; $i < count($orderBy); $i = $i + 2) {
            $orderSql = "{$orderBy[$i]} {$orderBy[$i + 1]}";
        }

        if (!empty($orderSql)) {
            $orderSql = "ORDER BY {$orderSql}";
        }

        $marks = str_repeat('?,', count($courseIds) - 1).'?';
        $sql = "SELECT * FROM {$this->getTable()} WHERE parentId = 0 AND status = '{$status}' AND id in ({$marks}) {$orderSql} LIMIT {$start}, {$limit}";

        return $this->getConnection()->fetchAll($sql, $courseIds);
    }

    public function searchCourses($conditions, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);

        $keys = $this->generateKeyWhenSearch($conditions, $orderBy, $start, $limit);
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('*')
            ->setFirstResult($start)
            ->setMaxResults($limit);
        for ($i = 0; $i < count($orderBy); $i = $i + 2) {
            $builder->addOrderBy($orderBy[$i], $orderBy[$i + 1]);
        };

        return $this->fetchCached($keys, $builder, function ($builder) {
            return $builder->execute()->fetchAll() ?: array();
        });
    }

    public function searchCourseCount($conditions)
    {
        $keys = $this->generateKeyWhenCount($conditions);
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('COUNT(id)');
        return $this->fetchCached($keys, $builder, function ($builder) {
            return $builder->execute()->fetchColumn(0);
        });
    }

    public function addCourse($course)
    {
        $course['createdTime'] = time();
        $course['updatedTime'] = $course['createdTime'];
        $affected              = $this->getConnection()->insert($this->table, $course);

        if ($affected <= 0) {
            throw $this->createDaoException('Insert course error.');
        }

        $course = $this->getCourse($this->getConnection()->lastInsertId());
        $this->flushCache($course);
        return $course;
    }

    public function updateCourse($id, $fields)
    {
        $fields['updatedTime'] = time();
        $this->getConnection()->update($this->table, $fields, array('id' => $id));

        $sql    = "SELECT * FROM {$this->getTable()} WHERE id = ? LIMIT 1";
        $course = $this->getConnection()->fetchAssoc($sql, array($id)) ?: null;

        $this->flushCache($course);

        return $course;
    }

    public function deleteCourse($id)
    {
        $course = $this->getCourse($id);
        $result = $this->getConnection()->delete($this->table, array('id' => $id));

        $this->flushCache($course);

        return $result;
    }

    public function flushCache($course)
    {
        $this->incrVersions(array(
            "{$this->table}:version:parentId:{$course['parentId']}",
            "{$this->table}:search"
        ));

        $this->deleteCache(array(
            "id:{$course['id']}"
        ));
    }

    public function waveCourse($id, $field, $diff)
    {
        $fields = array('hitNum', 'noteNum');

        if (!in_array($field, $fields)) {
            throw \InvalidArgumentException(sprintf($this->getKernel()->trans('%s字段不允许增减，只有%s才被允许增减'), $field, implode(',', $fields)));
        }

        if ($field == 'hitNum') {
            $that = $this;

            return $this->waveCache("id:{$id}:field:{$field}:diff:{$diff}", $id, $field, $diff, function ($id, $field, $diff) use ($that) {
                $currentTime = time();

                $sql = "UPDATE {$that->getTable()} SET {$field} = {$field} + ?, updatedTime = '{$currentTime}' WHERE id = ? LIMIT 1";

                $result = $that->getConnection()->executeQuery($sql, array($diff, $id));

                $sql    = "SELECT * FROM {$that->getTable()} WHERE id = ? LIMIT 1";
                $course = $that->getConnection()->fetchAssoc($sql, array($id)) ?: null;

                $that->flushCache($course);
                return $result;
            });
        } else {
            $currentTime = time();

            $sql = "UPDATE {$this->getTable()} SET {$field} = {$field} + ?, updatedTime = '{$currentTime}' WHERE id = ? LIMIT 1";

            $result = $this->getConnection()->executeQuery($sql, array($diff, $id));

            $sql    = "SELECT * FROM {$this->getTable()} WHERE id = ? LIMIT 1";
            $course = $this->getConnection()->fetchAssoc($sql, array($id)) ?: null;

            $this->flushCache($course);
            return $result;
        }
    }

    public function clearCourseDiscountPrice($discountId)
    {
        $currentTime = time();
        $sql         = "UPDATE course SET updatedTime = '{$currentTime}', price = originPrice, discountId = 0, discount = 10 WHERE discountId = ?";
        $result      = $this->getConnection()->executeQuery($sql, array($discountId));
        $this->clearCached();
        return $result;
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        if (isset($conditions['title'])) {
            $conditions['titleLike'] = "%{$conditions['title']}%";
            unset($conditions['title']);
        }

        if (empty($conditions['status'])) {
            unset($conditions['status']);
        }

        if (empty($conditions['categoryIds'])) {
            unset($conditions['categoryIds']);
        }

        if (isset($conditions['likeOrgCode'])) {
            $conditions['likeOrgCode'] .= "%";
        }

        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'course')
            ->andWhere('updatedTime >= :updatedTime_GE')
            ->andWhere('status = :status')
            ->andWhere('type = :type')
            ->andWhere('price = :price')
            ->andWhere('price > :price_GT')
            ->andWhere('originPrice > :originPrice_GT')
            ->andWhere('originPrice = :originPrice')
            ->andWhere('coinPrice > :coinPrice_GT')
            ->andWhere('coinPrice = :coinPrice')
            ->andWhere('originCoinPrice > :originCoinPrice_GT')
            ->andWhere('originCoinPrice = :originCoinPrice')
            ->andWhere('title LIKE :titleLike')
            ->andWhere('userId = :userId')
            ->andWhere('recommended = :recommended')
            ->andWhere('startTime >= :startTimeGreaterThan')
            ->andWhere('startTime < :startTimeLessThan')
            ->andWhere('rating > :ratingGreaterThan')
            ->andWhere('vipLevelId >= :vipLevelIdGreaterThan')
            ->andWhere('vipLevelId = :vipLevelId')
            ->andWhere('createdTime >= :startTime')
            ->andWhere('createdTime <= :endTime')
            ->andWhere('categoryId = :categoryId')
            ->andWhere('smallPicture = :smallPicture')
            ->andWhere('categoryId IN ( :categoryIds )')
            ->andWhere('vipLevelId IN ( :vipLevelIds )')
            ->andWhere('parentId = :parentId')
            ->andWhere('parentId > :parentId_GT')
            ->andWhere('parentId IN ( :parentIds )')
            ->andWhere('id NOT IN ( :excludeIds )')
            ->andWhere('id IN ( :courseIds )')
            ->andWhere('locked = :locked')
            ->andWhere('lessonNum > :lessonNumGT')
            ->andWhere('orgCode = :orgCode')
            ->andWhere('orgCode LIKE :likeOrgCode');

        if (isset($conditions['types'])) {
            $builder->andWhere('type IN ( :types )');
        }

        return $builder;
    }

    public function analysisCourseDataByTime($startTime, $endTime)
    {
        $sql = "SELECT count( id) as count, from_unixtime(createdTime,'%Y-%m-%d') as date FROM `{$this->getTable()}` WHERE  `createdTime`>= ? AND `createdTime`<= ? group by from_unixtime(`createdTime`,'%Y-%m-%d') order by date ASC ";

        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function findCoursesCountByLessThanCreatedTime($endTime)
    {
        $sql = "SELECT count(id) as count FROM `{$this->getTable()}` WHERE `createdTime`<= ? ";

        return $this->getConnection()->fetchColumn($sql, array($endTime));
    }

    public function analysisCourseSumByTime($endTime)
    {
        $sql = "SELECT date , max(a.Count) as count from (SELECT from_unixtime(o.createdTime,'%Y-%m-%d') as date,( SELECT count(id) as count FROM  `{$this->getTable()}`   i   WHERE   i.createdTime<=o.createdTime and i.parentId = 0)  as Count from `{$this->getTable()}`  o  where o.createdTime<= ? order by 1,2) as a group by date ";
        return $this->getConnection()->fetchAll($sql, array($endTime));
    }
}
