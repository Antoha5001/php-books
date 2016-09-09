<?php
include("../lib.php");
//$text = file_get_contents("file");

$text = fopen("file","r");
$i = 0;

ob_start();
$symbol = fpassthru($text);

$file_content = ob_get_clean();
fclose($text);

echo nl2br($file_content);

echo BR."Было выведено {$symbol} символов.";

?>