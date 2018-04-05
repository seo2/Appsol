
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
    <header >

            <div class="slick wow fadeIn">
                <?php 
                    // QUERY CUSTOM POST TYPE : BANNER 
                    $args = array(
                        'post_type' => 'sliderhome'
                    );
                    $the_query = new WP_Query( $args ); 

                    if($the_query -> have_posts()) :                 
                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?> 
                <div class="slide">
	                <h1><?php the_title(); ?></h1>            	
					<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive center-block" alt="">
                </div>
               
                <?php endwhile;
                      endif;
                wp_reset_postdata(); ?>    

            </div>    
            
            <div id="cajita">
            	<div class="container">
            		<div class="row">
            			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 text-center">
            				<div id="la-cajita">
	            				<span class="bolita bolita-r"></span>
	            				<span class="bolita bolita-l"></span>
            					<p><strong>APPSOL</strong> tiene por objetivo entregar al mercado conocimiento y herramientas 
para el desarrollo de las distintas aplicaciones de la energía solar en la industria.
</p>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            
              
    </header>

            <?php
            $args = array(
              'post_type' => 'casos',
              'showposts' => 1,
              'orderby'   => 'rand',
                
            );
            $my_query = new WP_Query($args); 
            if( $my_query->have_posts() ) : 
               while ($my_query->have_posts()) : $my_query->the_post();   
            ?>



    <section  id="industrias_home" >
        <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-right">
                    <h2 class="section-heading sr-button"><?php the_title(); ?></h2>
                    <h3 class="section-heading sr-button">CASOS DE EXITO</h3>
                </div>
                <div class="col-lg-6">
                     
                </div>
            </div>
        </div>

        <div class="col-lg-6 paddingtop sr- sr-icons">
            <div class=""><?php the_excerpt(); ?></div>
            <br><br>
            <a href="<?php echo bloginfo('url');?>/casos" class="pull-right">Ver todos los casos <i class="fa fa-long-arrow-right fa-lg"></i></a>
        </div>
        <div class="col-lg-6">
 
              <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-responsive" />
               
            
        </div>
    </section>


            <?php endwhile;
            endif;
            ?>

    <section class=" no-padding">
        <div class="bg_gris_b container no-padding">
            <h1 class="text-center"><b>PLANES</b></h1>

            
            

            <!-- ESTRUCTURA EVENTOS -->
            <?php 
              $the_query = new WP_Query( array(
                'post_type' => 'cursosyseminarios',
                'showposts' => 2,
                'orderby'   => array(
                'date' =>'ASC',
                /*Other params*/
               )
              ));
            ?>
                                                                  
            <!-- Start our WP Query -->
            <?php $i=0; while ($the_query -> have_posts()) : $the_query -> the_post(); $i++; ?>
            <? if($i==1):?>
            <div class="pull-right col-lg-6 col-md-6 sr-icons">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive  sombra center-block" alt="">
            </div>
            <div class="pull-right text-right col-lg-5 col-md-5 sr-button">
            <h3 class="cap bordertitright "><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a href="<? the_permalink();?>" class="pull-right" >Ver más <i class="fa fa-long-arrow-right fa-lg"></i></a>
            </div>
            <div class="clearfix">&nbsp;</div>  
             <? else:?> 

            <div class="col-lg-6 col-md-6 sr-icons ">
                <img src="<?php echo $themeURL; ?>/assets/img/planes02.jpg" class="img-responsive  sombra center-block" alt="">
            </div>
            <div class="col-lg-5 col-md-5 text-left sr-button">
            <h3 class="cap bordertitleft"><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a href="<? the_permalink();?>" class="pull-left"><i class="fa fa-long-arrow-left fa-lg"></i> Ver más</a>
            </div>
            <div class="clearfix">&nbsp;</div>

            <? endif;?>  

            
            <?php 
              endwhile;
              wp_reset_postdata();
            ?>


            <div class="clearfix">&nbsp;</div>

        </div>
        <div class="bg_gris container">
             
            <h1 class="text-center txtyellow"><b>EVENTOS</b></h1>


            <!-- ESTRUCTURA EVENTOS -->
            <?php 
              $the_query = new WP_Query( array(
                'post_type' => 'eventos',
                'showposts' => 2,
                'orderby'   => array(
                'date' =>'ASC',
                /*Other params*/
               )
              ));
            ?>
                                                                  
            <!-- Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                  <div class="col-lg-6 col-md-6 sr-button">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive  sombra center-block" alt="">
                  </div>
                  <div class="col-lg-5 col-md-5 col-lg-offset-1 text-left sr-icons">
                    <h3 class="cap bordertitleft txtyellow"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                  </div>
                  <div class="clearfix">&nbsp;</div>
            <?php 
              endwhile;
              wp_reset_postdata();
            ?>

            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="boton text-center cap sr-icons"><a href="<?php echo get_post_type_archive_link( 'eventos' ); ?>">Ver mas eventos</a></div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            
        </div>
    </section>

 
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>

   <?php get_footer(); ?>