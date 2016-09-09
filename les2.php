<?php
define("BR","<br>");

if(!function_exists('getTitle')){
  function getTitle($x,$y = 1){
    echo "<h".$y.">".$x."</h".$y.">".PHP_EOL;
  }  
}

getTitle("Заголовок"); 
getTitle("Заголовок 2",2); 
getTitle("Заголовок 3",3); 
function outFunc(){
    
    function inFunc(){
        echo "Привет , я внутренняя функция!".BR;
        global $name2;
        $name2 = "Маша";
    }
}
outFunc("Антон");
inFunc();
function sayHi($name = "Anton"){
    echo "Привет $name!".BR;
    $GLOBALS['name'] = "Вася";
}
sayHi("Филипп");
$user = "Маша";
sayHi($user);

$f = "sayHi";
$f("Гость");
sayHi();
sayHi($name2);
echo $name.BR;

function ssylka(&$nm){
    echo "Привет $nm!".BR;
    $nm = "Бэтман";
}
ssylka($nm);
ssylka($nm);

//Статичная переменная
function staticFunc(){
    static $st = 0;
    echo $st.BR;
    $st++;
}
staticFunc();
staticFunc();
staticFunc();

//Возврат значения
function retFunc($number){
    return $number.$number;
    echo "Мёртвый код";
}

echo retFunc("asd");

getTitle("Рекурсивная функция",2);
function recursive($r){
    if($r < 10){
        
        echo $r.BR;
        recursive($r+1);
        
    }
}
recursive(0);

getTitle("Исп аргументов переменной длинны",2);

/*func_num_args(recursive(0));
func_get_arg(recursive(0));
func_get_args(recursive(0));*/

getTitle("Анонимные функции",2);

$anonim = function ($a){
    echo $a.BR;
};
$anonim("Text");
getTitle("Замыкания",2);

function setDollar($dollar){
    return function($dollars) use ($dollar){
        return $dollars * $dollar;
    };
};

$setDollar = setDollar(81);

echo $setDollar(10);

echo BR.BR.BR.BR.BR.BR.BR.BR;

?>


















