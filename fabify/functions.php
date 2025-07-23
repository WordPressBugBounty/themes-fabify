<?php

define( 'FABIFY_THEME_VERSION', '16.2' );

function fabify_css() {
	$parent_style = 'specia-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fabify-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('fabify-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
	wp_dequeue_style('specia-default');
	
	wp_dequeue_style('specia-media-query');
	wp_enqueue_style('fabify-media-query', get_template_directory_uri() . '/css/media-query.css');

}
add_action( 'wp_enqueue_scripts', 'fabify_css',999);
   	

function fabify_setup()	{	
	load_child_theme_textdomain( 'fabify', get_stylesheet_directory() . '/languages' );
	add_editor_style( array( 'css/editor-style.css', fabify_google_font() ) );
}
add_action( 'after_setup_theme', 'fabify_setup' );
	
/**
 * Register Google fonts for fabify.
 */
function fabify_google_font() {
	
    $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Open Sans:300,400,600,700,800', 'Raleway:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return esc_url($get_fonts_url);
}

/**
 * Remove Customize Panel from parent theme
 */
function fabify_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_control('call_action_button_target');	
}
add_action( 'customize_register', 'fabify_remove_parent_setting',99 );


function fabify_scripts_styles() {
    wp_enqueue_style( 'fabify-fonts', fabify_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'fabify_scripts_styles' );



require ( get_stylesheet_directory() . '/inc/customize/fabify-header-section.php');
require( get_stylesheet_directory() . '/inc/customize/fabify-call-action.php');
require( get_stylesheet_directory() . '/inc/customize/fabify-premium.php');

/**
 * Add WooCommerce Cart Icon With Cart Count
*/
function fabify_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-icon" href="<?php echo esc_url ( wc_get_cart_url() ); ?>"><i class='fa fa-cart-plus'></i><?php
    if ( $count > 0 ) { 
	?>
        <span class="count"><?php echo esc_html( $count ); ?></span>
	<?php            
    } else {
	?>	
		<span class="count"><?php echo "0"; ?></span>
	<?php
	}
    ?></a><?php
 
    $fragments['a.cart-icon'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'fabify_add_to_cart_fragment' );



/**
 * Import Options From Specia Theme
 *
 */
function fabify_parent_theme_options() {
	$specia_mods = get_option( 'theme_mods_specia' );
	if ( ! empty( $specia_mods ) ) {
		foreach ( $specia_mods as $specia_mod_k => $specia_mod_v ) {
			set_theme_mod( $specia_mod_k, $specia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'fabify_parent_theme_options' );