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
            <ul>
              <li><i class="zmdi zmdi-pin"></i>2nd Floor2, Krishna Reddy Colony</li>
              <li><i class="zmdi zmdi-phone"></i>Phone: 080-65692244</li>
              <li><i class="zmdi zmdi-email"></i>2Email : mail@Lotex.co.in</li>
              <li><i class="zmdi zmdi-globe"></i>Web : www.lotex.co.in</li>
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
            <span>Copyright © Lotex Business Solution. All Rights Reserved</span>
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
 
    
    <div class="cd-overlay"></div>
  </main>

  <div class="cd-nav">
    <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
      <li class="has-children">
        <a href="http://codyhouse.co/?p=409">Company</a>
        <ul class="cd-secondary-nav is-hidden">
          <li class="go-back"><a href="#0">Menu</a></li>
           <?php wp_nav_menu( array('menu' => 'company-menu')); ?>
        </ul>
      </li>

      <li class="has-children">
        <a href="http://codyhouse.co/?p=409">Service</a>
        <ul class="cd-secondary-nav is-hidden">
          <li class="go-back"><a href="#0">Menu</a></li>
          <?php wp_nav_menu( array('menu' => 'service-menu')); ?>
        </ul>
      </li>

      <li class="has-children">
        <a href="http://codyhouse.co/?p=409">Solutions</a>
        <ul class="cd-secondary-nav is-hidden">
          <li class="go-back"><a href="#0">Menu</a></li>
            <?php wp_nav_menu( array('menu' => 'solution-menu')); ?>
        </ul>
      </li>

      <li><a href="http://lotex.co.in/neolotex/career/">Career</a></li>
      <li><a href="http://lotex.co.in/neolotex/blog/">Blog</a></li>
      <li><a href="http://lotex.co.in/neolotex/contact-us/">Contact Us</a></li>
    </ul>
  </div>





    <!-- <footer data-aos="fade-in"></footer> -->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
      <script src='http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js'></script>
      <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script> <!-- Modernizr -->
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
      <!-- <script src="js/ddmenu.js" type="text/javascript"></script> -->
      <!-- scrolling animation -->
      <script src="<?php bloginfo('template_url'); ?>/js/scroll.js"></script>

      <!-- slider -->
      <script  src="<?php bloginfo('template_url'); ?>/js/index.js"></script>

      <!-- Common Scripts -->
      <script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>


    </body>
  </html>
