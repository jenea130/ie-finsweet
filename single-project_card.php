<?php get_header(); ?>

<?php
$for_loop = get_field('for_loop');
$label = $for_loop['label'];
$post = get_post();
$title = $post->post_title;
?>


<div class="project-single">
  <div class="project-single__label label"><?php echo $label; ?></div>
  <h1 class="project-single__title main-title"><?php echo $title; ?></h1>
  <div class="project-single__content">
    <?php if (have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content(); ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>
<?php get_template_part('template-parts/single-project/plantation'); ?>
<div class="container">
  <?php get_template_part('template-parts/home/projects'); ?>
</div>

<?php get_footer(); ?>