<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="hero feature-image frontPage__hero" role="banner" data-type="background" data-speed="2">

      <div class="frontPage__hero--headline">
        <h1 class="hero__header--fullPage">Recruiting top talent is an art, a science, and a professional calling.</h1>
        <h2 class="hero__header--fullPage">Attracting the right candidates for a position is the first step in making a successful hire.</h2>
        <h2 class="hero__header--fullPage">Expertly managing the talent acquisition process, reducing time from attracting and hiring.</h2>
        <div class="btn btn__hero btn__contact">
          <a href="#">Contact Us</a>
        </div> <!-- btn btn__contact -->
      </div> <!-- hero__headline -->

    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

    <!-- ABOUT CUSTOMISZED RECRUITMENT
    =================================================== -->
      <section class="full__width full__width--about">
        <div class="container frontpg__about">
          <div class="frontpg__about--img">
            <img src="<?php the_field( 'about_customized_recruitment' ); ?>" alt="about Customized Recruitment" width="600">
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
            <img src="<?php the_field( 'recruiting_services_image' ); ?>" alt="Recruiting Services" width="670">
          </div>
          <div class="frontpg__recruiting--text">
            <h2>Recruiting Services</h2>
            <p><?php the_field( 'about_recruiting_services_text' ); ?></p>
            <div class="btn btn__recruiting">
              <a href="recruiting.html">Learn More</a>
            </div>
          </div>

        </div>
      </section>
    <!-- ============================================== -->

    <!-- LET'S CONNECT
    =================================================== -->
      <section class="full__width full__width--connect">
        <div class="container page__connect">
          <h2>Let's Connect</h2>
          <div class="page__connect--input">
            <input type="text" class="index__input" id="Name" name="Name" placeholder="Full Name" size="40">
            <input type="email" class="index__input" id="Email" name="Email" placeholder="Email" size="40">
          </div> <!-- page__connect--input -->
        </div> <!-- container page__connect -->
      </section> <!-- full__width full__width--connect -->
    <!-- ============================================== -->


    <!-- CLIENT TESTIMONIALS
    =================================================== -->
      <section class="frontPage__testimonials">
        
          <div class="frontpg__testimonials frontPage__wrapper">
            <div class="frontPage__wrapper--image">
            </div> <!-- frontPage__wrapper--image -->

            <div class="frontPage__wrapper--text">
              <h3>Client & Candidate Testimonials...</h3>
            </div> <!-- frontPage__wrapper--text -->
          </div> <!-- container frontpg__testimonials -->
        

        <div class="container frontPage__testimonials--section">
          <div class="frontPage__testimonials--testimonial fadeIn">
            <div class="testimonial__logo">
              <img src="img/ha_logo_dark_400x63.png" alt="Harbour Air Seaplanes logo" width="400px">
            </div> <!-- testimonial__logo -->
            <div class="testimonial__excerpt">
              <p>
                I absolutely trust the process that Customized Recruitment uses to identify and onboard successful candidates across all areas of our business. They go above and beyond, guiding every step along the way...  
              </p>
              <div class="readMore">
                <a href="testimonials-single.html">[ Read More ]</a>
              </div>
            </div> <!-- testimonial__excerpt -->
          </div> <!-- frontPage__testimonials--testimonial -->
  
          <div class="frontPage__testimonials--testimonial fadeIn">
            <div class="testimonial__logo">
              <img src="img/denrayTire_210x70.jpg" alt="Denray Tire logo" width="210px">
            </div> <!-- testimonial__logo -->
            <div class="testimonial__excerpt">
              <p>
                While many candidates have the technical qualifications, Theresa ensures she is presenting candidates that not only meet the skills required for the role but are the best fit for our culture....              </p>
              <div class="readMore">
                <a href="testimonials-single-denray.html">[ Read More ]</a>
              </div>
            </div> <!-- testimonial__excerpt -->
          </div> <!-- frontPage__testimonials--testimonial -->
        </div> <!-- container frontPage__testimonials--section -->
       
        <div class="container testimonials__all">
          <p><a href="testimonials.html">All Testimonials &raquo;</a></p>
        </div> <!-- container testimonials__all -->
      </section> <!-- frontPage__testimonials -->
    <!-- ============================================== -->

<?php get_footer(); ?>