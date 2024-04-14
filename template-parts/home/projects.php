<?php
$projects = get_field('projects');
$label = $projects['label'];
$title = $projects['title'];
$button_text = $projects['button_text'];
?>

<?php
$card_posts = new WP_Query([
  'post_type' => 'project_card',
  'posts_per_page' => -1
]);
?>
<div class="projects">
  <div class="label projects__label"><?php echo $label; ?></div>
  <h2 class="projects__title title shift"><?php echo $title; ?></h2>
  <div class="projects__wrap">
    <?php if ($card_posts->have_posts()) : ?>
      <?php while ($card_posts->have_posts()) : ?>
        <?php $card_posts->the_post(); ?>
        <?php
        $image = get_the_post_thumbnail_url();
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        ?>
        <div class="projects__item card">
          <img class="card__img" src="<?php echo $image; ?>" alt="">
          <div class="card__body">
            <h3 class="card__title"><?php echo $title; ?></h3>
            <div class="card__text"><?php echo $excerpt; ?></div>
            <a href="#" class="card__btn btn btn--white"><?php echo $button_text; ?></a>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>