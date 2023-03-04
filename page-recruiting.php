<?php
/*
  Template Name: Recrutiing Template
  */
?>


<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="header__hero " role="banner" data-type="background" data-speed="2">
      <div class="header__hero--image">
        <img src="<?php the_field( 'hero_images' ); ?>" alt="">
      </div>

      <div class="header__hero--content">
        <h1><?php the_title(); ?></h1>
      </div>
      
    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

  <!-- CONTENT
  =================================================== -->

  <section class="recruiting__body">
      <div class="container-blogText">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else: ?>

      <p>Sorry, no pages found</p>

      <?php endif; ?>

      </div> 
    </section> 

  <!-- ============================================== -->


<?php get_footer(); ?>