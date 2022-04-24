<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name'); ?></title>

  <!-- libs styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/brands.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/solid.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/regular.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/aos/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css">
  
  <!-- my styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php
  $options = get_option( 'sample_theme_options' ); 
  echo $options['selectinput']; ?>.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
  <!-- libs scripts -->
  <script src="<?php echo get_template_directory_uri(); ?>/libs/aos/aos.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js" defer></script>
  <!-- my script -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js" defer></script>
  
  <?php wp_head(); ?>

</head>
<body>
  <!-- parallax -->
  <div class="parallax">
    <img class="parallax-bg" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
  </div>
  <!-- /parallax -->

  <div class="loader">
    <div class="loader_inner"></div>
  </div>

  <header id="home" class="main__head main_color_bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            <?php dynamic_sidebar( 'logo' ); ?>
          </div>
          <button class="menu">
            <span class="sandwich">
              <span class="sw-topper"></span>
              <span class="sw-bottom"></span>
              <span class="sw-footer"></span>
            </span>
          </button>
          <nav class="menu__top">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#personal">Personal info</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contacts">Contacts</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="top-wrapper">
      <div class="top-description">
        <div class="top-centered">
          <div class="top-title">
            <h1 class="animate__fadeInDown animate__animated"><?php echo get_bloginfo('name'); ?></h1>
            <p class="animate__fadeInUp animate__animated"><?php echo get_bloginfo('description'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </header>
