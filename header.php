<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Montserrat:400,700,900' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="wrapper flexboxRow">
<!-- <div class="contentWrapper flexboxRow"> -->
<!-- <input type="checkbox" id="toggle" name="toggle"> -->
<input type="checkbox" id="toggle" name="toggle">
<header class="flexboxColumn">
<!-- <label for="toggle">☰</label> -->
  <div class="navContainer flexboxColumn">
    <div class="navLogo">
      <p class="changeThis">
        <a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </p>
    </div>
    <div class="navMain">
    <label for="toggle">☰</label>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
      <div class="tabletSocialLinks">
        <ul>
          <li><a href="http://twitter.com/shawnebeyer"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://ca.linkedin.com/in/shawnebeyer"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="http://github.com/shawnebeyer"><i class="fa fa-github"></i></a></li>
        </ul>
        <ul>
          <li><a href="medium.com/@shawnebeyer"><i class="fa fa-medium"></i></a></li>
          <li><a href=""><i class="fa fa-git"></i></a></li>
          <li><a href="https://instagram.com/shawnebeyer/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div> <!-- /.container -->
  <div class="socialContainer flexboxColum">
    <div class="navSocial flexboxRow">
      <div class="navSocialLeft flexboxColumn">
        <a href="http://twitter.com/shawnebeyer"><i class="fa fa-twitter"></i></a>
        <a href="https://ca.linkedin.com/in/shawnebeyer"><i class="fa fa-linkedin"></i></a>
        <a href="http://github.com/shawnebeyer"><i class="fa fa-github"></i></a>
      </div>
      <div class="navSocialRight flexboxColumn">
        <a href="medium.com/@shawnebeyer"><i class="fa fa-medium"></i></a>
        <a href=""><i class="fa fa-git"></i></i></a>
        <a href="https://instagram.com/shawnebeyer/"><i class="fa fa-instagram"></i></a>
      </div> 
    </div>
  </div> 
  <!--   <label for="toggle">☰</label> -->
</header><!--/.header-->

