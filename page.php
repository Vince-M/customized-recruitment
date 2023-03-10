<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
      <?php
        while(have_posts()) {
          the_post();
          pageBanner();
        }
      ?>
    <!-- ============================================== -->

  <!-- CONTENT
  =================================================== -->

    <section class="container">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else: ?>

      <p>Sorry, no pages found</p>

      <?php endif; ?>


    </section> 

  <!-- ============================================== -->


<?php get_footer(); ?>