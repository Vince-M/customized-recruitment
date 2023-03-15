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
  <section class="full__width testimonials__section">
      <div class="container testimonials__section--column">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else: ?>

      <p>Sorry, no pages found</p>

      <?php endif; ?>

      </div> <!-- container frontpg__testimonials--testimonial -->
    </section> <!-- full__width frontpg__testimonials--section -->
  <!-- ============================================== -->


<?php get_footer(); ?>