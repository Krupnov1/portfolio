<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>
            <?php 
                if(is_404()) {
                    echo 'Ошибка 404';
                } elseif (is_category('catalog')) {
                    echo single_cat_title();
                } else {
                    the_title();
                }
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>

<!-- Блок меню -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">

            <?php the_custom_logo(); ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarTogglerDemo01" class="collapse navbar-collapse">

            <?php wp_nav_menu([
                'theme_location' => 'top',
                'container' => 'ul',
                'menu_class' => 'navbar-nav mr-auto',
                'menu_id' => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                
            ]); ?>

        </div>

        <?php 
        $settings = get_posts( [
            'numberposts' => 1,
            'category_name' => 'settings',
            'post_type' => 'post',
        ] );
        foreach($settings as $post) {
            setup_postdata($post);
        ?>
        <a href="tel:<?= CFS()->get('header_phone_link'); ?>" class="phone">&#9742; <?= CFS()->get('header_phone'); ?></a>
        <?php
        }
        wp_reset_postdata();
        ?>    
    </nav>
</div>