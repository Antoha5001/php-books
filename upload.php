<?php
//echo "Данные командной строки: ".$_SERVER["QUERY_STRING"];
if($_REQUEST["name"] == "anton" && $_REQUEST["password"] == "qrv6"){
     echo "Доступ разрешенн пользователю: ".$_REQUEST["name"];
   //system("rundll32.exe user32.dll, LockWorkStation");
} else{
    echo "Доступ запрещённ!";
}
?>