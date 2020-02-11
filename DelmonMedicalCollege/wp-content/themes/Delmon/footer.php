<section> 
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-social">
                        <figure>
                            <a href="<?php bloginfo('url');?>"><img src="<?php echo ot_get_option('logo');?>" alt=""></a>
                        </figure>
                        <h4><?php echo ot_get_option('footer_title');?>
                            </h4>
                            <?php echo ot_get_option('footer_content');?>
                                </p>
                        <ul class="socil-links">
                             <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="<?php echo ot_get_option('linkedin');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                  <li><a href="<?php echo ot_get_option('youtube');?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                       
                    </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="title">Useful Links</h5>
                           <?php $nav_menu=array( 'menu'=>'USEFUL LINKS',
                             'theme_location' =>'primary',
                             'menu_class' => 'link-list' );
                             wp_nav_menu( $nav_menu);
                             ?>
                    </div>
                    <div class="col-md-4">
                            <h5 class="title">Contact US</h5>
                            <div class="footer-cont">
                                <p><?php echo ot_get_option('address_2');?></p>
                                        <p>Phone: <span><?php echo ot_get_option('mobile');?></span> | Fax: <span><?php echo ot_get_option('fax');?></span></p>
                                        <p>Toll free: <?php echo ot_get_option('toll_free_no');?></p>
                                        <p>Email: <a href="mailto:#"><?php echo ot_get_option('email');?></a></p>
                                        <a href="<?php echo ot_get_option('request_info_btn_link');?>" class="Request"><?php echo ot_get_option('request_info_btn');?></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <p><?php echo ot_get_option('copyright');?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <script src="<?php bloginfo('template_url');?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/scrolla.jquery.min.js"></script>
    

<script>
    var vidClip = document.getElementById("myVideo"); 

// play video event
function playVid() { 
    myVideo.play();
} 

// pause video event
function pauseVid() { 
  myVideo.pause(); 
}

// toggle button class on click
$('button').on('click', function() {
  $('.first, .second').toggle();
});

// toggle button class when finished
vidClip.onended = function(e) {
  $('.first, .second').toggle();
};
</script>

<?php wp_footer(); ?>
</body>
</html>
