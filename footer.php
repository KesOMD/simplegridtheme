    </div><!--//content_container-->

    

    <div id="footer">

        <div class="footer-align">

        <div class="footer_widgets_cont">

            <div class="footer_copyright">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" class="logo" /></a>
                <p>2014 James Villas</p>
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
                        <li><a href="https://twitter.com/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /><p>Twiiter</p></a></li>
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
                <a href="http://www.jamesvillas.co.uk/" alt="View villas"><p>View villas</p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bottom-bar-arrows2.png" /></a>
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