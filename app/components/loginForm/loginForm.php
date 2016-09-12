<?php

namespace Component;


use Nette\Application\UI\Form;


class LoginForm extends \Nette\Application\UI\Control
{
	public $onLogin = [];

	/**
	* @var \Nette\Security\User
	*/
	private $user;


	public function __construct(\Nette\Security\User $user) 
	{
		$this->user = $user;
	}


	public function render() 
	{
		$this->template->setFile(__DIR__ . '/loginForm.latte');
		$this->template->render();
	}


	protected function createComponentLoginForm() {
		$form = new Form;

		$form->addText('username', 'Jméno:')
			->setRequired();
		$form->addPassword('password', 'Heslo:')
			->setRequired();
		$form->addSubmit('send', 'Přihlásit');

		$form->addProtection();

		$form->onSuccess[] = [$this, 'loginFormSucceeded'];

		return $form;
	}


	public function loginFormSucceeded($form, $values) 
	{
		$this->user->login($values->username, $values->password);
		$this->onLogin();
	}
}


interface ILoginFormFactory
{
	/**
	* @return LoginForm 
	*/
	public function create();
}