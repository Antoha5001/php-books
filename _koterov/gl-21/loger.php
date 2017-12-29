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
		public $line = [];

		public function __construct($name, $filePath){
			$this -> name = $name;
			$this -> file = fopen($filePath,"a+t") or die("Ошибка!");
		}

		public function log($str){
			// создаём префикс с текущей датой и именем журнала
			$preffix = "[".date("d-m-y h:i:s")."] : ";
			$str = preg_replace("/^/m",$preffix,$str);
			$this -> line[] = $str;

		}

		public function showLine(){
			print_r($this -> line);
		}

		public function close(){
//			foreach ($this ->line as  $value){
//				fwrite($this->file, $value);
//			}
			fwrite($this->file, implode("",$this->line)."\n");
			fclose($this->file);
		}


	}

	$log = new FileLoger("sampleLog","log.log");
	$log ->log("Новая запись");
	$log -> showLine();
	$log ->close();
?>
</body>
</html>