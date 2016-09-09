<?php
    session_start();

    session_destroy();

    setcookie(session_name(), "");


    header('HTTP/1.1 307 Temporary Redirect');
    header('location: ses1.php');
    exit;


?>