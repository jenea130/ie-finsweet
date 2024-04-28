<?php
$plantation = get_field('plantation', 'option');
$items = $plantation['items'];
?>

<div class="plantation">
  <div class="container">
    <div class="plantation__wrapper">
      <div class="plantation__wrap">
        <?php foreach ($items as $item) : ?>
          <?php
          $icon = $item['icon'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="plantation__item">
            <div class="plantation__icon">
              <?php echo $icon; ?>
            </div>
            <div class="plantation__body">
              <h3 class="plantation__title"><?php echo $title; ?></h3>
              <div class="plantation__text text"><?php echo $text; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>