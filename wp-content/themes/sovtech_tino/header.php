<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- All Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page title -->
        <title><?php the_title(); ?></title>
        <!-- Favicon Icon -->

                <!-- favicon icon -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/sovtech_favicon.png">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css?version=10" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?> data-mobile-nav-style="classic">

            <!-- start header -->
            <header class="header-with-topbar">

            <div class="top-bar bg-light-gray border-bottom border-color-black-transparent d-none d-md-inline-block padding-35px-lr md-no-padding-lr">
                <div class="container-fluid nav-header-container">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-12 text-center text-sm-start col-sm-auto me-auto ps-lg-0">
                            <ul class="social-icon padding-5px-tb">
                                <li><a class="text-neon-blue-hover" href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="text-neon-blue-hover" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="text-neon-blue-hover" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-auto d-none d-sm-block text-end px-lg-0 font-size-0">
                            <div class="top-bar-contact">
                                <span class="top-bar-contact-list">
                                    <i class="feather icon-feather-phone-call icon-extra-small text-extra-dark-gray"></i>
                                    <a href="tel:010 865 0161">(+27) 010 865 0161</a>
                                </span>
                                <span class="top-bar-contact-list d-none d-md-inline-block no-border-right pe-0">
                                    <i class="feather icon-feather-mail icon-extra-small text-extra-dark-gray"></i>
                                    <a href="mailto:hello@sovtech.co.za">hello@sovtech.co.za</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar top-space navbar-expand-lg navbar-boxed navbar-light bg-white header-light fixed-top always-fixed">
                <div class="container-fluid nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php bloginfo('template_url'); ?>/images/sovtech_logo-2.png" class="default-logo" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/images/sovtech_logo-2.png" class="alt-logo" alt="">
                            <!-- <img src="<?php bloginfo('template_url'); ?>/images/sovtech_logo-2.png" class="mobile-logo" alt="">  -->
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav alt-font">

                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">What We Do</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#">Software Development</a></li>
                                        <li class="dropdown"><a href="#">Mobile App Development</a></li>
                                        <li class="dropdown"><a href="#">Web App Development</a></li>
                                        <li class="dropdown"><a href="#">Software Maintenance</a></li>
                                        <li class="dropdown"><a href="#">Development Teams</a></li>
                                        <li class="dropdown"><a href="#">Technology Consultants</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Clients</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#">Our clients</a></li>
                                        <li class="dropdown"><a href="#">Industries</a></li>
                                        <li class="dropdown"><a href="#">Our capabilities</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Blog</a>

                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">About Us</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#">About Us</a></li>
                                        <li class="dropdown"><a href="#">Careers</a></li>


                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Contact Us</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-end pe-0 font-size-0">
                        <div class="header-button d-none d-md-inline-block">
                            <a href="#" class="btn btn-medium btn-green btn-round-edge">START A PROJECT</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->





