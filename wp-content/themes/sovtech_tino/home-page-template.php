<?php 

/*
Template Name: Home default
*/


get_header(); ?>


<!-- Start Hero Section -->

<?php
    if( have_rows('hero_section' ) ): 	while ( have_rows('hero_section' ) ) : the_row(); 
          $hero_title		= trim(get_sub_field('hero_title'));
          $hero_content	= get_sub_field('hero_intro');
          $hero_image	= get_sub_field('hero_image');
          $hero_alt	= get_sub_field('hero_image_alt');
          $hero_link	= get_sub_field('hero_cta');

          
 ?>

<section>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 col-md-9 md-margin-7-rem-bottom">

                <h1 class="text-fast-blue alt-font font-weight-900"><?php echo $hero_title; ?></h1>
                <p class="w-80 lg-w-95"><?php echo $hero_content; ?></p>
                <a href="<?php echo $hero_link ?>" class="btn btn-medium btn-green margin-15px-top btn-round-edge section-link">Contact Us<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
            </div>
            <div class="col-12 col-lg-6 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                <figure class="image-back-offset-shadow position-right w-100">
                    <img class="border-radius-6px" src="<?php echo $hero_image; ?>" alt="<?php echo $hero_alt; ?>" />
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<?php
    endwhile; endif;
?>


<!-- client slider start section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
    <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 text-center margin-6-rem-bottom md-margin-4-rem-bottom">
                        <span class="alt-font text-fast-blue text-extra-medium d-block margin-20px-bottom font-weight-500 sm-margin-10px-bottom">TRUSTED BY TOP AFRICAN BRANDS</span>
                    </div>
                </div>
        <div class="row">
            <div class="col-12 position-relative">
                <div class="swiper-container text-center"
                    data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 } } }'>
                    <div class="swiper-wrapper">
                    <?php
                        if( have_rows('client_logos_slider' ) ): 	while ( have_rows('client_logos_slider' ) ) : the_row(); 

                            $client_logo	= get_sub_field('client_logo');
                            $client_alt	= get_sub_field('alt_text');
  
                    ?>
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <img alt="<?php echo $client_alt; ?>" src="<?php echo $client_logo; ?>">
                        </div><!-- end slider item -->


                        <?php
                            endwhile; endif;
                        ?>
                    </div>
                </div>
                <!-- start slider navigation -->
                <div
                    class="swiper-button-next-nav swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large">
                    <i class="feather icon-feather-arrow-right"></i></div>
                <div
                    class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large">
                    <i class="feather icon-feather-arrow-left"></i></div>
                <!-- end slider navigation -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->



<!-- start section -->
<section class="big-section bg-slate-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center margin-six-bottom">
                <h6 class="alt-font text-white font-weight-500">A look at life at SovTech</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center fit-videos sm-margin-30px-bottom">
                <!-- start youtube video -->
                <iframe width="560" height="315"
                    src="https://player.vimeo.com/video/701198316?color&amp;autopause=0&amp;loop=1&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=0#t="
                    allowfullscreen></iframe>
                <!-- end youtube video -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->


<?php
    if( have_rows('about_section' ) ): 	while ( have_rows('about_section' ) ) : the_row(); 
          $about_title		= trim(get_sub_field('about_title'));
          $about_content	= get_sub_field('about_intro');
          $about_image	= get_sub_field('about_image');

 
 ?>


<!-- start section -->
<section>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h3 class="text-fast-blue alt-font font-weight-600 w-90"><?php echo $about_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $about_content ?></p>

            </div>
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="<?php echo $about_image ?>" alt="SovTech team in the office" />
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<?php
    endwhile; endif;
?>

<?php
    if( have_rows('our_story_section' ) ): 	while ( have_rows('our_story_section' ) ) : the_row(); 
          $header		= trim(get_sub_field('header_title'));
          $story_title		= trim(get_sub_field('story_title'));
          $story_content	= get_sub_field('story_intro');
          $mission_title		= trim(get_sub_field('mission_title'));
          $mission_content	= get_sub_field('mission_intro');
          $story_image	= get_sub_field('story_image');

 
 ?>
<!-- start section -->
<section class="padding-eight-tb xs-padding-50px-tb wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 position-relative text-center">
                <h2 class="alt-font text-fast-blue  font-weight-600 margin-35px-bottom"><?php echo $header ?></h2>

            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h3 class="text-fast-blue alt-font font-weight-600 w-90"><?php echo $story_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $story_content ?></p>

                <h3 class="text-fast-blue alt-font font-weight-600 w-90 margin-40px-top  xs-margin-20px-top"><?php echo $mission_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $mission_content ?></p>

            </div>
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="<?php echo $story_image ?>" alt="Helmet Sovtech Office" />
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<?php
    endwhile; endif;
?>




<?php
    if( have_rows('global_delivery_section' ) ): 	while ( have_rows('global_delivery_section' ) ) : the_row(); 
          $header		= trim(get_sub_field('header_title'));
          $global_title		= trim(get_sub_field('global_title'));
          $global_intro	= get_sub_field('global_intro');
          $global_image	= get_sub_field('global_image');
          $grouped_images = get_sub_field('grouped_images'); 

 
 ?>

<!-- start section -->
<section class="bg-light-gray padding-eight-tb xs-padding-50px-tb wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 position-relative text-center">
                <h2 class="alt-font text-fast-blue  font-weight-600 margin-35px-bottom"><?php echo $header ?></h2>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 position-relative text-center">

            <?php 

            if( $grouped_images ): ?>
                  <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-5col xl-grid-5col lg-grid-4col md-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                      <li class="grid-sizer"></li>
                    <?php foreach( $grouped_images as $image ): ?>
                        <li class="grid-item photography wow animate__fadeIn">
                        <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image">
                       
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                                </div>
                           </div>
          
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

 

            </div>
        </div>


</section>
<!-- end section -->


<!-- start section -->
<section>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h3 class="text-fast-blue alt-font font-weight-600 w-90"><?php echo $global_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $global_intro ?></p>
                <a href="#" class="btn btn-medium btn-green margin-15px-top btn-round-edge section-link">
Contact Us<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>

            </div>
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="<?php echo $global_image ?>" alt="" />
            </div>

        </div>
    </div>
</section>
<!-- end section -->


<?php
    endwhile; endif;
?>




<!-- start section -->
<section class="bg-light-gray position-relative padding-thirteen-top lg-padding-nine-top">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-no-padding-top md-margin-5-rem-bottom wow animate__fadeIn"
                data-wow-delay="0.2s">

                <h6
                    class="alt-font text-uppercase text-extra-dark-gray font-weight-700 margin-40px-bottom md-margin-20px-bottom">
                    Our Custom Services</h6>
                <div class="swiper-button-next-nav-2 swiper-button-next slider-navigation-style-06"><i
                        class="line-icon-Arrow-OutRight"></i></div>
                <div class="swiper-button-previous-nav-2 swiper-button-prev slider-navigation-style-06"><i
                        class="line-icon-Arrow-OutLeft"></i></div>
            </div>
            <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                    <div class="swiper-container black-move"
                        data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">


                        <?php
                            if( have_rows('list_of_services' ) ): 	while ( have_rows('list_of_services' ) ) : the_row(); 
                  
                                $services_title		= trim(get_sub_field('service_title'));
                                $services_intro	= get_sub_field('service_intro');
                                $services_link	= get_sub_field('services_cta');

                        ?>


                            <!-- start fancy text box slider item -->
                            <div class="swiper-slide text-center padding-15px-all">
                                <div
                                    class="feature-box text-start feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-color-black-transparent overflow-hidden">
                                    <div
                                        class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
  
                                        <div class="feature-box-content last-paragraph-no-margin">
                                            <span
                                                class="text-fast-blue text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font"><?php echo $services_title ?></span>
                                            <p><?php echo $services_intro ?></p>
                                        </div>
                                        <div class="move-bottom-top margin-15px-top">
                                            <a href="<?php echo $services_link ?>"
                                                class="btn btn-fast-blue btn-large btn-round-edge md-margin-auto-lr">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end fancy text box slider item -->


                            <?php
                                endwhile; endif;
                            ?>





      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->



<!-- start section -->
<section class="bg-white wow animate__fadeIn">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">

        <?php
            if( have_rows('company_values' ) ): 	while ( have_rows('company_values' ) ) : the_row(); 
                  
             $values_title	= trim(get_sub_field('values_title'));
             $values_intro	= get_sub_field('values_text');
            $values_link	= get_sub_field('values_icon');

            ?>
   
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                <div
                    class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i
                            class="line-icon-Cursor-Click2 icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                    <h5 class="text-extra-dark-gray alt-font font-weight-900 d-block margin-5px-bottom "><?php echo $values_title ?></h5>
                        
                        <p><?php echo $values_intro ?></p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->

            <?php
                 endwhile; endif;
            ?>

        </div>
    </div>
</section>
<!-- end section -->



<?php
            if( have_rows('team_section' ) ): 	while ( have_rows('team_section' ) ) : the_row(); 
                  
             $team_title	= trim(get_sub_field('team_title'));
             $team_intro	= get_sub_field('team_intro');
            $team_image	= get_sub_field('team_image');
            $team_link	= get_sub_field('team_cta');

            ?>

<!-- start section -->
<section>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h3 class="text-fast-blue alt-font font-weight-600 w-90"><?php echo $team_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $team_intro ?></p>
                <a href="<?php echo $team_link ?>" class="btn btn-medium btn-green margin-15px-top btn-round-edge section-link">JOIN OUR TEAM<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>

            </div>
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="<?php echo $team_image ?>" alt="" />
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<?php
                 endwhile; endif;
            ?>


<?php
            if( have_rows('blue_chip_section' ) ): 	while ( have_rows('blue_chip_section' ) ) : the_row(); 
                  
             $blue_chip_title	= trim(get_sub_field('blue_chip_title'));
             $blue_chip_intro	= get_sub_field('blue_chip_intro');
            $blue_chip_image= get_sub_field('blue_chip_image');
            $blue_chip_link	= get_sub_field('blue_chip_cta');

            ?>
<!-- start section -->
<section>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h3 class="text-fast-blue alt-font font-weight-600 w-90"><?php echo $blue_chip_title ?></h3>
                <p class="w-85 lg-w-90"><?php echo $blue_chip_intro ?></p>
                <a href="<?php echo $blue_chip_link	 ?>" class="btn btn-link btn-extra-large text-black d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr">Our clients</a>


            </div>
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="<?php echo $blue_chip_image ?>" alt="" />
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<?php
                 endwhile; endif;
            ?>



<!-- start section -->
<section class="bg-neon-blue padding-25px-tb">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
            <?php
            if( have_rows('contact_section' ) ): 	while ( have_rows('contact_section' ) ) : the_row(); 
                  
             $contact_title	= trim(get_sub_field('contact_title'));
             $contact_intro	= get_sub_field('contact_intro');


            ?>
                <h3 class="text-white alt-font font-weight-600 w-90"><?php echo $contact_title ?></h3>
                <p class="text-white  w-85 lg-w-90"><?php echo $contact_intro ?></p>



                <ul class="list-style-01 text-white">
                <?php if( have_rows('list_items' ) ): 	while ( have_rows('list_items' ) ) : the_row(); ?>
                            <li><i class="fas fa-check text-white"></i><?php echo get_sub_field('check_list'); ?>
                                <!-- <span class="list-hover bg-white box-shadow-small border-radius-5px"></span> -->
                            </li>

               <?php
                 endwhile; endif;
            ?>
    
                </ul>




             <?php
                 endwhile; endif;
            ?>


            </div>

            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">

            <form class="">
    <div class="row">
        <div class="col-12 margin-10px-bottom">
            <label class="margin-15px-bottom text-white">Full Name</label>
            <input class="small-input" type="text">
        </div>
        <div class="col-md-6 margin-10px-bottom">
            <label class="margin-15px-bottom text-white">Email address <span class="text-white">*</span></label>
            <input class="small-input" type="text" required>
        </div>
        <div class="col-md-6 margin-10px-bottom">
            <label class="margin-15px-bottom text-white">Phone <span class="text-white">*</span></label>
            <input class="small-input" type="text" required>
        </div>    

        <div class="col-12 margin-10px-bottom">
            <label class="margin-15px-bottom text-white" for="Company">Company Size <span class="text-white">*</span></label>
            <select name="company" id="company" class="small-input">
                <option>Please select</option>
                <option value="1 - 5">1 - 5</option>
                <option value="10">5 - 10</option>
                <option value="100">10 - 50</option>
                <option value="200">50 - 100</option>
                <option value="500">100 - 499</option>
                <option value="">501+</option>
              
            </select>
        </div>


        <div class="col-12 margin-10px-bottom">
            <label class="margin-15px-bottom text-white" for="size">How can we help you? <span class="text-white">*</span></label>
            <select name="size" id="size" class="small-input">
                <option>Please select</option>
            </select>
        </div>


        <div class="col-12 margin-15px-top">
            <label class="margin-15px-bottom text-white">Leave us a message</label>
            <textarea class="medium-input" rows="5" cols="5" placeholder="Leave us a message"></textarea>
        </div>

        <input type="hidden" name="redirect" value="">
                    <button class="btn btn-small btn-green mb-20 submit" type="submit">Submit</button>
    </div>
</form>

            </div>

        </div>
    </div>
</section>
<!-- end section -->








   

<?php get_footer(); ?>