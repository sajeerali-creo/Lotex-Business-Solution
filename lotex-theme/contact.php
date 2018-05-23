 <?php
/* Template Name: contact_us*/
?>
<?php get_header(); ?>  
<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
<!-- =============================================== -->
 <section class="sub-banner contactus">
     <h2 data-aos="fade-in">Contact Us</h2>
 </section>


<section class="contact-deatils">
  <div class="container">
    <div class="row">
     <main role="main">
    <!-- section -->
    <section>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

          <?php comments_template( '', true ); // Remove if you don't want comments ?>

          <br class="clear">

          <?php edit_post_link(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php else: ?>

        <!-- article -->
        <article>

          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

      <?php endif; ?>

      </section>
      <!-- /section -->
    </main>
    </div>

    <div class="form-map">
      <div class="row">
        <div class="col s12 m12 l7">
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15552.970829453463!2d77.6487695!3d12.9563153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a99508e5c248a97!2sOxford+Palazzo!5e0!3m2!1sen!2sae!4v1525994924111" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col s12 m12 l5">
         <div class="box-form">
            <h3>Contact Us</h3>
             <div class="row">
                <div class="col 12 m12 l12">
              <?php $cfsignupname='[contact-form-7 id="71" title="Arnett Creek - Lower Picketpost Mesa (UI) - 60 Nov 2016"]'?>
              <?php echo do_shortcode($cfsignupname);?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>