<?php

class Dashboard_profile extends Controller
{
	
	public function index(){
		// check if user is logged in
		$user = self::model('user');;

		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login');
		}

		self::view('dashboard/profile', $user->data()->fetch_array());
	}
	
}