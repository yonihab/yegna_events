<?php

class Dashboard_event extends Controller
{
	public $data = array();
	
	public function edit($param){
		// check if user is logged in
		$user = self::model('user');;

		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login');
		}

		$data['userData'] = $user->data()->fetch_array();

		$event = self::model('event');

		if($event->find($param[0])){
			$data['eventData'] = $event->data();
		}



		self::view('dashboard/event', $data);
	}
	
}