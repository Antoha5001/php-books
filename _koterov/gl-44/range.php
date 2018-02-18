<?php

	spl_autoload_register(function ($class){
		require "src/{$class}.php";
	});

	$dsn = "mysql:host=127.0.0.1:3307;dbname=phpbook";
	$user_name = "root";
	$password = "";

	try{
		$pdo = new PDO($dsn,$user_name, $password);
	} catch (PDOException $e){
		echo "Не удалось подключиться";
	}

	try{
		$query = "select * from glava44";
//
//		$store = $pdo->prepare($query);
//		$store->execute();
//
//		foreach ($store->fetchAll(PDO::FETCH_ASSOC) as $item){
//			echo $item['name']."<br>";
//		}

		$obj = new ISPager\PdoPager(new \ISPager\ItemsRange(),$pdo,'glava44');

		foreach ($obj->getItems() as $item) {
			echo trim(strip_tags($item['name']))."<br>";
		}

		echo $obj;

	} catch (PDOException $e){

	}