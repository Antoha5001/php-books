<?php
	session_start();
	header("Content-type: text/html; charset = utf-8");
//	session_name();
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
	echo BR;
print_r($_COOKIE);
echo BR;
echo session_name();
	echo BR;
echo session_id();
	echo BR;
echo session_save_path();
	echo BR;
echo handler_read(session_id());
	echo BR;
	$_SESSION = [];
	unset($_COOKIE[session_name()]);
session_destroy();
	print_r($_COOKIE);
	echo $_SESSION['count'];
	echo BR;
?>
<a href="<?= $_SERVER['SCRIPT_NAME'] ?>" target="_blank">123</a>
</body>
</html>