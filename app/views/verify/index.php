<?php
$title = 'Verify | Yegna Events';
require_once 'app/views/partials/header.php';

?>

<section class="login py-4">
	 <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">

            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="card bg-purplish">
                    <div class="card-body">
                       
                         <h5 class="lead text-white"><?php 
                         if(Session::exists('varify')){
                         	echo Session::flash('varify');
                         }else{
                         	echo "Hello, We have sent a varification email to the email you provided. Please varify your email to use your account. Thanks!";
                         }
                         
                         ?></h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">

            </div>
        </div>
    </div>
</section>


<?php
require_once './app/views/partials/footer.php';