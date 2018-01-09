<?php header("Content-type: text/html; charset = utf-8");
	include_once "libs.php" ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	interface Seo2{
		public function title();
//		public function description();
	}
	trait Seo{
		public function getTitle(){
			echo "Seo::getTitle";
		}
	}
	trait Tag{
		public function getTitle(){
			echo "Tag::getTitle";
		}
	}
	class Page{

		use Seo,Tag{
			Seo::getTitle insteadof Tag;
		}

	}

	 (new Page()) ->getTitle();

?>

</body>
</html>