<?php

/**
 * This file extends the standard Laravel Paginator.
 *
 * @author Matt_Davis
 */
class GolfPODPaginator extends Illuminate\Pagination\BootstrapPresenter {

    /**
	 * Get the previous page pagination element.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getPrevious($text = '&larr; Prev')
	{
		// If the current page is less than or equal to one, it means we can't go any
		// further back in the pages, so we will render a disabled previous button
		// when that is the case. Otherwise, we will give it an active "status".
		if ($this->currentPage <= 1)
		{
			return $this->getDisabledTextWrapper($text);
		}
		else
		{
			$url = $this->paginator->getUrl($this->currentPage - 1);

			return $this->getPageLinkWrapper($url, $text, 'prev');
		}
	}

	/**
	 * Get the next page pagination element.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getNext($text = 'Next &rarr;')
	{
		// If the current page is greater than or equal to the last page, it means we
		// can't go any further into the pages, as we're already on this last page
		// that is available, so we will make it the "next" link style disabled.
		if ($this->currentPage >= $this->lastPage)
		{
			return $this->getDisabledTextWrapper($text);
		}
		else
		{
			$url = $this->paginator->getUrl($this->currentPage + 1);

			return $this->getPageLinkWrapper($url, $text, 'next');
		}
	}
    
    /**
	 * Get HTML wrapper for disabled text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getDisabledTextWrapper($text)
	{
		return false;
	}
}
