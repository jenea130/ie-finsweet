<?php
$mission = get_field('mission');
$items = $mission['items'];
?>

<div class="mission">
  <div class="container">
    <div class="mission__wrap">
      <?php foreach ($items as $item) : ?>
        <?php
        $label = $item['label'];
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="mission__item">
          <div class="mission__label"><?php echo $label; ?></div>
          <h3 class="mission__title"><?php echo $title; ?></h3>
          <div class="mission__text text"><?php echo $text; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>