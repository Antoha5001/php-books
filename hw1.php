<?
include("lib.php");


//Функция, принимающая массив строк и выводящая каждую строку в отдельном параграфе. 

$arr1 = ["Первый параграф","Второй параграф","Третий параграф"];
function getPar($p){
  foreach($p as $v)  
    echo "<p>".$v."</p>";
};


getPar($arr1);

/*Функция, принимающая 2 параметра  - массив чисел и строку, обозначающую                    
арифметическое действие, которое нужно выполнить со всеми элементами                
массива. Функция должна выводить результат на экран.  */
echo BR;
$arr2 = [28,750,973];
$ard = "*";

function getNum($arr2, $ard){
    
};


/*Функция, принимающая переменное число аргументов, но первым аргументов                
обязательно должна быть строка, обозначающее арифметическое действие,              
которое необходимо выполнить со всеми передаваемыми аргументами.*/


/*Функция принимающая два параметра ­ 2 целых числа. Если вводятся не 2 целых                          
числа ­ то функция должна выводить ошибку на экран. Если пользователь вводит 2                          
целых числа ­ то ему должна отрисовываться таблица умножение размером со                      
значения параметров, переданных функции. Например, если вызовем нашу                
функцию таким образом ​ tabl​ (4,3), то функция нарисует следующую таблицу*/




/*Функция, принимающая в качестве аргумента массив чисел вида: 1, 22, 5, 66, 3, 57                            
и возвращает массив по возрастанию: 1, 3, 5, 22, 57, 66 */



/*Рекурсивную функцию, принимающую два целых числа ­ начальное значение и                    
конечное значение. Например, первый аргумент 10, второй ­ 35. Функция должна                      
вывести на список нечетных чисел от 10 до 35. */


/*Функция, получающая 1 параметр (строку) и возвращающая TRUE ­ если строка                      
является палиндромом, FALSE ­ в противном случае. */










?>