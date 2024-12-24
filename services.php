<?php
/*
Template name: Service Page Template
*/

get_header();
?>

  <!-- page-title -->
  <section class="page-title centred">
        <div class="bg-layer-two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/page-title.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
                <h1>Our Services</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!--Services Section-->
    <section class="services-section" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
    	<div class="auto-container">
        	<!--Sec Title-->
            <?php
        $service_sub_title_ = get_field('service_sub_title_');
        $service_title_ = get_field('service_title_');
        $service_description= get_field('service_description');
       
        ?>
            <div class="sec-title">
                <div class="subtitle"><?php echo $service_sub_title_; ?></div>
            	<h2 class="heading_title"><?php echo $service_title_; ?></h2>
                <div class="text"><?php echo $service_description; ?></div>
            </div>
            <?php
// Query "Our Services" posts
$args = array(
    'post_type'      => 'our-services', // Custom post type slug
    'posts_per_page' => -1,             // Retrieve all posts
    'post_status'    => 'publish',      // Only published posts
    'orderby'        => 'date',         // Order by date
    'order'          => 'ASC',         // Descending order
);

$services_query = new WP_Query($args);

if ($services_query->have_posts()) :
    echo '<div class="row clearfix">';
    while ($services_query->have_posts()) : $services_query->the_post(); ?>

            <div class="service-style-one col-md-4 col-sm-6 col-xs-12">
 
            <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <!-- <span class="icon icon-6"></span> -->
                        <img src='<?php echo get_field('service_image_:_home'); ?>' class='home-service-icon'/>
                    </div>
                    <?php
                    $excerpt = get_the_excerpt(); // Get the raw excerpt
                    $excerpt = mb_substr($excerpt, 0, 70) . '...'; // Limit to 100 characters
                   
                    ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="text"><?php  echo $excerpt; // Display excerpt ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more ">Learn more<span class="icon icon-38"></span></a>
            </div>
        </div>

    <?php endwhile;
    echo '</div>';
else :
    echo '<p>No services found.</p>';
endif;

// Reset Post Data
wp_reset_postdata();
?>
        </div>
    </section>
    <!--End We Do Section-->

    <!--Fun Facts Section -->
    <section class="fun-facts-section-four">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="content">
                            <div class="count-outer-two">
                                <span class="count-text" data-speed="2000" data-stop="<?php echo get_field('counter_1_value'); ?>">0</span>+
                            </div>
                            <div class="counter-title-two"><?php echo get_field('counter_1_name'); ?></div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="content">
                            <div class="count-outer-two">
                                <span class="count-text" data-speed="3000" data-stop="<?php echo get_field('counter_2_value'); ?>">0</span>+
                            </div>
                            <div class="counter-title-two"><?php echo get_field('counter_2_name2'); ?></div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="content">
                            <div class="count-outer-two">
                                <span class="count-text" data-speed="2500" data-stop="<?php echo get_field('counter_3_value'); ?>">0</span>+
                            </div>
                            <div class="counter-title-two"><?php echo get_field('counter_3_name'); ?></div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="content">
                            <div class="count-outer-two">
                                <span class="count-text" data-speed="2500" data-stop="<?php echo get_field('counter_4_value'); ?>">0</span>+
                            </div>
                            <div class="counter-title-two"><?php echo get_field('counter_4_name_'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fun Facts Section -->

     <!-- pricing-one -->
     <!-- <section class="pricing-section text-center">
        <div class="auto-container">
            <div class="sec-title">
                <div class="subtitle">General Faq’s</div>
                <h2 class="heading_title">Frequently asked questions from clients</h2>
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
                                            <li><span class="icon icon-13"></span>  Weekly data backup</li>
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
                                            <li><span class="icon icon-12"></span>  Weekly data backup</li>
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
                                            <li><span class="icon icon-12"></span>  Weekly data backup</li>
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
                                            <li><span class="icon icon-13"></span>  Weekly data backup</li>
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
                                            <li><span class="icon icon-12"></span>  Weekly data backup</li>
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
                                            <li><span class="icon icon-12"></span>  Weekly data backup</li>
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
        </div>
    </section> -->
    <!-- pricing-one end -->

    <!-- testimonial-section -->
    <section class="testimonial-section" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
        <div class="auto-container">
            <div class="sec-title text-center"> 
                <div class="subtitle">Testimonials</div>
            	<h2 class="heading_title">Customers success stories</h2>
                <div class="text">Until recently, the prevailing view assumed lorem ipsum was born as a <br> nonsense text. It's not Latin though it looks like nothing.</div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-1.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Floyd Miles</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-2.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Cody Fisher</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-3.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Courtney Henry</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-1.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Floyd Miles</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-2.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Cody Fisher</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-3.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Courtney Henry</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-1.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Floyd Miles</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-2.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Cody Fisher</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="text-box">
                            <ul class="rating clearfix">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                            </ul>
                            <p>“Suspendisse est imperdiet pellentesque nulla vulputate eu pharetra pharetra massa amet ac semper et pellentesque dolor tincidunt sodales”</p>
                            <figure class="thumb-box"><img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/testimonial-3.png" alt=""></figure>
                        </div>
                        <div class="author-box">
                            <h3>Courtney Henry</h3>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

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