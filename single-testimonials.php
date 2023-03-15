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

    <!-- CLIENT TESTIMONIALS
    =================================================== -->
    <section class="full__width testimonials__section">
      <div class="container testimonials__section--column">
       <div class="container-blogText testimonial__blog">
          <div class="testimonial__blog--logo">
            <?php 
              $image = get_field('testimonials_logo');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; 
            ?>
          </div> <!-- testimonial__logo -->
          <div class="testimonial__blog--single">
            <h2><?php the_title(); ?></h2>
            <p class="testimonial__blog--date"><?php the_time('F jS, Y'); ?></p>

            <?php the_content(); ?>


          </div>

          <div class="btn btn__testimonial">
            <a href="testimonials.html">Back to Testimonials</a>
          </div> <!-- btn btn__contact -->

       </div> <!-- container testimonial__blog -->

        
      </div> <!-- container frontpg__testimonials--testimonial -->
    </section> <!-- full__width frontpg__testimonials--section -->
  <!-- ============================================== -->


<?php get_footer(); ?>