<?php include_once "libs.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	echo decoct(fileperms('lorem.txt'));
	echo BR;
	echo fileowner('lorem.txt');
	echo BR;
	echo filegroup('lorem.txt');
	echo BR;
	$stat = stat('lorem.txt');

	foreach ($stat as $k => $v){
		echo $k.":".$v."<br>";
	}
?>
</body>
</html>