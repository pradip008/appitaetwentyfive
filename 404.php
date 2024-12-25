<?php get_header(); ?>
<link href="<?php bloginfo('template_directory'); ?>/assets/css/module-css/error.css" rel="stylesheet">

 <!-- page-title -->
 <section class="page-title centred">
        <div class="bg-layer-two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/page-title.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Error</li>
                </ul>
                <h1>Page Not Found</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- error-section -->
    <section class="error-section centred">
        <div class="auto-container">
            <div class="content-box">
                <figure class="error-image"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/error-image.png" alt=""></figure>
                <h5>Error</h5>
                <h2>404</h2>
                <h3>Ooops!<br />Page Not Found</h3>
                <p>This page doesn’t exist or was removed! <br> We suggest you go back to home.</p>
                <div class="link-box">
                    <a href="<?php echo home_url(); ?>" class="btn-large back-one">Back to Homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- error-section end -->

    <!-- Cta Section Start-->
    <section class="cta-section">
        <div class="cta-1-bg" data-parallax='{"y": 30}' style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/cta-bg-image-one.png);"></div>
        <div class="auto-container">
            <div class="section_heading text-center">
                <h2 class="section_heading_title_big">Ready to get started? <br> 2M+ businesses already joined</h2>
            </div>
            <div class="text-center">
                <div class="cta-1-link-bt"><a href="index.html" class="btn-1">Start 14 Days Free Trial <span></span></a></div>
            </div>
        </div>
    </section>
    <!-- Cta Section End-->

<?php get_footer(); ?>