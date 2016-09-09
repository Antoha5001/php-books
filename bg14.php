<?php

include("lib.php");


getTitle("Функции",1);

//Передача параметров по ссылке
getTitle("Передача параметров по ссылке",2);

$num = 10;
echo "значение до функции = $num".BR;

function funcS(&$a){
    echo "значение до инкремента = $a".BR;
    $a++;
    echo "значение после инкремента = $a".BR;
}    

funcS($num);
echo "значение после функции = $num".BR;

//Переменное число параметров


$arr1 = ["Параметр 1","Параметр 2","Параметр 3"];
/*
function perInt(){
    for ($i = 0; $i < func_num_args(); $i++){
        
        echo "<p>".func_get_arg($i)."</p>";
    };
};*/

function perInt(){
    foreach (func_get_args() as $v){
        echo "<p>".$v."</p>";
    }
};

perInt("Параметр 1","Параметр 2","Параметр 3");
perInt($arr1);

function getArr($n){
 // global $arr1;  
   return $GLOBALS["arr1"][$n];
 //  echo $arr1[$n];
    
}
echo getArr(2);

getTitle("Статические переменные",2);

function selfCount(){
   static $s = 0;
    $s++;
    return $s;    
}

for($i=0; $i <10; $i++) echo selfCount().BR;

getTitle("Рекурсия",2);
getTitle("Факториал",4);

function factor($n){
    
    if ($n <= 0) return 1;
    else return $n * factor($n - 1);
        
    
}

echo factor(8);
getTitle("Пример функции дампер",2);
dumper($arr1);

getTitle("Вложенные функции",2);

function father($a){
    echo $a.BR;
    function child($b){
        echo $b + 1, BR;
        return $b*$b;
    }
    return $a * $a * child($a);
}
//father(10);
//child(10);
echo father(10);
echo child(20);

getTitle("Условно определяемые функции",2);

echo "if (что-то) то тогда function какая-нибудь()";

getTitle("Передача функции \"по ссылке\"",2);

function fA ($a){echo "Вызвана функция fA ($a)";}

$f = "fA";
$f (15);

getTitle("Использование call_user_func()",2);
function fB ($a){echo "Вызвана функция fB ($a)";}

$f = "fB";
call_user_func($f,100);
getTitle("Использование call_user_func_array()",2);
if(!function_exists("myEcho")){
    function myEcho(){
        for($i = 0; $i < func_num_args(); $i++){
            echo "Привет ".func_get_arg($i).BR;
        }
    }
}

myEcho("Вася", "Гость");
function tabber($spaces){
    $args = func_get_args();
    array_shift($args); // Удаляет первый аргумент
    $new = array();
    foreach ($args as $v){
        $new[] = str_repeat("&nbsp;", $spaces).$v;
    };
    call_user_func_array("myEcho", $new);
    
}
xBR(2);
$arr4 = [];
tabber(5, "Гость", "Гость");
xBR(20);
?>















