<?php

require __DIR__."/vendor/autoload.php";

$log = new Monolog\Logger('Log');
$log->pushHandler(new Monolog\Handler\StreamHandler('herapp.log', Monolog\Logger::INFO));
$log->addInfo('Start App');

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (preg_match('/messages\/\d+/', $path)) {
  echo 'messages/id';
} elseif (preg_match('/messages(\/)*$/', $path)) {
  echo 'messages';
} else {
  echo 'not found';
}