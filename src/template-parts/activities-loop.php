<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<ul class="activity-data">
		<li>
			<?php if( get_field('fecha') ): ?>
				<span class="date">
					<?php
					$dateformatstring = "d M Y";
					$unixtimestamp = strtotime(get_field('fecha'));
					echo date_i18n($dateformatstring, $unixtimestamp);
					?>
				</span>
			<?php endif; ?>
			<span> | </span>
			<span class="hour">
		        <?php the_field('time'); ?> h.
		    </span>
			<?php if( get_field('precio') ): ?>
				<span class="price">
					<?php the_field('precio'); ?>
				</span>
			<?php endif; ?>
		</li>

	</ul>






    <?php if ( has_post_thumbnail() ) : ?>
    	<a class="the-post-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
    	</a>
<?php endif; ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
