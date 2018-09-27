
            <?php if ( !is_front_page()) : ?>
                </div>
            <?php endif; ?>
<!-- FOOTER -->
            <footer id="footer" style="background-image:url('<?php echo get_template_directory_uri() ;?>/assets/images/backgrounds/orange.jpg');">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="text-center">
                                <!-- Footer Logo -->
                                <img class="footer-logo" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_light.png" alt="" />
                            </div>

                            <!-- Small Description -->
                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                            <!-- Contact Address -->
                            <address>
                                <ul class="list-unstyled">
                                    <li class="footer-sprite address">
                                        Skin Gym<br>
                                        Ashdown Park Hotel, Coach Road<br>
                                        Gorey, Co. Wexford<br>
                                    </li>
                                    <li class="footer-sprite phone">
                                        Phone: 053 9430451
                                    </li>
                                    <li class="footer-sprite email">
                                        <a href="mailto:info@skin-gym.ie">info@skin-gym.ie</a>
                                    </li>
                                </ul>
                            </address>
                            <!-- /Contact Address -->

                        </div>

                        <div class="col-md-3">

                            <!-- Latest Blog Post -->
                            <h4 class="letter-spacing-1">OPENING HOURS</h4>
                            <ul class="footer-posts list-unstyled">
                                <li>Mon-Wed 10am-7pm</li>
                                <li>Thurs-Fri 10am-9pm</li>
                                <li>Sat 10am-6pm</li>
                                <li>Sun 10am-5pm</li>
                            </ul>
                            <!-- /Latest Blog Post -->

                        </div>

                        <div class="col-md-2">

                            <!-- Links -->
                            <h4 class="letter-spacing-1">EXPLORE SKIN GYM</h4>
                            <ul class="footer-links list-unstyled">
                                <?php
                                    if ( has_nav_menu( 'footer-menu' ) ) {
                                        wp_nav_menu( array(
                                            'container'         => '',
                                            'items_wrap'        => '%3$s',
                                            'theme_location'    => 'footer-menu',
                                        ) );
                                    } else {
                                        wp_list_pages( array(
                                            'container' => '',
                                            'title_li'  => '',
                                        ) );
                                    }
                                ?>

                                <!--<li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Offers &amp; Events</a></li>
                                <li><a href="#">Book Now</a></li>
                                <li><a href="#">Beauty Clinic</a></li>
                                <li><a href="#">Consultation</a></li>
                                <li><a href="#">Contact Us</a></li> -->
                            </ul>
                            <!-- /Links -->

                        </div>

                        <div class="col-md-4">

                            <!-- Newsletter Form -->
                            <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                            <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

                            <form method="post" action="<?php echo get_home_url() ?>?na=s" onsubmit="return newsletter_check(this)">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" id="email" name="ne" class="form-control required" placeholder="Enter your Email" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <!-- /Newsletter Form -->
                            <!-- Social Icons -->
                            <div class="mt-20 clearfix">
                                <a href="https://www.facebook.com/SkinGymGorey/" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/explore/locations/1571818166456440/skin-gym-gorey/" class="social-icon social-icon-border social-instagram float-left" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>                                
                                <!--
                                <a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                -->
                            </div>
                            <!-- /Social Icons -->
                            <!-- Hotel Logos -->
                            <div class="mt-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="https://www.ashdownparkhotel.com" target="_blank">
                                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/ashdown-park.png" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /  Hotel Logos -->

                        </div>

                    </div>

                </div>

                <div class="copyright" style="background-image:url('<?php echo get_template_directory_uri() ;?>/assets/images/backgrounds/orange.jpg');">
                    <div class="container">
                        <ul class="float-right m-0 list-inline mobile-block">
                            <li><a href="https://skin-gym.ie/privacy-policy/">Privacy</a></li>
                        </ul>
                        &copy; All Rights Reserved | Website By <a href="http://www.clearsoft.ie" target="_blank">ClearSoft</a>
                    </div>
                </div>
            </footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->
        <script>
            function initMap() {
                var uluru = { lat: 52.678694, lng: -6.285305 };
                var map = new google.maps.Map(document.getElementById('map2'), {
                    zoom: 12,
                    center: uluru,
                    scrollwheel: false
                });

                var contentString = '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<strong>SKIN GYM</strong><br/>' +
                    'Ashdown Park Hotel<br/>' +
                    'Gorey<br/>' +
                    'Co.Wexford<br/>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: 'SKIN GYM'
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
        </script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArD9J6nci2T70ycnSgL2BklRFB6kNHpNM&callback=initMap">
        </script>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo get_template_directory_uri() ;?>/assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery/jquery-3.2.1.min.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/js/scripts.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/js/contact.js"></script>

        <script src="<?php echo get_template_directory_uri() ;?>/assets/js/cocoen.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Cocoen();
            });
        </script>
        <?php wp_footer(); ?>
	</body>
</html>