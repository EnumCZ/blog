<?php

namespace Model;

use Nette;
use Nette\Security\Permission;


class Authorizator implements Nette\Security\IAuthorizator
{

	private $acl;

	public function __construct()
	{
		$acl = new Nette\Security\Permission();

		// role
		$acl->addRole('guest');
		$acl->addRole('publisher', 'guest'); // publisher dědí od guest
		$acl->addRole('admin', 'publisher'); // a od něj dědí admin

		// zdroje
		$acl->addResource('Admin');
		$acl->addResource('Post');
		$acl->addResource('Comment');

		// pravidla
		$acl->allow('publisher', 'Post', 'create');
		$acl->allow('admin', Permission::ALL, Permission::ALL);

		$this->acl = $acl;
	}

	public function isAllowed($role, $resource, $privilege)
	{
		return $this->acl->isAllowed($role, $resource, $privilege);
	}

}