<?php
$logos = get_field('logos');
$items = $logos['items'];
?>

<div class="logos">
  <h4 class="logos__title">Our supporters</h4>
  <div class="logos__wrap">
    <?php foreach ($items as $item) : ?>
      <div class="logos__item"><img src="<?php echo $item; ?>" alt=""></div>
    <?php endforeach; ?>
  </div>
</div>