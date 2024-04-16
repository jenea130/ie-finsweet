<?php
$events = get_field('events');
$title = $events['title'];

$event_posts = new WP_Query([
  'post_type' => 'events',
  'posts_per_page' => 2
]);
?>
<div class="events">
  <div class="events__wrapper">
    <h3 class="events__title"><?php echo $title; ?></h3>
  </div>
  <div class="events__wrap">
    <?php if ($event_posts->have_posts()) : ?>
      <?php while ($event_posts->have_posts()) : ?>
        <?php $event_posts->the_post(); ?>
        <?php
        $title = get_the_title();
        $permalink = get_the_permalink();
        ?>
        <div class="events__item">
          <div class="events__body">
            <div class="events__data">
              <div class="events__number">25</div>
              <span class="events__month">sep</span>
            </div>
            <div class="events__content">
              <span class="events__next">Next Events</span>
              <h3 class="events__subtitle"><?php echo $title; ?></h3>
            </div>
          </div>
          <div class="events__arrow">
            <?php get_template_part('template-parts/icons/icon-arrow'); ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>