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
$querry = "SELECT version() AS version";
$ver = $pdo->query($querry);
print_r($ver->fetch(PDO::FETCH_ASSOC));
?>

</body>
</html>