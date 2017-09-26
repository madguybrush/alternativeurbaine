<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alternativeurbaine
 */

?>

	</div><!-- #content -->



<!-- Footer -->
<footer class="text-center">

<div class="contenu container-fluid">
     <div class="row">
	    <div class="col-xs-12 col-sm-7 col-md-5">
			<div class="row">
				<div class="col-xs-12">
					<h2>Une offre de tourisme alternatif pour un nouveau regard sur la ville</h2>
				</div>

				<div class="col-sm-12 col-md-7">
					<img src="<?php bloginfo('stylesheet_directory');?>/img/logofooter.png" class="logofooter">
				</div>
				<div class="col-sm-12 col-md-5">
					<address>
					2 rue Jules Guesde<br>
					33800 Bordeaux - France
					<br><br>
					(+33) 06 47 05 54 01
					</address>
					<a href="" class="btncontact"><img src="<?php bloginfo('stylesheet_directory');?>/img/contactfooter.png" class="contactfooter"></a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-offset-1 col-sm-4 col-md-offset-3 col-md-4">
			<div class="row">
				<div class="col-xs-12 col-sm-7">
					
					
					<h3 class="social">
					Suivez-nous
					
					<a href="" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/footerinstagram.png" 
					onmouseover="this.src='<?php bloginfo('stylesheet_directory');?>/img/headerinstagram.png'"  
					onmouseout="this.src='<?php bloginfo('stylesheet_directory');?>/img/footerinstagram.png'"> 
					</a>
					<a href="https://www.facebook.com/alternativeurbaine.bordeaux/?fref=ts" target="blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/footerfacebook.png" 
					onmouseover="this.src='<?php bloginfo('stylesheet_directory');?>/img/headerfb.png'"  
					onmouseout="this.src='<?php bloginfo('stylesheet_directory');?>/img/footerfacebook.png'"> 
					</a>
</h3>
			

					
				</div>

				<div class="col-xs-12 col-sm-5">
					<h3><img src="<?php bloginfo('stylesheet_directory');?>/img/paris.png" style="vertical-align: middle;"></h3>
				</div>
				<div class="col-xs-12">
					<br> <br><br>  
				</div>
				
				<div class="col-xs-12">
					<span><a class="mentions" href="">Mentions légales</a></span> <span>2017 l’alternative Urbaine - Bordeaux</span> 
				</div>

				
			</div>
		</div>
	</div>

</div>



</footer>

<section id="soutien" >

<div class="contenu container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h3>Ils nous soutiennent</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien1ATIS.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien2logobms.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien3ARE33.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien4logoFSE.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien5bordeaux.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<img class="max100" src="<?php bloginfo('stylesheet_directory');?>/img/soutien6bdxmetropole.png">
				</div>
			</div>
			

			
</div>

</section>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
