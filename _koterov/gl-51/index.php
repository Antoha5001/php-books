<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<script src="jquery.min.js"></script>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, cumque dolorem eius fuga fugit ipsa libero optio recusandae voluptatem voluptates! Eligendi esse, fuga illo mollitia numquam quas ratione repudiandae! Ab alias aliquam assumenda aut beatae dolore error fuga inventore ipsa ipsum molestias nam necessitatibus neque, nesciunt nostrum possimus quae quaerat quas quidem quis, quos recusandae rerum saepe soluta temporibus tenetur veniam voluptatibus? Consequuntur deleniti, dolorem ea earum expedita ipsum itaque molestiae pariatur quibusdam rem, similique voluptates. Atque, dolore doloribus eligendi ex facere harum hic itaque minus odio perferendis quasi recusandae reprehenderit repudiandae similique sunt veniam voluptates voluptatum! Quasi, quidem, veritatis.</p>

<div id="result"></div>

<script>

	$(function () {

		var p = $('p');

		p.css({'color' : 'red','cursor':'pointer'});

		var a = p.css('color');

		p.on('click', function () {

			if(p.css('color') == "rgb(255, 0, 0)"){
				p.css('color','blue');
			} else {

				p.css('color','red');
			}
		});



		$('#result').html(a);
	});
</script>
</body>
</html>

