<?php
/*
Template name: Contact Page Template
*/

get_header();
?>
    
     <!-- page-title -->
     <section class="page-title centred">
        <div class="bg-layer-two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/page-title.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li>Connect with Us</li>
                </ul>
                <h1>Connect with Us</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <section class="social-contact-section">
        <div class="auto-container">
            <div class="contact-info">
                <div class="row clearfix">
                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon-40"></span></div>
                            <h4>Email Us</h4>
                            <div class="text">info@example.com</div>
                        </div>
                    </div>
                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon-41"></span></div>
                            <h4>Call Us</h4>
                            <div class="text">+1(888)1234-5678</div>
                        </div>
                    </div>
                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon-42"></span></div>
                            <h4>Office Location</h4>
                            <div class="text">121 King st. 3000, Australia</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-shape-image">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-four.png" alt="">
            </div>
        </div>
    </section>
 
     <!-- Contact Section Start -->
     <section class="contact-section">
        <div class="medium-container">
            <!--Sec Title-->
            <div class="sec-title text-center">
                <div class="subtitle">Contact Us</div>
            	<h2 class="heading_title">Contact with our <br> support team</h2>
            </div>
            <div class="form-inner">
                <form method="post" action="contact.html" id="contact-form" class="default-form"> 
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label id="Name">Name</label>
                            <input type="text" name="username" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label id="Email">Email</label>
                            <input type="email" name="email" required="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label id="Message">Message</label>
                            <textarea name="message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <div class="link-box">
                                <button type="submit" class="btn-large contact-us"><span>Post Comment</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- Cta Section Start-->
    <section class="cta-section-two">
        <div class="cta-2-bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/cta_bg_image.png);"></div>
        <div class="auto-container">
            <div class="section_heading text-center">
                <h2 class="section_heading_title_big">Ready to get started? <br> 2M+ businesses already joined</h2>
            </div>
            <div class="link-box">
                <a href="integrations.html" class="btn-large">See All Integration</a>
            </div>
        </div>
    </section>
    <!-- Cta Section End-->
  

<?php get_footer(); ?>