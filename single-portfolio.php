<?php
get_header();



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
                    <li><?php the_title(); ?></li>
                </ul>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
            <?php
        }
     }
     ?>

     
    <!-- Portfolio details Start -->
    <section class="portfolio-details">
        <div class="auto-container">
            <!-- Featured Image -->
            <div class="details-image-box">
                <?php if (get_field('banner_main_image_')) : ?>
                    <img src="<?php  echo get_field('banner_main_image_'); ?>" alt="<?php the_title(); ?>" width='1290px' style="height:600px">
                <?php else : ?>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/details-image-one.png" alt="">
                    <?php endif; ?>
            </div>
            <div class="medium-container">
                <div class="categore-items">
                    <div class="row clearfix">
                        <!-- Client Name -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details one">
                                <h4>Client:</h4>
                                <p><?php echo get_post_meta(get_the_ID(), 'client_name', true); ?></p>
                            </div>
                        </div>
                        <!-- Category -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details two">
                                <h4>Category:</h4>
                            
                                <p> <?php
                                    $terms = get_the_terms(get_the_ID(), 'portfolio-category');
                                    if ($terms && !is_wp_error($terms)) {
                                        $term_links = array_map(function ($term) {
                                            return '<span">' . esc_html($term->name) . '</span>';
                                        }, $terms);
                                        echo implode(', ', $term_links);
                                    } else {
                                        echo 'No Category Assigned';
                                    }
                                    ?></p>
                            </div>
                        </div>
                        <!-- Duration -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details three">
                                <h4>Duration:</h4>
                                <p><?php  echo get_post_meta(get_the_ID(), 'duration', true); ?></p>
                            </div>
                        </div>
                        <!-- Website Link -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details four">
                                <h4>Website Link:</h4>
                                <p>
                                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'website_link', true)); ?>" target="_blank">
                                        <?php echo get_post_meta(get_the_ID(), 'website_link', true); ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Overview -->
            <div class="text-box">
                <h2>Project Overview</h2>
                <p><?php  echo get_post_meta(get_the_ID(), 'project_overview', true); ?></p>
            </div>
        </div>
    </section>
    <!-- Portfolio details End -->


    


  <!-- Cta Section Start-->
  <section class="cta-section">
    <div class="cta-1-bg" data-parallax='{"y": 30}'
        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/cta-bg-image-one.png);">
    </div>
    <div class="auto-container">
        <div class="section_heading text-center">
            <h2 class="section_heading_title_big">Contact us today and discover how Appitae Solutions</br>
            can help you achieve your business goals.</h2>
        </div>
        <div class="text-center">
            <div class="cta-1-link-bt"><a href="<?php echo home_url(); ?>/contact-us" class="btn-1">Let’s innovate together!<span></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End-->



<?php get_footer(); ?>