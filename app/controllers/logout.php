<?php

/**
* 
*/
class Logout extends Controller
{
	
	public function index(){
		$user = self::model('user');
		$user->logout();

		Redirect::to('home');

	}
}