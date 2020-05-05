<?php
/*
Template Name: Publicaciones
*/
?>
<?php get_header(); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>

<?php
/*
Template Name: Página de inicio Abasto Serigrafía
*/
?>

<?php get_header(); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>

                    <!-- Listado Proyectos -->

                    <section class="mt-30 mb-70">

                        <section class="section group">

                            <?php if (have_posts()) : ?>
                                
                                <?php query_posts("cat=4") ?>

                                    <?php while (have_posts()) : the_post(); ?>

                                <div class="proyecto col span_1_of_3" data-aos-once="true" data-aos="fade" data-aos-offset="0">
                                                
                                    <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">

                                        <div class="img-proyecto-destacado" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>

                                        <div class="proyectos-titulo fs13 lh-15 tx-izq mt-10 bold">

                                        <?php the_title(); ?>

                                        <?php
                                        $posttags = get_the_tags();
                                        if ($posttags) {
                                          echo '<ul class="autor regular">';
                                          foreach($posttags as $tag) {
                                            echo '<li>' .$tag->name. '</li>'; 
                                          }
                                          echo '</ul>';
                                        }
                                        ?>

                                        </div>

                                    </a>
                                
                                </div>

                                <?php endwhile; ?>
                                        
                                <?php else : ?>

                                <?php endif; ?>

                        </section>

                    </section>

                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php get_footer(); ?>