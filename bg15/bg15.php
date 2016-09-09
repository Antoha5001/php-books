<?php

include("../lib.php");

//echo setlocale(LC_ALL,0);

getTitle("Строковые функции",1);

$yes = "Ура! ";

echo str_repeat($yes,3).BR;

$one = 1;
$zero = 0;
$chr = chr(8);
$str = sprintf("The string ends in escape: %c", 27);

if ($one == "") echo "1".BR;
if ($zero == "") echo "2".BR;
if ("" == $zero) echo "3".BR;
if ("$zero" == "") echo "4".BR;
if (strval($zero) == "") echo "5".BR;
if ($zero === "") echo "6".BR;
if (false == "") echo "Равно 0".BR;
if (false !== "") echo "Не равно 0".BR;

echo $str.BR;
echo "Символ 126 - ".chr(126).BR;
$st = "s строка с пробелами  пробелами  пробелами ф";
$st2 = " СТРока с пробелами ";
echo $st.BR;
echo trim($st).BR;
echo ltrim($st).BR;
echo rtrim($st).BR; //chop()
echo strlen($st).BR; //22

echo strpos($st, "с ").BR; //
echo strrpos($st, "с").BR; //
echo strcmp($st,$st2).BR;
echo strcasecmp($st,$st2).BR;
echo substr($st,9).BR;

echo str_replace("пробелами", "кавычками",$st).BR;
echo substr_replace($st,"ф", 6, 2).BR;
$from = ["строка","пробелами"];
$to = ["столбец","кавычками"];
echo str_replace($from,$to,$st).BR;

$ar1 = ["а" => "А","б" => "Б","в" => "В","ф" => "Ф"];

echo strtr($st, "абвгф", "АБВГФ").BR;
echo strtr($st, $ar1).BR;
echo translite($st2).BR;
echo translite("У попа была собака, он ее любил.").BR;
$name = "$&Ант%н++ ?:;ешёчто\"/нибудь,'*";
$name2 = urlencode($name);
$name3 = rawurlencode($name);
echo $name2.BR;
echo $name3.BR;

echo urldecode($name2).BR;
echo rawurldecode($name2).BR;
echo urldecode($name3).BR;
echo rawurldecode($name3).BR;
$book = [array ('name' => "Федот", "text" => " <a href=\"\"><b>Какой-то текст</b></a> ")];
echo $book['name'].BR;
foreach ($book as $k => $v){
    echo "<span>Имя: ".$v['name']."</span>".BR;
    echo "<span>Текст: ".htmlspecialchars($v['text'])."</span>".BR;
}
echo trim(strip_tags($book[0]['text'])).BR;
echo addslashes($name).BR;
echo stripslashes($name).BR;
echo strtolower($st2).BR;
echo strtoupper($st2).BR;
echo ucfirst($st).BR;

$number = 1001234.56789;

echo number_format($number,4,"_"," / ").BR;

$exp = "Какая-то/набранная/строка";
$exp = explode("/",$exp);
echo $exp[1].BR;

$str2 = "Какая-то\n\rнабранная\nстрока\n";
echo nl2br($str2);
$lor = "Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.";

//echo nl2br(wordwrap($lor,80));

function mywordwrap($text, $wrap = 60, $br = "> "){
    //echo strlen($br);
    $st = wordwrap($text, $wrap-strlen($br),"\n");
    $st = nl2br($pr.str_replace("\n",$br."\n",$st));
    
    return $st;
}

echo mywordwrap($lor).BR;

$st = "<b>Жирный</b><tt>Курсив</tt><a href = \"http://mail.ru\">Link</a>a<123>b";
echo $st.BR;
echo strip_tags($st,"<b><tt>").BR;
echo md5($lor).BR;
echo crc32($lor).BR;
echo crypt($lor).BR;
echo crypt($lor).BR;
?>















