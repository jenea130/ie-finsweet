<?php
$care = get_field('care');
$label = $care['label'];
$title = $care['title'];
$text = $care['text'];
$image = $care['image'];
$items = $care['items'];
?>

<div class="care">
  <div class="container">
    <div class="label care__label"><?php echo $label; ?></div>
    <div class="care__wrap">
      <div class="care__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
      <div class="care__content shift">
        <h2 class="title care__title"><?php echo $title; ?></h2>
        <div class="care__text text"><?php echo $text; ?></div>
        <div class="care__items">
          <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            $title = $item['title'];
            $text = $item['text'];
            ?>
            <div class="care__item">
              <div class="care__logo"><?php echo $icon; ?></div>
              <div class="care__body">
                <h4 class="care__subtitle"><?php echo $title; ?></h4>
                <p class="text"><?php echo $text; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>