<?php
$functions = array(
    'local_course_status_update_course_status' => array(
        'classname'   => 'local_course_status_external',
        'methodname'  => 'update_course_status',
        'classpath'   => 'local/course_status/externallib.php',
        'description' => 'Update the status of a course',
        'type'        => 'write',
        'capabilities'=> 'moodle/course:update'
    ),
    'local_course_status_get_course_status' => array(
        'classname'   => 'local_course_status_external',
        'methodname'  => 'get_course_status',
        'classpath'   => 'local/course_status/externallib.php',
        'description' => 'Get the status of a course',
        'type'        => 'read',
        'capabilities'=> 'moodle/course:view'
    ),
);

$services = array(
    'Course Status Service' => array(
        'functions' => array('local_course_status_update_course_status', 'local_course_status_get_course_status'),
        'restrictedusers' => 0,
        'enabled' => 1,
    ),
);
