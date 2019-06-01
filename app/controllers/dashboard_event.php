<?php

class Dashboard_event extends Controller
{
	public $data = array();
	
	public function edit($param){
		// intiate models
		$user = self::model('user');
		$budget = self::model('budget');
		$event = self::model('event');

		// intiate validation class
		$validate = new validate();

		// check if user is logged in
		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login', true);
		}

		
		// Submited forms
		if(Input::exists()){
			if(isset($_POST['targetsubmit'])){
				// process target budget 
				$validation = $validate->check($_POST, array(
					'target_budget' => array(
						'display' => 'Target budget',
						'required' => true,
						'type' => 'number'
					)

				));

				if($budget->findByEvent($param[0])){

					$tempData = $budget->data()->fetch_array();
					
					if($validation->passed()){
						try{
							$budget->updateBudget($tempData['budget_ID'], array(
								'target_budget' => Input::get('target_budget'),
							));

						}catch (Exception $e){

							$e->getMessage();
						}

						// success message
						$data['success'] = 'Successfully added a target budget!';

					}else{
						// validation error 
						$data['error'] = $validation->errors();
					}

					

					
				}else{

					if($validation->passed()){
						try{
							$budget->create(array(
								'event_ID' => $param[0],
								'target_budget' => Input::get('target_budget'),
								'estimated_expense' => 0,
								'estimated_income' => 0
							));

						}catch (Exception $e){

							$e->getMessage();
						}
						
						// success message
						$data['success'] = 'Successfully updated a target budget!';

					}else{
						// validation error 
						$data['error'] = $validation->errors();
					}
					
					
				}
			}
			else if(isset($_POST['itemSubmit'])){
				//TO-DO: validate
				$validation = $validate->check($_POST, array(
					'item_name' => array(
						'display' => 'Item name',
						'required' => true	
					),
					'item_category' => array(
						'display' => 'Item Category',
						'required' => true
					),
					'item_type' => array(
						'display' => 'Item Type',
						'required' => true
					),
					'item_amount' => array(
						'display' => 'Item Amount/Total cost',
						'required' => true,
						'type' => 'number'
					)

				));


				if($budget->findByEvent($param[0])){
					$tempData = $budget->data()->fetch_array();

					if($validation->passed()){
						try{
							$budget->addBudgetItem(array(
								'budget_ID' => $tempData['budget_ID'],
								'item_name' => Input::get('item_name'),
								'category' => Input::get('item_category'),
								'type' => Input::get('item_type'),
								'amount' => Input::get('item_amount')
							));

						}catch (Exception $e){

							$e->getMessage();
						}
						$data['incomeExpense'] = $this->updateIncomeExpense($param[0],Input::get('item_type'), Input::get('item_amount'));

						// success message
						$data['success'] = 'Successfully added a budget item!';

					}else{
						// validation error 
						$data['error'] = $validation->errors();
					}

					

				}

				
			}
		}
		// store user data in the data array
		$data['userData'] = $user->data()->fetch_array();

		// store event data in the data array
		if($event->find($param[0])){
			$data['eventData'] = $event->data()->fetch_assoc();
		}else{
			Redirect::to('dashboard', true);
		}

		// store budget data
		if($budget->findByEvent($param[0])){

			$data['budgetData'] = $budget->data()->fetch_array();
			$data['budget_items'] = $budget->getBudgetItems($data['budgetData']['budget_ID'])->fetch_all();
			//print_r($data['budget_items']);
		}




		self::view('dashboard/event', $data);
	}

	public function delete($param){
		print_r($param);
		die();


	}

	// update expense and income value

	public function updateIncomeExpense($eventID, $type, $amount){
		$income = 0;
		$expense = 0;
		$budget = array();
		$budgetModel = self::model('budget');

		if($budgetModel->findByEvent($eventID)){
			$budget = $budgetModel->data()->fetch_array();
		}
		

		if($type == 'income'){
			$income = $budget['income'] + ($amount);
		}else if($type == 'expense'){
			$expense = $budget['expense'] + ($amount);
		}

		// update db
		try {
			$budgetModel->updateBudget($budget['budget_ID'], array(
				'estimated_income' => $income,
				'estimated_expense' => $expense
			));
			
		} catch (Exception $e) {
			$e->getMessage(); 
		}

		// return both
		return ['income' => $income, 'expense' => $expense];
	}
	
	
}