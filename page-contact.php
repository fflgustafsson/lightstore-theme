<?php 

/*		
	Template name: Kontakt
*/

get_header(); 
the_post();
?>

<div id="container" class="container clearfix">

  <div class="element clearfix col--1-2 home contact">
    <div class="greyed">
      <p class="small"><?php the_title(); ?></p>
      <h4><?php the_content();?></h4>
    </div>
  </div>

  <div class="element clearfix col--2-2 with-bg home">
    <div class="borders">
      <?php the_post_thumbnail(); ?>
      <div class="overlay"></div>
      <div class="parent">
        <div class="bottom">
          <h3>Lars Qvist</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="element clearfix col--1-2 home contact hover-without-link">
    <div class="greyed">
      <p class="small">Kontaktformulär</p>

      <?php echo do_shortcode( '[contact-form-7 id="48" title="Kontaktformulär"] ') ?>
            
    </div>
    </div> 
     <!--  // Gömd för att formuläret skapar dumt nog en extra div så det stänger allt... -->

    <div class="element clearfix col--1-1 home contact">
      <a href="https://www.google.se/maps/place/Bolagsv%C3%A4gen+7,+702+36+%C3%96rebro/@59.2130902,15.1370566,16.12z/data=!4m5!3m4!1s0x465c13481d63860b:0x1701239e8f2b4a3a!8m2!3d59.2132123!4d15.1422073" target="_blank" title="Länk till google maps om Lightstores besöksadress">
        <div class="greyed">
          <p class="small">Besöksadress</p>
          <h4>Bolagsvägen 7, 702 36 Örebro</h4>
          <h6 class="social-header">
            <i class="fa fa-map-signs"></i> Guidning dit?
          </h6>
          <span class="arrow-right dark"></span>
        </div>
      </a>
    </div>

    <div class="element clearfix col--1-1 home">
      <a href="<?php the_field('lightstore__fb'); ?>" target="_blank" title="">
        <div class="greyed social">
          <p class="small">Facebook</p>
          <h4>Gilla min sida på Facebook</h4>
          <h6 class="social-header"><i class="fa fa-facebook"></i></h6>
          <span class="arrow-right dark"></span>
        </div>
      </a>
    </div>

  </div>

<?php get_footer(); ?> 	