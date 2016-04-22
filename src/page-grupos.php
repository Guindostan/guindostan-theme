<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main id="main" class="site-main" role="main">

		<?php get_template_part('menu'); ?>

		<h1>Grupos</h1>
		<div class="groups-wrapper">
			<?php
			$args = array(
				'post_type' => 'groups',
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/groups-loop', get_post_format() );
			endwhile;
			?>
		</div>
	</main>

</div>
<!-- /wrapper -->
