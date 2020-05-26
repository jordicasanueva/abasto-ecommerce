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
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

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