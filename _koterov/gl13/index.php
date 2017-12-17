<?php include_once "libs.php"; ?>

<?php
	$text = ['TITLE'];
	$toText = ['Глава 13. Строковые функции'];
	$mark = <<<MARKER
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>TITLE</title>
	<style>
		h1 {
			font-size: 30px;
		}
	</style>
</head>
<body>
<h1>TITLE</h1>
MARKER;

//	echo $mark;
	echo str_replace($text, $toText, $mark);
?>


<?php

	for ($i = 32; $i < 127; $i++){
		echo chr($i);
}
echo BR;
$str = "Привет, мир!";
	echo $str{2};
	echo BR;

	echo strlen($str);
	echo BR;
	echo mb_strlen($str);
	echo BR;
	$zero = 0;

	if ("$zero" === 0) echo 0;

	$str = "Какая-то строка";

	echo urlencode($str);
	echo BR;
	$lor = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid dignissimos dolor eaque expedita nisi qui recusandae soluta vero! Aspernatur blanditiis dolores eligendi, hic ipsam nemo officiis ut veniam veritatis voluptatem? A consequatur, cupiditate deleniti dolorem dolorum eos eveniet harum id laudantium minus molestiae nemo perferendis praesentium recusandae soluta suscipit voluptates. A ad aspernatur aut blanditiis consequuntur cum distinctio dolor doloremque eligendi facere fugiat in incidunt modi molestiae molestias nam nesciunt nisi non obcaecati odio qui quis quos ratione sint, sit soluta totam? Assumenda fugiat, rem. Dicta, eum, nisi? Architecto consequatur consequuntur explicabo libero maiores, minima provident quibusdam quod voluptatem!";

	echo "<pre>".wordwrap($lor,50,"\n| ")."</pre>";
	echo md5("морож");
	echo md5("морож");
	echo BR;
	echo ($a = 5);
	echo false;

//	$arr = [];

?>


</body>
</html>