<?php 
/*
Template Name: Дополнительная информация
*/
?>

<?php get_header(); ?> 

  <!-- Полезная информация -->
  <div class="information_page">
    <div class="container">
			<!-- Кованная полоса -->
      <div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(15, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 15,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-10 col-sm-10 col-md-5 col-lg-3">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			
			<!-- Ручки -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(16, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 16,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- Элементы ковки -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(17, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 17,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- Цвет -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(18, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 18,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- Рисунок МДФ 10мм -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(19, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 19,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- Рисунок МДФ 16мм -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(20, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 20,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
			<!-- Цвета МДФ -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(21, ARRAY_A)['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php
                    $posts = get_posts( [
                        'numberposts' => -1,
                        'category' => 21,
                        'orderdy' => 'title',
                        'order'=> 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true
                    ] );
                    foreach($posts as $post) {
                        setup_postdata($post);
                        ?>
						<div class="col-3 col-lg-6 col-sm-12">
							<?php the_post_thumbnail(''); ?>
							<h3><?php the_title(); ?></h3>  
						</div>
                        <?php	
                    }
                    wp_reset_postdata();
                ?>
			</div>
    </div>
  </div>
  
  <?php get_footer(); ?>