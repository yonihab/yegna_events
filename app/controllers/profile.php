<?php

class Profile extends Controller
{
	
	
	public function index(){
		
		 self::view('profile/index');
	}
	public function show($params){
		if(isset($params)){
			self::view('profile/index', $params);
		}
		
		 
	}
}