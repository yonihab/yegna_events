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

		if($event->findByUser($data['userData']['user_ID'])){
			$data['eventData'] = $event->data();
		}


		self::view('dashboard/index', $data);
	}
	
}