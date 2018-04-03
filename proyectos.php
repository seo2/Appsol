<?php
/**
 * Template Name: Proyectos
**/
?>
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
<header></header>
    <section class=" no-padding">
        <div id="bg_proyectos" class="container">           
             
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="col-xs-offset-2 col-sm-offset-1  col-md-offset-1  col-lg-offset-2" >
            <figure class="snip">
              <img src="<?php echo $themeURL; ?>/assets/img/proyectos/ico_01.jpg" />
              <figcaption><i class="text-center">AppSol</i></figcaption>
              <a href="<?php echo bloginfo('url');?>/appsol"></a>
            </figure>
            <figure class="snip">
              <img src="<?php echo $themeURL; ?>/assets/img/proyectos/ico_02.jpg" />
              <figcaption><i class="text-center">SolCoolAgreo</i></figcaption>
              <a href="#"></a>
            </figure>
            <figure class="snip">
              <img src="<?php echo $themeURL; ?>/assets/img/proyectos/ico_03.jpg" />
              <figcaption><i class="text-center">Formaciones</i></figcaption>
              <a href="<?php echo bloginfo('url');?>/formacion"></a>
            </figure>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>



        </div>
        
    </section>
   <?php get_footer(); ?>
