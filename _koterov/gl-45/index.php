<?php
	require "../libs.php";

	try{
		$phar = new Phar("./backup.phar", 0,'backup.phar');

		echo realpath("src/ISPager");

		if(Phar::canWrite()){
			$phar->startBuffering();

		$phar->buildFromIterator(new DirectoryIterator(realpath('src/ISPager')),"src");

		$phar->stopBuffering();

		} else{
			echo "Не пишет Phar";
		}

	} catch (Exception $e){
		echo $e;
	}