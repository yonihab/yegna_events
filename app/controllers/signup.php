<?php

class SignUp extends Controller
{

	public function index(){
		// check if post is submitted or user alerdy exists in session
		if (Input::exists()) {

			$validate = new Validate();

			$validation = $validate->check($_POST, array(
				'username' => array(
					'display' => 'Username',
					'required' => true,
					'min' => 3,
					'max' => 20,
					'unique' => 'users'
				),
				'fullname' => array(
					'display' => 'Full Name',
					'required' => true,
					'min' => 3,
					'max' => 20
				),
				'email' => array(
					'display' => 'Email',
					'required' => true,
					'unique' => 'users'
				),
				'password' => array(
					'display' => 'Password',
					'required' => true,
					'min' => 6,
				),
				'password_again' => array(
					'display' => 'Confirm password',
					'required' => true,
					'matches' => 'password'
				)
			));
			if($validation->passed()){

				$user = self::model('user');
				$hash = Hash::generate();
				try{
					$user->create(array(
						'username' => Input::get('username'),
						'full_name' => Input::get('fullname'),
						'email' => Input::get('email'),
						'password' => Hash::make(Input::get('password')),
						'active' => 0,
						'hash' => $hash,
						'user_type' => Input::get('user-type')

					));
				}catch(Exception $e){
					$e->getMessage();
				}

				$fullname = Input::get('fullname');

				// send email to varify account
				Mail::verify(Input::get('email'),  $fullname, $hash);

				Session::flash('varify', "Hello {$fullname}, We have sent a varification email to the email you provided. Please varify your email to use your account. Thanks!" );
				Redirect::to('verify');


				// if(Input::get('user-type') === 'event_org')
				// {

		
				// }else{
				// 	// save user and redirect to step two
				// 	$user = self::model('users');


				// }
			} else{
				$errors = $validation->errors();
				
				
				self::view('signup/index', $errors);

			}
		}

		self::view('signup/index');
	}
	public function stepOne(){
		echo 'AHA!';
	}
}