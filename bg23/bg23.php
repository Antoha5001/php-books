<?php
//http://www.gnu.org/software/tar/manual/html_node/Date-input-formats.html
header('Content-Type: text/html; charset = utf-8');
error_reporting(E_ALL|E_STRICT);
ini_set("error_log", "1.txt");
include("../lib.php");

setlocale(LC_ALL,'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
getTitle("Управление интерпретатором",1);

//echo phpinfo();

echo phpversion();

//echo "Последнее изменение".
//ini_set();

getTitle("Перехват ошибок",2);

?>


















