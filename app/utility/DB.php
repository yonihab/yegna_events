<?php

/**
* Mysqli Database wrapper
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
	 /**
     * getInstance: makes sure database connction is made only once through out the app
     * @access public
     * @return database instance
     */

	public static function getInstance(){

		if(!isset(self::$_instance)){
			self::$_instance = new DB();
		}

		return self::$_instance;

	}

	 /**
     * query: returns a database mysqli return object if the query went all well
     * or assign the error variable true if there is an error
     * @access public
     * @param string $sql
     * @return database object
     */

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


	public function action($action, $table, $where = array())
	{

		if(count($where) == 3){

			if($where[1] == 'all'){
				
				$sql = "{$action} FROM {$table}";
				$this->query($sql);

				if(!$this->error()){

					return $this;
				}

			}


			$oprators = array('<', '>', '=', '>=', '<=');

			$field = $where[0];
			$oprator = $where[1];
			$value = $where[2];

			if(in_array($oprator, $oprators)){
				$sql = "{$action} FROM {$table} WHERE `{$field}` {$oprator} '{$value}'";

				$this->query($sql);

				if(!$this->error()){
					
					return $this;
				}

			}
		}

		return false;

	}

	public function get($table, $where)
	{
		return $this->action('SELECT *', $table, $where);
	}

	public function getAll($table)
	{
		return $this->action('SELECT *', $table, array('all', 'all', 'all'));
	}

	public function delete($table, $where)
	{
		return $this->action('DELETE', $table, $where);	
	}

	// insert


	public function insert($table, $fields)
	{
		if(count($fields)){
			$keys = array_keys($fields);
			$values = '';
			$x = 1;

			foreach($fields as $field){
				$values .= $field;

				if($x < count($fields)){
					$values .= '\', \'';
				} 

				$x++;
			}

			$sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ('{$values}');";
			
			$this->query($sql);

			if(!$this->error()){
				return true;
			}


		}

		return false;


	}	
	// update
	public function update($table, $where = array(), $fields){
		$set = '';
		$x = 1;

		foreach ($fields as $name => $value) {
			$set .= "`{$name}` = '{$value}'";

			if($x < count($fields)){
				$set .= ', ';
			}
			$x++;
		}

		$oprators = array('<', '>', '=', '>=', '<=');

		$field = $where[0];
		$oprator = $where[1];
		$value = $where[2];

		if(in_array($oprator, $oprators)){
			$sql = "UPDATE `{$table}` SET {$set} WHERE {$field} {$oprator} {$value}";
			echo $sql;
			$this->query($sql);

			if(!$this->error()){
				
				return true;
			}
		}

		return false;

	}



	public function result(){
		return $this->_result;
	}

	public function count(){
		return $this->_count;
	}

	public function error(){
		return $this->_error;
	}



}