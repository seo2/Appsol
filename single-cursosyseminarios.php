<?php
/**
 * Template Name: Cursos y seminarios
**/
?>
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); 
if (have_posts()) :
   while (have_posts()) : the_post(); 
    $descripcion = get_field( 'cys-descripcion');
?>
    <header >

         <img src="<?php echo $themeURL; ?>/assets/img/banner_seminario.jpg" alt="<?php echo $banner['alt']; ?>" class="img-responsive center-block" >

    </header>

    <div class="contenido" id="azul">
        <section class="no-padding col-lg-10 col-lg-offset-1 top">
            <div class="col-lg-10 col-lg-offset-1">    
            <h2 class="cap text-center"><b><? the_title();?></b></h2>
            </div>
        </section>

         
         <? echo $descripcion;?>    
       
    </div>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>
