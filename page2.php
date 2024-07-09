<?php

require(__DIR__ . '/../../config.php');

use core\context\system;
use core\lang_string;
use core\url;

$PAGE->set_context(system::instance());
$PAGE->set_url(new url('/local/homepagedemo/page1.php'));
$PAGE->set_title(new lang_string('calendar', 'core_calendar'));

echo $OUTPUT->header();
echo $OUTPUT->heading(new lang_string('calendar', 'core_calendar'));
echo $OUTPUT->footer();
