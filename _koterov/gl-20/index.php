<?php header("Content-type: text/html; charset = utf-8");
	include_once "libs.php" ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	$str = "article_123.txt";
	echo BR;
	echo preg_match('/(\d+).(\w+)/s', $str, $m);
	echo BR;
	echo $m[1];
	echo BR;
	echo $m[2];
	echo BR;

	$str = "Письмо будет отправленно в 445566@mail.ru, а так же 778899@mail.ru!";
	$html = preg_replace("/(\S+)@([a-z0-9.]+)/i","<a href='mailto:$0'>$0</a>",$str);
	echo $html;
	echo BR;
	$re = "/\\S+\\\\S+/s";
	echo $re;
	echo BR;
	echo  htmlspecialchars($re);
	$first = "{^(\w:|\\\\|\/)}";
	$str = "\\file.txt, /";
	echo BR;
	echo preg_match($first,$str,$f);
	echo BR;
	echo $f[0];
	echo BR;
	$str = "   12 / 43 _ 1987     ";
	$datePattern = "/\s+ ( 
	(\d+) #день 
	\s{0,} [[:punct:]] \s{0,} 
	(\d+) #месяц
	\s{0,} [[:punct:]] \s{0,} 
	(\d+)
	)\s+/xs";
	$dateEdit = preg_match($datePattern,$str,$d);
	echo BR;
	echo $d[0];
	echo BR;
	echo $d[2];
	echo BR;
	$text = htmlspecialchars(file_get_contents(__FILE__));
	$textPattern = preg_replace("/(\\$[a-z]\w*)/is",'<b style="color: red">$1</b>',$text);
//	echo "<pre>".$textPattern."</pre>";

	$str = "Hello this is <b>word</b> is bold";
	$tegPattern = "{ <(?P<teg> \w+)  > (.*?) </ \k{teg} > }xs";
	echo $strEdit = preg_match($tegPattern, $str, $s) or die("Ошибка!");
	echo BR;
	echo $s['teg'];
	echo BR;
	echo $s[2];
	echo BR;
	print_r($s)
?>
</body>
</html>