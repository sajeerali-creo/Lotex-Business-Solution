 <?php
/* Template Name: technology*/
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
        <h2>All Technology Services</h2>
      </div>
      <div class="col s12 m12 l12">
        <ul>
          <?php wp_nav_menu( array('menu' => 'technology-Service')); ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Technology Stats -->
<!-- ========================================================= -->
<section class="technology-stack">
  <div class="container">
    <div class="row">
      <div class="col s12 l12 m12">
        <h2>Technology Stats</h2>
      </div>
      
      <div class="row techi-row">
        <div class="col s12 m12 l6">
          <div class="box-techi">
            <img src="<?php bloginfo('template_url'); ?>/images/tech1.jpg">
          </div>
        </div>
        <div class="col s12 m12 l6">
          <div class="box-techi-detail-left">
          <h3>Platform expertise</h3>
          <ul>
             <?php
              query_posts('category_name=platform-expertise' );
              while ( have_posts() ) : the_post();
            ?>
           <?php the_content(); ?>
             <?php
                endwhile;
              ?>  
          </ul>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col s12 m12 l6">
           <div class="box-techi-detail-left">
          <h3>Technology Expertise</h3>
          <ul>
            <?php
              query_posts('category_name=technology-expertise' );
              while ( have_posts() ) : the_post();
            ?>
           <?php the_content(); ?>
             <?php
                endwhile;
              ?>  
          </ul>
        </div>
        </div>
      <div class="col s12 m12 l6">
        <div class="box-techi">
          <img src="<?php bloginfo('template_url'); ?>/images/tech2.jpg">
        </div>
      </div>
    </div>
    </div>
  </div>
</section>





<?php get_footer(); ?>