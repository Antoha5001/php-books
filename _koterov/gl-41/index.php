<?php
	require "../libs.php";
	require "vendor/autoload.php";

	$log = new Monolog\Logger("name");
	$handler = new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);

	$log->pushHandler($handler);

	eval(\Psy\sh());

	$log->addWarning("Предупреждение");
