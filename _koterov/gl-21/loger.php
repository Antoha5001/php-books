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
	class FileLoger{
		public $file;
		public $name;
		static private $loggers = [];

		public function __construct($name, $filePath){
			$this -> name = $name;
			$this -> file = fopen($filePath,"a+t") or die("Ошибка!");
		}

		public function log($str){
			// создаём префикс с текущей датой и именем журнала
			$preffix = "[".date("d-m-y h:i:s")."] : ";
			$str = preg_replace("/^/m",$preffix,$str);
			self::$loggers[] = $str;

		}

		public function showLine(){
			print_r(self::$loggers);
		}

		public function __destruct(){
//			foreach ($this ->line as  $value){
//				fwrite($this->file, $value);
//			}
			fwrite($this->file, implode("",self::$loggers)."\n");
			fclose($this->file);
		}


	}
	class Sample{
		public $samp;

		function __construct($samp)
	  {
	  	$this->samp = $samp;
	  }
   }



	$log = new FileLoger("sampleLog","log.log");
	$log ->log("Новая запись2");
	$log -> showLine();
//	$log ->close();

	$sample = new Sample(150);

	$text = serialize($sample);

	$file = fopen("file.obj","a+") or die("Ошибка!");

	fwrite($file,$text);
	fclose($file);

	$file = fopen("file.obj","r") or die("Ошибка!");

	$text = fread($file, filesize("file.obj"));
	fclose($file);
	$obj = unserialize($text);

	echo "<pre>";
	print_r($obj);
	echo "</pre>";

?>
</body>
</html>