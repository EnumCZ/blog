<?php

namespace App\Presenters;

use Nette;
use App\Model;
use IPub\VisualPaginator\Components as VisualPaginator;
use \Nette\Application\UI\Form;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter

{
	use \Nextras\Application\UI\SecuredLinksPresenterTrait;


	protected function createComponentVisualPaginator() 
	{

        // Init visual paginator
        $control = new VisualPaginator\Control;
        // použít šablonu pro bootstrap
        $control->setTemplateFile('bootstrap.latte');
        // vypnout Ajax
        $control->disableAjax();

        return $control;
        
    }


    public function createComponentSearchForm()
	{
		$form = new Form;

		$form->addText('search');
		$form->addSubmit('send', 'Hledat');

		$form->onSuccess[] = [$this, 'searchFormSucceeded'];

		return $form;
	}


	public function searchFormSucceeded($form, $values)
	{
		$this->redirect('Search:default', $values->search);
	}

}
