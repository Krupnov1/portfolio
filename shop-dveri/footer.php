 <!-- Блок Футер -->
 <footer class="container">
            <div class="row text-center">
                <div class="col">
                <?php wp_nav_menu([
                    'theme_location' => 'bottom',
                    'container' => 'menu',
                    'menu_class' => 'nav justify-content-center',
                    'menu_id' => '',
                    'items_wrap' => '<menu id="%1$s" class="%2$s">%3$s</menu>',
                ]); ?>
                    <?php 
                    $settings = get_posts( [
                        'numberposts' => 1,
                        'category_name' => 'settings',
                        'post_type' => 'post',
                    ] );
                    foreach($settings as $post) {
                        setup_postdata($post);
                    ?>
                        <p class="text-uppercase"><span>&copy;</span> <?= CFS()->get('footer_text'); ?>, <?= date('Y'); ?> </p> 
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>       