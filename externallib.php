<?php
defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");

class local_course_status_external extends external_api {

    public static function update_course_status_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Course ID'),
                'status' => new external_value(PARAM_TEXT, 'Course status (paid or not)')
            )
        );
    }

    public static function update_course_status($courseid, $status) {
        global $DB;

        // Parameter validation.
        $params = self::validate_parameters(self::update_course_status_parameters(), array('courseid' => $courseid, 'status' => $status));

        // Capability check.
        $context = context_course::instance($courseid);
        self::validate_context($context);

        // Update the course status.
        $record = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
        $record->status = $status; // Assuming you have a 'status' field in your course table.
        $DB->update_record('course', $record);

        return true;
    }

    public static function update_course_status_returns() {
        return new external_value(PARAM_BOOL, 'Status update result');
    }
}
