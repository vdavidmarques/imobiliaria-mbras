<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );    
}

 //This theme recommends the following plugin


add_action('admin_enqueue_scripts', 'ds_admin_theme_style');
add_action('login_enqueue_scripts', 'ds_admin_theme_style');

function ds_admin_theme_style() {
	
		echo '<style>.wp-core-ui .notice.is-dismissible { display: none; }</style>';
	
}

/*

Personalizando ▸ Widgets
Lateral

/*



// POSTS RECENTES
 /*
function exclude_specific_cats( $wp_query ) {   
  	if (is_home() && is_front_page() AND is_category() AND is_single()  ) {
        $wp_query->set( 'cat', '-1,-2,-7,' );
  	}
    
}

add_action( 'pre_get_posts', 'exclude_specific_cats' );*/


/*
      **** A função abaixo está impedindo que os posts recentes sejam aplicados na página inicial ****

function exclude_specific_cats( $wp_query ) {   

//OR is_category()
    if (is_home() && is_front_page() OR is_category() OR  is_single()  ) {
    
        $wp_query->set( 'cat', '-1,-2,-7,');
 
    }
}

add_action( 'pre_get_posts', 'exclude_specific_cats' );*/


// Excluir categorías del widget de WordPress
// -----------------------------------------------
function exclude_widget_categories($args) {
 
    // ID de la categoría que queremos excluir.
    // Si son varias, separar con comas: '25,32,65'
    $excluded = '1,2,7'; 
 
    $args['exclude'] = $excluded;
    return $args;
 
}
add_filter( 'widget_categories_args', 'exclude_widget_categories'); // Si utilizamos el formato de lista
add_filter( 'widget_categories_dropdown_args', 'exclude_widget_categories'); // Si utilizamos el formato desplegable





/*-------------------------------------------------------------------------------------------------- */

add_theme_support('post-thumbnails'); 

function categorias(){
    register_nav_menu('minhas-categorias', 'main-menu');
}

add_action('init', 'categorias');

/* Limita a qtde de palavras no preview do post no index*/

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}

// Mudar formulário dos comentários no single
function ia_comment_form_text ($fields) {
  $fields['label_submit'] = 'Comentar';
  $fields['title_reply'] = 'Deixe um comentário';
     return $fields;
 }
 add_filter('comment_form_defaults','ia_comment_form_text');
  
 // Remover campos do formulário dos comentários no single
 function ia_comment_form_fields($fields){
     $fields['url'] = '';
     $fileds['cookies'] = '';

     return $fields;
 }
 add_filter('comment_form_default_fields','ia_comment_form_fields');

//Ordem dos campos do formulário dos comentários no single
function mo_comment_fields_custom_order( $fields ) {
  $comment_field = $fields['comment'];
  $author_field = $fields['author'];
  $email_field = $fields['email'];
  unset( $fields['comment'] );
  unset( $fields['author'] );
  unset( $fields['email'] );
   // Nova ordem
   $fields['author'] = $author_field;
   $fields['email'] = $email_field;
   $fields['comment'] = $comment_field;
   return $fields;
}

//Configuação do menu no menu do blog
function menu_search($items, $args){
  if( $args->theme_location == 'minhas-categorias')  {
    $search = '<li class="menusearch">';
    $search .= '<form method="get" id="searchform" action="/">';
    $search .= '<input type="text" class="field" name="s" id="s" placeholder="Search" />';
    $search .= '<input type="submit" class="menusubmit" name="submit" id="searchsubmit" value="Search" />';
    $search .= '</form>';
    $search .= '</li>';
  }
  return $items;
}
add_filter('wp_nav_menu_items','menu_search', 10, 2);

add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'twentyseventeen' ),
			'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		)
	);
/*
	 * Enable support for Post Formats.
	 *
	 * See: https://wordpress.org/support/article/post-formats/
	 */
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
  );
  
//Ativação do Widgets

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

// Define and register starter content to showcase the theme on new sites.
$starter_content = array(
  'widgets'     => array(
    // Place three core-defined widgets in the sidebar area.
    'sidebar-1' => array(
      'text_business_info',
      'search',
      'text_about',
    ),

    // Add the core-defined business info widget to the footer 1 area.
    'sidebar-2' => array(
      'text_business_info',
    ),

    // Put two core-defined widgets in the footer 2 area.
    'sidebar-3' => array(
      'text_about',
      'search',
    ),
  ),

  // Specify the core-defined pages to create and add custom thumbnails to some of them.
  'posts'       => array(
    'home',
    'about'            => array(
      'thumbnail' => '{{image-sandwich}}',
    ),
    'contact'          => array(
      'thumbnail' => '{{image-espresso}}',
    ),
    'blog'             => array(
      'thumbnail' => '{{image-coffee}}',
    ),
    'homepage-section' => array(
      'thumbnail' => '{{image-espresso}}',
    ),
  ),

  // Create the custom image attachments used as post thumbnails for pages.
  'attachments' => array(
    'image-espresso' => array(
      'post_title' => _x( 'Espresso', 'Theme starter content', 'twentyseventeen' ),
      'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
    ),
    'image-sandwich' => array(
      'post_title' => _x( 'Sandwich', 'Theme starter content', 'twentyseventeen' ),
      'file'       => 'assets/images/sandwich.jpg',
    ),
    'image-coffee'   => array(
      'post_title' => _x( 'Coffee', 'Theme starter content', 'twentyseventeen' ),
      'file'       => 'assets/images/coffee.jpg',
    ),
  ),

  // Default to a static front page and assign the front and posts pages.
  'options'     => array(
    'show_on_front'  => 'page',
    'page_on_front'  => '{{home}}',
    'page_for_posts' => '{{blog}}',
  ),

  // Set the front page section theme mods to the IDs of the core-registered pages.
  'theme_mods'  => array(
    'panel_1' => '{{homepage-section}}',
    'panel_2' => '{{about}}',
    'panel_3' => '{{blog}}',
    'panel_4' => '{{contact}}',
  ),

  // Set up nav menus for each of the two areas registered in the theme.
  'nav_menus'   => array(
    // Assign a menu to the "top" location.
    'top'    => array(
      'name'  => __( 'Top Menu', 'twentyseventeen' ),
      'items' => array(
        'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
        'page_about',
        'page_blog',
        'page_contact',
      ),
    ),

    // Assign a menu to the "social" location.
    'social' => array(
      'name'  => __( 'Social Links Menu', 'twentyseventeen' ),
      'items' => array(
        'link_yelp',
        'link_facebook',
        'link_twitter',
        'link_instagram',
        'link_email',
      ),
    ),
  ),
);


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'twentyseventeen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'twentyseventeen' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );


