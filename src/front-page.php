<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main id="main" class="site-main" role="main">
		<?php get_template_part('menu'); ?>
		<h1>Próximas actividades</h1>
		<div class="activities-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php
				$args = array(
					'post_type' => 'activities'
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					get_template_part( 'template-parts/activities-loop', get_post_format() );
				endwhile;
				?>

			<?php endif; ?>
		</div>
	</main>

</div>
<!-- /wrapper -->
