<?php get_header(); ?>
<style>
    .container.page-conatiner {
    padding-top: 25px;
    padding-bottom: 25px;
}
.container.page-conatiner.page-appitae {
    color: black;
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
                    <li><?php the_title(); ?></li>
                </ul>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    <div class="container page-conatiner page-appitae">
    <p class="page-content"><?php the_content(); ?></p>
    </div>
           
            <?php
        }
     }
     ?>
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
</div>

<?php get_footer(); ?>