<?php
    if(!empty($_FILES)){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        exit();
    }
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        html{
            width: 100vw;
            height: 100vh;
        }
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

<form action="" enctype="multipart/form-data" method="post">
   <p><input type="file" name="filename[]">
    <input type="button" value="+">
    <input type="button" value="-"></p>
    <div> <input type="submit" value="Загрузить"></div>

</form>
<script src="../_libs/jquery.min.js"></script>
<script>
    (function () {

        window.addEventListener('DOMContentLoaded', init);


        function init() {
            const plus = $("input[type='button'][value='+']"),
                minus = $("input[type='button'][value='-']");

            console.log(plus);
            $(document).on('click', "input[type='button'][value!='-']", addField);
            $(document).on('click', "input[type='button'][value!='+']", removeField);
            // plus.on('click', addField);
            // minus.on('click', removeField);

            function  addField() {
                let pLast = $("p:last");
                pLast.clone().insertAfter(pLast);
                // console.log(this.parentElement);
                console.log(plus);
            }

            function  removeField() {
                // $("p:last").remove();
                console.log(this);
                console.log($(this));
            }
        }

    })();
</script>
</body>
</html>