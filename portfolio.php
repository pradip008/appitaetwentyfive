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

