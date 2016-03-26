<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main role="main page">
		<!-- section -->
		<?php get_template_part('menu'); ?>
		<section>

			<header class="page-header">
				<?php the_title( sprintf( '<h1 class="page-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			</header><!-- .entry-header -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
