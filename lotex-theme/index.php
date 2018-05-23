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

          <h1 data-aos="fade-right">Welcome to NeoLotex <br>Business Solutions</h1>
           <p><?php echo get_post_meta($post->ID,'about-banner',true);?></p>
          <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/company/">Read More</a></button>
        </div>
      </div>
      <video autoplay muted loop id="myVideo">
        <source src="<?php bloginfo('template_url'); ?>/assets/video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
  </section>
</div>

<!-- Our Offerings -->
<!-- =============================================== -->

  <section class="our_offering">
  <div class="container">
  <h2>Our Offerings
  <i><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/brand-icon.png" /></i></h2>
  <p>NeoLotex Business Solutions is an Information Technology company which provides technology solutions to customers, across the globe, spanning a range of verticals. The Company provides software products, IT services and Business Process Outsourcing (BPO) for a variety of industry verticals including Telecom, Insurance, Banking, Capital Markets, Government, Manufacturing and Retail.</p>
  <div class="row">

  <?php
     query_posts(array('category_name'=>'home_offer','posts_per_page' => 3));
     while ( have_posts() ) : the_post();
  ?>
  <div class="col s12 l4 m4" data-aos="fade-up">
  <div class="box-offer">
  <div class="box-image-s"><?php the_post_thumbnail('full',array("class"=>"img_fit")); ?></div>
  <div class="box-detail">
  <h3><?php echo get_the_title(); ?></h3>
  <?php the_content(); ?>
  <button class="hvr-shutter-out-horizontal"><a href="<?php echo get_post_meta($post->ID,'offer_url',true);?>">Read More</a></button>

  </div>
  </div>
  </div>

  <?php
    endwhile;
  ?>

  <!-- <h3>Technology Services</h3>
  <p>Lotex has been delivering comprehensive software development solutions by planning, designing, developing, testing, implementing and maintaining programs/projects in various domains....</p>
   -->
   <!-- <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/technology-service/">Read More</a></button> -->

  <!-- <div class="col s12 l4 m4" data-aos="fade-up">
  <div class="box-offer">
  <div class="box-image-s"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/business-3324394_1920.jpg" /></div>
  <div class="box-detail">
  <h3>Business Process Outsourcing</h3>
  <p>We deliver innovative and value added Business Process Utility (BPU) services across Banking, Telecomm and Insurance domains.
    Lotex’s comprehensive suite of services is delivered through a combination of domain knowledge,...</p>
  <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/outsourcing/">Read More</a></button>
  </div>
  </div>
  </div> -->

  <!-- <div class="col s12 l4 m4" data-aos="fade-up">
  <div class="box-offer">
  <div class="box-image-s"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/printer-2178754_1920.jpg" /></div>
  <div class="box-detail">
  <h3>Scanner Dealership</h3>
  <p>Paper Document is still an indispensible part of our daily corporate life and working with paper comes with special
    challenges like Storing, Sorting and Extracting. What we essentially lose is Time, Money , Resource and some very important achievements.</p>

  <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/scanner-dealership/">Read More</a></button>

  </div>
  </div>
  </div> -->

  </div>
  </div>


  </section><section class="abt-lotext">
  <div class="row">
  <div class="col s12 l6 m12 hide-on-med-and-down"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/christopher-gower-291246-unsplash.jpg" /></div>
  <div class="col s12 l6 m12 detail-lotex">
  <div class="content-box">
    <?php
        query_posts('category_name=about_lotex_home' );
        while ( have_posts() ) : the_post();
    ?>
  <h3 data-aos="fade-in"><?php echo get_the_title(); ?></h3>
  <?php the_content(); ?>
  <button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/company/">Read More</a></button>
  <?php
    break;
    endwhile;
  ?>
  </div>
  <img class="hide-on-med-and-down" src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/office-3309862_1920.jpg" />

  </div>
  </div>
  </section><section class="stats">
  <div class="stats-box"><i data-aos="zoom-in"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/stats1.png" /></i>
  <h4>80+Employees</h4>
  </div>
  <div class="stats-box"><i data-aos="zoom-in"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/stats2.png" /></i>
  <h4>12+Years of History</h4>
  </div>
  <div class="stats-box"><i data-aos="zoom-in"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/stats3.png" /></i>
  <h4>450+Projects Completed</h4>
  </div>
  <div class="stats-box"><i data-aos="zoom-in"><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/stats4.png" /></i>
  <h4>350+Satisfied Clients</h4>
  </div>
  </section><!-- Clients -->
  <!-- =============================================== -->

  <section class="client">
  <div class="container">
  <div class="row logos-list">
  <div class="col l5 m5 s12">
  <div class="client-logos">
  <div class="quotes">
  <div class="bubble">
  <ul>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo21.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo19.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo18.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo20.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo17.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo16.png" />
  </i></li>
  </ul>
  </div>
  <div class="bubble">
  <ul>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo15.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo12.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo13.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo14.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo9.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo10.png" />
  </i></li>
  </ul>
  </div>
  <div class="bubble">
  <ul>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo11.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo8.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo7.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo5.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo3.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo4.png" />
  </i></li>
  </ul>
  </div>
  <div class="bubble">
  <ul>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo2.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo1.png" />
  </i></li>
   	<li class="valign-wrapper"><i>
  <img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/logo6.png" />
  </i></li>
  </ul>
  </div>
  </div>
  </div>
  </div>


  <div class="col l7 m7 s12">
  <div class="client-about">
  <?php
      query_posts('category_name=world_best_client' );
      while ( have_posts() ) : the_post();
  ?>
  <h3 data-aos="fade-in"><?php echo get_the_title(); ?></h3>
    <?php the_content(); ?>
  <?php
    break;
    endwhile;
  ?>

  </div>
  </div>



  </div>
  <div class="row partner">
  <div class="col s12 l12 m12" data-aos="zoom-in">
  <h2 data-aos="fade-right">Every Client is a Partner</h2>
  <p>We provide custom Solutions for our clients. See for yourself</p>
  </div>

  <?php
     query_posts(array('category_name'=>'home_client_partners','posts_per_page' => 3));
     while ( have_posts() ) : the_post();
  ?>

  <div class="col s12 m12 l4">
  <div class="head-section"><i><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/qout.png" /></i>
  <div class="name-postion">
  <h3><?php echo get_the_title(); ?></h3>
  <p><?php echo get_post_meta($post->ID,'designation-client-home',true);?></p>
  </div>
  <div class="write-up">
  <?php the_content(); ?>
  </div>
  </div>
  </div>

  <?php
    endwhile;
  ?>


  <!-- <div class="col s12 m12 l4">
  <div class="head-section"><i><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/qout.png" /></i>
  <div class="name-postion">
  <h3>Customer2</h3>
  <p>Director- Mediserve Nursing Agency, Australia</p>
  </div>
  <div class="write-up">
  <p data-aos="fade-up">Lotex Business Solution has consistently worked with us to build our company site over a number of months</p>
  </div>
  </div>
  </div> -->


  <!-- <div class="col s12 m12 l4">
  <div class="head-section"><i><img src="http://lotex.co.in/neolotex/wp-content/uploads/2018/04/qout.png" /></i>
  <div class="name-postion">
  <h3>Customer3</h3>
  <p>Director- Mediserve Nursing Agency, Australia</p>
  </div>
  <div class="write-up">
  <p data-aos="fade-up">Lotex Business Solution has consistently worked with us to build our company site over a number of months</p>
  </div>
  </div>
  </div> -->

  </div>
  <div class="row">
  <div class="col s12 l12 m12"><button class="hvr-shutter-out-horizontal"><a href="http://lotex.co.in/neolotex/more-clients/">More Client Reviews</a></button></div>
  </div>
  </div>
  </section>



<?php get_footer(); ?>
