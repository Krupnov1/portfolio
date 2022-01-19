<?php get_header(); ?> 

<!-- Блок Каталог -->
    <?php 
    $settings = get_posts( [
        'numberposts' => 1,
        'category_name' => 'settings',
        'post_type' => 'post',
    ] );
    foreach($settings as $post) {
        setup_postdata($post);
    ?>
        <div class="container pop-goods" style="background-image: url(<?= CFS()->get('catalog_bg'); ?>)"> 
    <?php
    }
    wp_reset_postdata();
    ?>
            <div class="rw">
                <div class="col text-center text-uppercase">
                    <div class="title">
                        <h4><?= single_cat_title(); ?></h4>
                    </div>
                </div>
            </div>
            <div class="category-controll text-center">
				<button class="btn text-uppercase" type="button" data-filter="all">Все</button>
				<button class="btn text-uppercase" type="button"data-filter=".<?= get_category(9, ARRAY_A)['slug']; ?>"><?= get_category(9, ARRAY_A)['name']; ?></button>
				<button class="btn text-uppercase" type="button" data-filter=".<?= get_category(10, ARRAY_A)['slug']; ?>"><?= get_category(10, ARRAY_A)['name']; ?></button>
				<button class="btn text-uppercase" type="button" data-filter=".<?= get_category(11, ARRAY_A)['slug']; ?>"><?= get_category(11, ARRAY_A)['name']; ?></button>
				<button class="btn text-uppercase" type="button" data-sort="order:asc">По возрастанию</button>
				<button class="btn text-uppercase" type="button" data-sort="order:descending">По убыванию</button>
			</div>

            <div class="rw popular-goods text-center"> 

                <?php 
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            $all_category = get_the_category();
                            $res_name = '';
                            foreach($all_category as $category) {
                                if($category->term_id == 9 || $category->term_id == 10 || $category->term_id == 11) {
                                    $res_name = $category->slug;
                                }
                            }
                            ?>
                                <div class="col-md-12 col-lg-6 col-xl-4 col-xxl-3 mix <?= $res_name; ?>" data-order="<?= CFS()->get('doors_price'); ?>">
                                    <?php the_post_thumbnail(); ?>
                                    <h6 class="text-uppercase text-bold"><?php the_title(); ?></h6>
                                    <p><?= CFS()->get('doors_price'); ?> P</p>
                                    <a href="<?php the_permalink(); ?>" class="btn-mb text-uppercase btn"><?= CFS()->get('doors_more'); ?></a>
                                </div>
                            <?php
                        }
                    }
                ?>

            </div>

            <?php the_posts_pagination(); ?> 
           
        </div>
        

<?php get_footer(); ?> 

