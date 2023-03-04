<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="header__hero " role="banner" data-type="background" data-speed="2">
      <div class="header__hero--image">
        <img src="<?php the_field( 'hero_images' ); ?>" alt="">
      </div>

      <div class="header__hero--content">
        <h1>Welcome to our Blog!</h1>
      </div>
      
    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

      <!-- CONTENT
  =================================================== -->

  <section class="container">
    <div class="content">
      
    <?php 
      while( have_posts() ) {
        the_post(); ?>

        <div class="post-item">
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
        </div>
        <div class="meta-box">
          <p>Posted on February 20, 2023</p>
        </div>


    <?php  }
    ?>
    </div> 
  </section> 

  <!-- ============================================== -->


<?php get_footer(); ?>