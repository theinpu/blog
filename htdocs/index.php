<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 1:48
 */

date_default_timezone_set('Europe/Moscow');

require_once __DIR__.'/../vendor/autoload.php';

chdir(__DIR__.'/../');

$app = new \bc\blog\BlogApplication();
$app->run();