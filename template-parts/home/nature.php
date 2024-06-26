<?php
$nature = get_field('nature');
$label = $nature['label'];
$title = $nature['title'];
$text = $nature['text'];
$button_text = $nature['button_text'];
$image = $nature['image'];
?>

<div class="nature">
  <div class="nature__wrap">
    <div class="nature__img">
      <img src="<?php echo $image; ?>" alt="">
    </div>
    <div class="nature__block">
      <div class="label nature__label"><?php echo $label; ?></div>
      <div class="nature__content shift">
        <h2 class="title nature__title"><?php echo $title; ?></h2>
        <div class="nature__text"><?php echo $text; ?></div>
        <a href="<?php echo get_the_permalink(8); ?>" class="btn"><?php echo $button_text; ?></a>
      </div>
    </div>
  </div>
</div>