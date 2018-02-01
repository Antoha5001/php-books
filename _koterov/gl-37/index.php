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
$querry = "select * from catalogs";
$ver = $pdo->query($querry);
echo "<pre>";
$i = 0;
while ($i < $ver->rowCount()){
	print_r($ver->fetchAll(PDO::FETCH_ASSOC));
	echo  $ver->fetch(PDO::FETCH_ASSOC)['names']." : ".$ver->fetch(PDO::FETCH_ASSOC)['price']."<br>";
	$i++;
}
	echo "</pre>";
	echo $pdo->exec($querry);
?>

</body>
</html>