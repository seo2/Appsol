<?php
/**
 * Template Name: Industrias
**/
?>
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); 
if (have_posts()) :
   while (have_posts()) : the_post(); 
    $banner = get_field( 'banner'); 
    $resumen = get_field( 'resumen'); 
    $representatividad = get_field( 'representatividad'); 
    $calor_y_frio = get_field( 'calor_y_frio');
    $distribucion = get_field( 'distribucion');  
    $similares = get_field( 'similares'); 
?>
    <header >

         <img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>" class="img-responsive center-block" >

    </header>

    <div class="contenido" id="naranja">
        <section class="no-padding col-lg-10 col-lg-offset-1 top">
            <div class="col-lg-10 col-lg-offset-1">    
            <h2 class="cap text-center"><b><? the_title();?></b></h2>
            </div>
        </section>

        <section>
         <div class="container"><br>
             
            <div class="half-circle col-lg-1"></div>
            <div class="col-lg-11">
            <b>DESCRIPCIÓN</b><br>
            <? the_content();?> 
            </div>
            <div class="clearfix">&nbsp;</div> 
            
            <? if( !empty($representatividad) ): ?>
            <div class="half-circle col-lg-1"></div>
            <div class="col-lg-11">
            <b>REPRESENTATIVIDAD</b><br>
            La industria tipo que se describe a continuación busca representar un sector que puede incluir industrias correspondientes a distintos rubros. Estos rubros se recogen a continuación:<br><br>
            <img src="<?php echo $representatividad['url']; ?>" alt="<?php echo $representatividad['alt']; ?>" class="img-responsive center-block" >
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php endif; ?>

            <? if( !empty($calor_y_frio) ): ?>
            <div class="half-circle col-lg-1"></div>
            <div class="col-lg-11">
            <b>OPERACIONES CONSUMIDORAS DE CALOR Y FRÍO</b><br>
            A continuación se presentan las operaciones consumidoras de calor y frío en la industria tipo.<br><br>
            <img src="<?php echo $calor_y_frio['url']; ?>" alt="<?php echo $calor_y_frio['alt']; ?>" class="img-responsive center-block" >
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php endif; ?>

            <? if( !empty($distribucion) ): ?>
            <div class="half-circle col-lg-1"></div>
            <div class="col-lg-11">
            <b>DISTRIBUCIÓN DE NIVELES DE TEMPERATURA</b><br>
            A continuación se presenta la distribución de niveles térmicos según su peso relativo dentro de la industria, tanto por temperatura de operación, requerida, cómo de retorno, que llega al sistema solar.<br><br>
            <img src="<?php echo $distribucion['url']; ?>" alt="<?php echo $distribucion['alt']; ?>" class="img-responsive center-block" >
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php endif; ?>

            <? if( !empty($similares) ): ?>
            <div class="half-circle col-lg-1"></div>
            <div class="col-lg-11">
            <b>INDUSTRIA SIMULADA</b><br>
            Para simular la industria se integraron algunas operaciones con temperaturas de retorno similares, para obtener un total de 4 operaciones en la industria tipo. Éstas se presentan en la siguiente tabla:<br><br>
            <img src="<?php echo $similares['url']; ?>" alt="<?php echo $similares['alt']; ?>" class="img-responsive center-block" >
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php endif; ?>


         </div>   
        </section>
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>
