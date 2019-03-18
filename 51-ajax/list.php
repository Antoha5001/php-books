<?php
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<button>Дата</button>

<?php
$querry = "select * from users";
$users = $pdo->query($querry);


try {
    if($users){
        echo "<div class='jumbotron'>";
        while ($user = $users->fetch()){

            echo "<div><a href='#' data-id='{$user["id"]}'>".$user["name"]."</a></div>";
        }

        echo "</div>";
    }

} catch (PDOException $e){
    echo "Ошибка";
}


?>
<p class="info"></p>
<script src="../_libs/jquery.min.js"></script>
<script>
    (function () {

        window.addEventListener('DOMContentLoaded', init);


        function init() {
            $('.jumbotron > div > a').on('click', function () {
                var url = "user.php?id="+ this.getAttribute('data-id');

                $.ajax({
                    url: encodeURI(url)
                    }
                ).done(function (data) {
                    document.querySelector('.info').innerHTML = data;
                });
            })
        }

    })();
</script>
</body>
</html>