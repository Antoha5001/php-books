<?php
	if(!defined('GBook')) {
		define('GBook','gbook.dat');
	}

	require_once "model.php";
	if(loadBook(GBook) !== false) {

		$data = loadBook(GBook);;
	} else 	$data = [];
