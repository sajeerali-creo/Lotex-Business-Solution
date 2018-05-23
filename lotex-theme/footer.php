<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!-- footer -->
    <!-- =============================================== -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col l3 m3 s12">
            <h3>Contact Us</h3>
            <img src="<?php bloginfo('template_url'); ?>/images/footer-logo.svg">
            <ul class="ad-footer">
              <li class="location">24/A, 2nd Floor, 7 th Cross, K R Colony, Domlur Layout, Bangalore, India-560 071,</li>
              <li class="email">Email : mail@lotex.co.in</li>
              <li class="phone">Phone: 8884426333</li>
              <li class="web">Web : www.neolotex.com</li>
            </ul>
          </div>
          <div class="col l3 m3 s12">
            <h3>Site Map</h3>
             <ul>
              <?php wp_nav_menu( array('menu' => 'sitemap-menu')); ?>
            </ul>
          </div>
          <div class="col l3 m3 s12">
            <h3>Help Link</h3>
            <ul>
              <?php wp_nav_menu( array('menu' => 'helplink-menu')); ?>
            </ul>
          </div>
          <div class="col l3 m3 s12">
            <h3>Newsletter</h3>
            <ul>
              <li>
                <?php
                  query_posts('category_name=footer-description' );
                  while ( have_posts() ) : the_post();
                ?>
                    <?php the_content(); ?>

                <?php
                  break;
                  endwhile;
                ?>

              </li>
              <li>
                <div class="newsletter">
                 <!--  <input type="text" name="" placeholder="Enter Your Email id">
                  <button class="hvr-shutter-out-horizontal"><a href="#"><i class="zmdi zmdi-mail-send"></i>&nbsp;Submit</a></button> -->
                  <?php $cfsignupname='[contact-form-7 id="70" title="Arnett Creek - Lower Picketpost Mesa (UI) - 60 Nov 2016"]'?>
              <?php echo do_shortcode($cfsignupname);?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <section class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l6">
            <span>Copyright © NeoLotex Business Solution. All Rights Reserved</span>
          </div>
          <div class="col s12 m12 l6">
            <ul class="social">
              <li>
                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>



  </main>







    <!-- <footer data-aos="fade-in"></footer> -->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
      <script src='http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js'></script>
      <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script> <!-- Modernizr -->


      <!-- scrolling animation -->
      <script src="<?php bloginfo('template_url'); ?>/js/scroll.js"></script>

      <!-- slider -->
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
      <script  src="<?php bloginfo('template_url'); ?>/js/index.js"></script>

      <!-- Common Scripts -->
      <script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>

      <!-- <script>
      $(document).ready(function(){
          $(".dropbtn").mouseover(function(){
              $(".cd-overlay2").show();
          });
          $(".dropdown-contents").mouseleave(function(){
              $(".cd-overlay2").hide();
          });
      });
      </script> -->
       <script>
      $(document).ready(function(){
          $(".dropbtn").mouseover(function(){
              $(".cd-overlay2").toggle();
          });
          
      });
      </script>
      

<script>
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.href);
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
</script>

    </body>
  </html>
