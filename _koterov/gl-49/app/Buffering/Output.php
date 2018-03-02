<?php
	namespace Buffering;

	class Output
	{

		private static $buffers = [];
		private $level;
		private $flushed;

		public function __construct($handler = null)
		{
			$prevLevel = ob_get_level();
			self::$buffers[$prevLevel] = ob_get_contents();

			if($handler !== null)ob_start($handler,9); else ob_start();

			$this->level = ob_get_level();
		}

		public function __destruct()
		{
			if ($this->flushed) return;
			ob_end_clean();
			unset(self::$buffers[$this->level]);
		}

		public  function __toString()
		{
			if ($this->flushed) false;

			if(ob_get_level() == $this->level){
				return ob_get_contents();
			} else {
				return self::$buffers[$this->level];
			}

		}

	}