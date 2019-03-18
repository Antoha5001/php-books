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
<p class="info"></p>
<script src="../_libs/jquery.min.js"></script>
<script>
    (function () {

        window.addEventListener('DOMContentLoaded', init);


        function init() {
           $('button').on('click',function (e) {
        $('.info').load('script/date.php');
           });
        }

    })();
</script>
</body>
</html>