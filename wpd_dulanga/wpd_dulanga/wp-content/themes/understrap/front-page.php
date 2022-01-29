<?php
get_header( ); 
?>
<section id="menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">BacklPackers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <?php 
                    wp_nav_menu( array (
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu nav navbar-nav nav-item navbar-right',
                    ));
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</section>
<section id="slider">
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://localhost/wpd_dulanga/wp-content/uploads/2022/01/slider1.jpg"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="http://localhost/wpd_dulanga/wp-content/uploads/2022/01/slider-2-scaled.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="http://localhost/wpd_dulanga/wp-content/uploads/2022/01/slider-3-scaled.jpg"
                        alt="Third slide">
                </div>
            </div>
            <div class="slide-inner">
                <div class="slide-content">
                    <h3>DEVIL'S</h3>
                    <p class="sub-tile">STAIRECASE</p>
                    <hr class="slider-hr">
                    <p class="secont-title">Devil's way but and is Heaven</p>
                    <p class="secont-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        tempus leo <br> metus, vel ultrices nisi semper tempus.</p>
                    <a class="slider-btn" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();
?>