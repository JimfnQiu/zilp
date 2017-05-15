<?php return array (
  'classroom.delete' => 
  array (
    0 => 
    array (
      0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
      1 => 'onClassroomDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
      1 => 'onClassroomDelete',
    ),
  ),
  'classroom.update' => 
  array (
    0 => 
    array (
      0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
      1 => 'onClassroomUpdate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\ClassroomCourseExpiryDateEventSubscriber',
      1 => 'onClassroomUpdate',
    ),
  ),
  'classroom.join' => 
  array (
    0 => 
    array (
      0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
      1 => 'onClassroomJoin',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onClassroomJoin',
    ),
  ),
  'classroom.auditor_join' => 
  array (
    0 => 
    array (
      0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
      1 => 'onClassroomGuest',
    ),
  ),
  'classReview.add' => 
  array (
    0 => 
    array (
      0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
      1 => 'onReviewCreate',
    ),
  ),
  'article.liked' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
      1 => 'onArticleLike',
    ),
  ),
  'article.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
      1 => 'onArticleDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onArticleDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'article.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
      1 => 'onArticleCancelLike',
    ),
  ),
  'article.post_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
      1 => 'onPostCreate',
    ),
  ),
  'article.post_delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
      1 => 'onPostDelete',
    ),
  ),
  'coupon.use' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
      1 => 'onCouponUsed',
    ),
  ),
  'order.service.paid' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
      1 => 'onOrderPaid',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
      1 => 'onOrderPaid',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
      1 => 'onOrderPaid',
    ),
  ),
  'user.register' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
      1 => 'onUserRegister',
    ),
  ),
  'content.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
      1 => 'onContentDelete',
    ),
  ),
  'content.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
      1 => 'onContentCreate',
    ),
  ),
  'content.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
      1 => 'onContentUpdate',
    ),
  ),
  'course.join' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseJoin',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseJoin',
    ),
  ),
  'course.favorite' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseFavorite',
    ),
  ),
  'course.note.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseNoteCreate',
    ),
  ),
  'course.note.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseNoteUpdate',
    ),
  ),
  'course.note.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseNoteDelete',
    ),
  ),
  'course.note.liked' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseNoteLike',
    ),
  ),
  'course.note.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseNoteCancelLike',
    ),
  ),
  'course.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseUpdate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
      1 => 'onCourseUpdate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseUpdate',
    ),
  ),
  'course.teacher.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseTeacherUpdate',
    ),
  ),
  'course.price.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCoursePriceUpdate',
    ),
  ),
  'course.picture.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCoursePictureUpdate',
    ),
  ),
  'user.role.change' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onRoleChange',
    ),
  ),
  'announcement.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onAnnouncementCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onAnnouncementCreate',
    ),
  ),
  'announcement.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onAnnouncementUpdate',
    ),
  ),
  'announcement.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onAnnouncementDelete',
    ),
  ),
  'courseReview.add' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
      1 => 'onCourseReviewCreate',
    ),
  ),
  'course.lesson.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onCourseLessonCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onCourseLessonCreate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
      1 => 'onCourseLessonCreate',
    ),
  ),
  'course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    4 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    5 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
  ),
  'course.lesson.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onCourseLessonUpdate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onCourseLessonUpdate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseLessonUpdate',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onCourseLessonUpdate',
    ),
  ),
  'course.lesson.publish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onCourseLessonPublish',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseLessonCreate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onCourseLessonPublish',
    ),
  ),
  'course.lesson.unpublish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onCourseLessonUnpublish',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseLessonDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onCourseLessonUnpublish',
    ),
  ),
  'course.lesson_start' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLessonStart',
    ),
  ),
  'course.lesson_finish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLessonFinish',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
      1 => 'onLessonFinish',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
      1 => 'onLessonFinished',
    ),
  ),
  'course.material.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onMaterialCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onMaterialCreate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onMaterialCreate',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onMaterialCreate',
    ),
  ),
  'course.material.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onMaterialUpdate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onMaterialUpdate',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onMaterialUpdate',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onMaterialUpdate',
    ),
  ),
  'course.material.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onMaterialDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onMaterialDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onMaterialDelete',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onMaterialDelete',
    ),
  ),
  'chapter.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onChapterCreate',
    ),
  ),
  'chapter.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onChapterDelete',
    ),
  ),
  'chapter.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onChapterUpdate',
    ),
  ),
  'course.lesson.generate.video.replay' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLiveLessonGenerateVideo',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onLiveFileReplay',
    ),
  ),
  'course.lesson.replay.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLiveLessonReplayCreate',
    ),
  ),
  'course.lesson.replay.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLiveLessonReplayUpdate',
    ),
  ),
  'course.lesson.review.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
      1 => 'onLiveLessonReplayDelete',
    ),
  ),
  'course.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onCourseDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onCourseDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
      1 => 'onCourseDelete',
    ),
    3 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'upload.file.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onUploadFileDelete',
    ),
  ),
  'upload.file.finish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onUploadFileFinish',
    ),
  ),
  'open.course.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onOpenCourseDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onOpenCourseDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'open.course.lesson.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onOpenCourseLessonCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onLessonCreate',
    ),
  ),
  'open.course.lesson.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onOpenCourseLessonUpdate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onLiveOpenCourseLessonUpdate',
    ),
  ),
  'open.course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onOpenCourseLessonDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onOpenCourseLessonDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onLessonDelete',
    ),
  ),
  'open.course.lesson.generate.video.replay' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
      1 => 'onLiveOpenFileReplay',
    ),
  ),
  'course.view' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
      1 => 'onCourseView',
    ),
  ),
  'classroom.member.deadline.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Course\\Event\\ClassroomCourseExpiryDateEventSubscriber',
      1 => 'onClassroomMemberDeadlineUpdate',
    ),
  ),
  'question.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onQuestionDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
      1 => 'onQuestionDelete',
    ),
  ),
  'group.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onGroupThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadPostDelete',
    ),
  ),
  'group.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onGroupThreadDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadDelete',
    ),
  ),
  'course.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onCourseThreadDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadDelete',
    ),
  ),
  'course.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onCourseThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadPostDelete',
    ),
  ),
  'thread.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onThreadDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onThreadDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onThreadDelete',
    ),
  ),
  'thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
      1 => 'onThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onThreadPostDelete',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onPostDelete',
    ),
  ),
  'user.registered' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
      1 => 'onUserRegistered',
    ),
  ),
  'user.unlock' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserCreate',
    ),
  ),
  'user.lock' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserDelete',
    ),
  ),
  'user.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserUpdate',
    ),
  ),
  'user.change_nickname' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserUpdate',
    ),
  ),
  'user.follow' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserFollow',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
      1 => 'onUserFollowed',
    ),
  ),
  'user.unfollow' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onUserUnFollow',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
      1 => 'onUserUnfollowed',
    ),
  ),
  'course.publish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseCreate',
    ),
  ),
  'course.close' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'course.quit' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseQuit',
    ),
  ),
  'course.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseCreate',
    ),
  ),
  'classroom.quit' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onClassroomQuit',
    ),
  ),
  'article.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleCreate',
    ),
  ),
  'article.publish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleCreate',
    ),
  ),
  'article.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleUpdate',
    ),
  ),
  'article.trash' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'article.unpublish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'thread.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onThreadCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onThreadCreate',
    ),
  ),
  'thread.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onThreadUpdate',
    ),
  ),
  'course.thread.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
  ),
  'course.thread.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadUpdate',
    ),
  ),
  'group.thread.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
  ),
  'group.thread.open' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadOpen',
    ),
  ),
  'group.thread.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadUpdate',
    ),
  ),
  'thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onPostCreate',
    ),
  ),
  'course.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
      1 => 'onThreadPostCreate',
    ),
  ),
  'course.thread.post.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onCourseThreadPostUpdate',
    ),
  ),
  'group.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
      1 => 'onGroupThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'incrToken',
    ),
  ),
  'open.course.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onCourseUpdate',
    ),
  ),
  'open.course.member.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
      1 => 'onMemberCreate',
    ),
  ),
  'thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'course.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'course.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'group.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'group.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
      1 => 'before',
    ),
  ),
  'question.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
      1 => 'onQuestionCreate',
    ),
  ),
  'question.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
      1 => 'onQuestionUpdate',
    ),
  ),
  'order.service.created' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
      1 => 'onOrderCreated',
    ),
  ),
  'testpaper.reviewed' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onTestpaperReviewed',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
      1 => 'onTestPaperFinished',
    ),
    2 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperReviewed',
    ),
  ),
  'order.pay.success' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onOrderPaySuccess',
    ),
  ),
  'open.course.lesson.publish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
      1 => 'onLiveOpenCourseLessonCreate',
    ),
  ),
  'homework.finish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
      1 => 'onHomeworkFinished',
    ),
  ),
  'homework.check' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
      1 => 'onHomeworkCheck',
    ),
  ),
  'testpaper.finish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
      1 => 'onTestPaperFinished',
    ),
    1 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperFinish',
    ),
  ),
  'tag.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
      1 => 'onTagDelete',
    ),
  ),
  'testpaper.create' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperCreate',
    ),
  ),
  'testpaper.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperUpdate',
    ),
  ),
  'testpaper.publish' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperPublish',
    ),
  ),
  'testpaper.close' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperClose',
    ),
  ),
  'testpaper.delete' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperDelete',
    ),
  ),
  'testpaper.item.update' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
      1 => 'onTestpaperItemUpdate',
    ),
  ),
  'thread.nice' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onThreadNice',
    ),
  ),
  'thread.sticky' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onThreadSticky',
    ),
  ),
  'thread.post.vote' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
      1 => 'onPostVote',
    ),
  ),
  'admin.operate.vip_member' => 
  array (
    0 => 
    array (
      0 => 'Topxia\\Service\\User\\Event\\VipMemberEventSubscriber',
      1 => 'onOperateVipMember',
    ),
  ),
);