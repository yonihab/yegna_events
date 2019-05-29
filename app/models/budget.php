<?php

/**
* 
*/
class Budget 
{
	private $_db,
			$_data,
			$_budget_ID = null;

	
	public function __construct($budgetID = null)
	{
		$this->_db = DB::getInstance();

		if($budgetID){
			$this->_budget_ID = $budgetID;
			$this->find($budgetID);
		}

	}

	// insert data into budget table

	public function create($fields = array())
	{
		if(!$this->_db->insert('budget', $fields)){
			throw new Exception("Error While add budget..");
		}
	}

	// update data of the budget table

	public function update($budgetID, $fields = array())
	{
		if(!$this->_db->update('budget', array('budget_ID','=', $budgetID), $fields)){
			throw new Exception("Error While updating..");
		}
	}

	// find budget by event id

	public function findByEvent($eventid = null){
		if($eventid){
			$data = $this->_db->get('budget', array('event_ID', '=', $eventid));

			if(!$data->error() && ($data->count() > 0)){
				$this->_data = $data->result();
				return true;
			}
		}

		return false;
	}

	// find budget by budget id 

	public function find($budgetID = null){
		if($budgetID){

			$data = $this->_db->get('budget', array('budget_ID', '=', $budgetID));

			if(!$data->error()){
				$this->_data = $data->result();
				return true;
			}
		}

		return false;
	}

	// add budget item

	public function addBudgetItem($fields = array()){
		if(!$this->_db->insert('budget_item', $fields)){
			throw new Exception("Error While adding budget item...");
		}
	}

	// find budget items

	public function getBudgetItems($budget_ID){
		if($budget_ID){
			$data = $this->_db->getAll('budget_item', array('budget_ID', '=', $budget_ID));

			if(!$data->error()){
				return $data->result();
			}
		}

	}

	// delete budget item 

	public function deleteBudgteItem($itemID){
		if(!$this->_db->delete('budget_item', array('budget_item_ID', '=', $itemID))){
			throw new Exception("Error While deleting budget item...");
		}
	}

	public function data(){
		return $this->_data;
	}
}