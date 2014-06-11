    </div><!--//content_container-->

    <div class="mob-social-cont">
        <div class="mob-social-title">
            <h2>James Villas Social</h2>
        </div>
        <div class="mob-social-buttons">
            <a href="https://www.facebook.com/JamesVillaHolidays"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-facebook.png" /></a>
            <a href="https://twitter.com/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-twitter.png" /></a>
            <a href="https://plus.google.com/+jamesvillas/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-gplus.png" /></a>
            <a href="http://www.pinterest.com/jamesvillasuk/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-pinterest.png" /></a>
            <a id="mob-social-button-last" href="https://www.youtube.com/user/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-youtube.png" /></a>
        </div>
    </div>

    <div id="footer">

        <div class="footer-align">

        <div class="footer_widgets_cont">
            <div class="mob-menu-cont" id="footer-nav-cont">
                
                <div class="mob-menu-button" id="foot-nav">
                    <div class="button-text" id="foot-button-text">
                        <p>Useful Links</p>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mob-menu-arrow.png">
                    </div>
                </div>
                <ul class="sub_navigation" id="foot-drop">
                    <li><a href="http://www.jamesvillas.co.uk/" target="_blank" alt="James Villas main site"><div class="whi"><p>Main Site</p></div></a></li>
                    <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank" alt="About Us"><div class="bl"><p>About Us</p></div></a></li>
                    <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank" alt="Contact Us"><div class="whi"><p>Contact Us</p></div></a></li>
                    <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank" alt="Privacy Police"><div class="bl"><p>Privacy Policy</p></div></a></li>
                    <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank" alt="Cookie Policy"><div class="whi"><p>Cookie Policy</p></div></a></li>
                </ul>
            </div>

            <div class="footer_copyright">
                <a href="http://www.jamesvillas.co.uk/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" class="logo" /></a>
                <p>&#169; 2014 James Villas</p>
            </div>

            <div class="footer-main-site">
                <ul><a href="http://www.jamesvillas.co.uk/" target="_blank"><h3>Main Site</h3></a>
                    <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank">About Us</a></li>
                    <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank">Contact Us</a></li>
                    <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank">Privacy Policy</a></li>
                    <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank">Cookie Policy</a></li>
                </ul>
            </div>

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>       

        

            <div class="footer_box">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div><!--//footer_box-->

            <?php endif; ?>  

            <div class="footer-social">
                <h3>Social</h3>
                <div class="footer-social-left">
                    <ul>
                        <li><a href="https://www.facebook.com/JamesVillaHolidays"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /><p>Facebook</p></a></li>
                        <li><a href="https://twitter.com/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /><p>Twitter</p></a></li>
                        <li><a href="https://plus.google.com/+jamesvillas/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.png" /><p>Google +</p></a></li>
                    </ul>
                </div>
                <div class="footer-social-right">
                    <ul>
                        <li><a href="http://www.pinterest.com/jamesvillasuk/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /><p>Pintrest</p></a></li>
                        <li><a href="https://www.youtube.com/user/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/yt-icon.png" /><p>YouTube</p></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-booking">
                <h3>Book a villa</h3>
                <p>Nulla mattis ultrices urna ac faucibus. Pellentesque bibendum augue in sagittis tristique. Etiam at faucibus est. In non rhoncus felis.</p>
                <a href="http://www.jamesvillas.co.uk/" alt="View villas">
                    <div class="booking-link-cont">
                        <div class="booking-spacer">
                            <p>View villas</p>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bottom-bar-arrows2.png" />
                        </div>
                        
                    </div>
                </a>
            </div>

            <div class="footer-atol">
                <a href="http://www.jamesvillas.co.uk/atol-abta" alt="Learn more about our ATOL & ABTA Protection"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/atol-abta.png" /></a>
            </div>

            <div class="clear"></div>

        </div><!--//footer_widgets_cont-->

    
    </div>
        

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>