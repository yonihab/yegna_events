<?php

/**
* Main app class
*/
class App
{
	// this properties are passed through the $_GET['url'] variable and if not not passed
	// they are by defualt initiated to this datas
	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];
	
	public function __construct()
	{
		$url = $this->parseUrl();

		if (isset($url[0])) {
			// 
			$this->controller = $url[0];
			unset($url[0]);
		}
		

		if(file_exists('app/controllers/' . $this->controller . '.php')){

			require_once 'app/controllers/' . $this->controller . '.php';
			
		}else{
			// else redirect to 404
			Redirect::to('pagenotfound', true);
		}

		$this->controller = new $this->controller;

		if (isset($url[1])) 
		{
			
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);

			}else{
				// else redirect to 404
				Redirect::to('pagenotfound', true);
			}
		}else{

			if(!method_exists($this->controller, 'index')){
				// else redirect to 404
				Redirect::to('pagenotfound', true);

			}

		}

		


		// check if there is any value left in url if so rebase the array to params
		if(!empty($url)){
			// USE MERGE
			$this->params = array_values($url);
			var_dump($url);
		}else{
			$this->params = [];
		}
		//$this->params = $url ? array_values($url) : [];


		// call a function in an object and pass parameters as arrays
		call_user_func_array([$this->controller, $this->method], $this->params);


	}


	public function parseUrl()
	{
		// check if get[url] is not empty
		if(isset($_GET['url']))
		{

			// rtrime trims the trailing forward slash 
			// filter_var sanitizes the url
			// explode explodes the text by / and chnages it into array

			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

		}
	}
}