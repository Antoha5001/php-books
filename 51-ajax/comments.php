<?php
//require_once("connect.php");
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
<div id="info">
    <?php
    require_once "addcom.php";
    ?>
</div>
<div id="form">
    <p>
        <span class="ttl">Автор:</span>
        <span class="fld">
            <input type="text" id="nickname">
        </span>
    </p>
    <p>
        <span class="ttl">Сообщение:</span>
        <span class="fld">
            <textarea rows="5" type="text" id="content"></textarea>
        </span>
    </p>
    <p>
        <span class="ttl">&nbsp;</span>
        <span class="fld">
            <input type="submit" id="submit-id" value="отправить">
        </span>
    </p>
</div>
<p class="error" style="color: red;"></p>

<script src="../_libs/jquery.min.js"></script>
<script>
    (function () {

        window.addEventListener('DOMContentLoaded', init);


        function init() {
            $("#submit-id").on('click',function (e) {
                if($.trim($("#nickname").val()) === ""){
                    alert("Не ввели данные в поле автор");
                    return false;
                }
                if($.trim($("#content").val()) === ""){
                    alert("Не ввели данные в поле комментарий");
                    return false;
                }

                $("#submit-id").prop('disabled', true);

                $.ajax({
                    url: "addcom.php",
                    method: "post",
                    data: {
                        nickname: $("#nickname").val(),
                        content: $("#content").val()
                    }
                }).done(function (data) {
                    $("#info").html(data);
                    $("#submit-id").prop('disabled', false);
                });
            });
        }

    })();
</script>
</body>
</html>