<?php
//http://www.gnu.org/software/tar/manual/html_node/Date-input-formats.html
header('Content-Type: text/html; charset = utf-8');
include("../lib.php");

setlocale(LC_ALL,'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
getTitle("Работа с датой и временем",1);

echo time().BR;
//echo microtime(true).BR;
define("S_TIME", microtime(true));
//sleep(1);
printf("Время работы скрипта: %.5f c", microtime(true)-S_TIME.BR);
$time = microtime(true);
printf(BR."С начала эпохи Unix: %f секунд",$time);
echo BR."С начала эпохи Unix: $time секунд".BR;
echo date("Сегодня d-m-y");
echo BR;
echo strftime("Сегодня %d-%B-%y");
echo BR;
getTitle("Построение timeshtamp",2);
echo date("d-m-Y", mktime(0,0,0,03,20,2016));
echo BR;
$d = "24sep72";
echo date("d-m-Y", strtotime($d));
echo BR;
getTitle("Грегорианский календарь",2);
echo gregoriantojd(12,25,1964);
echo BR;
echo $d = jdtogregorian(2438755);
echo BR;
$list = explode("/",$d);
print_r($list);
echo BR;
echo jddayofweek(2438755,2);
echo BR;

getTitle("Время по гринвичу",2);

//echo gmdate();

function local2gm($lshtamp = false){
    if ($lshtamp === false) return time();
    $tzoffset = date("Z",$lshtamp);
    return $lshtamp - $tzoffset;
}
function gm2local($gmStamp=false, $tzOffset=false) { 
if ($gmStamp === false) return time(); 
// Получаем смещение часовой зоны в секундах. 
if ($tzOffset === false) 
$tzOffset = date("Z", $gmStamp); 
else 
$tzOffset *= 60*60; 
// Вычитаем разницу — получаем время по GMT. 
return $gmStamp + $tzOffset; 
} 

echo gm2local();
echo BR;
echo local2gm(time());
echo BR;




?>


















