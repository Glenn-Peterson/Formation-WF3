<?php

/**
 * Theme functions and definitions
 */
//redux framwork
if(file_exists(get_template_directory().'/includes/redux/admin-options.php')){
	require_once(get_template_directory().'/includes/redux/admin-options.php');
}
function mefolio_global_var(){
    global $mefolio_options;
    return $mefolio_options;
}

//TGM Plugins Activation
if(file_exists(get_template_directory().'/includes/tgm/required-plugins.php')){
	require_once(get_template_directory().'/includes/tgm/required-plugins.php');
}

//Custom TinyMce Styles
if(file_exists(get_template_directory().'/includes/tinymce/custom-tinymce-styles.php')){
	require_once(get_template_directory().'/includes/tinymce/custom-tinymce-styles.php');
}

//Demo Importer
if ( !function_exists( 'mefolio_wbc_extended_example' ) ) {
  function mefolio_wbc_extended_example( $demo_active_import , $demo_directory_path ) {
    reset( $demo_active_import );
    $current_key = key( $demo_active_import );

		//Setting Menus
		$wbc_menu_array = array( 'demo1' );

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {

			$main_menu = get_term_by( 'name', esc_html__('Main Menu', 'mefolio'), 'nav_menu' );
			if ( isset( $main_menu->term_id ) ) {
				set_theme_mod( 'nav_menu_locations', array(
						'main-menu' => $main_menu->term_id
					)
				);
			}
		}
		//Set HomePage
		$wbc_home_pages = array(
			'demo1' => 'HOME'
		);
		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
			$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
			if ( isset( $page->ID ) ) {
				update_option( 'page_on_front', $page->ID );
				update_option( 'show_on_front', 'page' );
			}
		}
  }
   add_action( 'wbc_importer_after_content_import', 'mefolio_wbc_extended_example', 10, 2 );
}

//theme setup function
function mefolio_functions() {
	// Define content width
	if ( ! isset( $content_width ) ) $content_width = 1170;	
	// text domain
	load_theme_textdomain('mefolio', get_template_directory().'/languages');
	// theme supports
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	if ( is_rtl() ) {
		add_editor_style( 'css/style-rtl.css' );
	} else {
		add_editor_style( 'css/style.css' );
	}
	// menu
	register_nav_menus( array(
		'main-menu' => esc_html__('Main Menu', 'mefolio')
	) );
}
add_action ('after_setup_theme', 'mefolio_functions');

// main sidebar
if ( !function_exists( 'mefolio_register_sidebar' ) ) {
 	function mefolio_register_sidebar() {
		register_sidebar( array(
			'name' => esc_html__( 'Main Sidebar', 'mefolio' ),
			'id' => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar on single posts', 'mefolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) 
		);
	}
	add_action( 'widgets_init', 'mefolio_register_sidebar' );
}

//adding fonts
function mefolio_fonts_url() {
	$mefolio_fonts_url = '';
	/* Translators: If there are characters in your language that are not
	* supported by these fonts, translate these to 'off'. Do not translate
	* into your own language.
	*/
	$mefolio_Poppins = esc_html(_x( 'on', 'Poppins font: on or off', 'mefolio' ));
	 
	if ( 'off' !== $mefolio_Poppins ) {
		$font_families = array();
		$font_families[] = 'Poppins:300,400,500,600,700';		 
		$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

//including theme styles
function mefolio_styles() {
	wp_enqueue_style('mefolio-fonts', mefolio_fonts_url());
	wp_enqueue_style('ionicons', get_template_directory_uri().'/css/ionicons.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.min.css');
	if ( is_rtl() ) {
		wp_enqueue_style('mefolio-style-rtl', get_template_directory_uri().'/css/style-rtl.css');
	} else {
		wp_enqueue_style('mefolio-style', get_template_directory_uri().'/css/style.css');
	}
	wp_enqueue_style('mefolio-stylesheet', get_stylesheet_uri());
	$mefolio_get_global_var = mefolio_global_var();
	if (isset($mefolio_get_global_var['btn-bgcolor'])) {
		wp_add_inline_style( 'mefolio-stylesheet', '.btn{background-color: '.$mefolio_get_global_var['btn-bgcolor']['regular'].'}.btn:hover{background-color: '.$mefolio_get_global_var['btn-bgcolor']['hover'].'}' );
	}
	if (isset($mefolio_get_global_var['btn-txtcolor'])) {
		wp_add_inline_style( 'mefolio-stylesheet', 'a:not([href]):not([tabindex]),.btn{color: '.$mefolio_get_global_var['btn-txtcolor']['regular'].'}a:not([href]):not([tabindex]):hover,.btn:hover{color: '.$mefolio_get_global_var['btn-txtcolor']['hover'].'}' );
	}
	if (isset($mefolio_get_global_var['btn-brdrcolor'])) {
		wp_add_inline_style( 'mefolio-stylesheet', '.btn{border-color: '.$mefolio_get_global_var['btn-brdrcolor']['regular'].'}.btn:hover{border-color: '.$mefolio_get_global_var['btn-brdrcolor']['hover'].'}' );
	}
	if ($mefolio_get_global_var['cimg-overlay'] == 1) {
		wp_add_inline_style( 'mefolio-stylesheet', '.cover-overlay{background-color: '.$mefolio_get_global_var['cimgoverlay-color1']['rgba'].'}' );
	}
	elseif ($mefolio_get_global_var['cimg-overlay'] == 2) {
		wp_add_inline_style( 'mefolio-stylesheet', '.cover-overlay{background: -webkit-linear-gradient(to right, '.$mefolio_get_global_var['cimgoverlay-color1']['rgba'].', '.$mefolio_get_global_var['cimgoverlay-color2']['rgba'].');background: linear-gradient(to right, '.$mefolio_get_global_var['cimgoverlay-color1']['rgba'].', '.$mefolio_get_global_var['cimgoverlay-color2']['rgba'].')}' );
	}	
}
add_action('wp_enqueue_scripts', 'mefolio_styles');

//including theme scripts
function mefolio_scripts(){
	wp_enqueue_script('tether', get_template_directory_uri().'/js/tether.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array('jquery'), '', true);
	wp_enqueue_script('typed', get_template_directory_uri().'/js/typed.js', array('jquery'), '', true);
	wp_enqueue_script('YTPlayer', get_template_directory_uri().'/js/jquery.mb.YTPlayer.min.js', array('jquery'), '', true);
	wp_enqueue_script('mefolio-main', get_template_directory_uri().'/js/main.js', array('jquery'), '', true);
	$mefolio_get_global_var = mefolio_global_var();
	if ( $mefolio_get_global_var['sidebar-menu']==1 ){
		wp_add_inline_script( 'mefolio-main', 
		'jQuery(document).ready(function(){    
		    jQuery(".status").remove();
		    if (jQuery(window).width() < 768) {'.((is_front_page() && !is_home()) ? 'jQuery("body").addClass("menu2");' : '').
		    '}
		    else {
		        jQuery("body").addClass("menu4");
		        jQuery(".inline-menu-container").removeClass().addClass("sidebar-menu");
		        jQuery(".content-home").wrap("<div class=\'home-container\'></div>");
		    }
		});');
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'mefolio_scripts');

/* Start Custom Comment list */
function mefolio_list_comment( $comment, $args, $depth ) {
  	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li'; ?>
  	<<?php echo esc_html($tag); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
  	<div id="div-comment-<?php comment_ID(); ?>" class="comment-holder row">
  		<?php if (empty($comment->comment_type)) : ?>
	    <div class="col-sm-2">
	    	<img src="<?php echo esc_url(get_avatar_url( $comment )); ?>" class="rounded-circle" alt="<?php comment_author(); ?>" />
	    </div>
		<?php endif; ?>
	    <div class="col-sm-10">
	      	<h5><?php comment_author(); ?>
	      	<span class="comment-date"> | <?php comment_date(); ?></span></h5>
	      	<?php if ( '0' == $comment->comment_approved ) : ?>
	        <p class="comment-awaiting-moderation"><?php echo esc_html__( 'Your comment is awaiting moderation.', 'mefolio' ); ?></p>
	      	<?php endif; ?>
	      	<?php comment_text(); ?>
	      	<?php
	      	comment_reply_link( array_merge( $args, array(
	        'add_below' => 'div-comment',
	        'depth'     => $depth,
	        'max_depth' => $args['max_depth'],
	        'before'    => '<div class="comment-reply">',
	        'after'     => '</div>'
	        ) ) );
	        ?>  
	    </div>
    </div>  
    <?php
  }
/* End Custom Comment list */

/* Start Custom Comment Form */
function mefolio_defaults_comment_form( $defaults ) {
   	$defaults['class_form'] = 'comment-form';
    $defaults['comment_field'] = '<div class="form-group"><textarea name="comment" class="form-control" placeholder="'.esc_html__( 'Comment', 'mefolio' ). '" aria-required="true"></textarea></div>';
    $defaults['title_reply'] = esc_html__( 'Leave a comment', 'mefolio' );
	$defaults['title_reply_before'] = '<h3 id="reply-title" class="comment-reply-title">';
    $defaults['title_reply_after']  = '</h3>';    
    $defaults['comment_notes_before'] = '';
    return $defaults;
}
add_filter('comment_form_defaults', 'mefolio_defaults_comment_form');

function mefolio_comment_form_submit_button($button) {
	$button ='<button type="submit" class="btn">'.esc_html__( 'Post Comment', 'mefolio' ).'</button>';
	return $button;
}
add_filter('comment_form_submit_button', 'mefolio_comment_form_submit_button');

function mefolio_comments_fields( $fields ) {
    $commenter= wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : ' ' );
    $fields = array(
        'author' => '<div class="form-double"><div class="form-group">' . '<input name="author" type="text" class="form-control" placeholder="'.esc_html__( 'Name', 'mefolio' ). '"' . $aria_req . ' />'.'</div>',
        'email' => '<div class="form-group last">' . '<input name="email" type="text" class="form-control" placeholder="'.esc_html__( 'Email', 'mefolio' ). '"' . $aria_req . ' />'.'</div></div>',
        'url' => '',
    );
    return $fields;
}
add_filter('comment_form_default_fields', 'mefolio_comments_fields');

function mefolio_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'mefolio_move_comment_field' );
/* End Custom Comment Form */