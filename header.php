<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png?v=2" />
    <?php $themeURL = get_stylesheet_directory_uri(); ?>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="preloader">
    <div id="loader">&nbsp;</div>
</div>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a  href="<?php echo bloginfo('url');?>" class="navbar-brand page-scroll" ><img src="<?php echo $themeURL; ?>/assets/img/logo.png" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" >
                <?php wp_nav_menu(array( 'theme_location' => 'header-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav navbar-center')); ?>
                <!--
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a class="active" href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="proyectos.php">Proyectos</a>
                    </li>
                    <li>
                        <a href="industrias.php">Industrias</a>
                    </li>
                    <li>
                        <a href="formacion.php">Formacion</a>
                    </li>
                    <li>
                        <a href="eventos.php">Eventos</a>
                    </li>
                    <li>
                        <a href="biblioteca.php">Biblioteca</a>
                    </li>
                </ul>
            -->
                <ul class="nav navbar-nav nav-boton navbar-right  hidden-xs hidden-sm hidden-md">
                    <li>
                        <a href="http://www.appsol.cl/herramienta" target="_blank">Herramienta</a>
                    </li>       
                    <li class="ico-box">
                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    </li>
                    <li class="ico-box">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    </li>      
                </ul>
            </div>
             
                
             
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
