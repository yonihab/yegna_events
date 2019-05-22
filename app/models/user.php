<?php

/**
* 
*/
class User
{
	private $_db = null,
			$_data,
			$_userArray,
			$_isLoggedIn = false;
	
	public function __construct()
	{
		$this->_db = DB::getInstance();

		if(!$user){
			if(Session::exists('user_id')){
				$user = Session::get('user_id');
				if($this->find($user))
				{
					$this->_isLoggedIn = true;	
				}else{
					// process logout
				}
			}
		}else{
			$this->find($user);
		}


	}

	// insert data into users table
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)){
			throw new Exception("Error While creating account..");
		}
	}

	public function find($user = null){
		if($user){
			$field = (is_numeric($user)) ? 'user_ID' : 'email';

			$data = $this->_db->get('users', array($field, '=', $user));

			if($data->count() == 1){
				$this->_data = $data->result();

				return true;
			}
		}

		return false;
	}

	public function login($email, $pass){
		// find
		$user = $this->find($email);

		if($user){
			$this->_userArray = $this->data()->fetch_array();
			if($this->_userArray['password'] === Hash::make($pass)){
				// add user to session
				Session::put('user_id', $this->_userArray['user_ID']);
				return true;
			}
		}

		return false;

	}

	public function userType(){
		return $this->_userArray['user_type'];		
	}

	public function data(){
		return $this->_data;
	}

	public function logout(){
		Session::delete('user_id');
	}

	public function isLoggedIn(){
		return $this->_isLoggedIn;
	}
}