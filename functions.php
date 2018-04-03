<?php
function iniciarTema(){
    add_theme_support( 'title-tag' );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );
//ESTILOS Y SCRIPTS
function my_assets() {
	$themeURL = get_stylesheet_directory_uri();
	wp_enqueue_style( 'boot-strap', $themeURL . '/vendors/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'theme-style', $themeURL . '/assets/css/style.css', array( 'boot-strap' ));
	wp_enqueue_style( 'font-awesome', $themeURL . '/vendors/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-lato', 'http://fonts.googleapis.com/css?family=Lato:400,700', false );
	wp_enqueue_style( 'font-varela', 'https://fonts.googleapis.com/css?family=Varela', false );
	wp_enqueue_style( 'slick-style', $themeURL . '/vendors/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', $themeURL . '/vendors/slick/slick-theme.css' );
 

  wp_enqueue_script( 'jquery', $themeURL . '/vendors/jquery/jquery.min.js' , false, NULL, true );
  wp_enqueue_script( 'jquery-easing',  'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
  wp_enqueue_script( 'bootstrap-js',  $themeURL . '/vendors/bootstrap/js/bootstrap.min.js' , false, NULL, true );
  wp_enqueue_script( 'scroll-reveal',  $themeURL . '/vendors/scrollreveal/scrollreveal.min.js' , false, NULL, true );
  wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js' , false, NULL, true );
  wp_enqueue_script( 'venobox', $themeURL .'/vendors/venobox/venobox.min.js' , false, NULL, true );
  wp_enqueue_script( 'validate', $themeURL .'/vendors/validate/jquery.validate.js' , false, NULL, true );
  wp_enqueue_script( 'funciones', $themeURL . '/assets/js/funciones.js' , false, NULL, true );

	
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

//ACTIVAR FOTO DESTACADA
add_theme_support( 'post-thumbnails' ); 


// CUSTOM POST TYPE
function create_posttype() {

  // CUSTOM POST TYPE SOCIOS / NOSOTROS
  register_post_type( 'Slider Home',
    array(
      'labels' => array(
        'name' => __( 'Sliders Home' ),
        'singular_name' => __( 'Slider Home' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'sliders'),
      'supports' => array('title', 'editor', 'thumbnail'),
	  'menu_icon' => 'dashicons-format-image',
    )
  );

  // CUSTOM POST TYPE SOCIOS / NOSOTROS
  register_post_type( 'eventos',
    array(
      'labels' => array(
        'name' => __( 'Eventos' ),
        'singular_name' => __( 'Evento' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'eventos'),
      'supports' => array('title', 'editor', 'thumbnail'),
	  'menu_icon' => 'dashicons-calendar-alt',
    )
  );
  // CUSTOM POST TYPE SOCIOS / NOSOTROS
  register_post_type( 'casos',
    array(
      'labels' => array(
        'name' => __( 'Casos de Éxito' ),
        'singular_name' => __( 'Casos' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'casos'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
	  'menu_icon' => 'dashicons-awards',
    )
  );

    register_post_type( 'cursosyseminarios',
    array(
      'labels' => array(
        'name' => __( 'Cursos y seminarios' ),
        'singular_name' => __( 'cursos y seminarios' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'cursosyseminarios'),
      'supports' => array('title', 'editor', 'thumbnail'),
	  'menu_icon' => 'dashicons-nametag',
    )
  );

  register_post_type( 'biblioteca',
    array(
      'labels' => array(
        'name' => __( 'Biblioteca' ),
        'singular_name' => __( 'Descarga' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'biblioteca-archive'),
      'supports' => array('title'),
      'taxonomies' => array('descargas'),
	  'menu_icon' => 'dashicons-book-alt',
    )
  );

  register_post_type( 'industrias',
    array(
      'labels' => array(
        'name' => __( 'Industrias' ),
        'singular_name' => __( 'Industria' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'industrias'),
      'supports' => array('title', 'editor', 'thumbnail'),
	  'menu_icon' => 'dashicons-admin-multisite',
    )
  );

  register_taxonomy(
    'descargas',
    'descarga',
    array(
      'label' => __( 'Descarga' ),
      'rewrite' => array( 'slug' => 'descarga' ),
      'hierarchical' => true,
    )
  );

  /* MANIGATION MENU */
  register_nav_menu('header-menu',__( 'Header Menu' ));
  
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




function add_proyects_list_to_contact_form ( $tag, $unused ) { 
    if ( $tag['name'] != 'eventos' )  
        return $tag;  
    
    $args = array ( 'post_type' => 'eventos',  
                    'numberposts' => 50,  
                    'orderby' => 'title',  
                    'order' => 'ASC' );  
    $eventos = get_posts($args);  
  
    if ( ! $eventos )  
        return $tag;
  
    foreach ( $eventos as $evento ) {  
        $tag['raw_values'][] = $evento->post_title;  
        $tag['values'][] = $evento->post_title;  
        $tag['labels'][] = $evento->post_title; 
    }  
  
    return $tag;  
}  
add_filter( 'wpcf7_form_tag', 'add_proyects_list_to_contact_form', 10, 2);  


//fomr dinamic
function cf7_add_post_id(){
 
    global $post;
    return $post->ID;
}
add_shortcode('CF7_ADD_POST_ID', 'cf7_add_post_id');





?>