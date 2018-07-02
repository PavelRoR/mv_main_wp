<?php 
/**
* загружаемые стили и скрипты
*/
// if(!is_admin()){ remove_action('wp_head', 'wp_print_scripts'); remove_action('wp_head', 'wp_print_head_scripts', 9); remove_action('wp_head', 'wp_enqueue_scripts', 1); add_action('wp_footer', 'wp_print_scripts', 5); add_action('wp_footer', 'wp_enqueue_scripts', 5); add_action('wp_footer', 'wp_print_head_scripts', 5); wp_deregister_script('jquery'); 
// }

wp_deregister_script('jquery');
function load_styles_and_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',  'in_footer');
	wp_enqueue_script('jquery-2.1.1', get_template_directory_uri() . '/js/jquery-2.1.1.min.js',  'in_footer');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',  'in_footer');
	wp_enqueue_script('lightslider', get_template_directory_uri() . '/js/lightslider.min.js', '', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js',  'in_footer');
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');


/**
*Добавление миниатюр
*/
add_theme_support('post-thumbnails');

/**
* менюшки
**/

register_nav_menu('main_menu', 'Главное меню сайта');
// register_nav_menu('footer_menu', 'Меню в подвале');

/* Цитата */

function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_action( 'excerpt_more', 'my_excerpt_more' );
function my_excerpt_more() {
    global $post;
    $link = get_permalink( $post->ID );
    // $more = " <a href='$link' class='excerpt-more'>Читать дальше</a>";
  
    return '...';
}
//просмотры записей
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
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



// Кастомная страница входа в админ-панель

function mv_custom_enter () { ?>
<style type="text/css">
    body.login {
        background: #2C2D33;
    }
</style>
<?php } 

add_action('login_enqueue_scripts', 'mv_custom_enter');

/**
* комментарии
**/
function mastervision_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'mastervision' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'mastervision' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'mastervision' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s в %2$s', 'mastervision' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Ваш комментарий ожидает проверки', 'mastervision' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Редактировать', 'mastervision' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Ответить', 'mastervision' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
/* Удаление версии ВП */
remove_action('wp_head', 'wp_generator'); // из заголовка
add_filter('the_generator', '__return_empty_string'); // из фидов и URL

/*Удаляем ?ver[xx-x]*/
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
/*Это для скриптов */
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
/*Это для стилей */
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


add_filter('the_generator', create_function('', 'return "";'));

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/* --------------------------------------------------------------------------
 * Отключаем REST API
 * -------------------------------------------------------------------------- */
/* Отключаем сам REST API */
add_filter('rest_enabled', '__return_false');

/* Отключаем фильтры REST API */
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

/* Отключаем события REST API*/
remove_action( 'init','rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

/* Отключаем Embeds связанные с REST API*/
remove_action( 'rest_api_init','wp_oembed_register_route');
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
/* если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.*/
remove_action( 'wp_head','wp_oembed_add_host_js');

/* --------------------------------------------------------------------------
 * Отключаем Emojii
 * -------------------------------------------------------------------------- */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/* --------------------------------------------------------------------------
 * Удаляем лишнее из шапки
 * -------------------------------------------------------------------------- */
 /* Удаляет ссылки RSS-лент записи и комментариев */
remove_action( 'wp_head', 'feed_links', 2 ); 
/* Удаляет ссылки RSS-лент категорий и архивов */
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
/* Удаляет RSD ссылку для удаленной публикации */
remove_action( 'wp_head', 'rsd_link' ); 
/* Удаляет ссылку Windows для Live Writer */
remove_action( 'wp_head', 'wlwmanifest_link' ); 
/* Удаляет короткую ссылку */
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0); 
/* Удаляет информацию о версии WordPress */
remove_action( 'wp_head', 'wp_generator' ); 
/* Удаляет ссылки на предыдущую и следующую статьи */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/* Remove Images From Yoast Sitemap */
add_filter( 'wpseo_xml_sitemap_img', '__return_false' );

?>