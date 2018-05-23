 <?php
/* Template Name: career*/
?>
<?php get_header(); ?>  

<main class="cd-main-content">
<!-- your content here -->
<!-- banner -->
<!-- =============================================== -->
 <section class="sub-banner career">
     <h2 data-aos="fade-in">Career</h2>
 </section>

<!-- details -->
<!-- ========================================================= -->
<section class="career-qoutes">
  <div class="container">
    <p>NeoLotex Business Solutions, in the path of business expansion and growth, looks for people who are good for us— not just for right now, but for the long term. We are committed to nurturing and developing talent. At NeoLotex, you will experience an environment that empowers you to make the most of your career. NeoLotex is an equal opportunity employer, where all deserving candidates are given a platform to explore their abilities based on their skill sets and attitude. We do not discriminate on grounds of creed, age, gender and religion. All employment and career decisions at NeoLotex are made basis qualifications and abilities.</p>
  </div>
</section>

<!-- Details -->
<!-- =============================================== -->

<section>
  <div class="container">
    
    <div class="form-map">
      <div class="row">
        <div class="col s12 m12 l7 career-details">
            <h3>Opportunites At NeoLotex</h3>
            <ul class="collapsible">
               <?php
              query_posts('category_name=opportunity' );
              while ( have_posts() ) : the_post();
            ?>
              <li>
                <div class="collapsible-header"><?php echo get_the_title(); ?></div>
                <div class="collapsible-body">
                  <?php the_content(); ?>
                </div>
              </li>

              <?php
                endwhile;
              ?>  
            </ul>
        </div>
        <div class="col s12 m12 l5">
          <div class="box-form">
            <h3>Applay Now</h3>
             <div class="row">
              <div class="col 12 m12 l12">
              <?php $cfsignupname='[contact-form-7 id="69" title="Arnett Creek - Lower Picketpost Mesa (UI) - 60 Nov 2016"]'?>
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