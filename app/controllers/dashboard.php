<?php

class Dashboard extends Controller
{
	public $data = array();
	
	public function index(){
		// check if user is logged in
		$user = self::model('user');;

		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login');
		}
		// data related to user
		$data['userData'] = $user->data()->fetch_array();

		$event = self::model('event');

		if($event->find($data['userData']['user_ID'])){
			$data['eventData'] = $event->data();

			//print_r($event->data()->fetch_all());
		}


		self::view('dashboard/index', $data);
	}
	
}