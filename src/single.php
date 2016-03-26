<?php get_header(); ?>
<?php get_template_part('aside'); ?>

	<main role="main">
	<!-- section -->
	<?php get_template_part('menu'); ?>
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( sprintf( '<h1 class="entry-title-single">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			</header><!-- .entry-header -->

		    <?php if( get_field('fecha') ): ?>
		        <div class="date">
		        <?php
		            $dateformatstring = "d M Y";
		            $unixtimestamp = strtotime(get_field('fecha'));
		            echo date_i18n($dateformatstring, $unixtimestamp);
		        ?>
		        </div>
		    <?php endif; ?>

		    <div class="hour">
		        <?php the_field('time'); ?> h.
		    </div>

		    <?php if( get_field('precio') ): ?>
		        <div class="price">
		            <?php the_field('precio'); ?>€
		        </div>
		    <?php endif; ?>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<?php the_content(); // Dynamic Content ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
