<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
	<header>

         <img src="<?php echo $themeURL; ?>/assets/img/banner_casos.jpg" class="img-responsive center-block" alt="Somos agentes de cambio">
            
        <div id="cajita" class="eventos">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 text-center">
        				<div id="la-cajita">
            				<span class="bolita bolita-r"></span>
            				<span class="bolita bolita-l"></span>
        					<p><strong>Casos de Éxito</strong> <br> Revisa las empresas que ya operan con energía Solar.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      
    </header>

    <div class="contenido">
        <section class="no-padding col-lg-10 col-lg-offset-1 top">
            <div class="col-lg-10 col-lg-offset-1">    
            <h2 class="cap text-center"><b>Casos de Exito</b></h2>
            </div>
        </section>

        <section>
         <div class="container"> 

         	<?php
            $args = array(
              'post_type' => 'casos',
              'showposts' => -1,
              'orderby'   => array(
                'date' =>'ASC',
                /*Other params*/
               )
            );
            $my_query = new WP_Query($args); 
            if( $my_query->have_posts() ) : 
               while ($my_query->have_posts()) : $my_query->the_post();   
             
            ?>
			         
			   		<div class="clearfix">&nbsp;</div>
		             
		            <br>
		            <div class="col-lg-6 col-md-5 sr-button">

		                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive  sombra center-block" alt="">
		            </div>
		            <div class="col-lg-5 col-md-6 sr-button ev-content">
                    <h2 class="text-left"><?php the_title(); ?></h2>
		                <?php the_excerpt(); ?>
		                <div class="boton2 text-left padding-top"><a  href="<? the_permalink()?>">Ver más</a></div>
		            </div>
			   <?php endwhile; 
			endif;
			?>
         </div>   
        </section>

 


    </div>

<?php get_footer(); ?>