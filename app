<?php
	
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Symfony\Component\Console\Application('say_hello');

$app->add(new \App\SayHello());

$app->run();
