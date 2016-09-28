<?php

namespace App\Module\Base\Presenters;


use Nette;

/**
 * Class BasePresenter
 * @package App\Module\Admin
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	use \Nextras\Application\UI\SecuredLinksPresenterTrait;
}