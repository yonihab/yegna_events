<?php
// echo getcwd() . '/n';
$statehome = "active";
 require_once 'app/views/partials/header.php';

?>


    <!-- Featured event caraousal -->
    <section class="featured-event">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="first-slide" src="" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <span class="featured-event-tag">Featured Event</span>
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn-lg bg-rainbow btn-normal" href="https://getbootstrap.com/docs/4.0/examples/carousel/#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <span class="featured-event-tag">Featured Event</span>
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn-lg bg-rainbow btn-normal" href="https://getbootstrap.com/docs/4.0/examples/carousel/#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="third-slide" src="" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <span class="featured-event-tag">Featured Event</span>
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn-lg bg-rainbow btn-normal" href="https://getbootstrap.com/docs/4.0/examples/carousel/#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- About our event mgt system -->
    <section class="event-organiser">
        <div class="container">
            <h2>Are You an<span class="fancy-title">EVENT ORGANISER</span> ?</h2>
            <p class="light-title">We provide the best event managemnt system!</p>

            <div class="row my-4">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="box">
                        <h5>Fast</h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores. Vel, dignissimos?
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">

                    <div class="box">
                        <h5>Secure</h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores. Vel, dignissimos?
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">

                    <div class="box">
                        <h5>Reliable</h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores. Vel, dignissimos?
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- Event categories -->
    <section class="event-category">
        <div class="container">
            <div class="py-2 text-center">
                <h2 class="text-white">Event Categories</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cat-card">
                        <img src="assets/img/1.jpg" alt="">
                        <div class="cat-text">
                            <h5 class="text-white">MUSIC</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cat-card">
                        <img src="assets/img/1.jpg" alt="">
                        <div class="cat-text">
                            <h5 class="text-white">MUSIC</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cat-card">
                        <img src="assets/img/1.jpg" alt="">
                        <div class="cat-text">
                            <h5 class="text-white">MUSIC</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cat-card">
                        <img src="assets/img/1.jpg" alt="">
                        <div class="cat-text">
                            <h5 class="text-white">MUSIC</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

<?php
 require_once './app/views/partials/footer.php';
