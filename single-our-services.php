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
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    <div class="container page-conatiner">
   
    </div>
     <!-- Blog Standard Start-->
     <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <div class="image">
                                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </div>
                                <?php endif; ?>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html"><?php the_title(); ?></a></h4>
                                    <ul class="post-meta">
                                        <li><?php the_author(); ?></li>
                                        <li><span><?php the_date(); ?></span></li>
                                    </ul>
                                    <div class="text"> <p class="page-content"><?php the_content(); ?></p></div>
                                    
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Standard -->
           
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