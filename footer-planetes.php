    <footer class="fplanete">
        <div class="container">
            <?php $ft1 = get_field('footertitre1');?>
            <div id="fplanete">
                <div class="coca">
                    <div class="coord"><h1><?= get_field('$ft1'); ?></h1></div>
                    <div class="carte"></div>
                </div>
                <p>
                    Développé par
                    <a href="#" title="Redirection vers le github de N Rachid">
                        N Rachid
                    </a>&nbsp;-&nbsp;&copy;&nbsp;-&nbsp;
                    <?php
                        date_default_timezone_set('Europe/Paris');
                        $date = date('Y'); /* On peut ajouter ou remplacer par : -m-d H:i:s*/
                        echo $date;
                    ?>
                </p>
            </div>
        </div> 
    
    </footer>

    <?php wp_footer(); ?>
    <script src="<?= get_template_directory_uri() ?>/webfiles/js/OwlCarousel/docs_src/assets/vendors/jquery.min.js" ></script>
    <script src="<?= get_template_directory_uri() ?>/webfiles/js/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        });
    </script>
    </body>
</html>