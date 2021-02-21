<?php
	
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('string_times');

$app->add(new \App\StringTimes());

$app->run();
