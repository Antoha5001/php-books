<?php include "comp/component_gbook_add.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>

<h1>Добавте своё сообщение</h1>
<form method="post" action="<?=$_SERVER["SCRIPT_NAME"]?>" >
	Ваше имя <input type="text" name="new[name]"><br>
	<textarea name="new[text]" cols="60" rows="7"></textarea><br>
	<input type="submit" name="doAdd" value="Добавить!">
</form>

<?php require_once "comp/component_gbook_show.php";?>
<h1>Сообщения гостевой книги</h1>
<?php

	$book2 = serialize([time() => ['name' =>'Anton','text'=>'Some text']]);
//	print_r($book2);
	echo "<br>";
//	$data = loadBook(GBook);
//	print_r(unserialize($book2));
	echo "<br>";
//	file_put_contents('gbook.dat',serialize([time() => ['name' =>'Anton','text'=>'Some text']]));
//	echo $book2;

foreach ($data as $id => $e) {
		echo "Имя человека: " . $e['name'] . "<br>";
	echo "Текст: " . $e['text'] . "<br>";
}
?>

<h2>Последние новости</h2>
<?php require_once "comp/component_news_show.php";?>
<ul>
	<?php
	foreach ($news as $i => $n){
		echo "<li>".($i+1)."-ая новость: $n</li>";
	}
	?>
</ul>

</body>
</html>
