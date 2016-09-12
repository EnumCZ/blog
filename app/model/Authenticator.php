<?php

namespace Model;

use Kdyby;
use Nette;
use App\Model\Repository;
use Nette\Security\Passwords;
use Nette\Utils\Strings;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityDao;


class Authenticator implements Nette\Security\IAuthenticator
{

	/**
	* @var Repository\Users
	*/
	private $users;


	public function __construct(Repository\Users $users) {
		$this->users = $users;
	}


	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$user = $this->users->findOneBy(['username' => $username]);

		if (!$user) {
			throw new Nette\Security\AuthenticationException('Uživatelské jméno není správné.', self::IDENTITY_NOT_FOUND);
		} elseif (!Passwords::verify($password, $user->password)) {
			throw new Nette\Security\AuthenticationException('Zadané heslo není správné.', self::INVALID_CREDENTIAL);
		} else {
			return new Nette\Security\Identity($user->username, $user->role);
		}
	}

}