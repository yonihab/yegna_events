<?php

// require an initiation file to initiate the app
require_once './app/init.php';

function __autoload($className)
{
	if (file_exists('./app/utility/' . $className . '.php')) {

		require_once './app/utility/' . $className . '.php';
	}
}

$app = new App;