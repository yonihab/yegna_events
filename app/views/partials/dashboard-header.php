<?php

$host = 'http://' . $_SERVER['HTTP_HOST'] . '/yegna_events-mvc/';

// print_r($_SERVER);

?>


<!DOCTYPE html>
<html lang="en">

<head>

 
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $host?>public/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $host?>public/assets/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $host?>public/assets/img/fav/favicon-16x16.png">

	<link rel="stylesheet" href="<?php echo $host?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $host?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $host?>public/css/main.css" />
  <link rel="stylesheet" href="<?php echo $host?>public/css/animate.css" />
    <link rel="stylesheet" href="<?php echo $host?>public/css/dashboard.css" />
	<link rel="stylesheet" href="<?php echo $host?>public/css/test.css">
	<link rel="stylesheet" href="<?php echo $host?>public/css/carousel.css">
  <link href="<?php echo $host?>public/css/sidebar.css" rel="stylesheet">

</head>

<body class="bg-light">

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-darkish border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="<?php echo $host?>public/assets/img/logo.png" width="30" height="30" alt="yegna events logo" class="ml-2"> Yegna Events </div>
      <div class="list-group list-group-flush">
        <a href="<?php echo $host?>dashboard" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-list px-2"></i> Events</a>
        <a href="<?php echo $host?>dashboard_formbuilder" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-pencil-square px-2"></i> Form Builder</a>
         <a href="<?php echo $host?>dashboard_notification" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-bell px-2"></i> Notification 
            <!-- check if there is any new notifcation and make it visible with data -->
            <span class="badge badge-danger">12</span>

         </a>
        <a href="<?php echo $host?>dashboard_profile" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-user px-2"></i> Profile</a>
        <a href="<?php echo $host?>dashboard_settings" class="list-group-item list-group-item-action bg-darkish"><i class="fa fa-cog px-2"></i> Setting</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
          <a class="sidebar-menu-btn" id="menu-toggle"> <img src="<?php echo $host?>public/assets/img/menu.svg" alt="menu"> Menu</a>

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
             <li class="nav-item dropdown mr-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, <?php echo $data['userData']['username']?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $host?>dashboard_profile">Profile</a>
                <a class="dropdown-item" href="<?php echo $host?>logout">Logout</a>
              </div>
            </li>
          </ul>
        </div>
        </div>
      </nav>

