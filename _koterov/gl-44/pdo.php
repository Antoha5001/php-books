<?php
	spl_autoload_register(function ($class){
		require "src/{$class}.php";
	});

	try{
		$pdo = new PDO(
			'mysql:host=127.0.0.1:3307;dbname=phpbook',
			"root",
			"",
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		);


	} catch (PDOException $e){
		echo "Невозможно установить соединение".$e;
	}

	try{

		$obj = new ISPager\PdoPager(
			new ISPager\PageList(),$pdo,"glava44"
		);


		foreach ($obj->getItems() as $item){
			echo $item['name']."<br>";
		}

		echo "<p>".$obj."</p>";


//		$querry = "Select * from glava44";
////		$querry = "SHOW databases";
////		$querry = "SHOW tables";
//
////		$str = $pdo->query($querry);
////
////		while ($line = $str->fetch()){
////
////			echo $line[1]."<br>";
////		}
//
//
//		$res = $pdo->prepare($querry);
//
//		$res->execute();
//
//		$arr = $res->fetchAll(PDO::FETCH_ASSOC);
//
//		for ($i=0; $i<count($arr);$i++){
//			echo $arr[$i]['name']."<br>";
//		}
//
////	echo $res->fetchAll()[0];
////	print_r($res->fetch(PDO::FETCH_CLASS)) ;

	} catch (PDOException $e){
		echo $e;

	}














