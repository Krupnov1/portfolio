<?php 
/*
Template Name: Наши работы
*/
?>

<?php get_header(); ?> 

  <div class="portfolio" style="background-image: url(<?= CFS()->get('works_bg'); ?>)">
    <div class="containers">
      <div class="rw">
        <div class="gallery">
          <?php 
            $loop = CFS()->get('works'); 
            foreach($loop as $row) {
              ?>
                <div class="">
                  
                    <a href="<?= $row['works_img']; ?>" data-caption="<?= $row['works_description']; ?>">
                      <img src="<?= $row['works_img']; ?>" alt="<?= $row['works_title']; ?>">
                    </a>
                </div> 
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?> 