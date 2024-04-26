<div class="event-content">
			<?php if (have_posts()) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
</div>