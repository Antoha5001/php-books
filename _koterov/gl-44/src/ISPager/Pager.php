<?php

	namespace ISPager;


	abstract class Pager
	{
		protected $view;
		protected $items_per_page;
		protected $links_count;
		protected $parameters;
		protected $counter_param;

		/**
		 * Pager constructor.
		 * @param View $view
		 * @param int $items_per_page
		 * @param int $links_count
		 * @param null $parameters
		 * @param string $counter_param
		 */
		public function __construct(
			View $view,
			$items_per_page = 10,
			$links_count = 3,
			$parameters = null,
			$counter_param = 'page'
		) {
			$this->view = $view;
			$this->items_per_page = $items_per_page;
			$this->links_count = $links_count;
			$this->counter_param = $counter_param;
			$this->parameters = $parameters;
		}

		abstract public function getItemsCount();
		abstract public function getItems();

		/**
		 * @return mixed
		 */
		public function getItemsPerPage() {
			return $this->items_per_page;
		}

		//количество видимых ссылок слева и справа от текущей страницы
		public function getVisibleLinkCount() {
			return $this->links_count;
		}

		/**
		 * @return mixed
		 */
		public function getParameters() {
			return $this->parameters;
		}

		/**
		 * @return mixed
		 */
		public function getCounterParam() {
			return $this->counter_param;
		}

		public function getCurrentPagePath(){
			return $_SERVER["PHP_SELF"];
		}

		/**
		 * @return int
		 */
		public function getCurentPage(){
			if(isset($_GET[$this->getCounterParam()])){
				return intval($_GET[$this->getCounterParam()]);
			} else {
				return 1;
			}
		}

		/**
		 * @return int
		 */
		public function getPagesCount(){
			$total_items = $this->getItemsCount();
//
			$result = (int) ($total_items/$this->getItemsPerPage());
			if((float) ($total_items/$this->getItemsPerPage()) - $result !=0) $result++;
			return $result;
		}
		public function render()
		{
			return $this->view->render($this);
		}
		public function __toString()
		{
			return $this->render();
		}
	}




















