<?php
$bagle = get_field('bagle');
$title = $bagle['title'];
$text = $bagle['text'];
$items = $bagle['items'];
$count = 0;
?>
<div class="bagle">
  <div class="container">
    <div class="bagle__wrap">
      <div class="bagle__content">
        <div class="bagle__body">
          <h2 class="bagle__title title title--white"><?php echo $title; ?></h2>
          <div class="bagle__text text text--white"><?php echo $text; ?></div>
          <div class="bagle__items">
            <?php foreach ($items as $item) : ?>
              <?php
              $title = $item['title'];
              $count++;
              ?>
              <div class="bagle__item">
                <div class="bagle__square" style="background: var(--color-<?php echo $count; ?>)"></div>
                <span><?php echo $title; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="bagle__round">
        <div class="bagle__block"></div>
        <div class="bagle__middle"></div>
        <?php get_template_part('template-parts/icons/icon-bagle-logo'); ?>
      </div>
    </div>
  </div>
</div>