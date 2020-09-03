<?php

use App\Hello;

require __DIR__ . '/../vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

$user = new Hello();
echo $user->name . '<br>';
echo $user->email. '<br>';

var_dump($log);

echo "deploy v0.1" . '<br>';
echo "Api, Nginx and PHP !!!" . '<br>';


