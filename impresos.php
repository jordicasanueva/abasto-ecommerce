<?php
/*
Template Name: Impresos
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

                                    <?php while (have_posts()) : the_post(); ?>

                                    <!-- Grilla Galería de Imágenes -->

                                    <div id="grid">

                                    <div class="grid-sizer"></div>
										
                                                <?php revconcept_get_images("$post->ID"); ?>
										
                                    </div>

                                <?php endwhile; ?>
                                        
                                <?php else : ?>

                                <?php endif; ?>

                        </section>

                    </section>

                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

                <!-- Masonry -->

                <script src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>
                <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>

                <script type="text/javascript">
						
							// init Masonry
							var $grid = $('#grid').masonry({
							  // options...
								columnWidth: '.grid-sizer',
								// selector for entry content
								itemSelector: '.grid-item',
								percentPosition: true
							});
							// layout Masonry after each image loads
							$grid.imagesLoaded().progress( function() {
							  $grid.masonry('layout');
							});

                </script>

                <!-- Magnific Popup core JS file -->

                <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.js"></script>

                <script type="text/javascript">

                $(document).ready(function() {
                    $('.popup-gallery').magnificPopup({
                        delegate: 'a',
                        type: 'image',
                        tLoading: 'Loading image #%curr%...',
                        mainClass: 'mfp-img-mobile',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
							 titleSrc: function(item) {
return item.el.attr('title') + '';
},
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                        }
                    });
                });

                </script>

<?php get_footer(); ?>