<?php
	/**
	 * Created by PhpStorm.
	 * User: Антон
	 * Date: 11.02.2018
	 * Time: 17:37
	 */

	namespace ISPager;


	class PageList extends View
	{
		public function render(Pager $pager) {
			$this->pager=$pager;

			$return_page = "";

			$curent_page = $this->pager->getCurentPage();

			$total_pages = $this->pager->getPagesCount();

			$return_page .= $this->link(' &lt;&lt; ',1);

			if($curent_page != 1){
				$return_page .= $this->link(' &lt; ',$curent_page-1)." ... ";
			}

			if($curent_page > $this->pager->getVisibleLinkCount()+1){
				$init = $curent_page - $this->pager->getVisibleLinkCount();
				for($i = $init; $i < $curent_page; $i++) {
					$return_page .= $this->link($i, $i)." ";
				}
			} else {
				for($i = 1; $i < $curent_page; $i++) {
					$return_page .= $this->link($i, $i)." ";
				}
			}
			// Выводим текущий элемент
			$return_page .= "$i ";
// Выводим следующие элементы
			if($curent_page + $this->pager->getVisibleLinkCount() < $total_pages)
			{
				$cond = $curent_page + $this->pager->getVisibleLinkCount();
				for($i = $curent_page + 1; $i <= $cond; $i++) {
					$return_page .= $this->link($i, $i)." ";
				}
			} else {
				for($i = $curent_page + 1; $i <= $total_pages; $i++) {
					$return_page .= $this->link($i, $i)." ";
				}
			}
// Выводим ссылку вперед, если это не последняя страница
			if($curent_page != $total_pages) {
				$return_page .= " ... ".$this->link(' &gt; ', $curent_page + 1);
			}
			// Ссылка на последнюю страницу
			$return_page .= " ... ".$this->link(' &gt;&gt; ', $total_pages);
			return $return_page;
		}
	}