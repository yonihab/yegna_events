<?php

class Controller 
{

	public static function model($model){

		if (file_exists('app/models/' . $model . '.php')) {
			require_once 'app/models/' . $model . '.php';
			
			return new $model();
		}


		
	}


	public static function view($view, $data = []){

		require_once 'app/views/'. $view . '.php';

	}
}