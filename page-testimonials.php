<?php
/*
  Template Name: Testimonials Page Template
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
        <h1>Client & Candidate Testimonials</h1>
      </div>
      
    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

    <!-- TESTIMONIAL INTRO SECTION
    =================================================== -->
    <section class="container-blogText testimonial__intro--bold">
 
      <?php the_content(); ?>

    </section>
    <!-- ============================================== -->

    <!-- CONTENT
    =================================================== -->
    <section class="full__width">
      <div class="container testimonials__section--column">
   
      <?php
          $homepageTestiomonials = new WP_Query(array(
            'posts_per_page'  =>  -1,
            'post_type'       =>  'testimonials',
            'order'           =>  'ASC',
            'paged'           =>  $paged
          ));

          while($homepageTestiomonials->have_posts()) {
            $homepageTestiomonials->the_post(); ?>
            <div class="container testimonials__section--single fadeIn">
              <div class="testimonial">
                <div class="testimonial__logo">
                <a href="<?php the_permalink(); ?>"><?php 
                    $image = get_field('testimonials_logo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; 
                  ?></a>
                </div> <!-- testimonial__logo -->
                <div class="testimonial__excerpt">
                  <p><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 25);
                } ?></p>
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