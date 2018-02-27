<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>

<?php
if($_REQUEST['doUpload']){
	echo '<pre> Содержимое $_FILES'.print_r($_FILES,true)."</pre>";
}
?>
<p>Выберите файл в форме!</p>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="myFile">
	<input type="submit" name="doUpload" value="Закачать">
</form>

</body>
</html>