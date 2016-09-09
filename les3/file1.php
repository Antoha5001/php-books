<?php
// include("../lib.php");
//$text = file_get_contents("file");

$text = fopen("file","r");

//$text2 = nl2br(fread($text,10000));
echo nl2br(fread($text,10000));
//echo $text;
//print_r($text2);
fclose($text);


?>