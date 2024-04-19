<?php
$working = get_field('working');
$label = $working['label'];
$title = $working['title'];
$text = $working['text'];
$image = $working['image'];
?>

<div class="working">
  <div class="working__wrap">
    <div class="working__img">
      <img src="<?php echo $image; ?>" alt="">
    </div>
    <div class="working__content">
      <div class="working__label label"><?php echo $label; ?></div>
      <div class="working__body shift">
        <h1 class="working__title main-title"><?php echo $title; ?></h1>
        <div class="working__text text"><?php echo $text; ?></div>
      </div>
    </div>
  </div>
</div>