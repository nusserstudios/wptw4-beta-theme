<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="mx-auto max-w-5xl">

			<?php the_content(); ?>

			<div class="grid grid-cols-2 gap-4 place-content-center h-48 text-center">
					<div>1</div>
					<div>2</div>
				</div>
			</div>

		</div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>