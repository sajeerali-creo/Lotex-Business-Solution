 <?php
/* Template Name: technology*/
?>
<?php get_header(); ?>


<main class="cd-main-content">

 <!-- banner -->
<!-- =============================================== -->

<section class="sub-banner technology">
  <div class="about-technology">
  <div class="container">
    <?php
       query_posts(array('category_name'=>'technology-service','posts_per_page' => 3));
       while ( have_posts() ) : the_post();
    ?>
  <h3><?php echo get_the_title(); ?></h3>
    <?php the_content(); ?>

  <?php
    endwhile;
  ?>
  </div>
  </div>
</section>

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


<section class="content-section">
  <div class="container">
    <div class="col s12 m12 l12 career-details">
        <h3>Methodology</h3>
        <ul class="collapsible">
           <?php
          query_posts('category_name=Methodology' );
          while ( have_posts() ) : the_post();
        ?>
          <li>
            <div class="collapsible-header heda-clops"><?php echo get_the_title(); ?></div>
            <div class="collapsible-body">
              <?php the_content(); ?>
            </div>
          </li>

          <?php
            endwhile;
          ?>
        </ul>
    </div>
  </div>
</section>



<?php get_footer(); ?>
