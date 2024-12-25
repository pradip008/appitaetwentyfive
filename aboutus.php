<?php
/*
Template name: About Page Template
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
                    <li>About Us</li>
                </ul>
                <h1>About Us</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    <!--About Section-->
    <?php
    $aboutus = get_field('about_us_section');
    if( $aboutus ): 
    ?>
    <section class="about-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_left_content">
                        <div class="title-content">
                            <div class="subtitle"><?php echo esc_attr( $aboutus['about_section_:_sub_title_'] ); ?></div>
                            <h2 class="heading_title"><?php echo esc_attr( $aboutus['about_section_:_title_'] ); ?></h2>
                        </div>
                        <div class="text"><?php echo esc_attr( $aboutus['about_section_:_description'] ); ?></div>
                        <div class="text"><?php echo esc_attr( $aboutus['about_section_:_description_2'] ); ?></div>
                        <div class="start_trils_btn">
                            <a href="<?php echo esc_attr( $aboutus['about_section_:_button_url'] ); ?>" class="theme-btn three"><?php echo esc_attr( $aboutus['about_section_:_button_text'] ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_chart_img">
                        <div class="top-image">
                        <?php 
                        if( $aboutus['about_section_:_main_image']){
                        ?>
                        <img src="<?php echo $aboutus['about_section_:_main_image']; ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/about-four.png" alt="">
                        <?php }
                         ?>
                            
                        </div>
                        <div class="about-bottom-image">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-one.png" alt="">
                        </div>
                        <div class="about_reveniue_image float-bob-y">
                        <?php 
                        if($aboutus['about_section_:_second_top_image']){
                        ?>
                        <img src="<?php echo $aboutus['about_section_:_second_top_image']; ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/about_revenuie_image_1.png" alt="">
                        <?php }
                         ?>
                            
                        </div>
                        <div class="about_realtime_image float-bob-y">
                        <?php 
                        if($aboutus['about_section_:_second_bottom_image']){
                        ?>
                        <img src="<?php echo $aboutus['about_section_:_second_bottom_image']; ?>"
                            alt="">
                         <?php } else{ ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/resource/about_realtime_image_1.png" alt="">
                        <?php }
                         ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php endif; ?>
    <!--End About Section-->

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

     <!--Services Section-->
     <section class="services-section two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);" >
    	<div class="auto-container">
        	<!--Sec Title-->
            <?php
            $whychooseus = get_field('why_choose_us');
            if( $whychooseus): 
            ?>

            <div class="sec-title">
                <div class="subtitle"><?php echo esc_attr( $whychooseus['sub_title'] ); ?></div>
            	<h2 class="heading_title"><?php echo esc_attr( $whychooseus['title'] ); ?></h2>
                <div class="text"><?php echo $whychooseus['description']; ?></div>
            </div>
            <div class="row clearfix">
        <!--Service Style One-->
        <?php
        // Check if the repeater exists within the group field.
        if (!empty($whychooseus['points'])):
            // Loop through the repeater rows.
            foreach ($whychooseus['points'] as $point):
                // Access the subfields within each repeater row.
                $point_title = $point['point_title'];
                $point_image = $point['image'];
                $point_description = $point['point_description']; // Assuming this field exists.
                ?>
                <div class="service-style-two col-md-4 col-sm-6 col-xs-12" style='height: 210px;'>
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <!-- <span class="icon icon-7"></span> -->
                            <img src="<?php echo esc_html($point_image); ?>" class="home-service-icon">
                        </div>
                        <div class="discription-text">
                            <h3><a href="services.html"><?php echo esc_html($point_title); ?></a></h3>
                            <div class="text"><?php echo esc_html($point_description); ?></div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        else:
            // No repeater rows found.
            echo '<p>No points found.</p>';
        endif;
        ?>
    </div>
<?php endif; ?>
            
           
        </div>
    </section>
    <!--End We Do Section-->

     <!-- team-section -->
     <!-- <section class="about-team-section centred">
        <div class="auto-container">
           
            <div class="title-box text-center">
                <div class="subtitle">our team</div>
                <h2 class="heading_title">Meet our talented <br> team members</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="team-details.html">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/team_01.png" alt="">
                                </a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Leslie Alexander</a></h3>
                                <span class="designation">CEO & Co-founder</span>
                                <div class="share-box">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-2.html"><span class="icon icon-14"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-15"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-16"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="team-details.html">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/team_02.png" alt="">
                                </a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Guy Hawkins</a></h3>
                                <span class="designation">Product Manager</span>
                                <div class="share-box">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-2.html"><span class="icon icon-14"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-15"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-16"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="team-details.html">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/team/team_03.png" alt="">
                                </a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Floyd Miles</a></h3>
                                <span class="designation">Web Developer</span>
                                <div class="share-box">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-2.html"><span class="icon icon-14"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-15"></span></a></li>
                                        <li><a href="index-2.html"><span class="icon icon-16"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- team-section end -->
    
   
      <!-- testimonial-section -->
      <section class="testimonial-section" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/service-bd-image.png);">
        <div class="auto-container">
           
            <div class="sec-title text-center"> 
                <div class="subtitle"><?php echo get_field('testimonail_sub_title_'); ?></div>
            	<h2 class="heading_title"><?php echo get_field('testimonial_title_'); ?></h2>
                <div class="text"><?php echo get_field('testimonial_description'); ?></div>
            </div>

            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <?php
                function get_testimonials_with_designation() {
                    $args = array(
                        'post_type'      => 'testimonial',
                        'posts_per_page' => -1, // Fetch all testimonials
                        'post_status'    => 'publish',
                    );
                
                    $testimonials = new WP_Query($args);
                
                    if ($testimonials->have_posts()) {
                       
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
                      
                
                        wp_reset_postdata(); // Reset post data after the loop
                    } else {
                        echo '<p>No testimonials found.</p>';
                    }
                }
                
                
                ?>
            <?php get_testimonials_with_designation(); ?>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- Cta Section Start-->
    <section class="cta-section-two">
        <div class="cta-2-bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/cta_bg_image.png);"></div>
        <?php
        $cta_title = get_field('cta_title');
        $cta_button_text = get_field('cta_button_text');
        $cta_button_url = get_field('cta_button_url');
        ?>
        <div class="auto-container">
            <div class="section_heading text-center">
                <h2 class="section_heading_title_big"><?php echo $cta_title; ?></h2>
            </div>
            <div class="link-box">
                <a href='<?php echo $cta_button_url; ?>' class='btn-large'><?php echo $cta_button_text; ?></a>
            </div>
        </div>
    </section>
    <!-- Cta Section End-->

<?php get_footer(); ?>



