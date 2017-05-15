<?php

namespace Topxia\Service\Order\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Order\Dao\OrderDao;

class OrderDaoImpl extends BaseDao implements OrderDao
{
    protected $table = 'orders';

    private $serializeFields
        = array(
            'data' => 'json'
        );

    public function getOrder($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";

        $order = $this->getConnection()->fetchAssoc($sql, array($id)) ?: null;
        return $order ? $this->createSerializer()->unserialize($order, $this->serializeFields) : null;
    }

    public function getOrderBySn($sn, $lock = false)
    {
        $forUpdate = "";

        if ($lock) {
            $forUpdate = "FOR UPDATE";
        }

        $sql = "SELECT * FROM {$this->table} WHERE sn = ? LIMIT 1 {$forUpdate}";

        $order = $this->getConnection()->fetchAssoc($sql, array($sn));
        return $order ? $this->createSerializer()->unserialize($order, $this->serializeFields) : null;
    }

    public function getOrderByToken($token)
    {
        $sql   = "SELECT * FROM {$this->table} WHERE token = ? LIMIT 1";
        $order = $this->getConnection()->fetchAssoc($sql, array($token));
        return $order ? $this->createSerializer()->unserialize($order, $this->serializeFields) : null;
    }

    public function findOrdersByIds(array $ids)
    {
        if (empty($ids)) {
            return array();
        }

        $marks  = str_repeat('?,', count($ids) - 1).'?';
        $sql    = "SELECT * FROM {$this->table} WHERE id IN ({$marks});";
        $orders = $this->getConnection()->fetchAll($sql, $ids);
        return $this->createSerializer()->unserializes($orders, $this->serializeFields);
    }

    public function findOrdersBySns(array $sns)
    {
        if (empty($sns)) {
            return array();
        }

        $marks  = str_repeat('?,', count($sns) - 1).'?';
        $sql    = "SELECT * FROM {$this->table} WHERE sn IN ({$marks});";
        $orders = $this->getConnection()->fetchAll($sql, $sns);
        return $this->createSerializer()->unserializes($orders, $this->serializeFields);
    }

    public function addOrder($order)
    {
        $order['createdTime'] = time();
        $order['updatedTime'] = $order['createdTime'];        
        $order    = $this->createSerializer()->serialize($order, $this->serializeFields);
        $affected = $this->getConnection()->insert($this->table, $order);

        if ($affected <= 0) {
            throw $this->createDaoException('Insert order error.');
        }

        return $this->getOrder($this->getConnection()->lastInsertId());
    }

    public function updateOrder($id, $fields)
    {
        $fields['updatedTime'] = time();
        $fields = $this->createSerializer()->serialize($fields, $this->serializeFields);
        $this->getConnection()->update($this->table, $fields, array('id' => $id));
        return $this->getOrder($id);
    }

    public function searchOrders($conditions, $orderBy, $start, $limit)
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->_createSearchQueryBuilder($conditions)
                        ->select('*')
                        ->setFirstResult($start)
                        ->setMaxResults($limit);
        for ($i = 0; $i < count($orderBy); $i = $i + 2) {
            $builder->addOrderBy($orderBy[$i], $orderBy[$i + 1]);
        };

        $orders = $builder->execute()->fetchAll() ?: array();
        return $this->createSerializer()->unserializes($orders, $this->serializeFields);
    }

    public function searchBill($conditions, $orderBy, $start, $limit)
    {
        if (!isset($conditions['startTime'])) {
            $conditions['startTime'] = 0;
        }

        $this->filterStartLimit($start, $limit);
        $this->checkOrderBy($orderBy);

        $sql = "SELECT * FROM {$this->table} WHERE `createdTime`>= ? AND `createdTime`< ? AND `userId` = ? AND (not(`payment` in ('none','coin'))) AND `status` = 'paid' ORDER BY {$orderBy[0]} {$orderBy[1]}  LIMIT {$start}, {$limit}";
        return $this->getConnection()->fetchAll($sql, array(
            $conditions['startTime'],
            $conditions['endTime'],
            $conditions['userId'],
        ));
    }

    public function countUserBillNum($conditions)
    {
        if (!isset($conditions['startTime'])) {
            $conditions['startTime'] = 0;
        }

        $sql = "SELECT count(*) FROM {$this->table} WHERE `createdTime`>=? AND `createdTime`< ? AND `userId` = ? AND (not(`payment` in ('none','coin'))) AND `status` = 'paid' ";
        return $this->getConnection()->fetchColumn($sql, array(
            $conditions['startTime'],
            $conditions['endTime'],
            $conditions['userId'],
        ));
    }

    public function searchOrderCount($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('COUNT(id)');
        return $builder->execute()->fetchColumn(0);
    }

    public function sumOrderAmounts($startTime, $endTime, array $courseId)
    {
        if (empty($courseId)) {
            return array();
        }

        $marks = str_repeat('?,', count($courseId) - 1).'?';

        $sql = "SELECT  targetId,sum(amount) as  amount from {$this->table} WHERE  createdTime > ? AND createdTime < ? AND targetId IN ({$marks}) AND targetType = 'course' AND status = 'paid' group by targetId";
        return $this->getConnection()->fetchAll($sql, array_merge(array($startTime, $endTime), $courseId));
    }

    protected function _createSearchQueryBuilder($conditions)
    {
        if (isset($conditions["title"])) {
            $conditions["title"] = '%'.$conditions["title"]."%";
        }

        return $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, 'course_order')
            ->andWhere('sn = :sn')
            ->andWhere('targetType = :targetType')
            ->andWhere('targetId = :targetId')
            ->andWhere('userId = :userId')
            ->andWhere('amount > :amount')
            ->andWhere('totalPrice >= totalPrice')
            ->andWhere('totalPrice > :totalPriceGreaterThan')
            ->andWhere('coinAmount > :coinAmount')
            ->andWhere('status = :status')
            ->andWhere('status <> :statusPaid')
            ->andWhere('status <> :statusCreated')
            ->andWhere('payment = :payment')
            ->andWhere('payment <> :cashPayment')
            ->andWhere('createdTime >= :createdTimeGreaterThan')
            ->andWhere('paidTime >= :paidStartTime')
            ->andWhere('paidTime < :paidEndTime')
            ->andWhere('createdTime >= :startTime')
            ->andWhere('createdTime < :endTime')
            ->andWhere('createdTime < :createdTime_LT')
            ->andWhere('title LIKE :title')
            ->andWhere('targetType IN ( :targetTypes)')
            ->andWhere('updatedTime >= :updatedTime_GE ')
			->andWhere('userId IN ( :userIds)')
			->andWhere('status IN ( :includeStatus)')
			->andWhere('totalPrice > :totalPrice_GT');
    }

    public function sumOrderPriceByTargetAndStatuses($targetType, $targetId, array $statuses)
    {
        if (empty($statuses)) {
            return array();
        }

        $marks = str_repeat('?,', count($statuses) - 1).'?';
        $sql   = "SELECT sum(amount) FROM {$this->table} WHERE targetType =? AND targetId = ? AND status in ({$marks})";

        return $this->getConnection()->fetchColumn($sql, array_merge(array($targetType, $targetId), $statuses));
    }

    public function sumCouponDiscountByOrderIds($orderIds)
    {
        if (empty($orderIds)) {
            return array();
        }

        $marks = str_repeat('?,', count($orderIds) - 1).'?';
        $sql   = "SELECT sum(couponDiscount) FROM {$this->table} WHERE id in ({$marks})";
        return $this->getConnection()->fetchColumn($sql, $orderIds);
    }

    public function analysisCourseOrderDataByTimeAndStatus($startTime, $endTime, $status)
    {
        $sql = "SELECT count(id) as count, from_unixtime(createdTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE`createdTime`>=? AND `createdTime`<=? AND `status`=? AND targetType='course' group by date_format(from_unixtime(`createdTime`),'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime, $status));
    }

    public function analysisPaidCourseOrderDataByTime($startTime, $endTime)
    {
        $sql = "SELECT count(id) as count, from_unixtime(createdTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE`createdTime`>=? AND `createdTime`<=? AND `status`='paid' AND targetType='course'  AND `amount`>0 group by date_format(from_unixtime(`createdTime`),'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisPaidClassroomOrderDataByTime($startTime, $endTime)
    {
        $sql = "SELECT count(id) as count, from_unixtime(createdTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE`createdTime`>=? AND `createdTime`<=? AND `status`='paid' AND targetType='classroom'  AND `amount`>0 group by date_format(from_unixtime(`paidTime`),'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisAmount($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('sum(amount)');
        return $builder->execute()->fetchColumn(0);
    }

    public function analysisCoinAmount($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('sum(coinAmount)');
        return $builder->execute()->fetchColumn(0);
    }

    public function analysisTotalPrice($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('sum(totalPrice)');
        return $builder->execute()->fetchColumn(0);
    }

    public function analysisAmountDataByTime($startTime, $endTime)
    {
        $sql = "SELECT sum(amount) as count, from_unixtime(paidTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE `paidTime`>= ?  AND `paidTime`<= ? AND `status`='paid'  group by from_unixtime(`paidTime`,'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisCourseAmountDataByTime($startTime, $endTime)
    {
        $sql = "SELECT sum(amount) as count, from_unixtime(paidTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE `paidTime`>= ? AND `paidTime`<= ? AND `status`='paid' AND targetType='course'   group by from_unixtime(`paidTime`,'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisClassroomAmountDataByTime($startTime, $endTime)
    {
        $sql = "SELECT sum(amount) as count, from_unixtime(paidTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE `paidTime`>= ? AND `paidTime`<= ? AND `status`='paid' AND targetType='classroom'   group by from_unixtime(`paidTime`,'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisVipAmountDataByTime($startTime, $endTime)
    {
        $sql = "SELECT sum(amount) as count, from_unixtime(paidTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE `paidTime`>= ? AND `paidTime`<= ? AND `status`='paid' AND targetType='vip'   group by from_unixtime(`paidTime`,'%Y-%m-%d') order by date ASC ";
        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisAmountsDataByTime($conditions, $orderBy, $start, $limit)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select("from_unixtime(paidTime,'%Y-%m-%d') date, sum(amount) as count")
            ->groupBy("from_unixtime(`paidTime`,'%Y-%m-%d')")
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);
        return $builder->execute()->fetchAll(0) ?: array();
    }

    public function analysisAmountsDataByTitle($conditions, $orderBy, $start, $limit)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('sum(amount) as count, userId, title, targetType, targetId')
            ->groupBy('title')
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);
        return $builder->execute()->fetchAll(0) ?: array();
    }

    public function analysisAmountsDataByUserId($conditions, $orderBy, $start, $limit)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select('sum(amount) as count, userId, title, targetType, targetId')
            ->groupBy('userId')
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);
        return $builder->execute()->fetchAll(0) ?: array();
    }

    public function analysisExitCourseOrderDataByTime($startTime, $endTime)
    {
        $sql = "SELECT count(id) as count, from_unixtime(createdTime,'%Y-%m-%d') as date FROM `{$this->table}` WHERE`createdTime`>= ? AND `createdTime`<= ? AND `status`<>'paid' AND `status`<>'created' AND targetType='course' group by from_unixtime(`createdTime`,'%Y-%m-%d') order by date ASC ";

        return $this->getConnection()->fetchAll($sql, array($startTime, $endTime));
    }

    public function analysisPaidOrderGroupByTargetType($startTime, $groupBy)
    {
        $sql = "SELECT targetType , count(targetType) as value FROM orders WHERE STATUS = 'paid' and `totalPrice` >0 and `paidTime`>= ? GROUP BY targetType";
        return $this->getConnection()->fetchAll($sql, array($startTime));
    }

    public function analysisOrderDate($conditions)
    {
        $builder = $this->_createSearchQueryBuilder($conditions)
            ->select("count(id) as count ,from_unixtime(paidTime,'%Y-%m-%d') date")
            ->groupBy('date');
        return $builder->execute()->fetchAll(0) ?: array();
    }

}
