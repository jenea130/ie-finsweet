<?php
$team = get_field('team');
$title = $team['title'];
$text = $team['text'];

$team_posts = new WP_Query([
  'post_type' => 'our_team',
  'posts_per_page' => 8
]);
?>

<div class="team">
  <h2 class="team__title title"><?php echo $title; ?></h2>
  <div class="team__text text"><?php echo $text; ?></div>
  <div class="team__wrap">
    <?php if ($team_posts->have_posts()) : ?>
      <?php while ($team_posts->have_posts()) : ?>
        <?php $team_posts->the_post(); ?>
        <?php
        $title = get_the_title();
        $permalink = get_the_permalink();
        // $for_loop = get_field('for_loop');
        $image = get_the_post_thumbnail_url();
        // $text = $for_loop['text'];
        // $socials = $for_loop['socials'];
        // $cur_terms = get_the_terms(get_the_ID(), 'job');
        // $term_name = $cur_terms[0]->name;
        ?>
        <div class="team__item">
          <div class="team__img">
            <img src="<?php echo $image; ?>" alt="">
          </div>
          <div class="team__body">
            <h3 class="team__name"><?php echo $title; ?></h3>
            <div class="team__cat">some text</div>
            <ul class="team__socials">
              <li class="team__icon">
                <?php get_template_part('template-parts/icons/icon-facebook'); ?>
              </li>
              <li class="team__icon">
                <?php get_template_part('template-parts/icons/icon-twitter'); ?>
              </li>
              <li class="team__icon">
                <?php get_template_part('template-parts/icons/icon-linkedin'); ?>
              </li>
            </ul>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>