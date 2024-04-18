<?php
$logos = get_field('logos', 2);
$items = $logos['items'];
$class = is_page(8) ? "logos--color" : "";
?>

<div class="logos <?php echo $class; ?>">
  <div class="container">
    <h4 class="logos__title">Our supporters</h4>
    <div class="logos__wrap">
      <?php foreach ($items as $item) : ?>
        <div class="logos__item"><img src="<?php echo $item; ?>" alt=""></div>
      <?php endforeach; ?>
    </div>
  </div>
</div>