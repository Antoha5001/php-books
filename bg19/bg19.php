<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Права доступа и атрибуты файлов",1);
getTitle("Права доступа",2);

$file = fileowner("lorem");
$file .= " ".filegroup("lorem");
$file .= " ".fileperms("lorem");

echo $file.BR;
chmod("lorem", 0755);
echo $file.BR;

getTitle("Определение атрибутов файлов",2);

$file2 = stat("lorem");
echo "<pre>";
print_r($file2);
echo "</pre>";

getTitle("Специальные функции",2);

echo filesize("lorem").BR;
echo date("Y-m-d h:m:s").BR;
$mTime = filemtime(__FILE__).BR;
echo date("Y-m-d h:m:s").BR;

getTitle("Определение типа файла",2);

echo filetype("lorem").BR;
echo is_file("lorem")? "Это файл".BR : "Это не файл".BR;
echo is_dir("lorem")? "Это каталог".BR : "Это не каталог".BR;
echo is_link("lorem")? "Это ссылка".BR : "Это не ссылка".BR;

getTitle("Определение возможности доступа",2);
echo is_readable("lorem")? "Файл доступен для чтения".BR : "Файл не доступен для чтения".BR;
echo is_writable("lorem")? "Файл доступен для записи".BR : "Файл не доступен для записи".BR;
echo is_executable("lorem")? "Файл доступен для исполнения".BR : "Файл не доступен для исполнения".BR;
?>


















