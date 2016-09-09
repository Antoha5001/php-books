<ul><?php
define("BR","<br>");

$arr[0]= "Кирил";
$arr[1]= "Пётр";
$arr[2]= "Филипп";
$arr[3]= "Василий";

$c = count($arr);

/*for($i=0; $i<$c; $i++){
    
    echo $arr[$i].BR;
    
}*/

for($i=0; $i<count($arr); $i++){
    
   if ($arr[$i] != null) echo "<li>".$arr[$i].BR;
    else "No";
}
echo BR;

    ?></ul>


<?
$fly = array ("f1" => "Муха африканская", "f2" => "Муха цеце", "f3" => "Зелёная муха");
$elephant = ["Индийский слон", "Африканский слон"];
$elefly = $elephant + $fly;
$flyphant = $fly + $elephant;
print_r($elefly).BR;
var_dump($flyphant).BR;
echo BR;
//Косвенный перебор массива
for(end($fly); $k=key($fly); prev($fly)){
    
    echo BR."{$fly[$k]} опасна!";
};
echo BR;
//Прямой старый способ перебора массива
for(reset($elephant); list($k,$v) = each($elephant); ){
    
    echo BR."{$elephant[$k]} дружелюбен!";
}
echo BR;
foreach($fly as $key => &$val){
    $val = $val.".";
    echo $val.BR;
}
echo BR;
echo BR.reset($elephant);
echo BR.next($elephant);
echo BR.current($elephant);
list($name,$surname,$age) = $girl;

$data = "31|11|2015";
$d = explode("|", $data, 3);
list($day, $month, $years) = $d;
echo $day;
echo $month;
echo $years;
echo BR;
$imp = implode(" ", $fly);
echo $imp;echo BR;
$phone = [923,961,3852,495];
$a = serialize($phone);
echo $a;
$b = unserialize($a);
echo BR.$b[0];

?>















