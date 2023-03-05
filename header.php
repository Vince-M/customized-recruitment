<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

  <!-- HEADER
  =================================================== -->
    <header class="header header-content" id="header">
      <div class="overlay has-fade"></div>

      <nav class="container-lg nav">
        <a href="<?php echo site_url(); ?>">
          <img class="header__logo" src="<?php echo get_theme_file_uri() ?>/img/Customized_Recruitment_logo.svg" width="215" height="62" alt="Customized Recruitment logo">
        </a>

        <div id="btnHamburger" class="nav__toggle header__menu hide-for-desktop">
          <span></span>
          <span></span>
          <span></span>
        </div> <!-- nav__toggle header__menu hide-for-desktop -->

        <ul class="nav__list header__links hide-for-mobile mobileMenu">
          <?php
            wp_nav_menu( array(
              'theme_location'  =>  'header-menu',
              'depth'           =>  3,
              'container'       =>  false,
               'menu_class'     =>  'menu nav__list'
            ))
          ?>
        </ul>
      </nav> <!-- container-lg nav -->
    </header>
  <!-- ============================================== -->

  <!-- MAIN
  =================================================== -->
  <main class="main">