<?php

	spl_autoload_register(function ($class){
		require_once ("src/{$class}.php");
	});

	$obj = new ISPager\DirPager(
		new ISPager\PageList(),
		'photos',
		3,
		2
	);



	$img = $obj->getItems();

	foreach ($img as $src){
		echo "<img src='{$src}'>";
	}

	// Постраничная навигация
	echo "<p>$obj</p>";