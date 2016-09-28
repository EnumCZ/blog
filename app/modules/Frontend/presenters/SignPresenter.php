<?php

namespace App\Module\Frontend\Presenters;

use Nette;
use Nette\Application\UI\Form;


class SignPresenter extends \App\Module\Base\Presenters\BasePresenter
{

	/**
	* @persistent 
	*/
	public $backlink = NULL;


	/**
	* @inject
	* @var \Component\ILoginFormFactory
	*/
	public $loginForm;


	public function actionOut()
	{
		$this->getUser()->logout();
		$this->redirect('Homepage:default');
	}


	protected function createComponentLoginForm()
	{
		$user = $this->getUser();

		$form = $this->loginForm->create();

		$form->onLogin[] = function () {
			if($this->backlink) {
            	$this->restoreRequest($this->backlink);
			} else {
				$this->redirect(':Admin:Admin:default');
			}
        };

		return $form;
	}

}
