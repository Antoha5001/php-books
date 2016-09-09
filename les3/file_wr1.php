<?php
include("../lib.php");
//$text = file_get_contents("file");

$text = fopen("write-file", "a+");

fwrite($text,"Какойто текст a+".PHP_EOL);

fclose($text);
?>