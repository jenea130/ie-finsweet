<?php
$awards = get_field('awards');
$title = $awards['title'];
$items = $awards['items'];
?>

<div class="awards">
  <h2 class="awards__title title"><?php echo $title; ?></h2>
  <div class="awards__wrap">
    <?php foreach ($items as $item) : ?>
      <?php
      $logo = $item['logo'];
      $year = $item['year'];
      $title = $item['title'];
      $country = $item['country'];
      ?>
      <div class="awards__item">
        <div class="awards__logo">
          <?php echo $logo; ?>
        </div>
        <div class="awards__year"><?php echo $year; ?></div>
        <h4 class="awards__subtitle"><?php echo $title; ?></h4>
        <span class="awards__country"><?php echo $country; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>