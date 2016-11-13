<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta charset="utf-8">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6955255fc8.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    
    <title>
      <?php get_titulo(); ?>
    </title>
	<?php
     $home = get_template_directory_uri();
     ?>
	<link rel="icon" href="<?= $home ?>/assets/dist/images/favicon.ico" />
	<link rel="stylesheet" href="<?= $home ?>/assets/dist/compress-sass/main.css">
	<script src="<?= $home ?>/assets/dist/compress-js/menu-button.js"></script>
    <script src="<?= $home ?>/assets/dist/compress-js/upbutton.js"></script>
    <script src="<?= $home ?>/assets/dist/compress-js/slideshow.js"></script>
    


	<?php
    	wp_head();
     ?>
</head>
<body>
  <nav class="navbar">
      <li class="logo">
        <a href="http://aijsistem.com.br"><img src="<?= $home ?>/assets/dist/images/logo.png" alt=""></a>
      </li>
   <?php 
    $args = array(
        'theme_location' => 'header-menu'
    );
    wp_nav_menu(args);
   ?>

   <div class="handle">
     <div class="menu-anchor"></div>
   </div>
</nav>

 <div class="container">