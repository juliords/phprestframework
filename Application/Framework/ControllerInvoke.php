<?php

namespace Framework;

use Framework\Router;

class ControllerInvoke
{
	public static function init($class)
	{
		$controller = new $class();

		try{
			echo $controller->handlePhpRequest();
		}
		catch(\Exception $e)
		{
			// do something

			Router::redirectRoute('login?unexpectedError');
			return true;
		}
		
		return true;
	}
}

