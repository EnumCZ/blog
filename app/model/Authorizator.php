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
		$acl->addRole('admin', 'guest');

		// zdroje
		$acl->addResource('Admin');

		// pravidla
		$acl->allow('admin', Permission::ALL, Permission::ALL);

		$this->acl = $acl;
	}

	public function isAllowed($role, $resource, $privilege)
	{
		return $this->acl->isAllowed($role, $resource, $privilege);
	}

}