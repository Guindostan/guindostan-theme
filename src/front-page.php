<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main role="main">
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>
		<!-- /nav -->
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		<?php get_sidebar(); ?>
	</main>

</div>
<!-- /wrapper -->
