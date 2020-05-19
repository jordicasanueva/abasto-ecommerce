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