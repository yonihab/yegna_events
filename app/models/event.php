<?php

/**
* 
*/
class Event 
{
	private $_db,
			$_data;

	
	public function __construct()
	{
		$this->_db = DB::getInstance();
	}

	// insert data into event table
	public function create($fields = array())
	{
		if(!$this->_db->insert('event', $fields)){
			throw new Exception("Error While creating an event..");
		}
	}

	public function find($userid = null){
		if($userid){
			$field = 'user_ID';

			$data = $this->_db->get('event', array('user_ID', '=', $userid));

			if(!$data->error()){
				$this->_data = $data->result();
				return true;
			}
		}

		return false;
	}

	public function data(){
		return $this->_data->fetch_all();
	}
}