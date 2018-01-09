<?php

	class View
	{
		protected $pages = [];
		protected $title;
		protected $body;

		public function __construct($settings) {
			$this->title = $settings['title'];
			$this->body = $settings['body'];
		}

		public function addPage($pageName, Closure $callback) {

			$this->pages[$pageName] = $callback;

		}

		public function render($pageName) {

			$this->pages[$pageName];

			$html = <<<HTML
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>{$this->title()}</title>
</head>
<body>
{$this->body()}
</body>
</html>
HTML;
			echo $html;

		}

		public function title(){
			return htmlspecialchars($this->title);
		}
		public function body(){
			return $this->body;
		}

	}

	$f = function (){
		$this->title = "Контакты";
		$this->body = "<h1>Контакты</h1>";
	};

	$f->bindTo($view);

	$view = new View([
		'title' => "Контакты",
		'body' => "<h1>Контакты</h1>"

	]);

	$view->addPage("contacts",$f);

	$view->render('contacts');
