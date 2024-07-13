<?php
$functions = array(
    'local_course_status_update_course_status' => array(
        'classname'   => 'local_course_status_external',
        'methodname'  => 'update_course_status',
        'classpath'   => 'local/course_status/externallib.php',
        'description' => 'Update the course status',
        'type'        => 'write',
        'ajax'        => true,
    ),
);

$services = array(
    'Course Status Service' => array(
        'functions' => array('local_course_status_update_course_status'),
        'restrictedusers' => 0,
        'enabled' => 1,
    ),
);
