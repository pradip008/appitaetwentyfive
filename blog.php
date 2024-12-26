<?php
/*
Template name: Blog Page Template
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
                    <li>Blog</li>
                </ul>
                <h1>Blog</h1>
            </div>
        </div>
  </section>
    <!-- page-title end -->
 <section class="blog-section grid-page">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="row clearfix">
    <?php
    // WordPress loop to fetch latest posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1, // Number of posts to display
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="col-lg-4 col-md-4 col-sm-12 news-block-one">
            <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/blog-image-01.png" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="lower-content">
                    <div class="category">
                        <?php
                        // $categories = get_the_category();
                        // if (!empty($categories)) {
                        //     echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                        // }
                        ?>
                    </div>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <ul class="post-meta">
                        <li>By <?php the_author(); ?></li>
                        <li><span><?php echo get_the_date(); ?></span></li>
                    </ul>
                    <div class="text"><?php the_excerpt(); ?></div>
                </div>
            </div>
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>
                    <!-- <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="blog.html"><i class="icon-31"></i></a></li>
                            <li><a href="blog.html" class="current">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="icon-32"></i></a></li>
                        </ul>
                    </div> -->
                </div>
                
            </div>
        </div>
    </section>


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