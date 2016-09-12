<?php

namespace App\Presenters;

use Nette;
use App\Model\Repository;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;


class HomepagePresenter extends BasePresenter
{
	
	/**
	* @inject
	* @var Repository\Posts 
	*/
	public $posts;
	

	public function renderDefault()
	{

		$posts = $this->posts->findAll();

        $visualPaginator = $this['visualPaginator'];
        $paginator = $visualPaginator->getPaginator();
        $paginator->itemsPerPage = 5;
        $paginator->itemCount = count($posts);

        $posts = $this->posts->findBy(array(), ['date' => 'DESC'], $paginator->itemsPerPage, $paginator->offset);

        $this->template->posts = $posts;

	}
}
