  <!-- main-footer -->
    <footer class="main-footer">
        <div class="widget-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo">
                            <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                        the_custom_logo();
                        } else {
                        // Fallback: display the site name or a default logo
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
                        }
                        ?>
                    
                            </figure>
                            <?php
                            
                            $footer_about_content = get_theme_mod('footer_about_content', '');
                               
                            if ($footer_about_content) {
                               echo '<p class="company-about-footer"> '.$footer_about_content.' </p>';
                            }
                            ?>
                            <!-- <p>Combined with a handy platform and top-notch support from our in-house production team</p> -->
                            <ul class="social-links">
                                <?php 
                                $facebook_link = get_theme_mod('top_header_facebook_link', '');
                                $instagram_link = get_theme_mod('top_header_instagram_link', '');
                                $linkedin_link = get_theme_mod('top_header_linkedin_link', '');
                                $twitter_link = get_theme_mod('top_header_twitter_link', '');
                                ?>
                                <li><a href="<?php echo $facebook_link ?>"><i class="icon-14"></i></a></li>
                                <li><a href="<?php echo  $instagram_link ?>"><i class='fa fa-instagram' aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $linkedin_link ?>"><i class="icon-16"></i></a></li>
                                <li><a href="<?php echo $twitter_link ?>"><i class="icon-15"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml_40">
                            <div class="widget-title">
                                <h4>Resources</h4>
                            </div>
                            <div class="widget-content">
                               <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'footer_menu1',
                                    'menu_class' => 'links-list',
                                ) );
                                ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Our Services</h4>
                            </div>
                            <div class="widget-content">
                                <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'footer_menu2',
                                    'menu_class' => 'links-list clearfix',
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h4>Contact Us</h4>
                            </div>
                            
                            <p>"Your Trusted Partner in Excellence." </p>
                            <!-- <div class="form-inner">
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="email" name="location" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="subscribe-btn">Subscribe</button>
                                    </div>
                                </form>
                            </div> -->
                            <ul class="footer-contact">
                            <?php 
                                 $phone      = get_theme_mod('top_header_phone', '');
                                 $phone_link = get_theme_mod('top_header_phone_link', '');
                                 $buttolink = get_theme_mod('menu_header_button_link', '');
                                 $buttonname = get_theme_mod('top_header_button', '');
                                 $email      = get_theme_mod('top_header_email', '');
                                 $email_link = get_theme_mod('top_header_email_link', '');
                                 $address = get_theme_mod('top_header_address', '');
                                 
                                 if ($address) {
                                    echo '<li><a   href=""><i class="icon-42"></i>' . esc_html($address) . '</a>  </li>';
                                 }
                                 if ($phone && $phone_link) {
                                    echo ' <li><a class="phone-icon" href="tel:' . esc_attr($phone_link) . '"><i class="icon-41"></i>' . esc_html($phone) . '</a></li>';
                                 }
                                 if ($email && $email_link) {
                                    echo '<li><a class="address-icon"  href="' . esc_attr($email_link) . '"><i class="icon-40"></i>' . esc_html($email) . '</a>  </li>';
                                 }
                                
                            ?>
                                <!-- <li><a href=""><i class="icon-42"></i>+91 972330110</a><li> 
                                <li><i class="icon-41"></i>slaes@appite.com<li>
                                <li><i class="icon-40"></i>Dubai<li> -->
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center"> 
            <div class="auto-container">
                <div class="copyright">
                <?php
                $footer_copyright_content = get_theme_mod('footer_copyright_content', '');   
                if ($footer_copyright_content) {
                    echo '<p class="company-copyright"> '.$footer_copyright_content.' </p>';
                }
                ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script>
import { applyFiltersAsync } from '@wordpress/hooks';

</script>
<?php wp_footer();  ?>

</body>
</html>
