<?php

// Require the composer autoload for getting conflict-free access to enqueue
require_once __DIR__ . '/vendor/autoload.php';

// Instantiate
$enqueue = new \WPackio\Enqueue('appName', 'outputPath', '1.0.0', 'plugin', __FILE__);
