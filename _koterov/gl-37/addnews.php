<?php
	include "db_connect.php";

try{
	if(empty($_POST['name'])) exit("Не заполнено поле с именем");
	if(empty($_POST['content'])) exit("Не заполнено поле с текстом");

	//Добавляем имя новости в таблицу news
	$querry = "INSERT INTO news VALUES (NULL , :name, NOW())";
	$news = $pdo->prepare($querry);
	$news->execute(["name" => $_POST['name']]);

	//получаем ID введённой новости
	$news_id = $pdo->lastInsertId();

	//Вставляем сообщение, формируем запись
	$querry = "INSERT IGNORE INTO news_contents VALUES (NULL, :content, :news_id)";
	$news_content = $pdo->prepare($querry);
	$news_content->execute(["content" => $_POST['content'], "news_id" => $news_id]);

	header("Location: index.php");

} catch (PDOException $e){
	print_r($pdo->errorInfo());
	echo "Ошибка запроса:". $e->getMessage();
}


