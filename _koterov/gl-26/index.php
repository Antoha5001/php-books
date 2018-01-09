<?php
	header("Content-type: text/html; charset = utf-8");
	require "libs.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	class User{
		private $age;
		public function __construct($age) {
			$this->age = $age;
	  }

	   public function getAge() {
//			if($this->age < 0){
//				trigger_error("Функция getAge():".
//					 "возраст не может быть меньше 0.");
//			}
		  return $this->age < 0 ?	trigger_error("Функция getAge():".
				 "возраст не может быть меньше 0.", E_USER_NOTICE)
				: $this->age;
	   }
   }
$user = new User(-10);
//	$user->getAge();
echo "Начало программы</br>";
	try{
		throw new Exception("Hello");
	   echo "Имеет и конец...</br>";
	} catch (Exception $e){
		echo "{$e->getMessage()}";
	}

	echo "</br>Конец программы</br>";

	class FileException{
		protected function __construct() {
	  }
   }
	class FileNotfoundException extends FileException{
		private $name;
		public function __construct($name) {
			parent::__construct();
			$this->name = $name;
		}

   }

   try{
		$a = "str";
		$a[] = 5;
	} catch (Error $e) {
		echo $e ->getMessage();
   }

	function getThrow(){ throw new Exception("Bang Bang!!!");}

	function hello(){
		echo "<br>Start script<br>";
		try{
			getThrow();
		}
		catch (Exception $e){
			echo "catch: ".$e->getMessage()."<br>";
		}
		finally {
			echo "text in finally<br>";
		}
		echo "This text not writed<br>";
	}
	hello();
?>

</body>
</html>