<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo( 'charset' ); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /webfiles/js/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /webfiles/js/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /webfiles/css/style.css">
    <script src="<?= get_template_directory_uri() ?> /webfiles/js/script.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <nav class="widthWin">
                    <?php 
                        if( have_rows('headerP') ):
                            while ( have_rows('headerP') ) : the_row();					
                                $planete = get_field('systeme');							
                            endwhile;
                        else :
                            // no rows found
                        endif;
                    ?>
                <ul>
                    <li>
                        <img class="picture" src="<?php echo esc_url($planete['url']); ?>" alt="<?php echo esc_attr($planete['alt']); ?>" />
                    <li>
                        <menu>
                            <?php wp_nav_menu ('menu'); ?>
                        </menu>
                    </li>
                </ul>
            </nav>
        </div>
        
    </header>