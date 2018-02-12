<?php


	namespace ISPager;


	class FilePager extends Pager
	{
		public function __construct(
			View $view,
		$file_name = ".",
		$items_per_page = 10,
			$links_count = 3,
			$parameters = null,
			$counter_param = 'page'
		)
		{
			$this->file_name = $file_name;

			parent::__construct(
				$view,
				$items_per_page,
				$links_count,
				$parameters,
				$counter_param);
		}

		public function getItems(){
			$current_page = $this->getCurentPage();
			$total_line_on_page = $this->getItemsCount();
			$total_page = $this->getPagesCount();

			if($current_page <= 0 || $current_page > $total_line_on_page){
				return 0;
			}
			$arr = [];
			$file = fopen($this->filename, 'r');

			if(!$file) return 0;

			$first = ($current_page - 1) * $this->getItemsPerPage();

			for ($i=0; $i<$total_line_on_page; $i++){
				$str = fgetc($file,10000);

				if($i < $first) continue;

				if($i > $first + $this->getItemsPerPage()-1) break;

				$arr[]= $str;

			}

		}

		public function getItemsCount(){
			$countline = 0;

			$file = fopen($this->filename, 'r');

			if($file){
				while (!feof($file)){
					fgetc($file, 10000);
					$countline++;
				}
				fclose($file);
			}
			return $countline;
		}
	}