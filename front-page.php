<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="hero feature-image frontPage__hero" role="banner" data-type="background" data-speed="2">

      <div class="frontPage__hero--headline">
        
        <h1 class="hero__header--fullPage"><?php the_field('hero_title') ?></h1>
        <!-- <h2 class="hero__header--fullPage">Attracting the right candidates for a position is the first step in making a successful hire.</h2>
        <h2 class="hero__header--fullPage">Efficient and affordable talent acquisition, reducing time and effort for you to hire the best candidate.</h2> -->
        <h2 class="hero__header--fullPage"><?php the_field('hero_subtitle_one') ?></h2>
        <h2 class="hero__header--fullPage"><?php the_field('hero_subtitle_two') ?></h2>
        <div class="btn btn__hero btn__contact">
          <a href="<?php echo site_url( 'contact' ); ?>">Contact Us</a>
        </div> <!-- btn btn__contact -->
      </div> <!-- hero__headline -->

    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

    <!-- ABOUT CUSTOMISZED RECRUITMENT
    =================================================== -->
    <section class="full__width full__width--about">
      <div class="container frontpg__about">
        <div class="frontpg__about--img">
            <?php 
              $image = get_field('about_customized_recruitment');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; 
            ?>
        </div>
        <div class="frontpg__about--text">
          <h2>About Customized Recruitment</h2>
          <p><?php the_field( 'about_customized_recruitment_text' ); ?></p>
          <div class="btn btn__about">
            <a href="<?php echo site_url( 'about' ); ?>">Learn More</a>
          </div> <!-- btn btn__contact -->
        </div>
      </div>
    </section>
    <!-- ============================================== -->

    <!-- RECRUITING SERVICES
    =================================================== -->
    <section class="full__width full__width--recruiting">
      <div class="container frontpg__recruiting">
        <div class="frontpg__recruiting--img">
          <?php 
            $image = get_field('recruiting_services_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; 
          ?>
        </div>
        <div class="frontpg__recruiting--text">
          <h2>Recruiting Services</h2>
          <p><?php the_field( 'about_recruiting_services_text' ); ?></p>
          <div class="btn btn__recruiting">
            <a href="<?php echo site_url( 'recruiting' ); ?>">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <!-- ============================================== -->

    <!-- LET'S CONNECT
    =================================================== -->
    <section class="full__width full__width--connect">
      <?php 
        $image = get_field('connect_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; 
      ?>
      <div class="container page__connect">
        <h2>Let's Connect</h2>
        <div class="page__connect--input">
          <?php echo do_shortcode( '[wpforms id="238"]' ); ?>
          <!-- <input type="text" class="index__input" id="Name" name="Name" placeholder="Full Name" size="40">
          <input type="email" class="index__input" id="Email" name="Email" placeholder="Email" size="40"> -->
        </div> <!-- page__connect--input -->
      </div> <!-- container page__connect -->
    </section> <!-- full__width full__width--connect -->
    <!-- ============================================== -->


    <!-- CLIENT TESTIMONIALS
    =================================================== -->
    <section class="frontPage__testimonials">
      
      <div class="frontpg__testimonials frontPage__wrapper">
        <div class="frontPage__wrapper--image">
          <?php 
            $image = get_field('client_testimonials_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; 
          ?>
        </div> <!-- frontPage__wrapper--image -->

        <div class="frontPage__wrapper--text">
          <h3>Client & Candidate Testimonials...</h3>
        </div> <!-- frontPage__wrapper--text -->
      </div> <!-- container frontpg__testimonials -->
      
      <div class="container frontPage__testimonials--section">

        <?php
          $homepageTestiomonials = new WP_Query(array(
            'posts_per_page'  =>  2,
            'post_type'       =>  'testimonials',
            'orderby'         =>  'meta_value_num',
            'order'           =>  'ASC',
            'paged'           =>  $paged
          ));

          while($homepageTestiomonials->have_posts()) {
            $homepageTestiomonials->the_post(); ?>
            <div class="frontPage__testimonials--testimonial fadeIn">
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
            </div> <!-- frontPage__testimonials--testimonial -->
          <?php }
        ?>

      </div> <!-- container frontPage__testimonials--section -->
      
      <div class="container testimonials__all">
        <p><a href="<?php echo site_url( 'testimonials' ); ?>">All Testimonials &raquo;</a></p>
      </div> <!-- container testimonials__all -->
      
    </section> <!-- frontPage__testimonials -->
    <!-- ============================================== -->

<?php get_footer(); ?>