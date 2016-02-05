<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main id="main" class="site-main" role="main">
		<h1>Actividades de <?php echo date( "F" ) ?></h1>
		<div class="activities-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php
				$args = array(
					'post_type' => 'activities',
					'meta_key'     => 'fecha',
					'meta_value'   => date( "Ymd" ),
					'meta_compare' => '>=',
					'posts_per_page' => '3'
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
