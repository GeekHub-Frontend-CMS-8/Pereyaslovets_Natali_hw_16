<?php 
	function create_portfolio_post_type() {
	  register_post_type( 'portfolio',
	  //register_post_type
		array(
		  'labels' => array(
			'name' => __( 'Portfolio' ),
			'singular_name' => __( 'Portfolio' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'supports' => array ('thumbnail', 'title', 'editor', 'post-formats', 'comments')
		)
	  );
	}
	add_action( 'init', 'create_portfolio_post_type' );
	add_theme_support( 'post-thumbnails' ); 
	
	function create_blog_post_type() {
	  register_post_type( 'blog',
	  //register_post_type 
		array(
		  'labels' => array(
			'name' => __( 'Blog' ),
			'singular_name' => __( 'Blogs' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'supports' => array ('thumbnail', 'title', 'editor', 'post-formats', 'comments')
		)
	  );
	}
	add_action( 'init', 'create_blog_post_type' );
	add_theme_support( 'post-thumbnails' ); 
	
		// Add column thumbnail to CP 
			add_filter( 'manage_portfolio_posts_columns', function ( $columns ) {
				$my_columns = [
					'id'    => 'ID',
					'thumb' => 'Thumbnail',
				];

				return array_slice( $columns, 0, 1 ) + $my_columns + $columns;
			} );
			add_action( 'manage_portfolio_posts_custom_column', function ( $column_name ) {
				if ( $column_name === 'id' ) {
					the_ID();
				}

				if ( $column_name === 'thumb' && has_post_thumbnail() ) {
					?>
					<a href="<?php echo get_edit_post_link(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</a>
					<?php
				}
			} );



	// header menu
	register_nav_menu('menu', 'Header menu');

function true_register_wp_sidebars() {
	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => 'Футер',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );

	
?>


