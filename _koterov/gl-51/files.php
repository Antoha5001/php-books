<?php
	if (!empty($_FILES)){
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<script src="jquery.min.js"></script>
</head>
<body>


<form enctype="multipart/form-data" method="post">
	<p>
		<input type="file" name="filename[]"/>
		<input type="button" value="+">
		<input type="button" value="-">
	</p>
	<div><input type="submit" value="Загрузить"></div>
</form>


<script>

	$(function () {
		var a = document.documentElement;

		function addField() {
			$('p:last').clone().insertAfter('p:last');
			console.log($(this));
		}

		function removeField() {
			console.log($(this));
			$('p:last').remove();
		}

		$(a).on('click', "input[type='button'][value!='+']", removeField);
		$(a).on('click', "input[type='button'][value!='-']", addField);


	});
</script>
</body>
</html>

