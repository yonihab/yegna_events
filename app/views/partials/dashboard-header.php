<?php

if(!Session::exists('user_id')){
  Session::flash('login_redirect', 'Please Login first!');
  Redirect::to('login');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

 
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="public/assets/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/assets/img/fav/favicon-16x16.png">

	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/main.css" />
	<link rel="stylesheet" href="public/css/test.css">
	<link rel="stylesheet" href="public/css/carousel.css">
    <link href="public/css/sidebar.css" rel="stylesheet">

</head>

<body class="bg-light">

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-darkish border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Yegna Events </div>
      <div class="list-group list-group-flush">
        <a href="dashboard" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-list px-2"></i> Events</a>
        <a href="dashboard_formbuilder" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-pencil-square px-2"></i> Form Builder</a>
         
        <a href="dashboard_profile" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-user px-2"></i> Profile</a>
        <a href="dashboard_settings" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-cog px-2"></i> Setting</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <a class="sidebar-menu-btn" id="menu-toggle"> <img src="public/assets/img/menu.svg" alt="menu"> Menu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
