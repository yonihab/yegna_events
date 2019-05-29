<?php

class Dashboard_event extends Controller
{
	public $data = array();
	
	public function edit($param){
		// intiate models
		$user = self::model('user');
		$budget = self::model('budget');
		$event = self::model('event');

		// check if user is logged in
		if(!$user->isLoggedIn()){
			
			Session::flash('login_redirect', 'Please Login first!');
  			Redirect::to('login', true);
		}

		
		// Submited forms
		if(Input::exists()){
			if(isset($_POST['targetsubmit'])){
				// process target budget 

				if($budget->findByEvent($param[0])){
					$tempData = $budget->data()->fetch_array();

					try{
						$budget->update($tempData['budget_ID'], array(
							'target_budget' => Input::get('target_budget'),
						));

					}catch (Exception $e){

						$e->getMessage();
					}

					// success message
				}else{
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
				}
			}
			else if(isset($_POST['itemSubmit'])){
				//TO-DO: validate

				if($budget->findByEvent($param[0])){
					$tempData = $budget->data()->fetch_array();

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
	
}