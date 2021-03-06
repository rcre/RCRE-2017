<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy() {

  //Allow editor style.
  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );
  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // add the support for the title tag (needed since WP 4.0)
  add_theme_support( 'title-tag' );

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/

function bones_theme_customizer($wp_customize) {
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections 

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');
  
  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action( 'customize_register', 'bones_theme_customizer' );

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

// Import Google Fonts
function bones_fonts() {
  wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,700');
}

add_action('wp_enqueue_scripts', 'bones_fonts');





/*************  RESOURCE Custom Search Parameters**************/

add_action( 'pre_get_posts', 'rcre_modify_query' );

function rcre_modify_query( $query ) {
 
 // First, make sure this isn't the admin and is the main query, otherwise bail
 if( is_admin() || ! $query->is_main_query() )
 return;
 
 // If this is a search result query
 if( $query->is_search() ) {
 // Gather all searchable post types
 $in_search_post_types = get_post_types( array( 'exclude_from_search' => false ) );
 // The post type you're removing, in this example 'page'
 $post_type_to_remove = 'attachment';
 // Make sure you got the proper results, and that your post type is in the results
 if( is_array( $in_search_post_types ) && in_array( $post_type_to_remove, $in_search_post_types ) ) {
 // Remove the post type from the array
 unset( $in_search_post_types[ $post_type_to_remove ] );
 // set the query to the remaining searchable post types
 $query->set( 'post_type', $in_search_post_types );
 }
 }
}


/************* Add Descriptions to Menu Items ********************/

// This bad boy is for adding descriptions on some of the nav menu items
function item_description( $item_output, $item, $depth, $args ) {
    if ( property_exists($item, 'description') && strlen($item->description) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}

/************* Async Load Javascript  ********************/
// Async Load
function rcre_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
  return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
    
add_filter( 'clean_url', 'rcre_async_scripts', 11, 1 );


// Nav menu
add_filter( 'walker_nav_menu_start_el', 'item_description', 10, 4 );

add_theme_support( 'post-formats', 'miniProfile' );


/************* Show Children Pages on Top Level Pages ********************/

function has_children() {
  global $post;
  $pages = get_pages('child_of=' . $post->ID);
  
  return count($pages);
}

function is_top_level() {
  global $post, $wpdb;
  $current_page = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = " . $post->ID);
  return $current_page;
}

/*************** CUSTOM FUNCTION  *************************/
/************* Redirect Archives to Pages  ********************/
// (i.e. retail taxonomy => retail page)

add_action( 'template_redirect', 'my_redirect_term_to_post' );

function my_redirect_term_to_post() {
  global $wp_query;

  if ( is_tax() ) {
    $term = $wp_query->get_queried_object();

    if ( 'specialty' == $term->taxonomy ) {
      $post_id = my_get_post_id_by_slug( $term->slug, 'page' );

      if ( !empty( $post_id ) )
        wp_redirect( get_permalink( $post_id ), 301 );
    }

    if ( 'service' == $term->taxonomy ) {
      $post_id = my_get_post_id_by_slug( $term->slug, 'page' );

      if ( !empty( $post_id ) )
        wp_redirect( get_permalink( $post_id ), 301 );
    }

  }
}


function my_get_post_id_by_slug( $slug, $post_type ) {
  global $wpdb;

  $slug = rawurlencode( urldecode( $slug ) );
  $slug = sanitize_title( basename( $slug ) );

  $post_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type = %s", $slug, $post_type ) );

  if ( is_array( $post_id ) )
    return $post_id[0];
  elseif ( !empty( $post_id ) );
    return $post_id;

  return false;
}

// For grabbing the post type from a page
global $custom_post_type;

/************* This shortens the excerpt link *****/
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/************** CUSTOM FUNCTION  *******************/
/*************** Get Featured Image ****************/

function rcre_header_image($post) { 
  if ( has_post_thumbnail() ) {
    $bannerimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  
  } else {
    $bannerimg = get_stylesheet_directory_uri() . '/library/images/bg/pattern.svg';
  }

  return $bannerimg;
}

/************* Set Admin post order to alphabetical **************/

function set_post_order_in_admin( $wp_query ) {

global $pagenow;

if ( is_admin() && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {

    $wp_query->set( 'orderby', 'title' );
    $wp_query->set( 'order', 'ASC' );       
}
}

add_filter('pre_get_posts', 'set_post_order_in_admin', 5 );


/************************ CUSTOM FUNCTION  ******************************/
/************* ADMIN - Custom Sorting Dropdown For Listings **************/


// Display a custom taxonomy dropdown in admin
add_action('restrict_manage_posts', 'rcre_filter_post_type_by_taxonomy');

function rcre_filter_post_type_by_taxonomy() {
  global $typenow;
  $post_type = 'listing'; // change to your post type
  $taxonomy  = 'listing-type'; // change to your taxonomy
  
  if ($typenow == $post_type) {
    $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
    $info_taxonomy = get_taxonomy($taxonomy);
    wp_dropdown_categories(array(
      'show_option_all' => __("Show All {$info_taxonomy->label}"),
      'taxonomy'        => $taxonomy,
      'name'            => $taxonomy,
      'orderby'         => 'name',
      'selected'        => $selected,
      'show_count'      => true,
      'hide_empty'      => true,
    ));
  };
}

add_filter('parse_query', 'rcre_convert_id_to_term_in_query');
function rcre_convert_id_to_term_in_query( $query ) {
  global $pagenow;
  $post_type = 'listing'; // change to your post type
  $taxonomy  = 'listing-type'; // change to your taxonomy
  $q_vars    = &$query->query_vars;
  if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
    $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
    $q_vars[$taxonomy] = $term->slug;
  }
}

/**************** CUSTOM FUNCTION  **********************/
/************* Get the post icon ********************/

function rcre_get_post_icon() {
  
  // If there is a post icon, then store that as the icon
  if ( types_render_field( "post-icon" ) != null ) {

    $icon = types_render_field( "post-icon", array( 'raw' => false ) );

    echo $icon;
  
  // If there is a specialty associated with this post, then assign that icon
  } elseif ( has_term() != null )  {
    $terms = get_the_terms( $post->ID, 'specialty' );
    if ( !empty( $terms ) ){
        // get the first term
        $term = array_shift( $terms );
    }
      $termId = $term->term_id;

      // Assign the icon associated with the first term
            $icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));

    // If there isn't any icon, then just use the defaul icon.
  } else {
    $iconLink = get_stylesheet_directory_uri() . '/library/images/icons/icon-sprouting-plant.svg';
      echo '<img src="'.$iconLink.'">'; 
  }
}

/************************ CUSTOM FUNCTION  ******************************/
/************* Get a tag that only has the post type ********************/

function rcre_get_post_type_tag($post) {
  // Create content for post type, based on the post type
  $postTag = get_post_type($post);
  
  if ( $postTag == 'research-report' ) {
    $postTag = "Research Report";
  } elseif ( $postTag == 'employee') {
    $postTag = "Employee";
  } elseif ( $postTag == 'case-study') {
    $postTag = "Case Study";
  } elseif ( $postTag == 'post') {
    $postTag = "Blog Post";
  } elseif ( $postTag == 'listing') {
    $postTag = "Property";
  }

  echo '<div class="left tag">' . $postTag .'</div>';
}

// /************** CUSTOM FUNCTION  ********************/
// /************* Get All Post Tags ********************/

function rcre_get_tags($post) {
  // Specialty tags
  echo get_the_term_list( $post->ID, 'specialty', '<div class="tag blue">', '</div><div class="tag blue">', '</div>');
    
  // Service tags
  echo get_the_term_list( $post->ID, 'service', '<div class="tag gray">', '</div><div class="tag gray">', '</div>');

  // Listing type tags
  $listing_type = get_the_term_list( $post->ID, 'listing-type', '', '', ''); 

  // Listing types that ARE NOT closed, get wrapped in a green tag.
  if ( has_term( '', 'listing-type' )) {
    if ( $listing_type != "Closed" ) {
      echo '<div class="tag green">' . $listing_type . '</div>';
  
    // Listing types that ARE closed, get wrapped in red, with the date.
    } else {
      $listing_closed = types_render_field( "closed-date", array( 'raw' => true) );
      
      // If the listing is closed has the date, show the close date
      if ( $listing_closed != null ) {
        // Convert date to m/s/y from timestamps
        $date_closed = date('m/d/Y', $listing_closed );
        echo '<div class="left red tag">CLOSED:' . $date_closed . '</div>';
      } 
    }
  }
}

/************** CUSTOM FUNCTION  ********************/
/************* Get the type of post I want ********************/


function rcre_get_posts( $post_type, $number_of_posts ) {

  if ( $number_of_posts == "all" ) {
    $number_of_posts = 100;
  }
  
  $tax = '';
  global $post;

  if ( has_term( '', 'specialty', $post->ID )) {
      $custom_taxterms = wp_get_object_terms( $post->ID, 'specialty', array('fields' => 'slugs'));
      $tax = 'specialty';
  
  } elseif ( has_term( '', 'service', $post->ID ) ) {
      $custom_taxterms = wp_get_object_terms( $post->ID, 'service', array('fields' => 'slugs'));
      $tax = 'service';
  
  } elseif ( has_term( '', 'teams', $post->ID ) ) {
      $custom_taxterms = wp_get_object_terms( $post->ID, 'teams', array('fields' => 'slugs'));
      $tax = 'teams';

  } elseif ( is_front_page() ) {
      $all_specialties = get_terms( 'specialty' ); // Get all specialty terms.
      $rand_specialty = $all_specialties[ array_rand( $all_specialties ) ]; // Select one at random.
      $custom_taxterms = array( $rand_specialty->term_id );
      $tax = 'specialty';
      $custom_field = 'id';
  }
  
  if ( $tax != null ) {
      $args = array(
      'post_type' => $post_type,
      'posts_per_page' => $number_of_posts,
      'orderby' => 'post_title',
      'order' => 'ASC',
      'tax_query' => array(
            array(
                'taxonomy' => $tax,
                'field' => 'slug',
                'terms' => $custom_taxterms
            )
      )
    );

  } else {
      $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $number_of_posts,
        'orderby' => 'post_title',
        'order' => 'ASC'
      );
  }

  //var_dump($args);
  $custom_posts = new WP_Query( $args );

  if ($custom_posts->have_posts()) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
    
    if ( is_page('Case Studies')) {
        get_template_part( 'template-parts/post-formats/content', 'search-result' );
    } elseif (locate_template( array( 'template-parts/post-formats/content-' . get_post_type() . '.php' ) ) != '') {
      get_template_part( 'template-parts/post-formats/content', get_post_type() );
    } else {
        get_template_part( 'template-parts/post-formats/content', 'search-result' );
      }

  endwhile; endif;
  wp_reset_postdata();
}

/* DON'T DELETE THIS CLOSING TAG */ ?>