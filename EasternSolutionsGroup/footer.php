<footer>
        <div class="Footers">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="Foots">
                            <h3>About Us </h3>
                            <p><?php echo ot_get_option('about_content');?></p>
                            <ul class="text-box">
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span><?php echo ot_get_option('header_mail_id');?></span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>P: <?php echo ot_get_option('header_phone_number');?></span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span><?php echo ot_get_option('company_address');?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="Foots">
                            <?php dynamic_sidebar('footer-menu');?>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="Foots">
                            <h3>Legals</h3>
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="Foots">
                            <h3>Our Follows Us</h3>
                            <h6>We respect your privacy</h6>
                            <ul class="Socail">
                                <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('twitter');?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('instagram');?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('linkedin');?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="Copyright">
            <p><?php echo ot_get_option('copyright_content');?></p>
        </div>

    </footer>

    <div class="scroll-top-wrapper  show">
        <span class="scroll-top-inner">
           <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#application_form").validate({
                errorPlacement: function(error, element) {
                    element.attr('placeholder', error.text());
                },
            });
        })
    </script>
    <style type="text/css">
        .error{color: red!important;}
    </style>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('#myCarousel').carousel({
            interval: 3000
        });
    </script>

    <script src="<?php bloginfo('template_url');?>/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

    <script src="<?php bloginfo('template_url');?>/js/scrolla.jquery.min.js"></script>
    <script>
        $('.animate').scrolla({
            mobile: false,
            once: false
        });
    </script>

    <script>
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            if (scroll >= 80) {
                $("header").addClass("fixed");
            } else {
                $("header").removeClass("fixed");
            }   
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(document).on('scroll', function() {
                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                }
            });

            $('.scroll-top-wrapper').on('click', scrollToTop);
        });

        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({
                scrollTop: offsetTop
            }, 1000, 'linear');
        }
    </script>

    <script src="<?php bloginfo('template_url');?>/js/jquery.pogo-slider.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
