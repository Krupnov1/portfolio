<?php 
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?> 

  <div class="our-contacts">
    <div class="containers">
      <div class="rows">
        <div class="contacts-cl">
        <?php 
            $loop = CFS()->get('branches');
            foreach($loop as $row) {
              ?>
              <div class="contacts-block">
                <h2 class="text-uppercase"><?= $row['branches_title']; ?></h2>
                <div class="contacts-inner">
                  <div class="contacts-card">
                    <img src="<?= CFS()->get('contacts_message_img'); ?>" alt="Пишите">
                    <h3><?= CFS()->get('contacts_message'); ?></h3>
                    <p><?= $row['branches_email']; ?></p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?= CFS()->get('contacts_call_img'); ?>" alt="Звоните">
                    <h3><?= CFS()->get('contacts_call'); ?></h3>
                    <p><?= $row['branches_phone']; ?></p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?= CFS()->get('contacts_address_img'); ?>" alt="Приезжайте">
                    <h3><?= CFS()->get('contacts_address'); ?></h3>
                    <p><?= $row['branches_address']; ?></p>
                  </div>
                </div>
                <?= $row['branches_map']; ?>
              </div>
            <?php
          }
        ?>
        </div>

        <div class="dialer-cl col-3 col-lg-12" id="cities">
          <h2 class="text-uppercase"><?= CFS()->get('dialers_title'); ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
          <?php 
            $loop = CFS()->get('dialers');
            foreach($loop as $row) {
              ?>
              <li>
                <p class="city"><?= $row['dialers_address']; ?></p>
              </li>
              <?php
            }
          ?>           
          </ul>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>  