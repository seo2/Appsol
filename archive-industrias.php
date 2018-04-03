<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
    <header >

         <img src="<?php echo $themeURL; ?>/assets/img/banner_industrias.jpg" class="img-responsive center-block" >
      
    </header>

    <div class="contenido" id="naranja">
        <section class="no-padding col-lg-10 col-lg-offset-1 top">
            <div class="col-lg-10 col-lg-offset-1">    
            <h2 class="cap text-center"><b></b></h2>
            </div>
        </section>

        <section>
         <div class="container"> 
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <?php
            $args = array(
              'post_type' => 'industrias',
              'showposts' => -1,
              'orderby'   => array(
                'date' =>'ASC',
                /*Other params*/
               )
            );
            $my_query = new WP_Query($args); 
            if( $my_query->have_posts() ) : 
               while ($my_query->have_posts()) : $my_query->the_post();   
                $resumen = get_field( 'resumen');
            ?>
              <div id="industria" class="col-lg-3 col-md-4 sr-button">
                <div class="fondo">
                <div class="col-xs-offset-2 col-sm-offset-4  col-md-offset-2 col-lg-offset-1" >
                  <figure class="snip">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                    <figcaption><i class="text-center"><?php the_title(); ?></i></figcaption>
                    <a href="<? the_permalink()?>"></a>
                  </figure>
                </div>
                <h5 class="text-center negrita"><?php the_title(); ?></h5>
                <small class="text-center"><?php echo $resumen; ?></small> 
                <div class="boton text-center"><a href="<? the_permalink()?>">Ver Industria</a></div>
                </div>
              </div>
            <?php endwhile;
             wp_reset_postdata();
            endif;
            ?>
         </div>   
        </section>
    </div>
<?php get_footer(); ?>
