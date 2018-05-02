 <?php
/* Template Name: Scanner-Dealership*/
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
<!-- What We Do? -->
<!-- ========================================================= -->
<section class="what-we-do">
  <div class="container">
    <div class="row">
      <div class="col s12 l12 m12">
        <h2>All Scanner Dealership Services</h2>
      </div>
      <div class="col s12 m12 l12">
        <ul>
          <?php //wp_nav_menu( array('menu' => 'scanner-service')); ?>
          No Services Available Now!
        </ul>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>