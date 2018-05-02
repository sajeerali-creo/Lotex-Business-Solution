 <?php
/* Template Name: company*/
?>
<?php get_header(); ?>  


<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
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




<!-- Office Culture -->
<!-- ========================================================= -->

<!-- <section class="office-culture">
  <div class="container">
    <div class="row">
      <div class="col s12 l6 m12">
        <div class="culture-box-big">
          <img src="<?php bloginfo('template_url'); ?>/images/culture-big.png">
        </div>
      </div>
      <div class="col s12 l6 m12">
        <div class="row">
          <div class="col-s12 m12 l12">
            <div class="culture-box-small">
              <img src="<?php bloginfo('template_url'); ?>/images/culture-s1.png">
            </div>
          </div>
          <div class="col-s12 m12 l12">
            <div class="culture-box-small">
              <img src="<?php bloginfo('template_url'); ?>/images/culture-s1.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 -->

<?php get_footer(); ?>