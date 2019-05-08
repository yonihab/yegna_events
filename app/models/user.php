<?php

/**
* 
*/
class User
{
	private $_db = null,
			$_data,
			$_isLoggedIn = false;
	
	public function __construct()
	{
		$this->_db = DB::getInstance();

		if(!$user){
			if(Session::exists('user')){
				$user = Session::get('user');
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
			if($this->data()->fetch_array()['password'] === Hash::make($pass)){
				// add user to session
				Session::put('user', $this->data()->fetch_array()['user_ID']);
				return true;
			}
		}

		return false;

	}

	public function data(){
		return $this->_data;
	}

	public function isLoggedIn(){
		return $this->_isLoggedIn;
	}
}