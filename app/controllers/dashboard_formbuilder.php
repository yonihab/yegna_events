<?php

class Dashboard_formbuilder extends Controller
{
	
	public function index(){
		// check if user is logged in
		$user = self::model('user');;

		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login');
		}

		self::view('dashboard/formbuilder', $user->data()->fetch_array());
	}
	
}