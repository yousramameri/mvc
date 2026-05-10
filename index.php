<?php
declare(strict_types = 1);

if(!defined('ROOT')) define('ROOT', __DIR__);
if(!defined('SEP')) define('SEP', DIRECTORY_SEPARATOR);

require 'loader.php';

$app = new \core\Dispatcher();
$app->run();