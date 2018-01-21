<?php
	header("Content-type: text/html; charset = utf-8");
	require "../libs.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	$email = "igorsimdyanov@gmail.com";
	$email2 = "igorsimdyanov@gmail";

	$num = 18;

	echo filter_var($email, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
	br();
	echo filter_var($email2, FILTER_SANITIZE_EMAIL);
	br();
	echo filter_var($num, FILTER_VALIDATE_INT, [
		'options' => [
			'min_range' => 15,
			'max_range' => 25
		]
	]);

	$url = 'params=Привет мир!';
	br();
	echo filter_var($url, FILTER_SANITIZE_ENCODED);



?>

</body>
</html>