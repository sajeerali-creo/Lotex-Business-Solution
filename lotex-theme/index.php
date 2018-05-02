 <?php
/* Template Name: home */
?>
<?php get_header(); ?>  

<main class="cd-main-content">
    <!-- your content here -->
   <!-- banner -->
<!-- =============================================== -->

<div class="banner">
  <section class="cd-intro video">
    <div class="cd-intro-content video">
      <div class="banner-text">
        <div class="container">

          <h1 data-aos="fade-right"><?php echo get_post_meta($post->ID,'title-banner',true);?></h1>
           <p><?php echo get_post_meta($post->ID,'about-banner',true);?></p>
          <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/company/">Read More</a></button>
        </div>
      </div>
      <div class="cd-bg-video-wrapper" data-video="<?php bloginfo('template_url'); ?>/assets/video">
        <!-- video element will be loaded using jQuery -->
      </div>
    </div>
  </section>
</div>

<!-- Our Offerings -->
<!-- =============================================== -->
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




<?php get_footer(); ?>