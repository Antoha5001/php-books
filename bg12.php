<?php
define("BR","<br>");

/*$i=1;
do{
    echo $i.BR;
    $i++;
} while($i <= 10);*/

$arr = [1,2,3 => array(1,2,3),4=>"Апельсин"];

for ($i = 0; $i < count($arr); $i++){
   for($l = 0; $l < count($arr[$i]); $l++){
       if ($arr[$i][$l] == null)break(2);
   }
}
if($i < 10 ) echo "Найден нулевой элемент";
print_r($arr);
//$k = 1;
switch($k){
    case 1 : echo "One";
        break;
    default :echo "ничего";
};
?>


















