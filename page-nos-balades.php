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

page-nos-balades.php

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
<img src="<?php bloginfo('stylesheet_directory');?>/img/breadpicto.png"> <span class="orange chevron"> > </span> <span class="texte"><?php $titre = get_the_title(); echo ucfirst(strtolower($titre)); ?></span>
</div>

<?php
 
} /* fin if is not front page*/

?>

<!-- FIN bandeau +CHEMIN DE FER -->

<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
// check for plugin using plugin name
/*$path =  plugins_url() . '/smp-manage-balades-bordeaux/smp-manage-balades.php';
echo $path;
if ( is_plugin_active($path) ) {
  echo "plugin is activated";
} */
?>

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
