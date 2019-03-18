<?php
require("connect.php");

try{
    if(!empty($_POST)){
        $error = [];

        if(empty($_POST["nickname"])){
            $error[]= "Отсутствует автор";
        }
        if(empty($_POST["content"])){
            $error[]= "Отсутствует сообщение";
        }

        if(empty($error)){
            $query = "insert into comments values 
                            (NULL,
                            :nickname,
                            :content,
                            NOW(),
                            1
                            )";
            $usr = $pdo->prepare($query);
            $usr->execute([
                'nickname' => $_POST['nickname'],
                'content' => $_POST['content']]);
        }
    }

    $query = "select * from comments where is_visible = 1 order by created_at desc";

    $comment = $pdo->query($query);
//    echo $comment->fetch()['content'];
    while ($comments = $comment->fetch()){
        $comments["nickname"] = trim(strip_tags($comments['nickname']));
        $comments["content"] = trim(strip_tags($comments['content']));

        echo "<div>";
        echo "<span class='author'>".$comments['nickname']."</span><br>";
        echo "<span class='date'>".$comments['created_at']."</span><br>";
        echo "<span class='content'>".$comments['content']."</span><br>";
        echo "</div>";
    }

} catch (PDOException $e){
    echo "Ошибка выполнения запроса: ". $e->getMessage();
}