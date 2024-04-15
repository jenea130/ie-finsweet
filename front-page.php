<?php

/**
 * Template Name: Front page
 */
get_header();
?>
<?php get_template_part('template-parts/home/home-intro'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/nature'); ?>
  <?php get_template_part('template-parts/home/logos'); ?>
</div>
<?php get_template_part('template-parts/home/care'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/projects'); ?>
</div>
<?php get_template_part('template-parts/home/bagle'); ?>

<?php get_footer(); ?>