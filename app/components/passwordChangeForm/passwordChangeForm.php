<?php

namespace Component;


use \Nette\Application\UI\Form;
use Nette\Security\Passwords;
use Kdyby\Doctrine\EntityManager;
use App\Model\Entity\User;


class PasswordChangeForm extends \Nette\Application\UI\Control
{

	/**
	* @var User 
	*/
	private $user;

	/**
	* @var EntityManager
	*/
	private $em;


	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}


	public function setUser(User $user)
	{
		$this->user = $user;
	}


	public function render() {
		$this->template->setFile(__DIR__ . '/passwordChangeForm.latte');
		$this->template->render();
	}


	protected function createComponentPasswordChangeForm() 
	{
		$form = new Form;

		$form->addPassword('old_password', 'Staré heslo:')
			->setRequired();
		$form->addPassword('new_password', 'Nové heslo:')
			->setRequired();
		$form->addPassword('new_password_verify', 'Nové heslo znovu:')
			->setRequired()
			->addRule(Form::EQUAL, 'Hesla se musí shodovat', $form['new_password']);
		$form->addSubmit('send', 'Uložit změny');

		$form->onSuccess[] = [$this, 'changePasswordFormSucceeded'];

		return $form;
	}

	public function changePasswordFormSucceeded($form, $values) 
	{
		if(Passwords::verify($values->old_password, $this->user->password)) {
			
			$this->user->password = Passwords::hash($values->new_password);
			$this->em->flush();

		} else {
			$form->addError('Nesprávné heslo');
		}
	}
}


interface IPasswordChangeFormFactory
{
	/**
	* @return PasswordChangeForm
	*/
	public function create();
}