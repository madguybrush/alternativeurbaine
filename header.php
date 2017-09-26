<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alternativeurbaine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Signika" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

<!--

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
-->
	<?php wp_head(); ?>
    
</head>

<!-- <body --> <?php /*body_class();*/ ?><!-- > -->
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">


	 <!-- 1. nav FB -->
<div id="navfb">
		<a href=""> Suivez-nous</a>
		<a href=""><img src="<?php bloginfo('stylesheet_directory');?>/img/headerinstagram.png"></a>
		<a href=""> <img src="<?php bloginfo('stylesheet_directory');?>/img/headerfb.png"></a>
		<!--<i class="fa fa-facebook-square" aria-hidden="true"></i> -->	
</div>
    
    
    
<!--
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'alternativeurbaine' ); ?></a>
    
-->
    
	 <!-- 2. logo + nav -->
<nav class="navbar navbar-default"> <!-- navbar-fixed-top-->

	<div class="container-fluid" id="monMenu">
	
			<div class="navbar-header-1024">
		 <div class="row padding15">
		  <div class="col-sm-4" >
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  </div>
		  <div class="logotop col-xs-8 col-sm-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img  src="<?php bloginfo('stylesheet_directory');?>/img/logo1024.png" alt="Alternative Urbaine Bordeaux" ></a></div>
		  
		  <div class="col-sm-4" id="navfb1024">
			<a href=""><img src="<?php bloginfo('stylesheet_directory');?>/img/headerinstagram.png"></a>
			<a href=""> <img src="<?php bloginfo('stylesheet_directory');?>/img/headerfb.png"></a>
			
			<!-- <br> -->
			<!-- <a href="" >Suivez-nous </a></div> -->
			<!--<i class="fa fa-facebook-square" aria-hidden="true"></i> -->
			</div> 

		</div>
		</div>
	
		<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  
		  <div class="logotop"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img  src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="Alternative Urbaine Bordeaux" ></a></div>
		  
		  <div id="navfb1024">
			<a href=""> Suivez-nous 
              <img src="<?php bloginfo('stylesheet_directory');?>/img/fbtop.png" /></a> 
             
			</div> 
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
<!--
		  <ul class="nav navbar-nav ">
			<li><a href="nosbalades.html">NOS BALADES</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="noseclaireurs.html">NOS ECLAIREURS</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="offreentreprises.html">NOTRE OFFRE ENTREPRISES</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="qui.html">QUI SOMMES-NOUS ?</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="faq.html">FAQ</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="contact.html">CONTACT</a></li>
              
              
		  </ul>
-->
            
                                         <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'nav navbar-nav',
                                    'after' => '<i class="fa fa-circle" aria-hidden="true"></i>',
                                    'menu_id'        => 'primary-menu',
                                ) );
                            ?>
            
                                                 <?php
//                                wp_nav_menu( array(
//                                    'theme_location' => 'menu-1',
//                                    'menu_class'     => 'nav navbar-nav',
//                                    'container_class' => 'navbar-collapse collapse',
//                                    'after' => '<i class="fa fa-circle" aria-hidden="true"></i>',
//                                    'menu_id'        => 'primary-menu',
//                                ) );
                            ?>
        
		</div>

  </div>
</nav>





	<div id="content" class="site-content">

