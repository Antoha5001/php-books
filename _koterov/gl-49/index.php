<?php

	spl_autoload_register(function ($class){
		include ("app\\{$class}.php");
	});

	function inner(){
		$buf = new Buffering\Output();
		echo "Этот текст попадёт в буфер";
		return "<b>{$buf->__toString()}</b>";
		$buf = null;
	}

	$buffer = new Buffering\Output(ob_gzhandler);

	echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores blanditiis, cumque dolorem doloribus, ea esse et ipsa itaque labore non omnis, placeat quam qui quo saepe tenetur vero? Consectetur ducimus eos esse fugit illum obcaecati voluptate! A aliquam autem consectetur, cumque dolorem doloremque illo in iure modi obcaecati quam quas quasi rerum? Ad aut culpa cumque debitis, dolores esse ex modi mollitia nesciunt non odio quia reiciendis. Aliquid amet asperiores atque consequatur debitis delectus dicta dolorem doloribus ea, eos est eum fugiat, hic magnam neque, nesciunt nihil obcaecati perferendis quasi quia quod quos sequi tempora velit voluptatibus! Accusamus aliquam asperiores delectus dolores ducimus eveniet facilis fugit illo illum iste modi molestiae nam nisi nobis, officia omnis porro quo rerum sapiente tempora, ut veniam vitae. Aperiam dicta enim eum molestiae praesentium provident quam ullam! Amet dignissimos doloremque, error expedita laboriosam magnam minima odio, pariatur possimus quia, quis rem sed ullam. Beatae consequatur earum nemo nulla omnis, perspiciatis quo reiciendis. A ad amet asperiores assumenda cupiditate deleniti doloribus ducimus eum, fuga molestiae placeat repudiandae sunt veniam. Doloribus ipsam quos tempora. Doloribus illum incidunt ipsa necessitatibus numquam quod sequi similique veniam? Aut beatae blanditiis cum dolor eius explicabo fuga hic id laboriosam libero natus neque nisi odio odit officia officiis omnis perspiciatis porro, quaerat reiciendis. Accusantium aliquam atque, deleniti eaque est minima mollitia nemo non numquam omnis, quaerat quidem quo rem sunt vitae? Ad amet architecto asperiores beatae blanditiis consequatur culpa cum cumque deleniti dignissimos dolor, dolore eveniet explicabo facilis fuga illo in inventore ipsum iusto labore magnam nemo nihil omnis porro, quas reprehenderit suscipit vel veritatis, vero voluptatibus. A, ab ad alias architecto consectetur cupiditate debitis distinctio ea eos fugit hic id, illo illum necessitatibus non nostrum numquam odio quo rerum tempora unde ut vel voluptatem! Ducimus et incidunt iure obcaecati quae quod, vel. Adipisci facere in nihil porro quasi, totam velit. Asperiores consequatur deserunt facere ipsum reprehenderit sint voluptas! A adipisci alias aliquam aspernatur autem commodi corporis dolorem harum labore modi mollitia necessitatibus nisi placeat possimus unde, vel vero. Aliquid asperiores assumenda consequuntur delectus dolore, eaque exercitationem magni minima non officiis omnis quaerat, quis quisquam ratione repellendus repudiandae sapiente sit temporibus tenetur unde? Accusamus dolor, eveniet id in laborum, magnam molestiae nobis, odio quasi qui quos repellat tempora ut? A ab accusantium amet at blanditiis corporis culpa debitis deserunt dicta dolorem doloremque ea earum eum ex id, ipsa ipsam ipsum, libero, magnam molestias mollitia nam nihil nisi pariatur placeat quas quibusdam quisquam quo quos ratione repellat repudiandae rerum sunt totam vel vitae voluptates! Ab amet commodi dicta expedita illo ipsum nam neque possimus provident quidem rem, sed veniam. Accusantium alias cumque, delectus illo molestiae optio saepe tempore voluptatem voluptatibus voluptatum. Eius fugit nostrum odit officia perspiciatis. Accusamus alias, aperiam asperiores commodi consequatur consequuntur culpa est ex exercitationem iste iure necessitatibus nobis optio perspiciatis, quasi quidem, quisquam quod unde veritatis voluptatibus. Ad alias aliquid delectus deleniti, distinctio excepturi expedita in itaque laboriosam magnam omnis pariatur porro quidem quo ullam vitae voluptas.<br>";

	$formatted = inner();

	echo "Конец внешнего перехвата.";

	$text = "{$buffer->__toString()}<br>Функция вернула: \"$formatted\"";

	$buffer = null;

	echo $text;
	exit();

//	ob_get_contents();
//	ob_end_clean();
//	ob_get_contents();
//	echo ob_get_contents();

//phpinfo();