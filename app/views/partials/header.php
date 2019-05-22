<!DOCTYPE html>
<html>

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

</head>

<body class="bg-light">
    <!-- Navigation -->
    <!-- TODO: change langudge setting right here -->
    <div class="pt-1 bg-greenish">
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <a class="navbar-brand" href="#"><img src="public/assets/img/logo.png" width="30" height="30" alt="yegna events logo"> Yegna Events</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo $statehome ?>" >
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $statesign ?>" >
                        <a class="nav-link" href="signup">Create Account</a>
                    </li>
                    <li class="nav-item <?php echo $statelogin ?>">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
