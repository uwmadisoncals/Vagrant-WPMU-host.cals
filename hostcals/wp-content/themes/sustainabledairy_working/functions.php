<?php
//add_action('get_header', 'my_filter_head');
add_action( 'after_setup_theme', 'sustainabledairy_setup' );
//add_filter('the_content','custom_shorten_content');

  function my_filter_head() {
    //remove_action('wp_head', '_admin_bar_bump_cb');
  }
  
  if ( ! function_exists( 'sustainabledairy_setup' ) ):
  
  function sustainabledairy_setup() {
  	//Load default language messages
  	load_theme_textdomain( 'sustainabledairy', get_template_directory() . '/languages' );
  	
  	/*Add a primary nav menu
  	register_nav_menu( 'primary', __( 'Primary Menu', 'sustainabledairy' ) );
  	
  	//Add a home page objectives menu
  	register_nav_menu( 'home_leftsidebar', __( 'Project Objectives Menu', 'sustainabledairy' ) );

  	//Add a home page partners menu
  	register_nav_menu( 'home_leftsidebar-2', __( 'Partners Menu', 'sustainabledairy' ) );
	*/

  	register_nav_menus ( array(
		'primary'=>__( 'Main Navigation in the header', 'sustainabledairy' ), // menu location slug => description 
		'home_leftsidebar'=>__( 'Left Sidebar : Project Objectives Menu', 'sustainabledairy' ),
		'home_leftsidebar-2'=>__( 'Left Sidebar : Partners Menu', 'sustainabledairy' )
		)); 
  	
  	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	
	// Add support for custom headers.
	$custom_header_support = array(
		// The default header text color.
		'default-text-color' => '000',
		// The height and width of our custom header.
		'width' => apply_filters( 'sustainabledairy_header_image_width', 392 ),
		'height' => apply_filters( 'sustainabledairy_header_image_height', 136 ),
		// Support flexible heights.
		'flex-height' => true,
		// Random image rotation by default.
		'random-default' => false,
		// Callback for styling the header.
		'wp-head-callback' => 'sustainabledairy_header_style',
		// Callback for styling the header preview in the admin.
		'admin-head-callback' => 'sustainabledairy_admin_header_style',
		// Callback used to display the header preview in the admin.
		'admin-preview-callback' => 'sustainabledairy_admin_header_image',
		// The default header image
		/*'default-image'=> get_template_directory_uri() . '/images/sustainabledairy_logo.png', */
		'default-image'=> get_template_directory_uri() . '/images/testing123.png',
	);
	
	//add_theme_support( 'custom-header', $custom_header_support );
	
	
	
	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'primary' => array(
			/*'url' => '%s/images/sustainabledairy_logo.png',*/
			'url' => '%s/imagest/testing123.png',
			/*'thumbnail_url' => '%s/images/sustainabledairy_logo.png', */
			'thumbnail_url' => '%s/images/testing123.png',
			/* translators: header image description */
			'description' => __( 'Sustainable Dairy', 'sustainabledairy' )
		)
	) );
  }

  /*
  	function custom_shorten_content(){
  	$content=get_the_content();
  	$shortened=substr($content,0,50);
  	echo $shortened;
	}	
  	*/
function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}


if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Sidebar Widget Area One',
		'id'=>'widgetarea-1',
		'description' => 'The first Widgetized Area on the Left Sidebar',
		'before_widget'=>'<div id="" class="widgetWrap" ',
		'after_widget'=> '</div>',
		'before_title'=> '<h3>',
		'after_title'=>'</h3>'
		));



	/*register_sidebar(array(
		'name'=>'Sidebar Widget Area Two',
		'id'=>'widgetArea2',
		'description' => 'The second Widgetized Area on the Left Sidebar',
		'before_widget'=>'<div id="" class="widgetWrap" ',
		'after_widget'=> '</div>',
		'before_title'=> '<h3>',
		'after_title'=>'</h3>'
		));*/
}

//Change the 'read more' section
 function new_excerpt_more( $more ) {
	return ' &nbsp;<a class="moretag" href="'. get_permalink( get_the_ID() ) . '">Read the full article...</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


 /*
//Control Excerpt length with filter

function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text);
                $excerpt_length = 50;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '<br/><a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt'); */

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $first_vid = '';
  
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $imgmatches);
  $output = preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $post->post_content, $vidmatches);
  $first_img = $imgmatches[1][0];
  $first_vid = $vidmatches[0];
  
  /*if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $post->post_content, $vidmatch)) {
  	$video = "yes";
    $first_img = $vidmatch[1][0];
}*/

  if(empty($first_img) && empty($first_vid)) {
    //placeholder
    //$first_img = "<div class='noImageSpacer2'></div>";
    
  }  else {
	//$first_vid = "<img src='".$first_vid;
	//return $first_vid;
 
	// placeholder image
	if(empty($first_vid)) {
		$first_img = "<img src='".$first_img."' alt=' '>";
		return $first_img;
	} else {
		return $first_vid;
	}
	
	
  }
  
}


 //Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


  class dd_span_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	                $class_names = $value = '';
	
	                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	                $classes[] = 'menu-item-' . $item->ID;
	
	                /**
	                 * Filter the CSS class(es) applied to a menu item's <li>.
	                 *
	                 * @since 3.0.0
	                 *
	                 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
	                 * @param object $item    The current menu item.
	                 * @param array  $args    An array of arguments. @see wp_nav_menu()
	                 */
	                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
                	$class_names = $class_names ? ' class="'  .'rightTriangle'.' '. esc_attr( $class_names ) . '"' : '';
	
                /**
	                 * Filter the ID applied to a menu item's <li>.
                 *
                 * @since 3.0.1
                 *
                 * @param string The ID that is applied to the menu item's <li>.
                 * @param object $item The current menu item.
                 * @param array $args An array of arguments. @see wp_nav_menu()
                 */
	                $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	                $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
	
	                $output .= $indent . '<li' . $id . $value . $class_names .'>';
	
                	$atts = array();
	                $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
                	$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
	                $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
	                $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
	
                /**
                 * Filter the HTML attributes applied to a menu item's <a>.
                 *
                 * @since 3.6.0
               	 *
	             * @param array $atts {
                 *     The HTML attributes applied to the menu item's <a>, empty strings are ignored.
                 *
                 *     @type string $title  The title attribute.
                 *     @type string $target The target attribute.
	             *     @type string $rel    The rel attribute.
                 *     @type string $href   The href attribute.
	             * }
                 * @param object $item The current menu item.
	             * @param array  $args An array of arguments. @see wp_nav_menu()
                 */
	             $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
	
                $attributes = '';
	                foreach ( $atts as $attr => $value ) {
                        if ( ! empty( $value ) ) {
                                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                                $attributes .= ' ' . $attr . '="' . $value . '"';
                        }
                }

                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>' . '<span class="">';
               	/** This filter is documented in wp-includes/post-template.php */
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                $item_output .= '</span></a>';
                $item_output .= $args->after;

                	/**
	                 * Filter a menu item's starting output.
                     *
	                 * The menu item's starting output only includes $args->before, the opening <a>,
                     * the menu item's title, the closing </a>, and $args->after. Currently, there is
	                 * no filter for modifying the opening and closing <li> for a menu item.
                 	 *
	                 * @since 3.0.0
	                 *
	                 * @param string $item_output The menu item's starting HTML output.
	                 * @param object $item        Menu item data object.
                 	 * @param int    $depth       Depth of menu item. Used for padding.
	                 * @param array  $args        An array of arguments. @see wp_nav_menu()
	                 */
                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
  endif; 
?>