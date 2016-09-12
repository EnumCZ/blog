<?php

namespace App\Presenters;

use Nette;
use App\Model\Repository;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;


class PostPresenter extends BasePresenter
{

	/**
	* @inject
	* @var Repository\Posts
	*/
	public $posts;


	/**
	* @inject
	* @var Repository\Categories
	*/
	public $categories;


	public function renderArchive() 
	{
		$this->template->categories = $this->categories->findAll();
	}


	public function renderDefault($slug)
	{
		$post = $this->posts->findOneBy(['slug' => $slug]);

		if($post) {
			$this->template->post = $post;
			// Disqus url
			$this->template->url = $this->getHttpRequest()->getUrl();
		} else {
			$this->error('Článek nenalezen');
		}
	}

}
