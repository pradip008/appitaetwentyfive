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

                <div class="service-style-one col-md-3 col-sm-6 col-xs-12">

                <div class="inner-box service-four wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <!-- <span class="icon icon-6"></span> -->
                            <img src='<?php echo get_field('service_image_:_home'); ?>' class='home-service-icon'/>
                        </div>
                        <?php
                        $excerpt = get_the_excerpt(); // Get the raw excerpt
                        $excerpt = mb_substr($excerpt, 0, 50) . '...'; // Limit to 100 characters
                        
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

<!--Customer Section-->
<section class="customer-service">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="title-content">
                    <div class="subtitle"><?php echo get_field('wc_sub_title_'); ?></div>
                    <h2 class="heading_title"><?php echo get_field('wc_title_'); ?></h2>
                    <div class="text"></div>
                    <div class="list-item">
                        <ul class="list-one">
                            <li><span class="icon icon-5"></span><?php echo get_field('wc_point_1'); ?></li>
                            <li><span class="icon icon-5"></span><?php echo get_field('wc_point_2'); ?></li>
                        </ul>
                        <ul class="list-two">
                            <li><span class="icon icon-5"></span><?php echo get_field('wc_point_3'); ?></li>
                            <li><span class="icon icon-5"></span><?php echo get_field('wc_point_4'); ?></li>
                        </ul>
                    </div>
                    <div class="start_trils_btn">
                        <a href="<?php echo get_field('wc_button_url'); ?>" class="theme-btn btn-four"><?php echo get_field('wc_button_text'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="customer_img_content">
                    <div class="customer_top-image">
                        <?php 
                        if(get_field('wc_main_image')){
                        ?>
                        <img src="<?php echo get_field('wc_main_image'); ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/custom_image_one.png"
                            alt="">
                        <?php }
                         ?>   
                    </div>
                    <div class="customer_bottom-image">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                    </div>
                </div>
                <div class="progress_bar_two float-bob-y">
                    <div class="visitor_one">
                        <h4><?php echo get_field('wc_count_value'); ?></h4>
                        <p><?php echo get_field('wc_count_name_'); ?></p>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/check_up_icon.png"
                            alt="">
                    </div>
                    <div class="progress-two">
                        <div class="circular-progress" data-inner-circle-color="white" data-percentage="<?php echo get_field('wc_count_percentage');?>"
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
                        <?php 
                        if(get_field('main_image')){
                        ?>
                        <img src="<?php echo get_field('main_image'); ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/business_impact_image.png"
                            alt="">
                        <?php }
                         ?> 
                       
                    </div>
                    <div class="image_two">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                    </div>
                    <div class="image_three float-bob-y">
                    <?php 
                        if(get_field('second_image')){
                        ?>
                        <img src="<?php echo get_field('second_image'); ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/progress_bar_image.png"
                            alt="">
                        <?php }
                         ?> 
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="business-title-content">
                    <div class="subtitle"><?php echo get_field('sub_title_'); ?></div>
                    <h2 class="heading_title"><?php echo get_field('title_'); ?></h2>
                    <div class="text"><?php echo get_field('description'); ?></div>
                    
                   
                    <div class="start_trils_btn">
                        <a href="<?php echo get_field('button_url'); ?>" class="theme-btn btn-four"><?php echo get_field('button_text_'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Social Impact Section-->

<!-- testimonial-section -->
<section class="testimonial-section"
    style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-6 col-sm-12 testimonial_left_column">
                <?php
                $testimonials = get_field('testimonials');
                if( $testimonials): 
                ?>
                <div class="sec-title">
                    <div class="subtitle"><?php echo esc_attr( $testimonials['testimonial_sub_title'] ); ?></div>
                    <h2 class="heading_title"><?php echo esc_attr( $testimonials['testimonial_title_'] ); ?></h2>
                    <div class="text"><?php echo esc_attr( $testimonials['testimonial_description'] ); ?></div>
                </div>
                <?php endif;?>
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
                <?php
                function get_testimonials_with_designation() {
                    $args = array(
                        'post_type'      => 'testimonial',
                        'posts_per_page' => -1, // Fetch all testimonials
                        'post_status'    => 'publish',
                    );
                
                    $testimonials = new WP_Query($args);
                
                    if ($testimonials->have_posts()) {
                        echo '<div class="swiper-wrapper">';
                        while ($testimonials->have_posts()) {
                         
                            $testimonials->the_post();
                
                            $testimonial_id = get_the_ID();
                            $title = get_the_title();
                            $content = get_the_content();
                            $designation = get_post_meta($testimonial_id, 'designation', true); // Fetch custom field
                            $featured_image_url = get_the_post_thumbnail_url($testimonial_id, 'full');
                
                            echo '<div class="swiper-slide testimonial-block-one">';
                            echo '<div class="inner-box">';
                            echo '<div class="text-box">';
                            echo '  <ul class="rating clearfix">
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                        <li><i class="icon-22"></i></li>
                                    </ul>';
                            echo '<p>' . esc_html($content) . '</p>';   
                            echo ' <figure class="thumb-box"><img
                            src="'. esc_html($featured_image_url) .'"
                            alt=""></figure>';     

                            echo '</div>';
                            echo '<div class="author-box">';
                            echo '<h3>' . esc_html($title) . '</h3>';
                            echo '<span class="designation">' . esc_html($designation) . '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                
                        wp_reset_postdata(); // Reset post data after the loop
                    } else {
                        echo '<p>No testimonials found.</p>';
                    }
                }
                
                
                ?>
                <?php get_testimonials_with_designation(); ?>
               
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!--Faq Section-->
<section class="faq-section">
    <div class="container">
        <div class="row clearfix">
            <!--Counter Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                <?php
                $faqs = get_field('faqs_section');
                if( $faqs): 
                ?>
                <div class="sec-title text-center">
                    <div class="subtitle"><?php echo esc_attr( $faqs['faqs_sub_title'] ); ?></div>
                    <h2 class="heading_title"><?php echo $faqs['faqs_title']; ?></h2>
                    <div class="text"><?php echo esc_attr( $faqs['faqs_description'] ); ?></div>
                </div>
                <?php endif; ?>
                <!--Accordion Box-->

                <?php
                    // Query FAQs
                    $args = array(
                    'post_type'      => 'faq', // Custom post type name
                    'posts_per_page' => -1,    // Fetch all FAQs
                    'order'          => 'ASC', // Order FAQs (e.g., alphabetically or by publish date)
                    'orderby'        => 'date' // Order by title
                    );

                    $faq_query = new WP_Query($args);

                    if ($faq_query->have_posts()) : ?>
                   
                        
                         <div class="accordion-box style-two">
                            <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>

                                <div class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                    <div class="accord-content ">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                       
                    </div>
                    <?php 
                    else :
                    echo '<p>No FAQs found.</p>';
                    endif;

                    // Reset post data
                    wp_reset_postdata();
                ?>
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
    <?php
    $cta_title = get_field('cta_title');
    $cta_button_text = get_field('cta_button_text');
    $cta_button_url = get_field('cta_button_url');
    ?>
    <div class="auto-container">
        <div class="section_heading text-center">
            <h2 class="section_heading_title_big"><?php echo $cta_title; ?></h2>
        </div>
        <div class="text-center">
            <div class="cta-1-link-bt"><a href="<?php echo $cta_button_url; ?>" class="btn-1"><?php echo $cta_button_text; ?><span></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End-->


<?php get_footer(); ?>