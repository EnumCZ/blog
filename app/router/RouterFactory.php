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

		$router[] = new Route('admin[/<action>[/<id>]]', [
			'module' => 'Admin',
			'presenter' => 'Admin',
			'action' => 'default',
		]);

		$router[] = new Route('about', 'Frontend:Homepage:about');
		$router[] = new Route('archive', 'Frontend:Post:archive');
		$router[] = new Route('cv', 'Frontend:Homepage:CV');

		$router[] = new Route('/', 'Frontend:Homepage:default');
		$router[] = new Route('post', 'Frontend:Post:default');
		$router[] = new Route('sign/in', 'Frontend:Sign:in');
		$router[] = new Route('sign/out', 'Frontend:Sign:out');

		//$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
