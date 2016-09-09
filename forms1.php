<?php
//Демо с $_COOKIE
$count = 0;
if(isset($_COOKIE['count'])) $count = $_COOKIE['count'];

    
    $count++;
    setcookie("count", $count, 0x7FFFFFFF, "/");
define("BR","<br>");   
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="hello.php">
    <span></span>
    <input type="text" name="name" value="">
    <span></span>
    <input type="password" name="password" value="">
    <input type="submit" value="Нажмите здесь, чтобы получить данные">
</form>
</body>
</html>
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

//echo "Данные командной строки: $_SERVER[QUERY_STRING]";
 
?>
<?php
    
    if(!isset($_REQUEST["submit"])){?>
        <form action="<?= $_SERVER["SCRIPT_NAME"]?>">
    <span></span>
    <input type="text" name="name" value="">
    <span></span>
    <input type="password" name="password" value=""> 
    <select name="sel[]" id="" multiple>
        <option value="First">First</option>
        <option value="Second">Second</option>
        <option value="Third">Third</option>
    </select>
    <input type="submit" name="submit" value="Нажмите здесь, чтобы получить данные">   
     </form>
 
<?php
    }else{

        if($_REQUEST["name"] == "Anton" && $_REQUEST["password"] == "12345"){
            
            echo "Доступ разрещён пользователю: ".$_REQUEST["name"]."<br>";
            
        }else{
            echo "Доступ запрещён <br>";
        };

    };
    


?>
<p>Ваш IP адрес: <?= $_SERVER['REMOTE_ADDR'] ?></p>
<p>Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?></p>

<?php 
    echo BR."Вы зашли: ".$count." раз".BR;
   if(isset($_REQUEST['sel'])) var_dump($_REQUEST['sel']);
  //  print_r($GLOBALS);
?> 

</body>
</html>
















