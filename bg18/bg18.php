<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Работа с файлами",1);
getTitle("Открытие файла",2);
$f = fopen("file","r") or die("Ошибка!");
function openFile(){
    $f = fopen("file","r") or die("Ошибка!");
};
function closeFile(){
    fclose($f);
};
//$f = fopen("http//:www.mail.ru/","rt") or die("Ошибка!");
getTitle("Закрытие файла",2);

//fclose($f) or die("Ошибка!");
//fclose($f) or die("Ошибка!");
getTitle("Блочное чтение/запись",2);
$f2 = fopen("file2","a+") or die("Ошибка!");
//fwrite($f2, "Строка\n");
fclose($f2) or die("Ошибка!");
$f2 = fopen("file2","a+") or die("Ошибка!");
//echo fread($f2,20000).BR;
//echo nl2br(fgets($f2));
//echo fgets($f2);
//echo nl2br(fgets($f2));
//echo nl2br(fgets($f2));
//echo file("file");
getTitle("Положение указателя текущей позиции",2);
//for($i = 0;!feof($f2); $i++){
//    echo nl2br(fgets($f2));
//    if(feof($f2)) echo "конец файла";
//}
while(!feof($f2)){
    $arr1[] = nl2br(fgets($f2));
    //echo nl2br(fgets($f2));
    
    if(feof($f2)) echo "конец файла".BR; 
}
print_r($arr1);
echo BR;
fclose($f2) or die("Ошибка!");
$f2 = fopen("file2","r+") or die("Ошибка!");
fseek($f2,10,SEEK_SET); //SEEK_SET, SEEK_CUR, SEEK_ENDecho
echo ftell($f2).BR;
echo fread($f2,100).BR;
fclose($f2) or die("Ошибка!");
fclose($f) or die("Ошибка!");
getTitle("Работа с путями",2);
echo basename("modules/images/24.png").BR;
echo dirname("modules/images/24.png").BR;
//$fname = tempnam('.','file');
echo getmypid().BR;
echo realpath('file').BR;
echo getcwd().BR;
getTitle("Манипулирование целыми файлами",2);
//copy('file','lorem');
//rename('','');
//unlink('file3');
$f3 = file('file');
foreach ($f3 as $v){
    echo nl2br($v);
}
echo BR;
echo filesize('file').BR;
//echo openFile();
$f = fopen("file","r") or die("Ошибка!");
$lines = explode("\n",fread($f,filesize('file')));
//foreach ($lines as $v){
//    echo nl2br($v);
//}
echo "<pre>".print_r($f3)."</pre>";
echo BR;
echo "<pre>".print_r($lines)."</pre>";
$data = file_get_contents('file');
file_put_contents('newfile',$data);

get_meta_tags('file');


echo file_exists("file")? "Файл есть!".BR : "Файла нет!".BR;
fclose(fopen("file5",'a+b'));

$file = fopen("file5","r+b") or die('Не могу открыть файл!');
flock($file, LOCK_EX); //LOCK_SH если read

flush($file);
flock($file, LOCK_UN);
fclose($file);


?>
















