<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;


class SignPresenter extends BasePresenter
{

	/**
	* @persistent 
	*/
	public $backlink = '';


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
            $this->restoreRequest($this->backlink);
        };

		return $form;
	}

}
