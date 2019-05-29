<?php

/**
* 404 page
*/
class PageNotFound extends Controller
{
	
	public function index(){
		self::view('404/index');
	}
}