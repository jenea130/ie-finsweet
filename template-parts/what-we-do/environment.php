<?php
$environment = get_field('environment');
$title = $environment['title'];
$items = $environment['items'];
?>

<div class="environment">
  <div class="container">
    <h2 class="environment__title title"><?php echo $title; ?></h2>
    <div class="environment__wrap">
      <?php foreach ($items as $item) : ?>
        <?php
        $icon = $item['icon'];
        $title = $item['title'];
        $text = $item['text'];
        ?>

        <div class="environment__item">
          <div class="environment__icon">
            <?php echo $icon; ?>
          </div>
          <div class="environment__body">
            <h4 class="environment__subtitle"><?php echo $title; ?></h4>
            <div class="environment__text"><?php echo $text; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>