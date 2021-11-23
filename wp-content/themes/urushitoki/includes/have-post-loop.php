<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
