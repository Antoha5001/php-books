<?php
define("BR","<br>");

$a = 3;

if($a){
    echo '$a != 0'.BR;
} elseif ($a == 0){
    
    echo '$a = 0'.BR;
} else {
echo '$a = ?'.BR;
};

$i = 4;
switch($i){
    case 0: 
        echo "Один";
        break;
    case 1: 
        echo "Два";
        break;
    case "Зеленый": 
        echo "Green";
        break;
    default: echo "Нет варианта".BR;
};

/*
$arr = array("Яблоко","Киви","Апельсин","Банан");
$k = 0;
for ($s=$k, $l = 10; $s < $l; $s++){
    
    if($arr[$s] !== null)echo 'Фрукт = '.$arr[$s].BR;
    
};
*/
$arr = array("Яблоко","Киви","Апельсин","Банан");
/*$k = 0;
for ($s=$k, $l = count($arr); $s < $l; $s++){
    
   echo 'Фрукт = '.$arr[$s].BR;
    
};*/
/*$l = count($arr);
$s = 0;

while($s < $l){
    echo 'Фрукт = '.$arr[$s].BR;
    $s++;
}*/

foreach($arr as $k=>$v){
   echo "Фрукт № $k: ".$v.BR;
}
?>


















