#!/usr/bin/env php
<?php

/**
 * Test runner for scanner with errors enabled.
 */

// Enable errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Settings
ini_set('memory_limit', '1G');
ini_set('xdebug.max_nesting_level', 500);
ob_implicit_flush(true);
set_time_limit(-1);

require_once __DIR__ . '/vendor/autoload.php';

use AMWScan\Scanner;

if (Scanner::isCli()) {
    $app = new Scanner();
    $app->run();
}
