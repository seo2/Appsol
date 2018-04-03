<?php
/**
 * Template Name: Industrias
**/
?>
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); 
if (have_posts()) :
   while (have_posts()) : the_post(); 
?>
    <header >

         <img src="<?php echo $themeURL; ?>/assets/img/banner_casos.jpg" class="img-responsive center-block" >

    </header>

    <div class="contenido">
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
            

         </div>   
        </section>
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>
