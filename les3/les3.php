<style>
    .input{
        margin: 0 0 10px;
        
    }
    p{
        font-weight: bold;
    }
    li{
        list-style: none;
    }
</style>
<?php
include("../lib.php");
getTitle("Работа с формами");
getTitle("Форма Get",2);
?><form action="" method="get">
   <label for="name">Имя</label>
    <input name ="name" type="text" value="Имя">
    <input name ="pass" type="password">
    <input type="submit">
</form>
<?php
$a = $_POST["name"];
echo $a;
echo BR;
getTitle("Форма Post",2);
?>
<form action="post.php" method="post">
    <div class ="input">
        <label for="firstname">Имя</label>
        <input type="text" name = "firstname">      
    </div>
    <div class ="input">
        <label for="lastname">Фамилия</label>
        <input type="text" name = "lastname">
    </div>
    <div class ="input">
        <label for="patronomyc">Отчество</label>
        <input type="text" name = "patronomyc">
    </div>  
    <div>
       <p>Ваш пол</p>
        <div class ="input">
            <label for="male">Мужской</label>
            <input type="radio" name = "sex" value="male" id="male">
        </div>  
        <div class ="input">
            <label for="female">Женский</label>
            <input type="radio" name = "sex" value="female" id="female">
        </div> 
    </div> 
    <div>
       <p>Ваши увлечения</p>
       <ul>
           <li>
               <label for="programism">Программирование</label>
               <input type="checkbox" name ="hobbies[]" value ="programism" id="programism">
           </li>
           <li>
               <label for="dancing">Танцы</label>
               <input type="checkbox" name ="hobbies[]" value ="dancing" id="dancing">
           </li>
           <li>
               <label for="reading">Чтение</label>
               <input type="checkbox" name ="hobbies[]" value ="reading" id="reading">
           </li>
           <li>
               <label for="sport">Занятие спортом</label>
               <input type="checkbox" name ="hobbies[]" value ="sport" id="sport">
           </li>
           <li>
               <label for="films">Просмотр фильмов</label>
               <input type="checkbox" name ="hobbies[]" value ="films" id="films">
           </li>
       </ul>
    </div>
    
    <input type="submit">
</form>    














