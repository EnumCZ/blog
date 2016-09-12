<?php

namespace Component;

use \Nette\Application\UI\Form;
use Nette\Security\Passwords;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;
use App\Model\Entity\User;


class RegisterForm extends \Nette\Application\UI\Control
{

	/**
	* @inject
	* @var EntityManager 
	*/
	private $em;


	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}


	public function render() 
	{
		$this->template->setFile(__DIR__ . '/registerForm.latte');
		$this->template->render();
	}


	protected function createComponentRegisterForm() 
	{
		$form = new Form;

		$roles = ['admin' => 'admin'];

		$form->addText('username', 'Jméno:')
			->setRequired();
		$form->addSelect('role', 'Role:', $roles)
    		->setPrompt('Zvolte roli:')
    		->setRequired();
		$form->addPassword('password', 'Heslo:')
			->setRequired();
		$form->addPassword('password_verify', 'Heslo znovu:')
			->setRequired()
			->addRule(Form::EQUAL, 'Hesla se musí shodovat', $form['password']);
		$form->addSubmit('send', 'Přidat');

		$form->addProtection();

		$form->onSuccess[] = [$this, 'registerFormSucceeded'];

		return $form;
	}


	public function registerFormSucceeded($form, $values) 
	{
		$user = new User;

		$user->username = $values->username;
		$user->role = $values->role;
		$user->password = Passwords::hash($values->password);

		$this->em->persist($user);
		$this->em->flush();
	}
}


interface IRegisterFormFactory
{
	/**
	* @return RegisterForm 
	*/
	public function create();
}