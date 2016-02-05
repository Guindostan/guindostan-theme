<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
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
        <div>
            <?php the_field('precio'); ?>€
        </div>
    <?php endif; ?>

    <?php if ( has_post_thumbnail() ) : ?>
    	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'small' ) ?>
    	</a>
<?php endif; ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
