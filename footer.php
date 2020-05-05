        <div class="footer-container">
            <footer class="wrapper tx-cen">
                
                <div class="section group">
                    <div class="col span_3_of_3">
                        <div class="fs14 info-contacto c111"><a class="gradient-links" href="https://goo.gl/maps/WrYbJV13Np72" target="_blank">Eduardo Castillo Velasco 895, Santiago, Chile</a> | <a href="mailto:abastoseri@gmail.com" target="_blank">abastoseri(at)gmail.com</a> | <a href="https://instagram.com/abastoserigrafia" target="_blank"><i class="fab fa-instagram"></i> abastoserigrafia</a></div>
                        <div class="fs12 c111 firma">© <?php echo date("Y"); ?> abasto serigrafía / sitio por <a target="_blank" href="http://estudioruiz.co">ruiz</a></div>
                    </div>
                </div>

            </footer>
        </div>

        <!-- Main Javascript

        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script> -->

        <!-- AOS -->

        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

        <script>
        AOS.init();
        </script>

        <!-- SlickNav Menú Mobile -->

        <script src="<?php bloginfo('template_url'); ?>/js/jquery.slicknav.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function(){
            $('.slicknav_menu').slicknav({
                prependTo:'body',
                brand: '<div style="display:inline;"><a href="<?php echo esc_url( home_url() ); ?>"><img style="background-color: #111;" width="200" height="auto" src="https://abasto.org/wp-content/uploads/2020/03/header-animado.gif" alt="Abasto Serigrafía - Santiago, Chile" title="Abasto Serigrafía - Santiago, Chile" data-no-retina /></a></div>'
                });
            });

        </script>

        <!-- Esconder Header Mobile en Scroll -->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/headroom.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/jQuery.headroom.js"></script>

        <script type="text/javascript">

            $(document).ready(function(){
            $('.slicknav_menu').headroom();
            });

        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133293959-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-133293959-1');
		</script>

        <!-- Retina JS -->

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina.min.js"></script>

        <?php

        /* Always have wp_footer() just before the closing </body>
        * tag of your theme, or you will break many plugins, which
        * generally use this hook to reference JavaScript files.
        */
        wp_footer(); 

        ?>
    </body>
</html>