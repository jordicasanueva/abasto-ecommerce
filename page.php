<?php get_header(); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <?php
                echo apply_filters('the_content',$wp_query->post->post_content);
                ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php get_footer(); ?>