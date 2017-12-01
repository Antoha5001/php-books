<?php
/**
 * Выводит дамп массива или объекта
 *
 * Подробное описание функции: может занимать несколько строк
 * В данном случае функция принимая в качестве единственного 
 * параметра $arr массив или объект - выводит его подробную стркутуру
 * dump(['Hello', 'world', '!']);
 *
 * @param array|object $arr
 * 
 * @return void
 */
function dump($arr)
{
  echo "<pre>";
  print_r($arr);
  echo "</pre>";
}
