<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package alternativeurbaine
 */

get_header(); ?>



               <!-- 3. Carousel Homepage -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
 
    <div class="carousel-inner" role="listbox">
		  	  	   <!-- <div class="item active"> -->
            <!-- <video id="video1" class="video-fluid" controls>-->
			<!-- autoplay loop height="100%" -->
                <!-- <source src="img/aub.mp4" type="video/mp4" /> -->
            <!-- </video> -->
	
        <!-- </div> -->
	
      <div class="item active">
        <img src="img/contenuslider1.jpg" alt="" >
        <div class="carousel-caption">
			<a href=""><img class="imgplus" src="img/pucecaption.png" ></a>
			<h3>Bacalan : les coulisses d'un quartier en mutation</h3>
		  	<div class="arrow-upright"></div>
         </div>     
      </div>

	        <div class="item">
        <img src="img/contenuslider2.jpg" alt="" >
        <div class="carousel-caption">
			<a href=""><img class="imgplus" src="img/pucecaption.png" ></a>
			<h3>Belcier : les coulisses d'un quartier en mutation</h3>
		  	<div class="arrow-upright"></div>
         </div>     
      </div>

	        <!-- <div class="item "> -->
        <!-- <img src="img/contenuslider2.png" alt="" > -->
        <!-- <div class="carousel-caption"> -->
					<!-- <a href=""><img class="imgplus" src="img/pucecaption.png" ></a> -->
          <!-- <h3>Belcier : les coulisses d'un quartier en mutation</h3> -->
          	  		<!-- <div class="arrow-upright"></div> -->
        <!-- </div>       -->
      <!-- </div> -->

	  
	  

		

		
    </div>

	
	<div class="indicatorcontainer">


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	  <img class="chevronleft" src="img/pucegauche.png">
      <span class="sr-only">Previous</span>
    </a>
	    <!-- Indicators -->
    <ol class="carousel-indicators">
	

	
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
	  <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
	  

    </ol>
	
	  	  	   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	  	  <img class="chevronright" src="img/pucedroite.png">
      <span class="sr-only">Next</span>
    </a>
	
	</div>
	
	
	
    <!-- slider mobile -->
	<!-- <div id="slider768"> -->
    <a class=" left carousel-control" href="#myCarousel" role="button" data-slide="prev">

	  <img class="chevronleft slidermobile" src="img/pucegauche.png">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control slidermobile" href="#myCarousel" role="button" data-slide="next">
	  	  <img class="chevronright" src="img/pucedroite.png">
      <span class="sr-only">Next</span>
    </a>
	<!-- </div> -->
	
	      <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
      <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
</div>






	<div id="primary" class="content-area lol">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
            


			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
