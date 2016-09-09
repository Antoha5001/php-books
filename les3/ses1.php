<?php
session_start();
if(!isset($_SESSION['count'])) $_SESSION['count'] = 0;
include("../lib.php");
getTitle("Работа с сессиями");
echo "Вы обновили страницу ".$_SESSION['count']++." раз";

$name = "Антон";
$age = 29;
$work = "web-developer";

$_SESSION['user'] = [
    "name" => $name,
    "age" => $age,
    "work" => $work
];

echo BR."<a href=\"ses2.php\">Получить больше информации</a>";

?>

<style>
 
</style>


