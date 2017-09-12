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
  
<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
	
<!--    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">-->
    
<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
-->
<!--
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<?php wp_head(); ?>
    
</head>

<!-- <body --> <?php /*body_class();*/ ?><!-- > -->
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">


	 <!-- 1. nav FB -->
<div id="navfb">
		<a href=""> Suivez-nous</a>
		<a href=""><img src="img/headerinstagram.png"></a>
		<a href=""> <img src="img/headerfb.png"></a>
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
		  <div class="logotop col-xs-8 col-sm-4"><a  href="index.html"><img  src="img/logo1024.png" alt="Alternative Urbaine Bordeaux" ></a></div>
		  
		  <div class="col-sm-4" id="navfb1024">
			<a href=""><img src="img/headerinstagram.png"></a>
			<a href=""> <img src="img/headerfb.png"></a>
			
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
		  
		  <div class="logotop"><a  href="index.html"><img  src="img/logo.png" alt="Alternative Urbaine Bordeaux" ></a></div>
		  
		  <div id="navfb1024">
			<a href=""> Suivez-nous <img src="img/fbtop.png"></a> <!--<i class="fa fa-facebook-square" aria-hidden="true"></i> -->
			</div> 
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav "><!--navbar-right-->
			<!--<li><a href="#myPage">HOME</a></li>-->
			<li><a href="nosbalades.html">NOS BALADES</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="noseclaireurs.html">NOS ECLAIREURS</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="offreentreprises.html">NOTRE OFFRE ENTREPRISES</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="qui.html">QUI SOMMES-NOUS ?</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="faq.html">FAQ</a> <i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><a href="contact.html">CONTACT</a></li>
			
		  </ul>
		</div>

  </div>
</nav>


    

	<!--<header id="masthead" class="site-header">-->
        
       		<div class="site-branding">
			<?php

			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php /*echo $description;*/ /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
 


        
        
		<nav id="site-navigation" class="navbar navbar-default">
            <!--navbar-fixed-top-->
            <div class="container-fluid">
                <div class="navbar-header">
            
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    
			         <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php /*esc_html_e( 'Primary Menu', 'alternativeurbaine' );*/ ?><!--</button>-->
                    
                          <a class="navbar-brand" href="#myPage"><?php the_custom_logo(); ?></a>
                    </div>
                      <!--  <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">-->
                    
                             <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'nav navbar-nav navbar-right',
                                    'container_class' => 'collapse navbar-collapse',
                                    'link_after' => '<i class="fa fa-circle" aria-hidden="true"></i>',
                                    'after' => '<i class="fa fa-circle" aria-hidden="true"></i>',
                                    'menu_id'        => 'primary-menu',
                                ) );
                            ?>
                                
                           <!-- </ul>
                    </div>-->
        
                </div>
            </div>
		</nav><!-- #site-navigation -->
	<!--</header>--><!-- #masthead -->

	<div id="content" class="site-content">
