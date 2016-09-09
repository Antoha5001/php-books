<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Работа с массивами",1);

$arr1 = [
    
   "c" => "Бетта",
   "b" => "Альфа",
  "d" => "Дельта",
   "a" => "Гамма",
];
echo $arr1[1].BR;
asort($arr1);
print_r($arr1).BR;
echo $arr1[1].BR;
ksort($arr1);
print_r($arr1).BR;
echo $arr1[1].BR;
krsort($arr1);
print_r($arr1).BR;
echo $arr1[1].BR;
$arr2 = array_reverse($arr1);
print_r($arr2).BR;
echo BR;
$arr3 = [
    
   3 => "Бетта",
   2 => "Альфа",
  4 => "Дельта",
   1 => "Гамма"
];
arsort($arr3);
print_r($arr3).BR;
echo BR;
$arr3 = array_reverse($arr3);
print_r($arr3);
echo BR;
$files = ["img10.png","img1.png","img2.png","img20.png"];
asort($files);
echo "<pre>";print_r($files);echo "</pre>".BR;
natsort($files);
echo "<pre>";print_r($files);echo "</pre>".BR;

getTitle("Сортировка списков",2);
$numbers = [
    "a" => "пятнадцать",
    "b" => "восемь",
    "c" => "шесть",
    "d" => "тридцать"];
sort($numbers);
echo "<pre>";print_r($numbers);echo "</pre>".BR;
shuffle($numbers);
echo "<pre>";print_r($numbers);echo "</pre>".BR;
getTitle("Ключи и значения",2);
$fruits = [
    "африканский" => "апельсин",
    "китайская" => "груша",
    "египетский" => "киви",
    "мароканская" => "земляника",
    "русская" => "редька"];
echo "<pre>";print_r($fruits);echo "</pre>".BR;
$fruits = array_flip($fruits);
echo "<pre>";print_r($fruits);echo "</pre>".BR;
print_r(array_keys($fruits,"африканский"));
echo BR;
print_r(array_keys($fruits));
echo BR;
natsort($fruits);
print_r(array_values($fruits));
echo BR;
if(in_array("русская", $fruits)) echo "Похоже будет окрошка с редькой!".BR;
$list = [8, "Hello", 8,8,"Hello"];
print_r(array_count_values($list));
echo BR;

getTitle("Слияние массивов",2);
$m1 = [10,20,30,"ananas"];
$m2 = [100,200,300,"my_ih",800];
$m3 = $m1 +$m2;
$m4 = array_merge($m1,$m2);
echo "<pre>";print_r($m3);echo "</pre>".BR;
echo "<pre>";print_r($m4);echo "</pre>".BR;

getTitle("Работа с подмассивами",2);
$num = [0,1,2,3,4];
//echo "<pre>";print_r(array_slice($num,-3,2));echo "</pre>".BR;
array_splice($num,2,2,$m1);
echo "<pre>";print_r($num);echo "</pre>".BR;

getTitle("Работа со стеком и очередью",2);
unset($fruits);
$fruits = [
    "африканский" => "апельсин",
    "китайская" => "груша",
    "египетский" => "киви",
    "мароканская" => "земляника",
    "русская" => "редька"];
array_push($fruits,"яблоко","банан");
echo "<pre>";print_r($fruits);echo "</pre>".BR;
echo array_pop($fruits).BR;
echo "<pre>";print_r($fruits);echo "</pre>".BR;
array_unshift($fruits,"маракуйя","грейпфрут");
echo "<pre>";print_r($fruits);echo "</pre>".BR;
echo array_shift($fruits).BR;

getTitle("Переменные и масивы",2);

$a = "aaa";
$b = "bbb";
$c = "ccc";
$d = "ddd";
if(isset($list)) unset($list);
$list = ["a",["c","d"]];
echo "<pre>";print_r($list);echo "</pre>".BR;
$A = compact("b",$list);
echo "<pre>";print_r($A);echo "</pre>".BR;
$book = [ 
    ["name" => "Вася",
    "addr" => "г. Москва, улица Московская, 28",
    "text" => "Текст Васи"],
    ["name" => "Петя",
    "addr" => "г. Питер, улица Питерская, 341/4",
    "text" => "Текст Пети"]
];?>


<?php foreach($book as $v){extract(array_change_key_case($v,CASE_UPPER));
    echo "<ul><li>".$NAME;
    echo "<li>".$ADDR;
    echo "<li>".$TEXT."</ul>";
}
getTitle("Создание диапазона чисел",2);
echo"<table>";
foreach(range(1,10) as $v){
    echo "<tr><td>$v</td><td>Это строка № $v</td></tr>";
}
echo"<table>";

getTitle("Работа с множествами",2);
getTitle("Пересечение",3);
$benzin = ["92","95","98"];
$zpkaz = ["80","Разбавленный 92","92","92+"];
print_r(array_intersect($benzin,$zpkaz)).BR;
getTitle("Разность",3);
print_r(array_diff($benzin,$zpkaz)).BR;
getTitle("Объединение",3);
$g = array_merge($benzin,$zpkaz);
print_r(array_unique($g)).BR;

?>
















