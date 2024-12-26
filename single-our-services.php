<?php get_header(); ?>
<style>
    .container.page-conatiner {
    padding-top: 25px;
    padding-bottom: 25px;
}
</style>    

<div class="post-class container-fuild p-5">
    <?php 
     if(have_posts()){
        while (have_posts()){
            the_post();
            ?>
    <!-- page-title -->
    <section class="page-title centred">
        <div class="bg-layer-two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/page-title.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                </ul>
                <h1 class="heading_title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    <div class="container page-conatiner">
   
    </div>
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-one">
                            <div class="gallery-image">
                                <div class="row clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="image-box">
                                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <div class="image">
                                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/service-one.png" alt="">
                                <?php endif; ?> 
                                           
                                        </div>
                                    </div>
                                    <!--Image Column-->
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="text-box">
                                            <h2>Empower Your Business with <?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="text-box text-center">
                                <h2 class="heading_title">Why Choose Our <?php the_title(); ?> Services?</h2>
                                <p>At Appitae, we understand that you have choices when it comes to <?php the_title(); ?>. Here’s what sets us apart:</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-lg-6 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/leadership.webp" class="home-service-icon"></div>
                                            <h3>Expert Team</h3>
                                            <p>Our certified professionals bring years of experience in delivering <?php the_title(); ?> solutions.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-6 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/personalization.webp" class="home-service-icon"></div>
                                            <h3>Tailored Approach</h3>
                                            <p>We understand your business goals and craft strategies that drive success.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-6 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/infographic.webp" class="home-service-icon"></div>
                                            <h3>Proven Results</h3>
                                            <p>With a track record of success, we help businesses achieve measurable outcomes.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-6 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/24-hours-support.webp" class="home-service-icon"></div>
                                            <h3>24/7 Support</h3>
                                            <p>Count on us for continuous support and maintenance to ensure seamless operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-box text-center pat-5">
                                <h2 class="heading_title">Industries We Serve</h2>
                                <p>We offer <?php the_title(); ?> solutions for a wide range of industries, including:</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Healthcare</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/finance.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Finance   </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/ecom.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Retail & E-commerce</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Manufacturing</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Education</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Technology & IT</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Hospitality</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Real Estate</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-4 col-sm-12 single-column serve-col">
                                        <div class="single-item">
                                            <div class="icon-box serce-box"><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/12/heathcare.webp" class="home-service-icon"></div>
                                            <h3 class='serve'>Non-Profit</h3>
                                        </div>
                                    </div>

                                    
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
</section>
            <?php
        }
     }
     ?>
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

</div>
<?php get_footer(); ?>