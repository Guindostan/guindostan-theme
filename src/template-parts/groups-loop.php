<article class="group-wrapper <?php echo $post->post_name;?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" title="the_title();">
		<img src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php echo $post->post_name;?>.svg" alt="<?php the_title(); ?>" />
		<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
	</a>
	<hr>
</article><!-- #post-## -->
