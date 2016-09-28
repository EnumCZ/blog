<?php

namespace App\Module\Frontend\Presenters;

use App\Model\Repository\Posts;

class SearchPresenter extends \App\Module\Base\Presenters\BasePresenter
{

	/**
	* @inject
	* @var Posts
	*/
	public $posts;
	
	
	public function renderDefault($word)
	{
		$this->template->posts = $this->posts->postLike($word);
	}
	
}