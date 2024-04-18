<?php
$nonprofit = get_field('nonprofit');
$label = $nonprofit['label'];
$title = $nonprofit['title'];
$text = $nonprofit['text'];
$image = $nonprofit['image'];
?>

<div class="nonprofit">
  <div class="nonprofit__label label"><?php echo $label; ?></div>
  <div class="nonprofit__wrap shift">
    <div class="nonprofit__title"><?php echo $title; ?></div>
    <div class="nonprofit__text"><?php echo $text; ?></div>
  </div>
  <div class="nonprofit__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
</div>