<?php
	
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('say_hello');
$app = new \Symfony\Component\Console\Application('string_times');
$app = new \Symfony\Component\Console\Application('interactive');


$app->add(new \App\SayHello());
$app->add(new \App\StringTimes());
$app->add(new \App\Interactive());


$app->run();
$app->run();
$app->run();
