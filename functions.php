<?php  
register_nav_menus(array(
'primary'=>__('Sidebar Menu'),
'footer'=>__('Footer Menu'),
'games'=>__('Games Menu'),
'posts'=>__('Posts Menu')
));

function proba(){

add_theme_support('post-thumbnails');
add_image_size('banner-image',980, 310, true);
add_theme_support( 'custom-logo' );

}

function widgetInit(){

	register_sidebar( array(
		'name' => 'Sidebar', 
		'id' => 'sidebar1',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'GamePageSidebar', 
		'id' => 'gamePageSidebar1',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'Header', 
		'id' => 'header',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'Footer1', 
		'id' => 'footer1',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'Footer2', 
		'id' => 'footer2',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'Footer3', 
		'id' => 'footer3',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

	register_sidebar( array(
		'name' => 'Footer4', 
		'id' => 'footer4',
		'before_title'  => '<h4 class="widgetTitle">',
        'after_title'   => '</h4>'
		));

}

add_action('after_setup_theme','proba');
add_action('widgets_init','widgetInit');


function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function gamesPostType(){
	$labels = array(
		'name' => 'Games', 
		'singular_name' =>'Games', 
		'add_new' => 'Add Game', 
		'all_items' =>'All Games', 
		'edit_item' =>'Edit Game', 
		'new_item' => 'New Game', 
		'view_item' => 'View Game', 
		'search_item' => 'Search Items', 
		'not_found' => 'No games found', 
		'not_found_in_trash' => 'No games found in trash', 
		'parent_item_colon' => 'Parent Item'
		);
	$args = array(
		'labels' => $labels, 
		'public' => true, 
		'has_archive' => true, 
		'publicly_queryable' => true, 
		'query_var' => true, 
		'rewrite' => true,
		'capability_type' => 'post', 
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
			),
		'taxonomies' => array('category','post_tag'), 
		'menu_position' => 5, 
		'exclude_from_search' => false

		);
	register_post_type('games', $args);

}
add_action('init',gamesPostType);



function snippetsPostType(){
	$labels = array(
		'name' => 'Snippets', 
		'singular_name' =>'Snippets', 
		'add_new' => 'Add Snippet', 
		'all_items' =>'All Snippet', 
		'edit_item' =>'Edit Snippet', 
		'new_item' => 'New Snippet', 
		'view_item' => 'View Snippet', 
		'search_item' => 'Search Items', 
		'not_found' => 'No snippets found', 
		'not_found_in_trash' => 'No snippets found in trash', 
		'parent_item_colon' => 'Parent Item'
		);
	$args = array(
		'labels' => $labels, 
		'public' => true, 
		'has_archive' => true, 
		'publicly_queryable' => true, 
		'query_var' => true, 
		'rewrite' => true,
		'capability_type' => 'post', 
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
			),
		'taxonomies' => array('category','post_tag'), 
		'menu_position' => 5, 
		'exclude_from_search' => false

		);
	register_post_type('snippets', $args);

}
add_action('init',snippetsPostType);






?>