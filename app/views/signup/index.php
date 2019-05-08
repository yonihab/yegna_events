<?php
$title = 'Sign Up | Yegna Events';
$statesign = "active";
require_once 'app/views/partials/header.php';

?>

<section class="login py-4">
	 <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">

            </div>
            <div class="col-md-8 col-sm-12 ">
                <?php 
                // show error here
                if(isset($data) && !empty($data)){
                    echo "<div class=\"alert alert-danger\"> "
                            . "<ul>";
                    foreach ($data as $error) {
                       echo "<li> " . $error . "</li>";
                    }
                    echo "</ul></div>";
                }
                ?>
                <div class="card login-card">
                    <div class="card-body">
                        <div class="form-pic text-center">
                            <img src="public/assets/img/logo.png" alt="" class="img-fluid m-1" width="70">
                        </div>
                        <div class="login-text text-center">
                            <h5>Sign up for Yegna Events account</h5>
                        </div>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full name</label>
                                        <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" value="<?php echo Input::get('fullname')?>">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo Input::get('username')?>">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo Input::get('email') ?>">
                                        <small id="emailHelp" class="form-text text-muted">We'll not share your email with anyone else.</small>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_again" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Are You?</label>
                                        <select name="user-type" id="" class="form-control">
                                            <option value="event_org">Event organiser</option>
                                            <option value="event_att">Event attendee</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            

                            
                            
                            
                            <button type="submit" class="ye_btn btn-block" name="loginButton">Sign Up <span class="fa fa-arrow-right"></span> </button>
                        </form>
                    <!--     <h5 class="text-center">-- OR --</h5>

                        <a href="#" class="btn btn-fb btn-block btn-a"><i class="fa fa-facebook"></i> Login with Facebook</a>
                        <a href="#" class="btn btn-tg btn-block btn-a"><i class="fa fa-telegram"></i> Login with Telegram</a> -->

                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-12">

            </div>
        </div>
    </div>
</section>


<?php
require_once './app/views/partials/footer.php';