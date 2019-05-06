<?php
$title = 'Login | Yegna Events';
$statelogin = "active";
require_once 'app/views/partials/header.php';

?>

<section class="login py-4">
	 <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">

            </div>
            <div class="col-md-4 col-sm-12 ">
                <div class="card login-card">
                    <div class="card-body">
                        <div class="form-pic text-center">
                            <img src="public/assets/img/logo.png" alt="" class="img-fluid m-1" width="70">
                        </div>
                        <div class="login-text text-center">
                            <h5>Login into Yegna Events</h5>
                        </div>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
                               
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="ye_btn btn-block" name="loginButton">Login</button>
                        </form>
                    <!--     <h5 class="text-center">-- OR --</h5>

                        <a href="#" class="btn btn-fb btn-block btn-a"><i class="fa fa-facebook"></i> Login with Facebook</a>
                        <a href="#" class="btn btn-tg btn-block btn-a"><i class="fa fa-telegram"></i> Login with Telegram</a> -->

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">

            </div>
        </div>
    </div>
</section>


<?php
require_once './app/views/partials/footer.php';