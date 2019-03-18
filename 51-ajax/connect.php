<?php
try{
    $pdo = new PDO(
        "mysql:host=localhost;dbname=phpbook",
        "anton",
        "password",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (Exception $e){
    echo "Ошибка";
}
