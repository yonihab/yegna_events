<?php

/**
* Database wrapper
*/
class DB 
{
	private static $_instance = null;

	private $_mysqli,
			$_result,
			$_query,
			$_count = 0,
			$_error = false;
	
	private function __construct()
	{
		$this->_mysqli = new mysqli(Config::get('mysqli/host'),Config::get('mysqli/username'),Config::get('mysqli/password'),Config::get('mysqli/db'));
		
		if ($this->_mysqli->connect_error > 0) {

			die('unable to conncet to db :' . $this->_mysqli->connect_error);
		}

	}

	public static function getInstance(){

		if(!isset(self::$_instance)){
			self::$_instance = new DB();
		}

		return self::$_instance;

	}

	public function query($sql){
		$this->_error = false;

		$result = $this->_mysqli->query($sql);

		if(!$result){
			$this->_error = true;
		}else{
			$this->_result = $result;
			$this->_count  = $result->num_rows;
		}

		// return $this for the function to be chained
		return $this;

	}

	public function result(){
		return $this->_result->fetch_assoc();
	}

	public function count(){
		return $this->_count;
	}

	public function error(){
		return $this->_error;
	}



}