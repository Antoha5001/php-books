<?php
include("../lib.php");
//$text = file_get_contents("file");

$text_arr = file("file");

foreach($text_arr as $line){
    echo $line.BR;
}
?>