<?php
include("../lib.php");
//$text = file_get_contents("file");

$text = fopen("file","r");

fseek($text,200);

while(!feof($text)){
    $line = fgets($text);
    echo nl2br($line);
    
}
fclose($text);
?>