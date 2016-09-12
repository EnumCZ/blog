<?php

namespace App\Presenters;

use App\Model\Repository\Posts;

class SearchPresenter extends BasePresenter
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