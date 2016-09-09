<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Математические функции",1);
getTitle("Функции скругления",2);
$num = -13.7;
$num2 = 13.2;
echo abs($num).BR;
echo round($num2).BR;
echo ceil($num2).BR;
echo floor($num2).BR;
getTitle("Случайные числа",2);
echo mt_rand(0,10).BR;
$file = fopen("file", "r");
//echo fgets($file,10000).BR;
//echo fgets($file,10000).BR;
for ($i = 0; $s = fgets($file,10000); $i++ ){
    
    if(mt_rand(0,$i)==0) $line = $s;
    
}
echo $line.BR;
echo mt_getrandmax().BR;
//mt_srand(123);
for($i = 0; $i <5; $i++){
    echo mt_rand(0,10).BR;
}
//mt_srand(123);
for($i = 0; $i <5; $i++){
    echo mt_rand(0,10).BR;
}

getTitle("Перевод в различные системы счисления",2);
$num = "FF";
echo base_convert($num,16,10).BR;
echo bindec("11011").BR;
echo octdec("11011").BR;
echo hexdec("11011").BR;
$num2 = "1000000";
echo decbin($num2).BR;
echo decoct($num2).BR;
echo dechex($num2).BR;

getTitle("Минимум и максимум",2);
$a = 14.87;
$b = 1.43;
echo min($a,$b).BR;
$A = [
    "a" => "13.62",
    "b" => "1",
    "c" => "-35",
    "d" => "22.34"
];
echo min($A).BR;
echo max($A).BR;

getTitle("Не числа",2);
$a = NaN; 
//echo is_nan($a);
echo NaN;
getTitle("Степенные функции",2);
echo sqrt(16).BR;
echo log(16).BR;
echo pow(4,2).BR;
?>
















