 <?php
/* Template Name: service*/
?>
<?php get_header(); ?>

<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
<!-- =============================================== -->
<!--  <section class="sub-banner service">
     <h2 data-aos="fade-in"><span>Service / </span>Document Management Services</h2>
 </section>
 -->
<!-- details -->
<!-- ========================================================= -->

<section class="ervice-details">
  <?php
      query_posts('category_name=service_content' );
      while ( have_posts() ) : the_post();
  ?>
  <div class="half">
    <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
  </div>
  <div class="half">
    <div class="each-s-detail">
      <h1><?php echo get_the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
  <?php
    endwhile;
  ?>
</section>

<section class="advantage">
<div class="container">
<?php
    query_posts('category_name=service_advantage' );
    while ( have_posts() ) : the_post();
?>
<?php the_content(); ?>
<?php
  endwhile;
?>
</div>
</section




<!-- Service Feedback from clients -->
<!-- =============================================== -->
<section class="service-feedback">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12"><h2>Service Feedback from clients</h2></div>
       <div class="col s12 m12 l6">
         <div class="client-f-box">
           <h3><?php echo get_post_meta($post->ID,'feedback_user_name',true);?></h3>
           <span><?php echo get_post_meta($post->ID,'feedback_user_designation',true);?></span>
           <p><?php echo get_post_meta($post->ID,'feedback_feedback',true);?></p>
         </div>
       </div>
      <div class="col s12 m12 l6">
         <div class="client-f-box">
           <h3><?php echo get_post_meta($post->ID,'feedback_user_name2',true);?></h3>
           <span><?php echo get_post_meta($post->ID,'feedback_user_designation2',true);?></span>
           <p><?php echo get_post_meta($post->ID,'feedback_feedback2',true);?></p>
         </div>
       </div>
    </div>
  </div>
</section>


<!-- Service Done Before -->
<!-- =============================================== -->
<section class="service-done">
  <div class="container">
   <h2>Service Done Before</h2>
   <div class="row">
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image'
              );
          endif; ?>
       </div>
     </div>
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image2'
              );
          endif; ?>
       </div>
     </div>
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image3'
              );
          endif; ?>
       </div>
     </div>
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image4'
              );
          endif; ?>
       </div>
     </div>
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image5'
              );
          endif; ?>
       </div>
     </div>
     <div class="col s12 m4 l2">
       <div class="logo-bx">
         <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image6'
              );
          endif; ?>
       </div>
     </div>
   </div>
  </div>
</section>



<?php get_footer(); ?>
