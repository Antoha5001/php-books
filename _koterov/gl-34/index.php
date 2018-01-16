<?php
	header("Content-type: text/html; charset = utf-8");
session_start();
if (!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;

} else{
	$_SESSION['count']++;
}
//	$counter = isset($_COOKIE['arr'][0]) ? $_COOKIE['arr'][0] : 0;
//	$counter++;
//	setcookie('arr[1][0]',$counter,time()+3600);
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
print_r($_SESSION);
echo $_SESSION['count'];
?>
<a href="<?= $_SERVER['SCRIPT_NAME'] ?>" target="_blank">123</a>
</body>
</html>