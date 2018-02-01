<?php 

/*		
	Template name: Startsida
*/

get_header(); 
the_post();
?>

	<div class="lightstore-wrap">

		<div class="container">
			<div class="light">

				<div class="light__bulb">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/kvist-lampa.png">
					<div class="light__bulb__glow__l"></div>
					<div class="light__bulb__glow__r"></div>
				</div>

			</div>
		</div>
	
	</div>

	<!-- Content med masonry-flöde -->
	<div id="content">
		<div id="container" class="container clearfix">

         <div class="element clearfix col--2-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__aboutimg'); ?>" alt="Lars Qvist">
            </div>
         </div>

         <div class="element clearfix col--1-2 home larsqvist__qoute">
            <div class="greyed">
               <p class="small">Lars Qvist</p>
               <?php the_content();?>
               <img src="<?php bloginfo('stylesheet_directory'); ?>/images/larsqvist-signature.png" style="max-width: 200px;">
            </div>
         </div>

         <div class="element clearfix col--1-1 home lightswitch">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/darkside.png" class="lightswitch__off">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/lightside.png" class="lightswitch__on">
         </div>

         <div class="element clearfix col--1-1 home agency">
            <a href="<?php the_field('lightstore__fb'); ?>" target="_blank" title="">
               <div class="greyed social">
                  <p class="small">
                     Facebook
                  </p>
                  <h4>
                     Gilla min sida på Facebook
                  </h4>
                  <h6 class="social-header">
                     <i class="fa fa-facebook"></i>
                  </h6>
                  <span class="arrow-right dark"></span>
               </div>
            </a>
         </div>

         <div class="element clearfix col--1-1 home portfolio">
            <a href="<?php bloginfo('url'); ?>/kontakt/" title="">
               <div class="greyed">
                  <p class="small">
                     Kontakt
                  </p>
                  <h4>
                     Hör av dig till mig!
                  </h4>
                  <span class="arrow-right dark"></span>
               </div>
            </a>
         </div>

         <div class="element clearfix col--1-1 home contact">
            <a href="https://www.google.se/maps/place/Bolagsv%C3%A4gen+7,+702+36+%C3%96rebro/@59.2130902,15.1370566,16.12z/data=!4m5!3m4!1s0x465c13481d63860b:0x1701239e8f2b4a3a!8m2!3d59.2132123!4d15.1422073" target="_blank" title="">
               <div class="greyed">
                  <p class="small">
                     Besöksadress
                  </p>
                  <h4>
                     Bolagsvägen 7, 702 36 Örebro
                  </h4>
                  <h6 class="social-header">
                     <i class="fa fa-map-signs"></i> Guidning dit?
                  </h6>
                  <span class="arrow-right dark"></span>
               </div>
            </a>
         </div>

      </div>

      <div id="container" class="container clearfix">

         <div class="element clearfix col--1-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__projectimg'); ?>"/>
            </div>
         </div>

         <div class="element clearfix col--2-2 home">
         	<div class="greyed">
         		<p class="small">
         			<?php the_field('lightstore__projecttitle'); ?>
         		</p>
         		<h4>
         			<?php the_field('lightstore__projecttxt'); ?>
         		</h4>
         	</div>
         </div>

         <div class="element clearfix col--2-2 home with-bg portfolio">
         	<div class="borders">
         		<img src="<?php the_field('lightstore__projectimg'); ?>"/>
         	</div>
         </div>

         <div class="element clearfix col--2-2 home with-bg portfolio">
         	<div class="borders">
         		<img src="<?php the_field('lightstore__projectimg_2'); ?>"/>
            </div>
         </div>

         <div class="element clearfix col--2-2 home ">
         	<div class="greyed">
         		<p class="small">
                  <?php the_field('lightstore__projecttitle_2'); ?>
               </p>
               <h4>
                  <?php the_field('lightstore__projecttxt_2'); ?>
               </h4>
         	</div>
         </div>

         <div class="element clearfix col--1-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__projectimg_2'); ?>"/>
            </div>
         </div>

         <div class="element clearfix col--1-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__projectimg_3'); ?>"/>
            </div>
         </div>

         <div class="element clearfix col--2-2 home ">
         	<div class="greyed">
         		<p class="small">
                  <?php the_field('lightstore__projecttitle_3'); ?>
               </p>
               <h4>
                  <?php the_field('lightstore__projecttxt_3'); ?>
               </h4>
         	</div>
         </div>

         <div class="element clearfix col--2-2 home with-bg portfolio">
         	<div class="borders">
         		<img src="<?php the_field('lightstore__projectimg_3'); ?>"/>
         		<div class="overlay"></div>
         	</div>
         </div>

         <div class="element clearfix col--2-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__projectimg_4'); ?>"/>
            </div>
         </div>

         <div class="element clearfix col--2-2 home">
            <div class="greyed">
               <p class="small">
                  <?php the_field('lightstore__projecttitle_4'); ?>
               </p>
               <h4>
                  <?php the_field('lightstore__projecttxt_4'); ?>
               </h4>
            </div>
         </div>

         <div class="element clearfix col--1-2 home with-bg portfolio">
            <div class="borders">
               <img src="<?php the_field('lightstore__projectimg_4'); ?>"/>
            </div>
         </div>
              
      </div>
   </div>

<?php get_footer(); ?> 		