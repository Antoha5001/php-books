<?php
	header("Content-type: text/html; charset = utf-8");
	require "../libs.php";
	require "db_connect.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
//$querry = "SELECT version() AS version";
	try{
		$querry = "select names, price from catalogs order by price";
		$ver = $pdo->query($querry);
//		$response = $ver->fetchAll(PDO::FETCH_ASSOC);

//		function genResponse($arr, $callback){
//
//			for ($i = 0; $i < count($arr); $i++){
//				yield $callback($arr[$i]);
//			}
//
//		}
//
//		$price = genResponse($response, function ($e){
//			return "<p>".$e["names"]." : ".$e["price"]."</p>";
//		});
//
//		foreach ($price as $v){
//			echo $v;
//		}

		while ($response = $ver->fetch()){
			echo "<p>".$response["names"]." : ".$response["price"]."</p>";
		}

	} catch (PDOException $e){
		echo "Ошибка: ".$e->getMessage()."<br>";
	}


//echo "<pre>";
//$i = 0;
//while ($i < $ver->rowCount()){
//	print_r($ver->fetchAll(PDO::FETCH_ASSOC));
//	echo  $ver->fetch(PDO::FETCH_ASSOC)['names']." : ".$ver->fetch(PDO::FETCH_ASSOC)['price']."<br>";
//	$i++;
//}
//	echo "</pre>";
//	echo $pdo->exec($querry);
?>
<h2>Подготовленный запрос</h2>
<?php

	$id = 3;
	$querry = "select names, price from CATALOGs WHERE ID = :id";
	$response = $pdo->prepare($querry);
 	$response->bindParam(':id', $id);


	$id = 3;
	$response->execute();
	echo $response->fetch()['names'];

?>
<h2>Вставка новостей</h2>
<div style="max-width: 400px">
	<form action='addnews.php' method='POST'>

			<p>Название:</p>
			<input type='text' name='name'>


			<p>Содержимое:</p>
			<textarea name='content' rows='10' cols='40'></textarea>

		<br>

			<input type='submit' value='Добавить'>

	</form></div>

</table>
</body>
</html>
</body>
</html>