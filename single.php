<?php get_header(); ?>

<?php
$for_loop = get_field('for_loop');
$image = $for_loop['image'];
$title = get_the_title();
$permalink = get_the_permalink();
$excerpt = get_the_excerpt();
$date = get_the_date('j F Y', get_the_ID());
$author = get_the_author();
?>

<div class="blog">

	<div class="container">
		<div class="blog__header">
			<div class="blog__date"><?php echo $date; ?></div>
			<h1 class="blog__title main-title"><?php echo $title; ?></h1>
			<div class="blog__excerpt text"><?php echo $excerpt; ?></div>
		</div>
		<img class="blog__img" src="<?php echo $image; ?>" alt="">
		<div class="blog__content">
			<?php if (have_posts()) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>

</div>
<?php get_footer(); ?>