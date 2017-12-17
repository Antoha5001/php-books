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

?>
</body>
</html>