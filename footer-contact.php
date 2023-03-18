    <!-- SECTION DIVIDER
    =================================================== -->
    <div class="container">
      <hr class="section__divider">
    </div>
    <!-- ============================================== -->

  </main>
  <!-- ============================================== -->

  <!-- FOOTER
  =================================================== -->
    <footer class="footer">
      <div class="container footer__wrapper">
        <div class="footer__identity">
          <a href="index.html"><img src="<?php echo get_theme_file_uri() ?>/img/Customized_Recruitment_logo.svg" height="50" alt="Customized Recruitment logo"></a>
        </div>
        <div class="footer__menu">
          <!-- <ul class="footer__nav">
            <li class="footer__nav--item"><a href="index.html">Home</a></li>
            <li class="footer__nav--item"><a href="#">Recruiting Services</a></li>
            <li class="footer__nav--item"><a href="#">Testimonials</a></li>
            <li class="footer__nav--item"><a href="about.html">About</a></li>
            <li class="footer__nav--item"><a href="#">Contact</a></li>
          </ul> footer__nav -->

          <?php
            wp_nav_menu( array(
              'theme_location'        =>  'footer-menu',
              'container_aria_label'  =>  '',
              'container'             =>  false,
              'menu_class'            =>  'footer__nav',
              'menu_id'               =>  'footer-menu',
              'echo'                  =>  true,
              'fallback_cb'           =>  'wp_page_menu',
              'before'                =>  '',
              'after'                 =>  '',
              'depth'                 =>  0
            ))
          ?>
        </div> <!-- footer__menu -->
        <div class="footer__info">
          <p class="footer__info--privacy"><a href="<?php echo site_url( '/privacy-policy' ); ?>">Privacy Policy</a></p>
          <div class="footer__info--social">
            <a href="#"><img src="<?php echo get_theme_file_uri() ?>/img/LI-In-Bug_45x38.png" alt="linkedin logo" width="45px" height="38px" class="footer__info--linkedin"></a>
          </div> <!-- footer__info--social -->
          <p class="footer__info--copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
        </div> <!-- footer__info -->
      </div> <!-- container footer__wrapper -->
    </footer> <!-- footer -->
  <!-- ============================================== -->

<?php wp_footer(); ?>

</body>
</html>