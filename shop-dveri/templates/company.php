<?php 
/*
Template Name: О компании
*/
?>

<?php get_header(); ?> 

    <div class="about-company" style="background-image: url(<?= CFS()->get('company_bg'); ?>)">
      <div class="container">
        <div class="rw">
          <div class="col-12">
            <img src="<?= CFS()->get('company_img'); ?>" alt="О компании">
            <h2 class="text-uppercase"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
  	</div>

  <!-- Преимущества  -->
	<?php get_header('advantages') ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('company_pasport_bg'); ?>)">
    <div class="container">
      <div class="rw">
        <div class="col-12">
          <h2 class="text-uppercase"><?= CFS()->get('company_pasport_title'); ?></h2>
          <p><?= CFS()->get('company_pasport_text'); ?></p>
          <a href="<?= CFS()->get('company_pasport_open'); ?>" class="btn" target="_blank"><?= CFS()->get('company_pasport_open_btn'); ?></a>
          <a href="<?= CFS()->get('company_pasport_download'); ?>" class="btn btn-top" download=""><?= CFS()->get('company_pasport_download_btn'); ?></a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?> 