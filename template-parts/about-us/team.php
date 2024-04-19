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
        $image = get_the_post_thumbnail_url();
        $for_loop = get_field('for_loop');
        $socials = $for_loop['socials'];
        $terms = get_the_terms(get_the_ID(), 'occupation');
        ?>
        <div class="team__item">
          <div class="team__img">
            <img src="<?php echo $image; ?>" alt="">
          </div>
          <div class="team__body">
            <h3 class="team__name"><?php echo $title; ?></h3>
            <?php
            $count_terms = count($terms);
            $term = '';
            ?>
            <?php foreach ($terms as $key => $item) : ?>
              <?php
              $comma = '';
              if ($count_terms > 1 && $key !== $count_terms - 1) {
                $comma = ", ";
              }
              $term .= $item->name . $comma;
              ?>

            <?php endforeach; ?>
            <span class="team__cat"><?php echo $term; ?></span>
            <?php if ($socials) : ?>
              <ul class="team__socials">
                <?php foreach ($socials as $item) : ?>
                  <?php
                  $url = $item['url'];
                  $type = $item['type'];
                  $icon_url = 'template-parts/icons/icon-' . $type;
                  ?>
                  <li class="team__icon">
                    <a href="<?php echo $url; ?>" class="team__link">
                      <?php get_template_part($icon_url); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>