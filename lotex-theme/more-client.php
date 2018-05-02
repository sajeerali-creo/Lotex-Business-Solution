 <?php
/* Template Name: more-clients */
?>
<?php get_header(); ?>  

<main class="cd-main-content">
<!-- =============================================== -->
 <section class="sub-banner defult-banner">
     <h2 data-aos="fade-in"><span>Home /</span> More Clients</h2>
 </section>
<!-- details -->
<!-- ========================================================= -->
<section class="client inner-clients">
  <div class="container">
    <div class="row partner">
      <div class="col s12 l12 m12 post-detail-discription">
        <div class="row more-client">

         <?php
          query_posts('category_name=client-words' );
          while ( have_posts() ) : the_post();
        ?>
        <div class="col s12 m12 l4">
          <div class="head-section">
            <i><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/qout.png"></i>
            <div class="name-postion">
              <h3><?php echo get_the_title(); ?></h3>
              <span><?php echo get_post_meta($post->ID,'client-designation',true);?></span>
            </div>
            <div class="write-up">
              <div data-aos="fade-up"><?php the_content(); ?></div>
            </div>
          </div>
        </div>
        <?php
          endwhile;
        ?>  


      </div>
      </div>
    </div>
  </div>
</section>

</main>




<?php get_footer(); ?>