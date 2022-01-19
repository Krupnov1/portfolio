<?php 
/*
Template Name: Политика конфиденциальности
*/
?>
<?php get_header(); ?>  

  <div class="policy" style="background-image: url(<?= CFS()->get('policy_bg'); ?>)">
    <div class="container">
      <div class="row">
        <h2 class="text-uppercase"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?> 