<?php
	namespace webalt\core;

	class Page{
		public $name;
		public function getName(){
			echo $this -> name;
		}
		public function __construct($name){
			$this -> name = $name;

		}
	}