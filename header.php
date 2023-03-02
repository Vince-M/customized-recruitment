<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Customized Recruitment</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="./dist/style.css">
    <script defer src="./dist/script.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

  <!-- HEADER
  =================================================== -->
    <header class="header header-content" id="header">
      <div class="overlay has-fade"></div>

      <nav class="container-lg nav">
        <a href="index.html">
          <img class="header__logo" src="img/Customized_Recruitment_logo.svg" width="215" height="62" alt="Customized Recruitment logo">
        </a>

        <div id="btnHamburger" class="nav__toggle header__menu hide-for-desktop">
          <span></span>
          <span></span>
          <span></span>
        </div> <!-- nav__toggle header__menu hide-for-desktop -->

        <ul class="nav__list header__links hide-for-mobile mobileMenu">
          <li class="nav__item first-item"><a href="index.html">Home</a></li>
          <li class="nav__item"><a href="recruiting.html">Recruiting Services</a></li>
          <li class="nav__item"><a href="testimonials.html">Testimonials</a></li>
          <li class="nav__item"><a href="about.html">About</a></li>
          <li class="btn nav__item--btn btn__navContact"><a href="contact.html" class="button btn btn__headerNav">Contact</a></li>
        </ul>
      </nav> <!-- container-lg nav -->
    </header>
  <!-- ============================================== -->

  <!-- MAIN
  =================================================== -->
    <main class="main">