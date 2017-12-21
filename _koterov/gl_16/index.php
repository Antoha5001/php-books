<?php include_once "libs.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	$file = fopen("lorem.txt","rt");
	echo $file;
	echo  BR;
	echo  fgets($file);
	echo  BR;
	echo  fgets($file);
	echo  BR;
	echo  fgets($file);
	fclose($file);
	echo  BR;
	echo $file;

	echo  BR;
	$glob = glob("./*");
	foreach ($glob as $key => $value){
		echo $key." : ".$value."<br/>\n";
	}
	echo  BR;
	function getFile($path){
		$dir = opendir($path);
		while (readdir($dir) !== false){
			yield readdir($dir)."<br/>\n";
		}
	}
	foreach (getFile(".") as $key){
		echo $key;
	}
	$dir = opendir(".");

//	echo readdir($dir);
//	echo readdir($dir);
//	echo readdir($dir);
?>
</body>
</html>