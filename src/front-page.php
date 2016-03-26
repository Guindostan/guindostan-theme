<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main id="main" class="site-main" role="main">

		<?php get_template_part('menu'); ?>

		<?php
			$args = array(
				'post_type' => 'activities',
				'meta_key'     => 'fecha',
				'meta_value'   => date( "Ymd" ),
				'meta_compare' => '='
			);
			$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			echo '<h1>Actividades hoy</h1>';
			echo '<div class="activity-today-container">';
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/activity-single', get_post_format() );
			endwhile;
			echo '</div>';
		}
		wp_reset_query();
		?>

		<h1>Próximas actividades</h1>
		<div class="activities-wrapper">
			<?php
			$args = array(
				'post_type' => 'activities',
				'meta_key'     => 'fecha',
				'meta_value'   => date( "Ymd" ),
				'meta_compare' => '>'
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/activities-loop', get_post_format() );
			endwhile;
			?>
		</div>
	</main>

</div>
<!-- /wrapper -->
