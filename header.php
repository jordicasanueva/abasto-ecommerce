<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>

        <!-- Metas Esenciales -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Abasto Serigrafía es un taller independiente y espacio colaborativo formado por José Silva y Constanza Salazar, ambos artistas visuales residentes en Chile.">

        <!-- Títulos cabecera sitio -->
        <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?><?php } ?> <?php wp_title(); ?></title>        

        <!-- Javascripts -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- Estilos -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grillas/col.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grillas/2cols.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grillas/3cols.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slicknav.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick-theme.css">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap" rel="stylesheet">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Favicon -->

        <link rel="icon" type="image/png" href="https://abasto.org/wp-content/themes/abasto/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="https://abasto.org/wp-content/themes/abasto/favicon-16x16.png" sizes="16x16" />

        <!-- Open Graph data -->

        <meta property="og:title" content="Abasto Serigrafía - Santiago / Chile" />
        <meta property="og:type" content="company" />
        <meta property="og:url" content="http://abasto.org">
        <meta property="og:image" content="https://abasto.org/wp-content/themes/abasto/img/abasto-serigrafia-santiago-chile-rrss.gif" />
        <meta property="og:description" content="Abasto Serigrafía es un taller independiente y espacio colaborativo formado por José Silva y Constanza Salazar, ambos artistas visuales residentes en Chile.">
        <meta property="og:site_name" content="Abasto Serigrafía" />

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Abasto Serigrafía - Santiago / Chile">
        <meta name="twitter:description" content="Abasto Serigrafía es un taller independiente y espacio colaborativo formado por José Silva y Constanza Salazar, ambos artistas visuales residentes en Chile.">

        <!-- Twitter Summary card images must be at least 200x200px -->

        <meta name="twitter:image" content="https://abasto.org/wp-content/themes/abasto/img/abasto-serigrafia-santiago-chile-rrss.gif">
        <?php 
            /* Always have wp_head() just before the closing </head>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to add elements to <head> such
             * as styles, scripts, and meta tags.
             */
            wp_head();
         ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 id="logo-home" class="title desktop"><a href="<?php echo esc_url( home_url() ); ?>"><img class="gradient" width="800px" height="176px" src="https://abasto.org/wp-content/uploads/2020/03/header-animado.gif" alt="Abasto Serigrafía - Santiago, Chile" title="Abasto Serigrafía - Santiago, Chile" data-no-retina /></a></h1>
                <nav class="menu-desktop mayus ls-005">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                          'sort_column'  => 'menu_order',
                                          'depth'        => 1
                 ) ); ?>
                </nav>
                <nav class="menu-mobile">
                    <?php $args = array(
                        'menu_class' => 'slicknav_menu',
                        'theme_location' => 'header-mobile',
                        'sort_column'  => 'menu_order',
                        'depth'        => 0
                        ); ?> 
                    <?php wp_nav_menu( $args ); ?>
                </nav>
            </header>
        </div>