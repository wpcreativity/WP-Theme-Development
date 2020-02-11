    <div class="footer pt-3 pb-3" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 pt-4 col-12">
                    <figure><img src="<?php echo ot_get_option('footer_logo'); ?>" alt=""></figure>
                    <p class="fz12 text-white lh24 museoSans pt-2"><?php echo ot_get_option('footer_content'); ?></p>
                </div>
                <div class="col-md-4 col-sm-6 pt-4 col-6 ">
                    <div class="wiget">
                        <h1 class="text-white fz30 text-center">CONTACT</h1>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#contact-modal" target="_blank" class="f-btn">
                    
                       Contact us <i class="far fa-envelope"></i>
                    </a>

                </div>
                <div class="col-md-4 col-sm-6  pt-4 pl-md-5 pl-sm-5 col-6 ">
                    <div class="wiget">
                        <h1 class="text-white fz30 ">SOCIAL</h1>
                    </div>
                    <div class="wig-content pt-2">
                        <p>LET’S CONNECT:</p>
                        <ul class="list-none fz12 p-0 m-0 text-white museoSans">
                            <li><a href="<?php echo ot_get_option('instagram_account'); ?>" target="_blank" class="text-white">Instagram /
                    @cristi_miranda</a></li>
                            <li><a href="<?php echo ot_get_option('twitter_account'); ?>" target="_blank" class="text-white">Twitter /
                    @cristi_miranda</a></li>
                            <li><a href="<?php echo ot_get_option('facebook_account'); ?>" targeg="_blank" class="text-white">Facebook /cristimiranda
                  </a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="login-modal">
        <!-- Button trigger modal -->
       

        <!-- Modal -->
        <div class="modal fade" id="Loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Criiti2.png); background-size: cover;
    padding: 60px 40px;">
                        <h1>Welcome</h1>
                        <div class="form-group">
                            <span><i class="far fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <span><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn-def mx-auto d-table " data-dismiss="modal">Login</button>
                        </div>
                        <div class="forget-pass">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#forget" data-dismiss="modal">Forgot password</a> <spana class="fz16 text-white pl-2 pr-2">/</spana> <a href="javascript:void(0)" data-toggle="modal" data-target="#sing-up-modal" data-dismiss="modal">Register Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="sign-up-modal login-modal">
        
        <div class="modal fade" id="sing-up-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Criiti2.png); background-size: cover;">
                        <h1>sign up</h1>
                        <div class="form-group">
                            <span><i class="far fa-user"></i></span>
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <span><i class="far fa-envelope"></i></span>
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <input type="text" placeholder="Mobile Number" class="form-control">
                        </div>
                        <div class="form-group">
<span><i class="fas fa-lock"></i></span>
                            <input type="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
<span><i class="fas fa-lock"></i></span>
                            <input type="password" placeholder="Re-Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn-def mx-auto d-table " data-dismiss="modal">Sign up</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="forget login-modal">
        
            <div class="modal fade" id="forget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
    
                        <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Criiti2.png); background-size: cover; padding: 60px 40px;">
                            <h1>FORGOT PASSWORD</h1>
                      
                            <div class="form-group">
                                <span><i class="far fa-envelope"></i></span>
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                      
                      
                      <div class="form-group">
                                <button type="button" class="btn-def mx-auto d-table " data-dismiss="modal">Send</button>
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div>
    </div>
    
    <div class="thankyou">

        <div class="modal fade bd-example-modal-sm" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content  rounded-0">

                    <div class="modal-body p-5">
                        <h1 class="pr-color position-relative">Thank You!</h1>
                        <p class="pr-color fz16 pr-color mt-5 mb-5 text-center">“Thank you for subscribing to follow along with Cristi’s Journey. Check your email for future updates about my progress and cool new features yet to come.”</p>
                        <div class="form-group">
                            <button type="button" class="btn-def mx-auto d-table " data-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="donate-modal login-modal">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="donate-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/donatebg.jpg); background-size: cover;
    padding: 60px 40px 30px 40px; ">
                        <p>Thank you for helping to support my trip to the Bahamas for the WBFF Championship.</p>
                        <div class="border-group d-none">
                            <p>Sign in first to claim this donation and receive free giveaways if i win my WBFF event.</p>
                        <div class="form-group">
                        <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group ">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        
                        <div class="form-group">
                                <button type="button" class="btn-def mx-auto d-table mb-0 " data-dismiss="modal">Login</button>
                            </div>
                    </div>
                    <div class="chose-method">
                        <p class="fz14 text-center mt-3">Choose payment Method</p>
                        <ul class="list-none p-0 m-0 d-flex flex-row justify-content-center align-items-start">
                                <li>
                                    <?php echo do_shortcode('[paypal-donation]');?>
                                </li>
                                
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#strip-modal" target="_blank">
                                        <img src="http://cristi-miranda.com/wp-content/uploads/2019/07/stripe.jpg" alt="">
                                    </a>
                                </li>
                            </ul>

                   </div>
                 
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="login-modal content-modal">
            <!-- Button trigger modal -->
            <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
    
                        <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Criiti2.png); background-size: cover;
        padding: 60px 40px;">
                            <h1>Contact Cristi</h1>
                            <div class="form-group d-flex flex-row align-items-center">
                                <label>Name:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group d-flex flex-row align-items-center">
                                <label>Email:</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group d-flex flex-column">
                                <label class="d-block w-100">Message:</label>
                                <textarea  class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                    <button type="button" class="btn-def mx-auto d-table " data-dismiss="modal">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Stripe Payment gateway model-->
        <div class="login-modal strip-modal">
            <!-- Modal -->
            <div class="modal fade" id="strip-modal" tabindex="-1" role="dialog" aria-labelledby="strip-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Criiti2.png); background-size: cover;
        padding: 60px 40px;">
                            <h1>Stripe Payment</h1>
                            
                            <?php echo do_shortcode('[accept_stripe_payment price="0" name="Another test donation" button_text="Donate" description="This is a custom description that will show in the payment window"]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/js/owl.carousel.js"></script>
    <script src="<?php echo THEME_URI; ?>/js/anchors.navigation.js"></script>

    <script>
        $(document).ready(function() {
            var owl = $('#Product');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                smartSpeed: 1000,
                navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
                loop: true,
                responsive: {
                    0: {
                        items: 4
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 8
                    }
                }
            })
        })
    </script>

    <script>
        window.onscroll = function() {
            myFunction()
        };
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script> 

    <script>
        $(document).ready(function () {
            $(".Play").click(function () {
                $(".PlayVideo").css("opacity", "1").addClass("hid-br");
                $(".Play").css("display", "none");
                $(".Pause").css("display", "block");
            });
            $(".Pause").click(function () {
                $(".PlayVideo").css("opacity", "0").removeClass("hid-br");
                $(".Play").css("display", "block");
                $(".Pause").css("display", "none");
            });
        });
    </script> 

<?php wp_footer(); ?>
</body>
</html>
