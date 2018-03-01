<?php
	$img_dir = 'img';
	if (!is_dir($img_dir)) {

		mkdir($img_dir, 0777);
	}

	if ($_REQUEST['doUpload']) {
		$data = $_FILES['file'];
		$tmp = $data['tmp_name'];


		if (is_uploaded_file($tmp)) {
			$info = getimagesize($tmp);

			if (preg_match('{image/(.*)}is', $info['mime'], $p)) {
				$name = "$img_dir/" . time() . "." . $p[1];

				move_uploaded_file($tmp, $name);
				$rnd = time();
				header("Location: http://{$_SERVER['SERVER_NAME']}:82{$_SERVER['SCRIPT_NAME']}?$rnd");
			} else {
				echo "<h2>Попытка добавить файл недопустимого формата!</h2>";
			}
		} else {
			echo "<h2>Ошибка закачки # {$data['error']}</h2>";
		}
	}

	$photos = array();

	foreach (glob("$img_dir/*") as $path) {
		$size = getimagesize($path);
		$tm = filemtime($path);

		$photos[$tm] = [
			'time' => $tm,
			'name' => basename($path),
			'url' => $path,
			'width' => $size[0],
			'height' => $size[1],
			'wh' => $size[3]
		];
	}

	krsort($photos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>

<form action="<?= $_SERVER['SCRIPT_NAME']?>" method="post" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" name="doUpload" value="Закачать фото">
	<hr>
</form>

<?php foreach ($photos as $n=>$img) {?>

	<p><img src="<?=$img['url']?>" <?=$img['wh']?> alt="Добавлена <?=date('d.m.Y H:i:s',$img['time'])?>"></p>
	
<?php } ?>
</body>
</html>