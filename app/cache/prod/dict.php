<?php return array (
  'searchResultType' => 
  array (
    'course' => '课程',
    'teacher' => '教师',
    'thread' => '小组话题',
    'article' => '资讯',
  ),
  'courseStatus' => 
  array (
    'draft' => '未发布',
    'published' => '已发布',
    'closed' => '已关闭',
  ),
  'courseType' => 
  array (
    'live' => '直播课程',
    'open' => '录播公开课',
    'liveOpen' => '直播公开课',
    'normal' => '普通课程',
  ),
  'classroomStatus' => 
  array (
    'draft' => '未发布',
    'published' => '已发布',
    'closed' => '已关闭',
  ),
  'couponType' => 
  array (
    'minus' => '抵价',
    'discount' => '打折',
  ),
  'couponStatus' => 
  array (
    'used' => '已使用',
    'unused' => '未使用',
    'receive' => '已领取',
  ),
  'fileType' => 
  array (
    'video' => '视频',
    'audio' => '音频',
    'document' => '文档',
    'image' => '图片',
    'ppt' => 'PPT',
    'flash' => 'Flash',
    'other' => '其他',
  ),
  'orderStatus' => 
  array (
    'created' => '未付款',
    'paid' => '已付款',
    'refunding' => '退款中',
    'refunded' => '已退款',
    'cancelled' => '已关闭',
  ),
  'refundStatus' => 
  array (
    'created' => '已申请',
    'success' => '退款成功',
    'failed' => '退款失败',
    'cancelled' => '已取消',
  ),
  'payment' => 
  array (
    'none' => '--',
    'alipay' => '支付宝',
    'wxpay' => '微信支付',
    'heepay' => '网银支付',
    'quickpay' => '快捷支付',
    'iosiap' => '苹果应用内支付',
    'outside' => '站外支付',
    'coin' => '虚拟币',
    'llpay' => '连连支付',
  ),
  'moneyRecordType' => 
  array (
    'income' => '充值',
    'payout' => '消费',
  ),
  'threadType' => 
  array (
    'discussion' => '话题',
    'question' => '问答',
    'event' => '活动',
  ),
  'contentType' => 
  array (
    'article' => '文章',
    'activity' => '活动',
    'page' => '页面',
  ),
  'articleType' => 
  array (
    'article' => '文章',
    'activity' => '活动',
    'page' => '文章',
  ),
  'articleProperty' => 
  array (
    'featured' => '头条',
    'promoted' => '推荐',
    'sticky' => '置顶',
  ),
  'dateType' => 
  array (
    'today' => '今日',
    'yesterday' => '昨日',
    'this_week' => '本周',
    'last_week' => '上周',
    'this_month' => '本月',
    'last_month' => '上月',
  ),
  'week' => 
  array (
    1 => '一',
    2 => '二',
    3 => '三',
    4 => '四',
    5 => '五',
    6 => '六',
    7 => '日',
  ),
  'contentStatus' => 
  array (
    'published' => '已发布',
    'unpublished' => '未发布',
    'trash' => '回收站',
  ),
  'articleStatus' => 
  array (
    'published' => '已发布',
    'unpublished' => '未发布',
    'trash' => '回收站',
  ),
  'lessonType' => 
  array (
    'video' => '视频',
    'audio' => '音频',
    'flash' => 'Flash',
    'text' => '图文',
    'ppt' => 'PPT',
    'document' => '文档',
  ),
  'videoStorageType' => 
  array (
    'local' => '本地视频',
    'cloud' => '云视频',
    'net' => '网络视频',
  ),
  'userRole' => 
  array (
    'ROLE_USER' => '学员',
    'ROLE_TEACHER' => '教师',
    'ROLE_ADMIN' => '管理员',
    'ROLE_SUPER_ADMIN' => '超级管理员',
  ),
  'memberLevel' => 
  array (
    1 => '银牌会员',
    2 => '金牌会员',
    3 => '钻石会员',
  ),
  'duration_unit' => 
  array (
    'month' => '个月',
    'year' => '年',
  ),
  'boughtType' => 
  array (
    'new' => '购买',
    'renew' => '续费',
    'upgrade' => '升级',
    'edit' => '编辑',
    'cancel' => '取消会员',
  ),
  'userKeyWordType' => 
  array (
    'nickname' => '用户名',
    'verifiedMobile' => '手机号',
    'email' => '邮件地址',
    'loginIp' => '登录IP',
  ),
  'jobCycle' => 
  array (
    'once' => '一次',
    'everyhour' => '每小时',
    'everyday' => '每天',
    'everymouth' => '每月',
  ),
  'logLevel' => 
  array (
    'info' => '提示',
    'warning' => '警告',
    'error' => '错误',
  ),
  'logLevel:html' => 
  array (
    'info' => '<span>提示</span>',
    'warning' => '<span class="text-warning">警告</span>',
    'error' => '<span class="text-danger">错误</span>',
  ),
  'analysisDateType' => 
  array (
    'register' => '新注册用户数',
    'login' => '用户登录数',
    'course' => '新增课程数',
    'lesson' => '新增课时数',
    'joinLesson' => '加入学习数',
    'paidLesson' => '购买课程数',
    'paidClassroom' => '购买班级数',
    'finishedLesson' => '完成课时学习数',
    'videoViewed' => '视频观看数',
    'cloudVideoViewed' => '└─ 云视频观看数',
    'localVideoViewed' => '└─ 本地视频观看数',
    'netVideoViewed' => '└─ 网络视频观看数',
    'income' => '营收额',
    'courseIncome' => '└─ 课程营收额',
    'classroomIncome' => '└─ 班级营收额',
    'vipIncome' => '└─ 会员营收额',
    'courseSum' => '课程总数',
    'userSum' => '用户总数',
  ),
  'userType' => 
  array (
    'default' => '网站注册',
    'weibo' => '微博登录',
    'web_email' => '网站邮箱注册',
    'web_mobile' => '网站手机注册',
    'import' => '手动导入',
    'renren' => '人人连接',
    'qq' => 'QQ登录',
    'weixin' => '微信登录',
  ),
  'userKeyWordTypes' => 
  array (
    'nickname' => '用户名',
    'email' => '邮件地址',
  ),
  'questionType' => 
  array (
    'single_choice' => '单选题',
    'choice' => '多选题',
    'uncertain_choice' => '不定项选择题',
    'fill' => '填空题',
    'determine' => '判断题',
    'essay' => '问答题',
    'material' => '材料题',
  ),
  'difficulty' => 
  array (
    'simple' => '简单',
    'normal' => '一般',
    'difficulty' => '困难',
  ),
  'targetName' => 
  array (
    'course' => '课程',
    'vip' => '会员',
    'classroom' => '班级',
    'groupSell' => '组合',
  ),
  'groupstatus' => 
  array (
    'open' => '开启',
    'close' => '关闭',
  ),
  'secureQuestion' => 
  array (
    'parents' => '你的父母名字',
    'teacher' => '你的老师名字',
    'lover' => '你的爱人的名字',
    'schoolName' => '你的母校名字',
    'firstTeacher' => '你的启蒙老师',
    'hobby' => '你的爱好',
    'notSelected' => '不指定问题类型',
  ),
  'coinRecordType' => 
  array (
    'sn' => '流水号',
    'orderSn' => '订单号',
    'userName' => '用户名',
  ),
  'coinOrderType' => 
  array (
    'userName' => '用户名',
    'sn' => '订单号',
    'mobile' => '购买者绑定手机号',
    'email' => '购买者邮箱',
  ),
  'discountType' => 
  array (
    'discount' => '限时打折',
    'free' => '限时免费',
    'global' => '全站打折',
  ),
  'discountStatus' => 
  array (
    'unstart' => '未开始',
    'running' => '进行中',
    'finished' => '已结束',
  ),
  'discountStatus:html' => 
  array (
    'unstart' => '未开始',
    'running' => '进行中',
    'finished' => '已结束',
  ),
  'discountAuditStatus' => 
  array (
    'passed' => '已通过',
    'rejected' => '未通过',
    'pending' => '待审核',
    'creation' => '编辑中',
  ),
  'threadProperty' => 
  array (
    'isStick' => '置顶',
    'isElite' => '加精',
  ),
  'classroomService' => 
  array (
    'homeworkReview' => '作业快速批改',
    'testpaperReview' => '试卷阅卷',
    'teacherAnswer' => '教师答疑',
    'event' => '活动组织',
    'liveAnswer' => '直播答疑',
    'workAdvise' => '就业指导',
  ),
  'classroomRoles' => 
  array (
    'auditor' => '旁听生',
    'student' => '学生',
    'headTeacher' => '班主任',
    'teacher' => '老师',
    'assistant' => '助教',
    'assistantStudent' => '助教',
  ),
  'searchCourseType' => 
  array (
    'all' => '全部课程',
    'vip' => '会员课程',
    'free' => '免费课程',
    'live' => '直播课程',
  ),
  'userInfoFields' => 
  array (
    'email' => '邮箱地址',
    'truename' => '真实姓名',
    'mobile' => '手机号码',
    'qq' => 'QQ',
    'company' => '公司',
    'idcard' => '身份证号码',
    'gender' => '性别',
    'job' => '职业',
    'weibo' => '微博',
    'weixin' => '微信',
  ),
  'passedStatus' => 
  array (
    'excellent' => '优秀',
    'good' => '良好',
    'passed' => '合格',
    'unpassed' => '不合格',
  ),
  'processStatus' => 
  array (
    'none' => '未转码',
    'waiting' => '转码中',
    'processing' => '转码中',
    'ok' => '转码成功',
    'error' => '转码失败',
  ),
  'convertStatus' => 
  array (
    'none' => '等待转码',
    'waiting' => '等待转码',
    'doing' => '正在转码',
    'success' => '转码成功',
    'error' => '转码失败',
  ),
  'state' => 
  array (
    'banned' => '禁用',
    'replaced' => '屏蔽',
  ),
  'searchKeyWord' => 
  array (
    'name' => '敏感词',
    'id' => '编号',
  ),
  'searchBanlog' => 
  array (
    'name' => '敏感词',
    'userName' => '用户名',
  ),
  'courseSerializeMode' => 
  array (
    'none' => '非连载课程',
    'serialize' => '更新中',
    'finished' => '已完结',
  ),
  'refund_reason' => 
  array (
    'select_reason' => '--请选择退学原因--',
    'bad_content' => '课程内容质量差',
    'bad_teacher_attitude' => '老师服务态度不好',
    'other' => '其他',
  ),
);