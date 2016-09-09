<?
define("BR", "<br>");


if(!function_exists('getTitle')){
  function getTitle($x,$y = 1){
    echo "<h".$y.">".$x."</h".$y.">".PHP_EOL;
  }  
}
//Делаем много отступов
function xBr($x){
  for($y = 0; $y < $x; $y++) echo BR;
}

// Распечатывает дамп переменной на экран
function dumper($obj){
    echo 
        "<p><pre>".htmlspecialchars(dumperGet($obj))."</pre></p>";
}
// Возвращает строку — дамп значения переменной в древовидной форме 
// (если это массив или объект). В переменной $leftsp хранится 
// строка с пробелами, которая будет выводиться слева от текста.
function dumperGet(&$obj, $leftsp=""){
    
   if(is_array($obj)) {
       $type = "Array[".count($obj)."]";
   } elseif (is_object($obj)){
       $type = "Object";
   } elseif (gettype($obj) == "boolean") {
     return $obj? "true" : "false";
   } else {
       return "\"$obj\"";
   }
    $buf = $type;
    $leftsp .= "   ";
    for (reset($obj); list($k,$v) = each($obj);){
        if($k === "GLOBALS") continue;
        $buf .= "\n$leftsp$k => ".dumperGet($v, $leftsp);
    }
    return $buf;
}

function translite ($st){
    
   $st = strtr($st,
"абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
"abvgdegziyklmnoprstufieABVGDEGZIYKLMNOPRSTUFIE"
);
$st = strtr($st, array(
'ё'=>"yo", 'х'=>"h", 'ц'=>"ts", 'ч'=>"ch", 'ш'=>"sh",
'щ'=>"shch", 'ъ'=>'', 'ь'=>'', 'ю'=>"yu", 'я'=>"ya",
'Ё'=>"Yo", 'Х'=>"H", 'Ц'=>"Ts", 'Ч'=>"Ch", 'Ш'=>"Sh",
'Щ'=>"Shch", 'Ъ'=>'', 'Ь'=>'', 'Ю'=>"Yu", 'Я'=>"Ya",
));
return $st;
}

?>




























