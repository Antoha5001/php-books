<!DOCTYPE html>
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
<div class="container">
    <h1> Landing Page</h1>
    <p></p>
</div>
<script src="../_libs/jquery.min.js"></script>
<script>
    (function () {

        window.addEventListener('DOMContentLoaded', init);


        function init() {

            const h1 = $('h1'),
            p = $('p');
            h1.css({'color':'red', 'cursor': 'pointer'});
            h1.click(function (e) {
                p.html('Произошел клик по заголовку');
            });

        }

    })();
</script>
</body>
</html>