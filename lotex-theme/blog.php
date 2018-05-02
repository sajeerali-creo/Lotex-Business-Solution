 <?php
/* Template Name: blog*/
?>
<?php get_header(); ?>  


<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
<!-- =============================================== -->
 <section class="sub-banner blog">
     <h2 data-aos="fade-in">Blog</h2>
 </section>

<!-- details -->
<!-- ========================================================= -->
<section class="blog-post">
  <div class="container">
    <div class="row">

      <?php
        query_posts('category_name=blog' );
        while ( have_posts() ) : the_post();
      ?>
      <div class="col s12 m6 l4">
        <div class="thumb-post" data-aos="fade-up">
          <a href="<?php the_permalink();?>">
          <div class="over-lay">
            <h2><?php echo get_the_title(); ?></h2>
            <span>Posted on  <strong><?php the_time('F j, Y') ?></strong></span>
            <?php the_content(); ?>
          </div>
          </a>
          <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
        </div>
      </div>
      
     <?php
        endwhile;
      ?> 

    </div>
  </div>
</section>


<?php get_footer(); ?>