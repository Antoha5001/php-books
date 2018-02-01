<?php
	$dsn = 'mysql:host=127.0.0.1:3307; dbname=phpbook';
	$user = 'dbuser';
	$password = 'dbpass';

	try{
		$pdo = new PDO($dsn, $user, $password);
	} catch (PDOException $e){

	}



