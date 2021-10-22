<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
        <header class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-nav navbarNavAltMarkup justify-content-around" id="_nav_left">
                        <a class="nav-link py-3 <?php if (is_front_page()) echo 'active' ?>" aria-current="page" href="<?php echo site_url(); ?>">Home</a>
                        <a class="nav-link py-3 <?php if (is_page('/blog') OR get_post_type() == 'post') echo 'active' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                        <a class="nav-link py-3" href="#">Categories</a>
                    </div>    
                    <a class="navbar-brand mx-auto px-5 border-start border-end border-1 border-secondary text-align-center" id="_nav_center" href="<?php echo site_url(); ?>">
                        <img id="header_logo" class="row mx-auto px-auto" src="<?php echo get_theme_file_uri('/images/CT.png')?>" alt="Cocktail Tales Logo" width="80px" height="80px">
                        <h6 class="row">Cocktail Tales</h6>
                    </a>
                    <div class="collapse navbar-collapse navbar-nav navbarNavAltMarkup justify-content-around" id="_nav_right">
                        <a class="nav-link py-3 <?php if (is_page('/contact-me')) echo ' active' ?>" href="<?php echo site_url('/contact-me'); ?>">Contact</a>
                        <a class="nav-link py-3 <?php if (is_page('/about-me')) echo ' active' ?>" href="<?php echo site_url('/about-me'); ?>">About</a>
                        <a class="nav-link py-3" href="#">Search</a>
                    </div>
                </div>
            </nav>
        </header>