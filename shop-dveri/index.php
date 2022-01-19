<?php 
/*
Template Name: Главная
*/
?>

<?php get_header(); ?> 

        <div class="container">
            <header style="background-image: url(<?= CFS()->get('background_header'); ?>)">
                <div class="row justify-content-evenly">
                    <div class="col-10 col-lg-5 col-md-10 align-self-center">
                        <h4 class="text-uppercase"><?= CFS()->get('title_site'); ?></h4>
                        <p><?= CFS()->get('description_site'); ?></p>
                    </div>
                    <div class="col-10 col-lg-4 col-md-10 text-center align-self-center">
                        <div class="form">
                            <div class="form-div">
                                <span class="text-uppercase"><?= CFS()->get('text_form'); ?></span>
                                <?= do_shortcode(CFS()->get('shortcode_form_head')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <!-- Блок Популярные категории -->
        <div class="container pop-category" style="background-image: url(<?= CFS()->get('background_pop_category'); ?>)">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <div class="title">
                        <h4><?= CFS()->get('pop_category_title'); ?></h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gx-5">
                
                <?php 
                    $loop = CFS()->get('pop_category_cycle');
                    foreach($loop as $row) {
                    ?>
                        <div class="col-10 col-md-3">
                            <a href="/category/<?= $row['pop_category_link']; ?>">
                                <p class="text-uppercase"><?= $row['title_pop_category']; ?></p>
                                <img src="<?= $row['icon_pop_category']; ?>" 
                                class="img-thumbnail img-fluid" alt="image-pop-category">
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>

        <!-- Блок Преимущества -->
        <div class="container adv text-center" style="background-image: url(<?= CFS()->get('background_adv'); ?>)">
            <div class="fon">
                <div class="row justify-content-center gx-5">
                    <?php 
                        $loop = CFS()->get('advantages_cycle');
                        foreach($loop as $row) {
                        ?>
                            <div class="col-10 col-md-5 col-lg-2">
                                <img src="<?= $row['icon_adv']; ?>" alt="image" class="img-fluid">
                                <h6 class="text-uppercase"><?= $row['title_adv']; ?></h6>
                                <p><?= $row['description_adv']; ?></p>
                            </div> 
                            <?php
                        }
                    ?>  
                </div>
            </div>
        </div>

        <!-- Блок Популярные товары -->
        <div class="container pop-goods" style="background-image: url(<?= CFS()->get('background_catalog'); ?>)">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <div class="title">
                        <h4><?= CFS()->get('title_catalog'); ?></h4>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">

                <?php 
                    $args = array(
                        'post_type' => 'doors',
                        'posts_per_page' => 8,
                    );
                    $p = get_posts( $args );
                    foreach( $p as $post ) {
                        setup_postdata( $post );
                ?>
                    <div class="col-10 col-sm-10 col-md-5 col-lg-3">
                        <img src="<?php the_field('img_door'); ?>" alt="" class="img-thumbnail img-fluid">
                        <h6 class="text-uppercase text-bold"><?php the_title(); ?></h6>
                        <p><?php the_field('price_door'); ?> P</p>
                        <a href="/<?php the_field('link_door'); ?>" class="btn-mb btn text-uppercase">Подробнее</a>
                    </div>

                <?php 
                } 
                wp_reset_postdata(); 
                ?>

            </div>
            <div class="row text-center justify-content-center">
                <div class="col">
                    <a href="/category/<?= CFS()->get('link_btn_products'); ?>" class="btn text-uppercase"><?= CFS()->get('title_btn_products'); ?></a>
                </div>
                
            </div>
        </div>

        <!-- Блок Заказать замер -->
        <div class="container form_zamer text-white" style="background-image: url(<?= CFS()->get('background_zamer'); ?>)">
            <div class="fon">
                <div class="row text-center justify-content-center gx-5">
                    <div class="col-10 col-md-10 col-sm-10 col-lg-3 align-self-center text-start">
                        <div>
                            <h5 class="text-uppercase"><?= CFS()->get('title_form'); ?></h5>
                            <p class="parameter"><?= CFS()->get('description_form'); ?></p>
                        </div>
                        <?= do_shortcode(CFS()->get('shortcode_form')); ?>
                    </div>
                    <?php 
                        $loop = CFS()->get('zamer_cycle');
                        foreach($loop as $row) {
                        ?>
                            <div class="col-md-5 col-lg-3 align-self-center">
                                <img src="<?= $row['icon_zamer']; ?>" alt="image" class="img-fluid">
                                <h6 class="text-uppercase"><?= $row['title_zamer']; ?></h6>
                                <p><?= $row['description_zamer']; ?></p>
                            </div>

                            <?php
                        }
                    ?>  
                </div>
            </div>
        </div>

        <!-- Блок Отзывы -->
        <div class="container reviews" style="background-image: url(<?= CFS()->get('background_reviews'); ?>)">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <div class="title">
                        <h4>Отзывы</h4>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="row justify-content-center">

                            <?php 
                                $loop = CFS()->get('reviews_cycle_activ');
                                foreach($loop as $row) {
                                ?>
                                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $row['reviews_title_activ']; ?></h5>
                                                <p class="card-text"><?= $row['reviews_description_activ']; ?></p>
                                            </div>
                                        </div> 
                                    </div>
                                    <?php
                                }
                            ?>                          
                            
                       </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">

                        <?php 
                            $loop = CFS()->get('reviews_cycle');
                            foreach($loop as $row) {
                            ?>
                                <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['reviews_title']; ?></h5>
                                            <p class="card-text"><?= $row['reviews_description']; ?></p>
                                        </div>
                                    </div> 
                                </div>
                                <?php
                                }
                            ?>                          
                        </div> 
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>   
            </div>
        </div>

<?php get_footer(); ?> 