<?php header("Content-type: text/html; charset = utf-8");
	include_once "libs.php"?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
echo setlocale(LC_ALL,'ru_RU','ru_RU.UTF-8', 'ru', 'russian');
echo time();
echo BR;
echo microtime(true);
	echo BR;
	echo "%f";
	printf("%f",microtime(true));
	echo BR;
	 echo date("F");
	echo BR;
	echo strftime("%B");
	echo BR;
	echo date('d-m-Y', mktime(0,0,0,12,20,2017));
	echo BR;
	echo gregoriantojd(5,9,1945);
	echo BR;
	echo jdtogregorian(gregoriantojd(5,9,1945));
	echo BR;
	echo getdate()['year'];
	echo BR;
?>
<?=date("Год Y");?>
</body>
</html>