<?php

class Dashboard_event extends Controller
{
	
	public function show($param){
		// check if user is logged in
		$user = self::model('user');;

		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login');
		}

		self::view('dashboard/event', $user->data()->fetch_array());
	}
	
}