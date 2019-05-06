<?php

/**
* 
*/
class User
{
	private $_db = null;
	
	public function __construct()
	{
		$this->_db = DB::getInstance();
	}

	// insert data into users table
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)){
			throw new Exception("Error While creating account..");
		}
	}
}