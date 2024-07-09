<?php

require(__DIR__ . '/../../config.php');

use core\context\system;
use core\url;

$PAGE->set_context(system::instance());
$PAGE->set_url(new url('/local/homepagedemo/page1.php'));
$PAGE->set_title('Page 1');

echo $OUTPUT->header();
echo $OUTPUT->heading('Page 1');
echo $OUTPUT->footer();
