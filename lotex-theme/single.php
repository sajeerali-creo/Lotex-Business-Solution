<?php get_header(); ?>

	<main role="main">
	<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
<!-- =============================================== -->
 <section class="sub-banner blog">
     <h2 data-aos="fade-in"><span>Blog /</span>Blog Detail</h2>
 </section>

<!-- details -->
<!-- ========================================================= -->
<section class="blog-post">
  <div class="container">
    <div class="row">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


      <div class="col s12 l12 m12">
        <div class="detail-image">
          <div class="over-lay-detail">
            <h2>
            	<?php the_title(); ?>
            </h2>
            <span>Posted on  <strong><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></strong></span>
          </div>
          <!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
        </div>
      </div>



      <div class="col s12 l12 m12 post-detail-discription">
        <?php the_content(); // Dynamic Content ?>
      </div>

      <div class="col l12 m12 s12">
      	<?php comments_template(); ?>
      </div>

    </div>
  </div>
</section>

	<section>

	
</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
