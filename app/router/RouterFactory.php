<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new Route('about', 'Homepage:about');
		$router[] = new Route('archive', 'Post:archive');
		$router[] = new Route('cv', 'Homepage:CV');
		$router[] = new Route('admin[/<action>[/<id>]]', [
			'module' => 'Admin',
			'presenter' => 'Admin',
			'action' => 'default',
		]);
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
