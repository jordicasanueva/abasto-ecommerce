<?php get_header(); ?>

<!-- Menus -->

<div class="main-container">

<article class="main wrapper clearfix">

<section class="mt-40 mb-70 contenedor-single">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <section class="single-item">

                <?php the_content(); ?>

            </section>

            <!-- Cuerpo Proyecto -->

            <div class="section group">

                <div class="col span_3_of_3 cuerpo-single">

                <div class="section group">
                    
                    <div class="col span_1_of_2">

                           <div class="slide-count-wrap tx-izq fs11 mb-020">
                             
                                <span class="current"></span>
                                /
                                <span class="total"></span>

                           </div>

                            <h1 class="fs13 m-0 c111"><?php the_title(); ?></h1>

                            <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              echo '<ul class="fs13 autor">';
                              foreach($posttags as $tag) {
                                echo '<li>' .$tag->name. '</li>'; 
                              }
                              echo '</ul>';
                            }
                            ?>

                       <div class="fs13">

                        <!-- Custom fields -->

                        <?php the_meta(); ?>

                       </div>

                    </div>

                </div>

                </div>

            </div>
        
        <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>

</div>

</section>

</article>

  <script src="<?php bloginfo('template_url'); ?>/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">

    var slideCount = null;

    $( document ).ready(function() {

      $(".single-item").slick({
        infinite: false,
        fade: true,
        adaptiveHeight: false,
        accesibility: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        adaptiveHeight: !0,
        speed: 0,
        swipe: !1,
        cssEase: "linear"
      });
      $(".single-item")[0].slick.setPosition();
    });

    $(".single-item").on('init', function(event, slick){
      slideCount = slick.slideCount;
      setSlideCount();
      setCurrentSlideNumber(slick.currentSlide);
    });

    $(".single-item").on('beforeChange', function(event, slick, currentSlide, nextSlide){
      setCurrentSlideNumber(nextSlide);
    });

    function setSlideCount() {
      var $el = $('.slide-count-wrap').find('.total');
      $el.text(slideCount);
    }

    function setCurrentSlideNumber(currentSlide) {
      var $el = $('.slide-count-wrap').find('.current');
      $el.text(currentSlide + 1);
    }

</script>

<?php get_footer(); ?>