<?php
	if(!defined('GBook')) {
		define('GBook','gbook.dat');
	}
	require_once "model.php";

	if(!empty($_REQUEST["doAdd"])){
//		echo !empty($_REQUEST["doAdd"]);
//		echo $_REQUEST["doAdd"];
//		echo "<br>";
//		echo "<br>";
//		echo file_get_contents("gbook.dat");
//		echo unserialize(file_get_contents("gbook.dat"));
//		echo "<br>";
//		print_r(unserialize(file_get_contents("gbook.dat"))) ;
//		echo "<br>";
//		echo "<br>";
//		print_r($_REQUEST["new"]) ;
//		echo "<br>";
//		print_r($data = serialize($_REQUEST["new"])) ;
//		echo "<br>";
//		print_r(unserialize($data)) ;
//		echo "<br>";
		if(loadBook(GBook) !== false){

			$tmp_book = loadBook(GBook);
			$tmp_book = [time() => $_REQUEST["new"]] + $tmp_book;
		} else{

			$tmp_book = [time() => $_REQUEST["new"]];
		}

//		echo "<br>";
//		echo $tmp_book;
//		print_r(["aaa" => "bbb"]+$tmp_book) ;
//		echo [time() => $_REQUEST["new"]];
//		echo "sss2".$tmp_book;
//		print_r($tmp_book);

		saveBook(GBook,$tmp_book);
		$rnd = time();
		header("Location: http://{$_SERVER['SERVER_NAME']}:82{$_SERVER['SCRIPT_NAME']}?$rnd");
	}
	$data = null;
//	header('Location: event.php');