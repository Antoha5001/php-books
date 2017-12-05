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
//echo $a->$b;
//echo $a;
$b = <<<METKA
Какой-то текст с переменной типа {$a->$b}
и ещё
METKA;
$c = 'Какой-то текст';
echo  $c[1];
echo  $c;
echo $b <=> $c;
echo "<br>";
$x = 5;
$z = 65;
echo $_POST['name'] ?? "Нет имени";

?>
</body>
</html>