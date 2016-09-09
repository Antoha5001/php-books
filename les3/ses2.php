<?php
    session_start();
    $user = null;
   // if(isset($_SESSION['user'])){
       $user = $_SESSION['user'];
  //  }
    if(!isset($_SESSION['count'])) $_SESSION['count'] = 0;
    include("../lib.php");
    getTitle("Работа с сессиями 2");
    echo "<a href=".$_SERVER['PHP_SELF'].">Обновить страницу</a>".BR;
    echo "Вы обновили страницу ".$_SESSION['count']++." раз".BR;

    if(!is_null($user)){
        echo "Ваше Имя: ".$user['name'].BR;
        echo "Ваш возраст: ".$user['age'].BR;
        echo "Ваша профессия: ".$user['work'].BR;

    }else {
        echo "Нет данных о пользователе";
    }


    echo BR."<a href=\"ses1.php\">На главную</a>";

    echo BR."<a href=\"ses3.php\">Закрыть сессию</a>";

?>