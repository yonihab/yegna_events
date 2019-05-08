<?php

// DO NOT RUN THIS FILE!!
// Documentation on how some of the classes work

// DATABASE WRAPPER

	// TO CONNECT TO DB
	$users = DB::getInstance();

	// TO SELECT FROM SPACFIC TABEL
	$users = DB::getInstance();
	$users->get('users', array('user_ID', '=', 1));

	$user->result();

	// TO SELECT ALL FROM TABEL
	$users = DB::getInstance();
	$user = $users->getAll('users');

	$user->result();

	// TO DELETE FROM SPACFIC TABEL
	$users = DB::getInstance();
	$users->delete('users', array('user_ID', '=', 1));

	


	// TO INSERT INTO DB
	$users = DB::getInstance();
	
	$userInserted = $users->insert('users', array(
		'username' => 'Taju',
		'password' => 'password',
		'email' => 'Taju@gmail.com',
		'location' => 'hawassa'
	));
	
	if($userInserted){
		echo 'Subject Added!!';
	}

	// TO UPDATE TABLE
	$users = DB::getInstance();
	
	// @params $table, $where, $field
	$userUpdated = $users->update('users', array('user_ID', '=', 7), array(
		'username' => 'Taju Ahmed',
		'user_type' => 'event_organiser'
	));
	
	if($userUpdated){
		echo 'Subject Updated!!';
	}


// INPUT CLASS
	// TO CHECK IF POST IS SET
	Input::exists();

	// TO GET ARRAY VALUE FROM POST 
	Input::get($name);

