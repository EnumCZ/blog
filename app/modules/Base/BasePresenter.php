<?php

namespace App\Module\Base\Presenters;


use Nette;
use \Nette\Application\UI\Form;

/**
 * Class BasePresenter
 * @package App\Module\Admin
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	use \Nextras\Application\UI\SecuredLinksPresenterTrait;

	/**
	* @inject
	* @var 
	*/


	public function createComponentSearchForm()
	{
		$form = new Form;

		$form->addText('word')
			->setRequired();
		$form->addSubmit('send', 'Hledat');

		$form->onSuccess[] = [$this, 'searchFormSucceeded'];

		return $form;
	}


	public function searchFormSucceeded($form, $values)
	{
		$this->redirect(':Frontend:Search:default', $values->word);
	}
}