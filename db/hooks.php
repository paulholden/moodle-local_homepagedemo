<?php

$callbacks = [
    [
        'hook' => \core_user\hook\extend_default_homepage::class,
        'callback' => [\local_homepagedemo\hook_listener::class, 'extend_default_homepage'],
    ],
];
