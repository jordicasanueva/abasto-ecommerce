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