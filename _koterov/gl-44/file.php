<?php

	spl_autoload_register(function ($class){
		require ("src/".$class.".php");
	});

	try{

		$obj = new \ISPager\FilePager(
			new ISPager\PageList(),
			"bigfile.txt");

//		echo $obj;

//		echo $obj->getCurrentPagePath();

//		print_r($obj->getItems());

echo $obj->getCurentPage();
		foreach ($obj->getItems() as $str){
			echo "<p>";
			echo $str;
			echo "</p>";
		}

		echo $obj;


	} catch(Exception $e) {
		echo "123.".$e;
	}