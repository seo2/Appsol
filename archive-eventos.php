<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
<header >

         <img src="<?php echo $themeURL; ?>/assets/img/banner_eventos.jpg" class="img-responsive center-block" alt="Somos agentes de cambio">
      
    </header>

    <div class="contenido">
        <section class="no-padding col-lg-10 col-lg-offset-1 top">
            <div class="col-lg-10 col-lg-offset-1">    
            <h2 class="cap text-center"><b>Eventos 2017</b></h2>
            </div>
        </section>

        <section>
         <div class="container"> 

         	<?php
         	if (have_posts()) :
			    while (have_posts()) : the_post(); 
				  $detalles = get_field('ev-detalles', $post->ID);
			    ?>
			         
			   		<div class="clearfix">&nbsp;</div>
            		<div class="clearfix">&nbsp;</div>

            		<h2 class="text-center"><?php the_title(); ?></h2>
		            <div class="bg_yellow text-center ev-detalle">
		                <div class="clearfix">&nbsp;</div>
		               <?php echo $detalles; ?>
		                <div class="clearfix">&nbsp;</div>
		            </div>
		            <br>
		            <div class="col-lg-5 col-md-5 sr-button">

		                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive  sombra center-block" alt="">
		            </div>
		            <div class="col-lg-6 col-md-6 pull-right sr-button padding-top ev-content">
		                <?php the_content(); ?>
		                <div class="boton2 text-left padding-top"><a class="page-scroll" href="#formulario">Inscribirse</a></div>
		            </div>
			   <?php endwhile;
			endif;
			?>
         </div>   
        </section>


        <section id="formulario">
            <div class="container">
            <img src="<?php echo $themeURL; ?>/assets/img/frase_eventos.png" class="img-responsive center-block sr-button"> <br>

            <div   id="formid" class="col-lg-8 col-lg-offset-2 sr-icons">          
              
              <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
               
            </div>


            </div>
        </section>    



    </div>

<?php get_footer(); ?>