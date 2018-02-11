<?php

	abstract class First{

		protected $first;

		public function __construct($first) {
			$this->first = $first;
		}
	}

	class Second extends First{
		public $second;

		public function __construct(
			$second, $first
		) {
			$this->second = $second;
			parent::__construct($first);
		}
	}

	$obj = new Second('value2','val1');

	print_r($obj);