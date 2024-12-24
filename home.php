<?php 
/*
Template name: Home Page Template
*/
get_header(); 
?>

<!-- banner-section -->
<section class="banner-section banner-style-four">
    <div class="pattern-layer"
        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/banner_four.webp);">
    </div>
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
 <?php
           // Check rows exists.
   if( have_rows('home_banner') ):

    // Loop through rows.
      while( have_rows('home_banner') ) : the_row();

        // Load sub field value.
        $banner_sub_title = get_sub_field('banner_sub_title');
        $banner_title_ = get_sub_field('banner_title_');
        $banner_description = get_sub_field('banner_description');
        $banner_button_text = get_sub_field('banner_button_text');
        $banner_button_link = get_sub_field('banner_button_link');
        $banner_main_image = get_sub_field('banner_main_image');
        $banner_top_image = get_sub_field('banner_top_image');
        $box_text = get_sub_field('box_text');
        $box_value = get_sub_field('box_value');
        // Do something, but make sure you escape the value if outputting directly...
     ?>
        <div class="slide-item">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <span class="title-text"><?php echo $banner_sub_title; ?></span>
                            <h2><?php echo $banner_title_; ?></h2>
                            <p><?php echo $banner_description; ?></p>
                            <div class="start_trils_btn">
                                <a href="<?php echo $banner_button_link; ?>"
                                    class="theme-btn btn-three"><?php echo $banner_button_text; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="image-shape-4">
                                <img src="<?php echo $banner_main_image; ?>" alt="">
                            </div>
                            <div class="image-shape-5">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-four.png"
                                    alt="">
                            </div>
                            <div class="image-shape-6">
                                <img src="<?php echo $banner_top_image; ?>" alt="">
                            </div>
                            <div class="image shape_one visitor_progress">
                                <div class="visitor_one">
                                    <h4><?php echo $box_value; ?></h4>
                                    <p><?php echo $box_text; ?></p>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/check_up_icon.png"
                                        alt="">
                                </div>
                                <div class="visitor_two">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/visitor_range_image.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>
    </div>
</section>
<!-- banner-section end -->

<!--client Section Two-->
<section class="sponsors-section-two home-four">
    <div class="auto-container">
        <h3 class="sonsors_title">Trusted by the next-gen industry leaders</h3>
        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel-two owl-carousel owl-theme">
            <?php
           // Check rows exists.
     if( have_rows('client_logo') ):

        // Loop through rows.
        while( have_rows('client_logo') ) : the_row();

        // Load sub field value.
        $client_logo_image = get_sub_field('client_logo_image');
        $client_url = get_sub_field('client_url_');
        
        // Do something, but make sure you escape the value if outputting directly...
         ?>
            <li>
                <div class="image-box"><a href="<?php echo $client_url; ?>"><img src="<?php echo $client_logo_image; ?>" alt=""></a></div>
            </li>
        
        <?php
        // End loop.
        endwhile;

        // No value.
        else :
        // Do something...
        endif;
       ?>
            </ul>
        </div>
    </div>
</section>
<!--End client Two Section-->

<!--About Section-->
<?php
$hero = get_field('about_us');
if( $hero ): 
?>
<section class="about-section-four">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="block-image">
                    <div class="block_image_one">
                        <img src="<?php echo esc_attr( $hero['about_main_image'] ); ?>"
                            alt="">
                    </div>
                    <div class="block_image_two">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                    </div>
                    <div class="block_image_three float-bob-y">
                        <img src="<?php echo esc_attr( $hero['about_side_image'] ); ?>"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            
                <div class="title-content two">
                    <div class="subtitle"><?php echo esc_attr( $hero['about_sub_title'] ); ?></div>
                    <h2 class="heading_title"><?php echo esc_attr( $hero['about_title'] ); ?></h2>
                    <div class="text"><?php echo esc_attr( $hero['about_description'] ); ?></div>
                    <!-- <ul class="data-list">
                        <li><span>01.</span>Automatic Invoice Payment</li>
                        <li class="list_item_two"><span>02.</span>Clear payment history</li>
                        <li><span>03.</span>Use of multi-card payments</li>
                    </ul> -->
                    <div class="start_trils_btn">
                        <a href="<?php echo esc_attr( $hero['about_button_url'] ); ?>" class="theme-btn btn-four"><?php echo esc_attr( $hero['about_button_text'] ); ?></a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--End About Section-->

<!--Services Section-->
<section class="services-section-four"
    style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
    <div class="auto-container">
        <!--Sec Title-->
        <?php
        $hero = get_field('service_section');
        if( $hero ): 
        ?>
        <div class="sec-title">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="subtitle"><?php echo esc_attr( $hero['service_sub_title_'] ); ?></div>
                    <h2 class="heading_title"><?php echo esc_attr( $hero['service_title_'] ); ?></h2>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="text"><?php echo esc_attr( $hero['service_description'] ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row clearfix">
            <!--Service Style One-->
            <div class="service-style-one col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-6"></span>
                    </div>
                    <h3><a href="service-details.html">Strategy & Planning</a></h3>
                    <div class="text">With our AI your the can makes the never</div>
                    <a href="about.html" class="read-more btn-two">Learn more<span class="icon icon-38"></span></a>
                </div>
            </div>

            <!--Service Style One-->
            <div class="service-style-one col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-28"></span>
                    </div>
                    <h3><a href="service-details.html">Expense Analysis</a></h3>
                    <div class="text">With our AI your the can makes the never</div>
                    <a href="about.html" class="read-more">Learn more<span class="icon icon-38"></span></a>
                </div>
            </div>

            <!--Service Style One-->
            <div class="service-style-one col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-29"></span>
                    </div>
                    <h3><a href="service-details.html">Global Investment</a></h3>
                    <div class="text">With our AI your the can makes the never</div>
                    <a href="about.html" class="read-more">Learn more<span class="icon icon-38"></span></a>
                </div>
            </div>

            <!--Service Style One-->
            <div class="service-style-one col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-30"></span>
                    </div>
                    <h3><a href="service-details.html">Balance Analysis</a></h3>
                    <div class="text">With our AI your the can makes the never</div>
                    <a href="about.html" class="read-more">Learn more<span class="icon icon-38"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End We Do Section-->

<!--Fun Facts Section -->
<section class="fun-facts-section-four">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Column-->
            <div class="column count-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner">
                    <div class="content">
                        <div class="count-outer-two">
                            <span class="count-text" data-speed="2000" data-stop="85">0</span>%
                        </div>
                        <div class="counter-title-two">Increase in customer <br> engagement</div>
                    </div>
                </div>
            </div>

            <!--Column-->
            <div class="column count-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner">
                    <div class="content">
                        <div class="count-outer-two">
                            <span class="count-text" data-speed="3000" data-stop="70">0</span>%
                        </div>
                        <div class="counter-title-two">Improvement in client <br> satisfaction</div>
                    </div>
                </div>
            </div>

            <!--Column-->
            <div class="column count-box col-lg-4 col-md-6 col-sm-12">
                <div class="inner">
                    <div class="content">
                        <div class="count-outer-two">
                            <span class="count-text" data-speed="2500" data-stop="90">0</span>%
                        </div>
                        <div class="counter-title-two">Increase in conversion <br> rates</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fun Facts Section -->

<!--Customer Section-->
<section class="customer-service">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="title-content">
                    <div class="subtitle">Expense Solutions</div>
                    <h2 class="heading_title">Get Secure & Convenient Transaction</h2>
                    <div class="text">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                        text. It's not Latin though it looks like nothing.</div>
                    <div class="list-item">
                        <ul class="list-one">
                            <li><span class="icon icon-5"></span>Market Analysis</li>
                            <li><span class="icon icon-5"></span>Business Profit</li>
                        </ul>
                        <ul class="list-two">
                            <li><span class="icon icon-5"></span>Client Alliance</li>
                            <li><span class="icon icon-5"></span>Cash Withdrawal</li>
                        </ul>
                    </div>
                    <div class="start_trils_btn">
                        <a href="index.html" class="theme-btn btn-four">Get Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="customer_img_content">
                    <div class="customer_top-image">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/custom_image_one.png"
                            alt="">
                    </div>
                    <div class="customer_bottom-image">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                    </div>
                </div>
                <div class="progress_bar_two float-bob-y">
                    <div class="visitor_one">
                        <h4>1,235</h4>
                        <p>Visitors this month</p>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/check_up_icon.png"
                            alt="">
                    </div>
                    <div class="progress-two">
                        <div class="circular-progress" data-inner-circle-color="white" data-percentage="85"
                            data-progress-color="rgba(104, 47, 255, 1)" data-bg-color="rgba(240, 232, 243, 1)">
                            <div class="inner-circle"></div>
                            <p class="percentage">0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Customer Section-->

<!--Social Impact Section-->
<section class="business-impact">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="business-impact-img">
                    <div class="image_one">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/business_impact_image.png"
                            alt="">
                    </div>
                    <div class="image_two">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                    </div>
                    <div class="image_three float-bob-y">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/progress_bar_image.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="business-title-content">
                    <div class="subtitle">Business Impact</div>
                    <h2 class="heading_title">Strong & ambitious vision to evaluate your business</h2>
                    <div class="text">Elit est neque posuere in. Augue at lacinia bibendum commodo mauris. Auctor eu
                        consectetur commodo nulla ullamcorper sem in ac arcu. Id vitae ullamcorper vestibulum vestibulum
                        tempor.</div>
                    <div class="text">Morbi nulla proin enim pellentesque aenean amet tellus tristique sed. Quam id quam
                        non ultricies velit sem.</div>
                    <div class="start_trils_btn">
                        <a href="index.html" class="theme-btn btn-four">Get Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Social Impact Section-->

<!-- pricing-one -->
<!-- <section class="pricing-section text-center">
    <div class="auto-container">
        <div class="sec-title">
            <div class="subtitle">Pricing Table</div>
            <h2 class="heading_title">Simple, flexible pricing</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box p_relative d_block">
                <ul class="tab-btns tab-buttons clearfix p_relative">
                    <li class="tab-btn active-btn" data-tab="#tab-1">Monthly</li>
                    <li class="tab-btn" data-tab="#tab-2">Yearly</li>
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Starter plan</h6>
                                    <h2>$19.00</h2>
                                    <p>Per Month</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list one">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-13"></span> Weekly data backup</li>
                                        <li><span class="icon icon-13"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Basic plan</h6>
                                    <h2>$39.00</h2>
                                    <p>Per Month</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list two">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-12"></span> Weekly data backup</li>
                                        <li><span class="icon icon-13"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn two">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Advanced Pack</h6>
                                    <h2>$59.50</h2>
                                    <p>Per Month</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list three">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-12"></span> Weekly data backup</li>
                                        <li><span class="icon icon-12"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Starter plan</h6>
                                    <h2>$19.00</h2>
                                    <p>Yearly</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list one">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-13"></span> Weekly data backup</li>
                                        <li><span class="icon icon-13"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Basic plan</h6>
                                    <h2>$39.00</h2>
                                    <p>Yearly</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list two">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-12"></span> Weekly data backup</li>
                                        <li><span class="icon icon-13"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn two">Start Free Trial</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price__content p_relative">
                                <div class="price__text p_relative">
                                    <h6>Advanced Pack</h6>
                                    <h2>$59.50</h2>
                                    <p>Yearly</p>
                                </div>
                                <p>For individuals and small teams trying out for an unlimited period.</p>
                                <div class="price__list three">
                                    <ul>
                                        <li><span class="icon icon-12"></span> 2 free projects</li>
                                        <li><span class="icon icon-12"></span> 1 GB of cloud storage</li>
                                        <li><span class="icon icon-12"></span> For personal use</li>
                                        <li><span class="icon icon-12"></span> Weekly data backup</li>
                                        <li><span class="icon icon-12"></span> 12/5 email support</li>
                                    </ul>
                                </div>
                                <a href="pricing.html" class="price__btn">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-table-imgae">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/pricing_table_image.png" alt="">
        </div>
    </div>
</section> -->
<!-- pricing-one end -->

<!-- testimonial-section -->
<section class="testimonial-section"
    style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-6 col-sm-12 testimonial_left_column">
                <div class="sec-title">
                    <div class="subtitle">Testimonials</div>
                    <h2 class="heading_title">Users share their experiences with sasen</h2>
                    <div class="text">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense
                        text</div>
                </div>
                <div class="slider-nav-style-2 testimonial-1-nav">
                    <div class="slider-control slider-button-prev">
                        <span><i class="icon-31"></i></span>
                    </div>
                    <div class="slider-control slider-button-next">
                        <span><i class="icon-32"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="swiper-container two-item-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonial-block-one">
                            <div class="inner-box">
                                <div class="text-box">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                    </ul>
                                    <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra
                                        massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                    <figure class="thumb-box"><img
                                            src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-1.png"
                                            alt=""></figure>
                                </div>
                                <div class="author-box">
                                    <h3>Floyd Miles</h3>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-block-one">
                            <div class="inner-box">
                                <div class="text-box">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                    </ul>
                                    <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra
                                        massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                    <figure class="thumb-box"><img
                                            src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-2.png"
                                            alt=""></figure>
                                </div>
                                <div class="author-box">
                                    <h3>Cody Fisher</h3>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-block-one">
                            <div class="inner-box">
                                <div class="text-box">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                    </ul>
                                    <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra
                                        massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                    <figure class="thumb-box"><img
                                            src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-1.png"
                                            alt=""></figure>
                                </div>
                                <div class="author-box">
                                    <h3>Courtney Henry</h3>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-block-one">
                            <div class="inner-box">
                                <div class="text-box">
                                    <ul class="rating clearfix">
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                    </ul>
                                    <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra
                                        massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                                    <figure class="thumb-box"><img
                                            src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-2.png"
                                            alt=""></figure>
                                </div>
                                <div class="author-box">
                                    <h3>Cody Fisher</h3>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!--Faq Section-->
<section class="faq-section">
    <div class="medium-container">
        <div class="row clearfix">
            <!--Counter Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                <div class="sec-title text-center">
                    <div class="subtitle">General Faq’s</div>
                    <h2 class="heading_title">Frequently asked questions <br> from clients</h2>
                    <div class="text">Enim orci aliquam malesuada porttitor feugiat tellus malesuada quis <br> fermentum
                        mattis sit fringilla id feugiat velit non sed id. Turpis <br> pellentesque proin viverra eget
                        ultrices.</div>
                </div>
                <!--Accordion Box-->
                <div class="accordion-box style-two">
                    <!-- Accordion -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn active">
                            <h4>Is there a free trial available?</h4>
                        </div>
                        <div class="accord-content collapsed">
                            <p>AI isn't here to replace human creativity but it can amplify it and take it even further.
                                So whether you're creating fanart of your favorite anime. Effortlessly creates.</p>
                        </div>
                    </div>
                    <!-- Accordion -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is the cost of this platform?</h4>
                        </div>
                        <div class="accord-content">
                            <p>AI isn't here to replace human creativity but it can amplify it and take it even further.
                                So whether you're creating fanart of your favorite anime. Effortlessly creates.</p>
                        </div>
                    </div>
                    <!-- Accordion -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>Can other info be added to an invoice?</h4>
                        </div>
                        <div class="accord-content">
                            <p>AI isn't here to replace human creativity but it can amplify it and take it even further.
                                So whether you're creating fanart of your favorite anime. Effortlessly creates.</p>
                        </div>
                    </div>
                    <!-- Accordion -->
                    <div class="accordion accordion-block">
                        <div class="accord-btn">
                            <h4>What is your cancellation policy?</h4>
                        </div>
                        <div class="accord-content">
                            <p>AI isn't here to replace human creativity but it can amplify it and take it even further.
                                So whether you're creating fanart of your favorite anime. Effortlessly creates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Faq Section-->

<!-- Cta Section Start-->
<section class="cta-section">
    <div class="cta-1-bg" data-parallax='{"y": 30}'
        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/cta-bg-image-one.png);">
    </div>
    <div class="auto-container">
        <div class="section_heading text-center">
            <h2 class="section_heading_title_big">Ready to get started? <br> 2M+ businesses already joined</h2>
        </div>
        <div class="text-center">
            <div class="cta-1-link-bt"><a href="index.html" class="btn-1">Start 14 Days Free Trial <span></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End-->


<?php get_footer(); ?>