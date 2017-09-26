<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package alternativeurbaine
 */

get_header(); ?>


<!-- CAROUSSEL (hp only) -->
<?php
            if ( is_front_page()  ) : ?>


               <!-- 3. Carousel Homepage -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
 
    <div class="carousel-inner" role="listbox">

	
      <div class="item active">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/contenuslider1.jpg" alt="" >
        <div class="carousel-caption">
			<a href=""><img class="imgplus" src="<?php bloginfo('stylesheet_directory');?>/img/pucecaption.png" ></a>
			<h3>Bacalan : les coulisses d'un quartier en mutation</h3>
		  	<div class="arrow-upright"></div>
         </div>     
      </div>

	        <div class="item">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/contenuslider2.jpg" alt="" >
        <div class="carousel-caption">
			<a href=""><img class="imgplus" src="<?php bloginfo('stylesheet_directory');?>/img/pucecaption.png" ></a>
			<h3>Belcier : les coulisses d'un quartier en mutation</h3>
		  	<div class="arrow-upright"></div>
         </div>     
      </div>


		
    </div>

	
	<div class="indicatorcontainer">


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	  <img class="chevronleft" src="<?php bloginfo('stylesheet_directory');?>/img/pucegauche.png">
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
	  	  <img class="chevronright" src="<?php bloginfo('stylesheet_directory');?>/img/pucedroite.png">
      <span class="sr-only">Next</span>
    </a>
	
	</div>
	
	
	
    <!-- slider mobile -->
	<!-- <div id="slider768"> -->
    <a class=" left carousel-control" href="#myCarousel" role="button" data-slide="prev">

	  <img class="chevronleft slidermobile" src="<?php bloginfo('stylesheet_directory');?>/img/pucegauche.png">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control slidermobile" href="#myCarousel" role="button" data-slide="next">
	  	  <img class="chevronright" src="<?php bloginfo('stylesheet_directory');?>/img/pucedroite.png">
      <span class="sr-only">Next</span>
    </a>
	<!-- </div> -->
	
	      <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
      <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
</div>

           <?php /*else : */?>
            <!--     <p class="site-title">pas home</p>-->
            <?php
            endif;
?>
<!-- fin CAROUSSEL -->


<!-- bandeau + CHEMIN DE FER (sauf homepage) -->
<?php if ( ! is_front_page() ) { 
  
//afficher bandeau (=image associée à la page)   
    
    ?>
<div id="headerimg">
<?php the_post_thumbnail(); ?>
</div>


<?php
 //chemin de fer (= <img src> <a href="???">Accueil</a> > #titredelapage get_the_title() )
    

    ?>

<div id="bread">
<img src="<?php bloginfo('stylesheet_directory');?>/img/breadpicto.png"> <span class="orange chevron"> > </span> <span class="texte"><?php $titre = get_the_title(); echo /*ucfirst(strtolower($titre))*/ $titre; ?></span>
</div>

<?php
 
} /* fin if is not front page*/

?>

<!-- FIN bandeau +CHEMIN DE FER -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
