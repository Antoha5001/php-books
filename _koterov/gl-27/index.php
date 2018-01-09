<?php
	header("Content-type: text/html; charset = utf-8");
	require "libs.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	$dir = dir('.');
	function getFile(Directory $dir){
		while (($cat = $dir->read()) !== false){
			yield $cat;
		}
	}
$cat = getFile($dir);
foreach ($cat as $v){
	echo $v."<br>";
}
closedir($dir->handle);
	function sample($from = 0, $to = 50){
		for($i = $from; $i <= $to; $i++){
			yield $i*$i."<br>";
		}
	}
	$obj = sample(5,10);
	while($obj->valid()){
		echo $obj->current();
		$obj->next();
	}

	$str = "Message: ";
	$a = function ($err) use($str){
		echo $str.$err;
	};
	echo "<pre>";
	 print_r($a);
	echo "</pre>";
?>

</body>
</html>