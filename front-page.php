<?php

/**
 * Template Name: Front page
 */
get_header();
?>
<?php get_template_part('template-parts/home/home-intro'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/nature'); ?>
</div>
<?php get_template_part('template-parts/home/logos'); ?>
<?php get_template_part('template-parts/home/care'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/projects'); ?>
</div>
<?php get_template_part('template-parts/home/bagle'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/contribute'); ?>
  <?php get_template_part('template-parts/home/news'); ?>
  <?php get_template_part('template-parts/home/events'); ?>
</div>

<?php get_footer(); ?>