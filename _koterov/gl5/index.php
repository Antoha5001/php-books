<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<h1>First programm</h1>
<?php
$dmy = date("D-m-y")."<br>";
echo $dmy."<br>";
echo PHP_INT_MAX."<br>";
echo date("H-i-s");
echo "<ul>";
for ($i =1; $i<5; $i++){
	echo "Квадрат $i = ".($i*$i*$i)."<br>";
}
echo "</ul>";

class myClass{

}
$a = new myClass();
$a->$b = 123;
echo $a->$b;
echo $a;

?>
</body>
</html>