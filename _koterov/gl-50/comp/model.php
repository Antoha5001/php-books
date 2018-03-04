<?php

	function loadBook($file_name){
		if(!file_exists($file_name)){
			echo "Нет файла book";
			return [];
		}
//		echo "Есть файл book";

//		$book = unserialize(file_get_contents($file_name));
		$book = unserialize(file_get_contents($file_name));
		return $book;
	}

	function saveBook($file_name, $book){
		file_put_contents($file_name,serialize($book));
	}