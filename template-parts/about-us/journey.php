<?php
$journey = get_field('journey');
$label = $journey['label'];
$title = $journey['title'];
$text = $journey['text'];
$image = $journey['image'];
$items = $journey['items'];
?>

<div class="journey">
  <div class="journey__wrap">
    <div class="journey__img">
      <img src="<?php echo $image; ?>" alt="">
    </div>
    <div class="journey__content">
      <div class="journey__label"><?php echo $label; ?></div>
      <h2 class="journey__title"><?php echo $title; ?></h2>
      <div class="journey__text"><?php echo $text; ?></div>
      <div class="journey__flex">
        <?php foreach ($items as $item) : ?>
          <?php
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="journey__item">
            <h4 class="journey__count"><?php echo $title; ?></h4>
            <span class="journey__desc"><?php echo $text; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>