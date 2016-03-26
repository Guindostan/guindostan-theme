<nav role="navigation" class="nav-menu">
    <?php $args = array(
        'depth'       => 0,
    	'sort_column' => 'menu_order, post_title',
    	'menu_class'  => 'menu',
    	'include'     => '',
    	'exclude'     => '',
    	'echo'        => true,
    	'show_home'   => true,
    	'link_before' => '',
    	'link_after'  => '' );
    ?>
    <?php wp_page_menu( $args ); ?>
</nav>
