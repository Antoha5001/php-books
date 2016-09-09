<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Работа с каталогами",1);
getTitle("Манипулирование каталогами",2);

 echo is_dir("Папка")? "Папка уже есть".BR:mkdir("Папка",0770);
echo getcwd().BR;

getTitle("Работа с записями",2);
$dir = opendir(".");
$e = readdir($dir);
for($i = 0; ($e = readdir($dir)) !== false; $i++){
   echo $e.BR;
}
//while($e = readdir($dir)){
//  echo $e;  
//}
closedir($dir);
getTitle("Получение содержимого каталога",2);
$g = glob("c:/windows/*");
print_r($g);
?>


















