<?php

namespace App\Module\Frontend\Presenters;

use Nette;
use App\Model\Repository;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;


class HomepagePresenter extends \App\Module\Base\Presenters\BasePresenter
{
	
	/**
	* @inject
	* @var Repository\Posts 
	*/
	public $posts;
	

	public function renderDefault()
	{

		$posts = $this->posts->findAll();

        $this->template->posts = $posts;

	}
}
