<?php
$news = get_field('news');
$title = $news['title'];

$posts = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 2
]);
?>

<div class="news">
  <h2 class="news__title title"><?php echo $title; ?></h2>
  <div class="news__wrap">
    <div class="news__item">
      <div class="news__img">
        <img src="" alt="">
      </div>
      <h4 class="news__subtitle"></h4>
      <div class="news__text text"></div>
    </div>
  </div>
</div>