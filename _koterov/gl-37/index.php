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

</body>
</html>