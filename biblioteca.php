<?php
/**
 * Template Name: Biblioteca
**/
?>
<?php get_header(); ?>
<?php $themeURL = get_stylesheet_directory_uri(); ?>
    <header >
         <img src="<?php echo $themeURL; ?>/assets/img/banner_biblioteca.jpg" class="img-responsive center-block" alt="Somos agentes de cambio">     
    </header>

    <div class="contenido bg_gris_c">
         <div class="bbl-title text-center bg_gris_c col-lg-8 col-lg-offset-2 no-padding"><h2>Documentos Para Descargar</h2></div>
      <section>
             <div class="container no-padding biblioteca">
                
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                    <!-- Tabs -->
                <div class="col-lg-8 no-padding" id="exTab1">

                    <?php
                        $taxonomy = 'descargas';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy

                        if ( $terms && !is_wp_error( $terms ) ) :
                            $catCount = 1;
                        ?>
                            <ul class="nav nav-pills">
                                <?php foreach ( $terms as $term ) { ?>
                                    <?php if($catCount == 1): ?>
                                        <li class="active"><a href="#p<?php echo (string)$catCount; ?>" data-toggle="tab"><?php echo $term->name; ?></a></li>
                                    <?php else: ?>
                                        <li><a href="#p<?php echo (string)$catCount; ?>" data-toggle="tab"><?php echo $term->name; ?></a></li>
                                    <?php endif; ?>
                                    <?php $catCount++; ?>
                                <?php } ?>
                            </ul>
                            <div class="tab-content">
                                <?php $tabCount = 1; ?>
                                <?php foreach ( $terms as $term ) : ?>
                                    <div class="tab-pane <?php if($tabCount == 1){ echo 'active'; } ?>" id="p<?php echo (string)$tabCount; ?>">
                                        <div class="clearfix">&nbsp;</div>
                                        <div class="col-lg-12 no-padding">
                                            <table  class="tablacentrada" width="100%"  cellpadding="0" cellspacing="0" border="0" >

                                                <!-- Define our WP Query Parameters -->
                                                <?php 
                                               $the_query = new WP_Query( array(
                                                        'post_type' => 'biblioteca',
                                                        'tax_query' => array(
                                                            array (
                                                                'taxonomy' => 'descargas',
                                                                'field' => 'slug',
                                                                'terms' => $term->slug,
                                                            )
                                                        ),
                                                    ) );
                                                    ?>
                                                                                                    
                                                <!-- Start our WP Query -->
                                                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                                <?php $file = get_field('desc-file', $post->ID); ?>
                                                    <tr>
                                                        <td><?php the_title(); ?></td>
                                                        <td class="am text-center"> <a href="<?php echo $file['url']; ?>"><i class="fa fa-file-pdf-o"></i> Descargar</a></td>
                                                    </tr>
                                                <?php endwhile;
                                                wp_reset_postdata();
                                                ?>   
                                            </table>
                                        </div>
                                    </div>

                                    <?php $tabCount++; ?>
                                <?php endforeach; ?>
                            </div>
                    <?php endif ;?>
                </div>
                <div class="bbl-footer bg_gris_c"></div>
            </div>   
        </section>
    </div>
    <div class="bbl-footer bg_gris_c col-lg-8 col-lg-offset-2 no-padding"></div>

   <?php get_footer(); ?>