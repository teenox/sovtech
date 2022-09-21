<?php 


get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

    <?php $blog_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

        <!-- start section-->
        <section class="h-700px sm-h-400px xs-h-300px overlap-height cover-background" style="background: url(<?= $blog_featured_image; ?>);">
        </section>
        <!-- end section -->


        <!-- start section-->
        <section class="pb-0 pt-md-0 overflow-visible">
            <div class="container">
                <div class="row justify-content-center overlap-section z-index-0">
                    <div class="col-12 col-lg-10 alt-font text-center bg-black text-white padding-7-rem-tb position-relative" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }' style="background-image: url('images/blog-post-layout-02-img-pattern.png');">
                        <div class="w-1px h-90px bg-white mx-auto absolute-middle-center top-0px"></div>
                        <?php 
                          $post_tags = get_the_tags();
                          if ( $post_tags ) { ?>

                             <div class="text-uppercase text-medium font-weight-500 margin-25px-bottom alt-font"><p class="text-white d-inline-block"><?php echo $post_tags[0]->name; ?></p></div>

                               
                        <?php   }
                        ?>
                        
                        <h3 class="font-weight-800 w-50 text-white mx-auto md-w-70 xs-w-90"><?php the_title(); ?></h3>
                        <div class="d-inline-block text-whitemargin-5px-top"><p class="d-inline-block text-white"><?php the_time('l, F jS, Y') ?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


 

                <!-- start section -->
         <section class="half-section">
            <div class="container">
                <div class="row justify-xl-content-center">
                    <div class="col-12 col-lg-10 offset-lg-1 last-paragraph-no-margin wow animate__fadeIn">
                        
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        


        <?php endwhile; else: ?>
                        <?php _e('Sorry, this might be the wrong page.'); ?>
         <?php endif; ?>

                                <!-- start section -->
                                <section class="bg-light-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 align-items-center">
                    <div class="col text-center text-sm-start xs-margin-10px-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">More insights</h4>
                    </div>
                    <div class="col text-center text-sm-end">
                        <a href="blog-overlay-image.html" class="btn btn-link btn-extra-large text-extra-dark-gray">All stories</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content px-sm-0 margin-5-rem-top xs-margin-4-rem-top">
                        <ul class="blog-overlay-image blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>

                               <?php cats_related_post() ?>


                        </ul>
                    </div>
         </div>

            </div>
        </section>
        <!-- end section -->





<?php get_footer(); ?>