<?php 


get_header(); ?>




           <!-- start section -->
           <section class="parallax one-half-screen md-h-450px sm-h-350px" data-parallax-background-ratio="0.5" style="background: url('<?php bloginfo('template_url'); ?>/images/page-header.jpg');">
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-visible pb-0 pt-md-0 wow animate__fadeIn">
            <div class="container">
                <div class="overlap-section">
                    <div class="z-index-6 bg-white box-shadow-small border-radius-5px padding-60px-tb md-padding-40px-all xs-padding-20px-lr">
                        <div class="row g-0 align-items-center">
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start sm-margin-20px-bottom">
                                <h6 class="alt-font font-weight-800 text-black w-85 mb-0 lg-w-100"><?php the_title(); ?></h6>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>           
        </section>
        <!-- end section -->
        


                <!-- start section -->
        <section class="home-consulting big-section cover-background">
            <div class="container">
            <div class="row justify-content-center">

                                    <!-- start services item -->
                    <div class="col-12 col-lg-12 col-md-12 position-relative md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                        <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all w-100">
                            <div class="feature-box-content">
                               
                             <?php the_content(); ?>
                               
                            </div>

                        </div>
                        

                    </div>
                    <!-- end services item -->

                </div>
            </div>
        </section>
        <!-- end section -->





<?php get_footer(); ?>