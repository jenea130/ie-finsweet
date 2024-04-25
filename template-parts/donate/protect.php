<?php
$protect = get_field('protect');
$title = $protect['title'];
$text = $protect['text'];
$items = $protect['items'];
?>

<div class="protect">
  <div class="protect__wrap">
    <div class="protect__content">
      <h2 class="protect__title title"><?php echo $title; ?></h2>
      <div class="protect__text text"><?php echo $text; ?></div>
    </div>
    <div class="protect__tabs tabs-protect">
      <div class="tabs-protect__nav">
        <?php foreach ($items as $item) : ?>
          <?php
          $title = $item['title'];
          ?>
          <div class="tabs-protect__item"><?php echo $title; ?></div>
        <?php endforeach; ?>
      </div>
      <div class="tabs-protect__content">
        <?php foreach ($items as $item) : ?>
          <?php
          $text = $item['text'];
          ?>
          <div class="tabs-protect__body"><?php echo $text; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>