<?php add_theme_support( 'post-thumbnails' ); ?>
<?php function revconcept_get_images($post_id) {
    global $post;
 
     $thumbnail_ID = get_post_thumbnail_id();
 
     $images = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'DSC', 'orderby' => 'menu_order ID') );
 
     if ($images) :
 
         foreach ($images as $attachment_id => $image) :
 
         if ( $image->ID != $thumbnail_ID ) :
 
             $img_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); //alt
             if ($img_alt == '') : $img_alt = $image->post_title; endif;
 
             $big_array = image_downsize( $image->ID, 'large' );
             $img_url = $big_array[0];
             
             echo '<div class="grid-item" data-aos-once="true" data-aos="fade" data-aos-offset="0">';
             echo '<div class="bordes popup-gallery">';
             echo '<a href="';
             echo $img_url;
             echo '">';
	         echo '<div class="titulo-img">';
             echo '<div>';
	         echo $img_alt;
             echo '</div>';
             echo '</div>';
             echo '<img src="';
             echo $img_url;
             echo '" alt="';
             echo $img_alt;
             echo '" />';
             echo '</a>';
             echo '</div>';
             echo '</div>';
             
 
     endif; endforeach; endif; } ?>
<?php register_nav_menus( array(
    'header-menu' => 'Header Menu 1',
    'header-mobile' => 'Header Mobile'
)); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php 

//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
        wp_enqueue_script('jquery');
    }
}
add_action('wp', 'modify_jquery');

 ?>
<?php function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' ); ?>
<?php
        /**
         * Remove the breadcrumbs 
         */
        add_action( 'init', 'woo_remove_wc_breadcrumbs' );
        function woo_remove_wc_breadcrumbs() {
            remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
        }
?>
<?php
        // Remove the result count from WooCommerce
        remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
?>
<?php 

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}

function wp_enqueue_woocommerce_style(){
wp_register_style( 'woocommerce-layout', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce-layout.css' );
if ( class_exists( 'woocommerce' ) ) {
    wp_enqueue_style( 'woocommerce-layout' );
}

wp_register_style( 'woocommerce-smallscreen', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce-smallscreen.css' ,array(),'4.0.1','only screen and (max-width: 768px)' );
    if ( class_exists( 'woocommerce' ) ) {
            wp_enqueue_style( 'woocommerce-smallscreen' );
    }

wp_register_style( 'woocommerce-general', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce.css' );
if ( class_exists( 'woocommerce' ) ) {
    wp_enqueue_style( 'woocommerce-general' );
    }
 }
?>
<?php 

add_action( 'wp_enqueue_scripts', 'jk_masonry' );
function jk_masonry() {
  wp_enqueue_script( 'jquery-masonry', array( 'jquery' ) );
}

?>
<?php

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

?>
<?php
/**
 * Remove products categories
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
?>
<?php

// remove coupon forms if you don't want a coupon for a free cart
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

?>
<?php

// Remove the "Additional Info" order notes
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

?>