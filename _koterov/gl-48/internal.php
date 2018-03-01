<?php
	header('Status:200 OK');
$dir = dirname($_SERVER['SCRIPT_NAME']);
//echo $dir;
if ($dir == "//") $dir = "";
header("Location: $dir/result.php");
exit();