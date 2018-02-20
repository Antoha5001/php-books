<?php
	/**
	 * Created by PhpStorm.
	 * User: Антон
	 * Date: 17.02.2018
	 * Time: 18:10
	 */

	namespace ISPager;


	class ItemsRange extends View
	{
		public function range($first, $second) {
			return "[{$first}-{$second}]";
		}

		public function render(Pager $pager) {
			$this->pager = $pager;

			$return_page = "";

			$curent_page = $this->pager->getCurentPage();

			$total_page = $this->pager->getPagesCount();

			if ($curent_page - $this->pager->getVisibleLinkCount() > 1) {
				$range = $this->range(1, $this->pager->getItemsPerPage());
				$return_page .= $this->link($range, 1) . " ... ";

				$init = $curent_page - $this->pager->getItemsPerPage();

				for ($i = $init; $i < $curent_page; $i++) {
					$range = $this->range(
						(($i - 1) * $this->pager->getItemsPerPage() + 1),
						$i * $this->pager->getItemsPerPage()
					);

					$return_page .= " " . $this->link($range, $i) . " ";

				}
			} else {
				for ($i = 1; $i < $curent_page; $i++) {
					$range = $this->range(
						(($i - 1) * $this->pager->getItemsPerPage() + 1),
						$i * $this->pager->getItemsPerPage()
					);
					$return_page .= " " . $this->link($range, $i) . " ";

				}
			}

			if ($curent_page + $this->pager->getVisibleLinkCount() < $total_page) {
				$cond = $curent_page + $this->pager->getVisibleLinkCount();
				for ($i = $curent_page; $i < $cond; $i++) {
					if ($curent_page == $i) {
						$return_page .= " " . $this->range(
								($i - 1) * $this->pager->getItemsPerPage() + 1,
								$i * $this->pager->getItemsPerPage()
							) . " ";
					} else {
						$range = $this->range(
							($i - 1) * $this->pager->getItemsPerPage() + 1,
							$i * $this->pager->getItemsPerPage()
						);
						$return_page = " " . $this->link($range, $i) . " ";
					}
				}
				$range = $this->range(
					($total_page - 1) * $this->pager->getItemsPerPage() + 1,
					$this->pager->getItemsCount()
				);

				$return_page .= " ... " . $this->link($range, $total_page) . " ";

			} else {
				for ($i = $curent_page; $i <= $total_page; $i++) {
					if ($total_page == $i) {
						if ($curent_page == $i) {
							$return_page .= " " . $this->range(
									($i - 1) * $this->pager->getItemsPerPage() + 1,
									$this->pager->getItemsCount()). " ";
						} else {
							$range = $this->range(
								($i - 1) * $this->pager->getItemsPerPage() + 1,
								$this->pager->getItemsCount()
							);
							$return_page .= " ".$this->link($range,$i)." ";
						}
					} else {
						if($curent_page == $i) {
							$return_page .= " ".$this->range(
									(($i - 1) * $this->pager->getItemsPerPage() + 1),
									$i * $this->pager->getItemsPerPage())." ";
						} else {
							$range = $this->range(
								(($i - 1) * $this->pager->getItemsPerPage() + 1),
								($i * $this->pager->getItemsPerPage()));
							$return_page .= " ".$this->link($range, $i)." ";
						}
					}
				}
			}
			return $return_page;
		}
	}