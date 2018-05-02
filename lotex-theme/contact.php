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
          <iframe src="https://www.google.com/maps/embed?pb" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
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