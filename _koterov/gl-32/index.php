<?php
	header("Content-type: text/html; charset = utf-8");

	$counter = isset($_COOKIE['arr'][0]) ? $_COOKIE['arr'][0] : 0;
	$counter++;
	setcookie('arr[1][0]',$counter,time()+3600);
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

print_r(headers_list()) ;
echo "<pre>";
print_r(getallheaders()) ;
echo BR;
echo isset($_COOKIE['arr'][0]) ? $_COOKIE['arr'][0] : "Нет такой куки";
echo "{$_REQUEST['arr'][1][0]}";
	echo BR;
$str = "name=Anton&age=31";
$arr = parse_str($str,$out);
foreach ($out as $k => $v){
	echo $k.":".$v."<br>";
}
?>

</body>
</html>