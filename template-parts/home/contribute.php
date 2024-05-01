<?php
$contribute = get_field('contribute', 2);
$title = $contribute['title'];
$image = $contribute['image'];
$button_text_1 = $contribute['button_text_1'];
$button_text_2 = $contribute['button_text_2'];
?>

<div class="contribute">
  <img class="contribute__img" src="<?php echo $image; ?>" alt="">
  <div class="contribute__content">
    <h2 class="contribute__title title title--white"><?php echo $title; ?></h2>
    <footer class="contribute__footer">
      <button class="btn contribute__btn"><?php echo $button_text_1; ?></button>
      <a href="<?php echo get_the_permalink(16); ?>" class="btn btn--white"><?php echo $button_text_2; ?></a>
    </footer>
  </div>
  <?php get_template_part('template-parts/home/modal'); ?>
</div>