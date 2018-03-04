<?php
	if(!defined('GBook')) {
		define('GBook','gbook.dat');
	}

	$file = fopen("file.txt",'r');

	for ($i = 1; !feof($file) && $i <= 5; $i++){
		$n = trim(fgets($file,1024));
		if(!$n) continue;
		$news[] = $n;
	}