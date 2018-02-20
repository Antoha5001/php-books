<?php


	namespace ISPager;


	class DirPager extends Pager
	{
		public $dir_name;

		public function __construct(
			View $view,
			$dir_name = '.',
			$items_per_page = 10,
			$links_count = 2,
			$parameters = null,
			$counter_param = 'page'
		) {
			$this->dir_name = ltrim($dir_name,"/");

			parent::__construct(
				$view,
				$items_per_page,
				$links_count,
				$parameters,
				$counter_param);
		}

		public function getItemsCount() {
			$countline = 0;
			//открываем каталог
			if (($dir = opendir($this->dir_name)) !== false){
				while (($file = readdir($dir)) !== false){
					if(is_file($this->dir_name."/".$file)){
						$countline++;
					}
				}
				closedir($dir);
			}
			return $countline;
		}

		public function getItems() {

			$curent_page = $this->getCurentPage();
			$total_page = $this->getPagesCount();

			if($curent_page <= 0 || $curent_page > $total_page){
				return 0;
			}

			// Извлекаем позиции текущей страницы
			$arr = [];

			$first = ($curent_page -1) * $this->getItemsPerPage();

			if(($dir = opendir($this->dir_name)) === false){
				return 0;
			}

			$i = -1;

			while (($file = readdir($dir)) !== false){
				if(is_file($this->dir_name."/".$file)){
					$i++;
				}
				if($i < $first) continue;

				if($i > $first + $this->getItemsPerPage()-1) break;

				$arr[] = $this->dir_name."/".$file;
			}
			closedir($dir);
//			print_r($arr);
			return $arr;
		}

		public function echoItems(){
//			echo $this->dir_name;
		}

	}


