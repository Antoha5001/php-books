<?php
	header("Content-type: text/html; charset = utf-8");
	require "libs.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	function abc($str){

	   echo $str;
	}

	$abc = new ReflectionFunction("abc");
	$abc->invoke("Hello");
	echo $abc->getName();
?>

</body>
</html>