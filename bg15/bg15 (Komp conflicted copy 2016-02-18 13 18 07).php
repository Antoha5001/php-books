<?php

include("../lib.php");



getTitle("Строковые функции",1);

$yes = "Ура! ";

echo str_repeat($yes,3).BR;

$one = 1;
$zero = 0;
$chr = chr(8);
$str = sprintf("The string ends in escape: %c", 27);

if ($one == "") echo "1".BR;
if ($zero == "") echo "2".BR;
if ("" == $zero) echo "3".BR;
if ("$zero" == "") echo "4".BR;
if (strval($zero) == "") echo "5".BR;
if ($zero === "") echo "6".BR;
if (false == "") echo "Равно 0".BR;
if (false !== "") echo "Не равно 0".BR;

echo $str.BR;
echo "Символ 126 - ".chr(126).BR;
$st = " строка с пробелами  пробелами  пробелами ";
$st2 = " строка с пробелами ";
echo $st.BR;
echo trim($st).BR;
echo ltrim($st).BR;
echo rtrim($st).BR; //chop()
echo strlen($st).BR; //22

echo strpos($st, "с ").BR; //
echo strrpos($st, "с").BR; //
echo strcmp($st,$st2).BR;
echo strcasecmp($st,$st2).BR;
echo substr($st,9).BR;

echo str_replace("пробелами", "кавычками",$st).BR;
echo substr_replace($st,"л", 6, 2).BR;
$from = ["строка","пробелами"];
$to = ["столбец","кавычками"];
echo str_replace($from,$to,$st).BR;

echo strtr($st,"оар","аоr").BR;

?>















