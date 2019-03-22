<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
  <!-- General Styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>


<body>
<div id="upper-nav">
    <div class="container">
      <p>Guiding Hosts To Reach Their Full Potential In The Vacation Rental Industry</p>
      <a class="btn" href="contact">REQUEST</a>
    </div>
  </div>
  <nav>
    <div class="container">
      <span id="hamburger">|||</span>
      <a href="home"><h1 id="main-logo">THE BNB COACH</h1></a>

      <?php 
        wp_nav_menu( array( 
          'theme_location' => 'my-custom-menu' ) ); 
      ?>


    </div>
  </nav>