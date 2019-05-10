<?php

/**
* 
*/
class LogIn extends Controller
{
	
	public function index(){
		// check if post is submitted or user alerdy existes in session
		if (Input::exists()) {
			$validate = new Validate();

			$validation = $validate->check($_POST, array(
				'email' => array(
					'display' => 'Email',
					'required' => true),
				'password' => array(
					'display' => 'Password',
					'required' => true)
			));

			if($validation->passed()){

				$user = self::model('user');

				$login = $user->login(Input::get('email'), Input::get('password'));

				if($login){
					// check user type 
					Redirect::to('home');
				}else{
					$error = array('Login falid! Please provide the correct email and password.');
					self::view('login/index', $error);
				}


			}else{

				$error = $validation->errors();
				self::view('login/index', $error);
			}
		}
		self::view('login/index');
	}
}