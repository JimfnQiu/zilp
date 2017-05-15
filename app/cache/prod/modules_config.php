<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    3 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
    4 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    6 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    7 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    8 => 'Topxia\\Service\\Course\\Event\\ClassroomCourseExpiryDateEventSubscriber',
    9 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    10 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
    11 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    12 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    13 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    14 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    15 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    16 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    17 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    18 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    19 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    20 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    21 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    22 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    23 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    24 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    25 => 'Topxia\\Service\\User\\Event\\VipMemberEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
  ),
);