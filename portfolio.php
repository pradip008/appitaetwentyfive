<?php
/*
Template name: Portfolio Page Template
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
                    <li>Portfolio</li>
                </ul>
                <h1>Portfolio</h1>
            </div>
        </div>
  </section>
  <!-- page-title end -->
   <!--Gallery Section Five-->
   <section class="gallery-section-five">
    	<div class="auto-container">
        	<!--MixitUp Galery-->
            <?php
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1, // Fetch all posts
);
$portfolio_query = new WP_Query($args);

// Get portfolio categories
$portfolio_categories = get_terms(array(
    'taxonomy' => 'portfolio-category',
    'orderby'  => 'name',
    'order'    => 'ASC',
    'hide_empty' => true, // Only show categories that have posts
));
?>
<div class="sortable-masonry">
    <!-- Filter -->
    <div class="filters centred clearfix">
        <ul class="filter-tabs filter-btns clearfix">
            <li class="active filter" data-role="button" data-filter=".all">Show all</li>
            <?php if (!empty($portfolio_categories) && !is_wp_error($portfolio_categories)) : ?>
                <?php foreach ($portfolio_categories as $category) : ?>
                    <li class="filter" data-role="button" data-filter=".<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Portfolio Items -->
    <div class="items-container row clearfix">
        <?php if ($portfolio_query->have_posts()) : ?>
            <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <?php
                $portfolio_categories = get_the_terms(get_the_ID(), 'portfolio-category');
                $category_classes = '';

                if ($portfolio_categories) {
                    foreach ($portfolio_categories as $category) {
                        $category_classes .= $category->slug . ' ';
                    }
                }
                ?>
                <div class="gallery-item-five masonry-item small-column all <?php echo esc_attr($category_classes); ?> col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/default-image.jpg" alt="Default Image" />
                            <?php endif; ?>
                            <div class="overlay-box">
                                <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery" class="lightbox-image popup-box" title="<?php the_title(); ?>"><span class="fa fa-expand"></span></a>
                                <a class="link-btn" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php
                            if ($portfolio_categories) {
                                foreach ($portfolio_categories as $category) {
                                    echo esc_html($category->name);
                                    break; // Display the first category only
                                }
                            }
                            ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('No portfolios found', 'textdomain'); ?></p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
        </div>
    </section>
    <!--Gallery Section Five-->

<?php get_footer(); ?>

<div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters centred clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">Show all</li>
                        <li class="filter" data-role="button" data-filter=".desing">Desing</li>
                        <li class="filter" data-role="button" data-filter=".finence">Finence</li>
                        <li class="filter" data-role="button" data-filter=".trends">Trends</li>
                        <li class="filter" data-role="button" data-filter=".marketing">Marketing</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <!--Gallery Item Five-->
                    <div class="gallery-item-five masonry-item small-column all desing trends col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-01.png" alt="" />
                                <div class="overlay-box">
                                    <a href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-01.png" data-fancybox="gallery" class="lightbox-image popup-box" title="Image Title Here"><span class="fa fa-expand"></span></a>
                                    <a class="link-btn" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="lower-box">
                            	<h3><a href="portfolio-details.html">The power of communication</a></h3>
                                <p>Artical</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item-five masonry-item small-column all desing trends col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-06.png" alt="" />
                                <div class="overlay-box">
                                    <a href="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-06.png" data-fancybox="gallery" class="lightbox-image popup-box" title="Image Title Here"><span class="fa fa-expand"></span></a>
                                    <a class="link-btn" href="portfolio-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="lower-box">
                            	<h3><a href="portfolio-details.html">UX Web Design</a></h3>
                                <p>UI/UX</p>
                            </div>
                        </div>
                    </div>
                </div>
</div>