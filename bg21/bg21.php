<?php
header('Content-Type: text/html; charset= utf-8');
include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Запуск внешних программ",1);
getTitle("Запуск утилит",2);

system("cmd.exe");
exec("cmd.exe",$a,$b);
echo "<pre>";
print_r($a);
echo "</pre>";
echo $b.BR;
passthru("cmd.exe");

getTitle("Оператор `Обратные апострофы`",2);
$dir = `dir`;
echo $dir.BR;
?>


















