<?php get_header(); ?>

<div class="container">
  <?php get_template_part('template-parts/about-us/nonprofit'); ?>
</div>
<?php get_template_part('template-parts/about-us/mission'); ?>
<?php get_template_part('template-parts/home/logos'); ?>
<div class="container">
  <?php get_template_part('template-parts/about-us/awards'); ?>
  <?php get_template_part('template-parts/about-us/journey'); ?>
  <?php get_template_part('template-parts/about-us/team'); ?>
  <?php get_template_part('template-parts/home/contribute'); ?>
  <?php get_template_part('template-parts/home/news'); ?>
  <?php get_template_part('template-parts/home/events'); ?>
</div>

<?php get_footer(); ?>