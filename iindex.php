<?php


//Константа
define("ASD",123);

if(defined("ASD")) 	echo "Константа ASD = ".ASD;

define("BR","<br>");

//ссылка
$laser = "epson";
$struinyi = 'laser';
echo $$struinyi;
$$struinyi = 'samsung';
echo $laser;

//МАССИВ
$a = array(
    "1"=> "Один",
    "2" => "Два",
    "3" => 3,
    "Яблоко" => array(
        "Зелёное"=> "Green",
        "Красное"=> "Red",
        "Желтое"=> "Yellow",
    )
);
echo gettype($a);
echo BR."Яблоко {$a["Яблоко"]["Зелёное"]}";
echo BR."3 - $a[3]";

//Отладочные функции
echo "<h3>print_r</h3>";
echo "<pre>";
print_r($a);
echo"</pre>";


echo "<h3>var_dump</h3>";
echo "<pre>";
var_dump($a);
echo"</pre>";

echo "<h3>var_export</h3>";
echo "<pre>";
var_export($a);
echo"</pre>";


//Операторы преобразования

$br ="<br>";
unset($br);

echo BR;
$foo = "oq43";
echo $foo.BR;
settype($foo,"integer");
if(isset($foo))
    echo $foo.BR;
$foo = "43";
echo $foo.BR;
settype($foo,"integer");
echo $foo.BR;
$foo2 = "200";
echo gettype((int)$foo2);

?>