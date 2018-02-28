<?php
	$img_dir = 'img';
	mkdir($img_dir,0777);

	if(isset($_REQUEST['doUpload'])){
		$data = $_FILES['file'];
		$tmp = $data['tmp-name'];

		if(is_uploaded_file($tmp)){
			$info = getimagesize($tmp);

			if (preg_match('{image/(.*)}is', $info['mime'], $p)){

			}
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>

</body>
</html>