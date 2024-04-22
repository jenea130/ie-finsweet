<?php
$making = get_field('making');
$label = $making['label'];
$title = $making['title'];
$text = $making['text'];
$button_text = $making['button_text'];
$image = $making['image'];
?>

<div class="making">
  <div class="container">
<div class="making__wrap">
  <div class="making__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="making__content">
    <div class="making__label label"><?php echo $label; ?></div>
    <div class="making__body shift">
      <h1 class="making__title main-title"><?php echo $title; ?></h1>
      <div class="making__text"><?php echo $text; ?></div>
      <div class="btn"><?php echo $button_text; ?></div>
    </div>
  </div>
</div>
  </div>
</div>