<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$button_text = $home_intro['button_text'];
$image = $home_intro['image'];
$text_left = $home_intro['text_left'];
$text_right = $home_intro['text_right'];
?>

<div class="home-intro">
  <img src="<?php echo $image; ?>" alt="" class="home-intro__img">
  <div class="container">
    <div class="home-intro__content">
      <h1 class="home-intro__title"><?php echo $title; ?></h1>
      <a href="<?php echo get_the_permalink(10); ?>" class="btn btn--white"><?php echo $button_text; ?></a>
      <footer class="home-intro__footer">
        <div class="home-intro__text"><?php echo $text_left; ?></div>
        <div class="home-intro__text"><?php echo $text_right; ?></div>
      </footer>
    </div>
  </div>
</div>