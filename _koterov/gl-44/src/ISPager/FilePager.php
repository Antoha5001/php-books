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

		}
		public function getItemsCount(){

		}
	}