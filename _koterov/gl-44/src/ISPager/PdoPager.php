<?php

	namespace ISPager;


	class PdoPager extends Pager
	{
		protected $pdo;
		protected $table_name;
		protected $where;
		protected $params;
		protected $order;
		protected $items_per_page = 10;

		public function __construct(
			View $view,
			$pdo,
			$table_name,
			$where = "",
			$params = [],
			$order = "",
			$items_per_page = 10,
			$links_count = 3,
			$get_params = null,
			$counter_param = "page"
		) {
			$this->pdo = $pdo;
			$this->table_name = $table_name;
			$this->where = $where;
			$this->params = $params;
			$this->order = $order;

			parent::__construct(
				$view,
				$items_per_page,
				$links_count,
				$get_params,
				$counter_param
			);

		}

		public
		function getItems() {
			$curent_page = $this->getCurentPage();

			$total_page = $this->getPagesCount();

			if($curent_page <= 0 || $curent_page > $total_page){
//				return "Вне диапазона!";
				return $this->getPagesCount();
			}
			$arr =[];

			$first_line = ($curent_page-1) * $this->getItemsPerPage();

			$query = "select * from {$this->table_name}
			{$this->where}{$this->order}
			limit $first_line, {$this->getItemsPerPage()} ";

			$tbl = $this->pdo->prepare($query);

			$tbl->execute($this->params);

			return $results = $tbl->fetchAll();

		}

		public function getItemsCount() {
			$querry = "SELECT COUNT(*) AS Total	
			FROM {$this->table_name} 
			{$this->where}";

			$total = $this->pdo->prepare($querry);

			$total->execute($this->params);

//			return $total->fetch()['total'];
			return $total->fetch()['Total'];
		}

	}