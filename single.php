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
                    <li><a href="index.html">Home</a></li>
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

                        <!-- <div class="content-one">
                            <div class="group-title">
                                <h3>Work harder & gain success</h3>
                            </div>
                            <div class="text">Morbi lorem proin morbi tempor risus. Nisl lobortis diam id faucibus pretium vitae suspendisse sed accumsan. Sodales morbi tristique elit cursus gravida. Ullamcorper commodo eget pulvinar pretium. Condimentum rhoncus commodo amet nec auctor nibh vel mi blandit.
                            </div>
                            <div class="text">Neque ultrices nunc condimentum morbi risus tincidunt. Vel arcu lacus non ornare. Porttitor in rhoncus magna augue adipiscing.
                            </div>
                        </div>
                        <div class="details-image">
                            <div class="details-image-one"><img src="assets/images/news/details_img_two.png" alt=""></div>
                            <div class="details-image-two"><img src="assets/images/news/details_img_three.png" alt=""></div>
                        </div>
                        <div class="content-one">
                            <div class="group-title">
                                <h3>Manage your online business</h3>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet consectetur. Nullam blandit dui gravida aliquam enim eu. Adipiscing viverra vulputate curabitur est. Lorem ipsum dolor sito amet, conse ctetuer adipiscing elit sed diam nonum nibhie euisod.
                            </div>
                            <ul class="list-style-two">
                                <li><span class="icon-5"></span> Giant Fishes Farming</li>
                                <li><span class="icon-5"></span> Water & Plants Filtration Systems</li>
                                <li><span class="icon-5"></span> Seafood Import Export</li>
                            </ul>
                        </div> -->

                        <!-- <div class="share-social-icon">
                            <div class="social-text">Share This:</div>
                            <div class="social-icon">
                                <ul class="social-icon-list">
                                    <li><a href="index.html"><span class="icon-14"></span></a></li>
                                    <li><a href="index.html"><span class="icon-15"></span></a></li>
                                    <li><a href="index.html"><span class="icon-16"></span></a></li>
                                    <li><a href="index.html"><span class="icon-17"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-one">
                            <div class="group-title">
                                <h3>Leave a Reply</h3>
                            </div>
                            <div class="text">Enim orci aliquam malesuada porttitor feugiat tellus malesuada quis fermentum mattis sit fringilla id feugiat velit non sed id.
                            </div>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="blog-detail.html" id="contact-form" class="default-form"> 
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
                                        <div class="link-box three">
                                            <button type="submit" class="btn-large team-btn"><span>Post Comment</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-sidebar default-sidebar">
                        <div class="sidebar-widget search-widget">
                            <div class="search-form">
                                <form action="blog-2.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Type to search..." required>
                                        <button type="submit"><i class="icon-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list blog-page clearfix">
                                    <li><a href="blog-details.html"><span>Agency (3)</span></a></li>
                                    <li><a href="blog-details.html"><span>Designs (7)</span></a></li>
                                    <li><a href="blog-details.html"><span>Marketing (5)</span></a></li>
                                    <li><a href="blog-details.html"><span>Business (8)</span></a></li>
                                    <li><a href="blog-details.html"><span>Technology (2)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Latest News</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.png" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Laoreet ipsum augue eget egestas...</a></h5>
                                    <span class="post-date">Mar 17, 2024</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.png" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Always ready to solve all your problems.</a></h5>
                                    <span class="post-date">Mar 17, 2024</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.png" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Dangers of a traditional for your career goal</a></h5>
                                    <span class="post-date">Mar 17, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular tag</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="blog-details.html">Business</a></li>
                                    <li><a href="blog-details.html">Desing</a></li>
                                    <li><a href="blog-details.html">UI/UX</a></li>
                                    <li><a href="blog-details.html">Artical</a></li>
                                    <li><a href="blog-details.html">Trends</a></li>
                                    <li><a href="blog-details.html">Finance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
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