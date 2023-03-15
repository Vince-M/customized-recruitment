<?php
/*
  Template Name: Testimonial Template
  */
?>

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

    <!-- TESTIMONIAL INTRO SECTION
    =================================================== -->
    <section class="container-blogText testimonial__intro--bold">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>

<p>Sorry, no pages found</p>

<?php endif; ?>
    </section>
    <!-- ============================================== -->


    <section class="full__width">
      <div class="container testimonials__section--column">
   
      <?php
          $homepageTestiomonials = new WP_Query(array(
            'posts_per_page'  =>  -1,
            'post_type'       =>  'testimonials',
            'orderby'         =>  'meta_value_num',
            'order'           =>  'ASC',
            'paged'           =>  $paged
          ));

          while($homepageTestiomonials->have_posts()) {
            $homepageTestiomonials->the_post(); ?>
            <div class="container testimonials__section--single fadeIn">
              <div class="testimonial">
                <div class="testimonial__logo">
                  <?php 
                    $image = get_field('testimonials_logo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; 
                  ?>
                </div> <!-- testimonial__logo -->
                <div class="testimonial__excerpt">
                  <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                  <div class="readMore">
                    <a href="<?php the_permalink(); ?>">[ Read More ]</a>
                  </div>
                </div> <!-- testimonial__excerpt -->
              </div> <!-- testimonial -->
            </div> <!-- frontPage__testimonials--testimonial -->
          <?php }
        ?>

      </div> <!-- container frontpg__testimonials--testimonial -->
    </section> <!-- full__width frontpg__testimonials--section -->


<?php get_footer(); ?>