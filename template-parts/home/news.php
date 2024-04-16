<?php
$news = get_field('news');
$title = $news['title'];

$posts = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 4
]);
?>

<div class="news">
  <h2 class="news__title title"><?php echo $title; ?></h2>
  <div class="news__wrap">
    <?php if ($posts->have_posts()) : ?>
      <?php while ($posts->have_posts()) : ?>
        <?php $posts->the_post(); ?>
        <?php
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $permalink = get_the_permalink();
        $image = get_the_post_thumbnail_url();
        ?>
        <a href="#" class="news__item">
          <div class="news__img">
            <img src="<?php echo $image; ?>" alt="">
          </div>
          <h4 class="news__subtitle"><?php echo $title; ?></h4>
          <div class="news__text text"><?php echo $excerpt; ?></div>
      </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>