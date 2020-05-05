<?php
/*
Template Name: Encargos
*/
?>

<?php get_header(); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <article class="main clearfix">

                    <!-- Listado Proyectos -->

                    <div class="section group" data-aos-once="true" data-aos="fade" data-aos-offset="0">

                        <div class="contenedor-nosotros clearfix">

                        <?php if (have_posts()) : ?>

                            <?php while (have_posts()) : the_post(); ?>

                            <div class="foto-nosotros col2 span_1_of_3">

								<?php the_post_thumbnail(); ?>

                            </div>

                            <div class="fs16 contenido-nosotros c666 col2 span_2_of_3">

                                <?php the_content(); ?>

                            </div>

                        </div>
                        
                        <?php endwhile; ?>
                                
                        <?php else : ?>

                        <?php endif; ?>

                    </div>

                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php get_footer(); ?>