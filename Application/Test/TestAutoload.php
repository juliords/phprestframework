<?php

namespace Test;

chdir(dirname(__DIR__));
require 'autoload.php';

class Test
{
	public function __construct()
	{
		echo 'hi';
	}
}

new Test;

