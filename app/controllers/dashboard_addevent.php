<?php

class Dashboard_AddEvent extends Controller
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

		if (Input::exists()) {
			$validate = new Validate();

			$validation = $validate->check($_POST, array(
				'event_name' => array(
					'display' => 'Event Name',
					'required' => true,
					'min' => 8
				),
				'event_description' => array(
					'display' => 'Event Description',
					'required' => true),
				'event_start_date' => array(
					'display' => 'Event Start Date',
					'required' => true),
				'event_end_date' => array(
					'display' => 'Event End Date',
					'required' => true),
				'event_type' => array(
					'display' => 'Event Type',
					'required' => true),
			));

			if($validation->passed()){
				$event = self::model('event');
				
				try{
					
					$event->create(array(
						'user_ID' => $data['userData']['user_ID'],
						'name' => Input::get('event_name'),
						'description' => Input::get('event_description'),
						'start_date' => Input::get('event_start_date'),
						'start_hour' => Input::get('event_start_hour'),
						'end_date' => Input::get('event_end_date'),
						'end_hour' => Input::get('event_end_hour'),
						'address' => Input::get('event_address'),
						'venue' => Input::get('event_venue'),
						'type' => Input::get('event_type')
					));
				}catch(Exception $e){
					$e->getMessage();
				}
				
				Session::flash('event_success', 'You have successfully added an event!');
				Redirect::to('dashboard');

			}else{

				$data['errors'] = $validation->errors();
			}

		}


		self::view('dashboard/addevent', $data);
	}
	
}