<?php
if ( ! defined( 'APPITAE_TWENTYFIVE_THEME_DIRECTORY_PATH' ) ) {
  define( 'APPITAE_TWENTYFIVE_THEME_DIRECTORY_PATH', get_template_directory() );
  // /var/www/html/wordpress/wp-content/themes/mytheme
}

if ( ! defined( 'APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI' ) ) {
    define( 'APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI', get_template_directory_uri() );
    // /var/www/html/wordpress/wp-content/themes/mytheme
}


function appitae_twentyfive_enqueue_styles() {

  // style.css enqueue
  wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );

  // all style enqueue code
  wp_enqueue_style( 'bootstrap-min', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/bootstrap.css', array(), '5.3.2' ,'all');
  wp_enqueue_style( 'icomoon', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/icomoon.css', array(), '4.1.1' ,'all');
  wp_enqueue_style( 'animate', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/animate.css', array(), '5.3.1' ,'all');
  wp_enqueue_style( 'owl', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/owl.css', array(), '5.3.3' );
  wp_enqueue_style( 'swiper-min', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/swiper.min.css', array(), '5.3.9' ,'all');
  wp_enqueue_style( 'style-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/style.css', array(), '5.3.8' ,'all');
  wp_enqueue_style( 'banner-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/banner.css', array(), '5.3.7','all' );
  wp_enqueue_style( 'aboutus-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/about.css', array(), '5.3.12' ,'all');
  wp_enqueue_style( 'blog-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/blog.css', array(), '5.3.31' ,'all');
  wp_enqueue_style( 'cta-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/cta.css', array(), '5.3.35' ,'all');
  wp_enqueue_style( 'faq-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/faq.css', array(), '5.3.38','all' );
  wp_enqueue_style( 'features-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/features.css', array(), '5.3.37' ,'all');
  wp_enqueue_style( 'footer-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/footer.css', array(), '5.3.38' ,'all');
  wp_enqueue_style( 'fun_facts-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/fun_facts.css', array(), '5.3.39' ,'all');
  wp_enqueue_style( 'header-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/header.css', array(), '5.3.40' ,'all');
  wp_enqueue_style( 'pricing-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/pricing.css', array(), '5.3.41' ,'all');
  wp_enqueue_style( 'services-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/services.css', array(), '5.3.42' ,'all');
  wp_enqueue_style( 'sponsor-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/sponsor.css', array(), '5.3.44' ,'all');
  wp_enqueue_style( 'testimonial-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/testimonial.css', array(), '5.3.45' ,'all');
  wp_enqueue_style( 'project-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/project.css', array(), '5.3.45' ,'all');
  wp_enqueue_style( 'responsive-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/responsive.css', array(), '5.3.45' ,'all');
  wp_enqueue_style( 'page-title-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/page-title.css', array(), '5.3.47' ,'all');
  wp_enqueue_style( 'team-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/team.css', array(), '5.3.48' ,'all');
  //portfolio 
  wp_enqueue_style( 'gallery-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/css/module-css/gallery.css', array(), '5.3.49' ,'all');
  

 
  // all script enqueue code 
  wp_enqueue_script( 'jquery-min', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/jquery.js','[]','1.18.0', true );
  wp_enqueue_script( 'bootstrap-min', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/bootstrap.min.js', array(), '1.1.0', true );
  wp_enqueue_script( 'mCustomScrollbar', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.2.0', true );
  wp_enqueue_script( 'fancybox', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/jquery.fancybox.js', array(), '1.3.0', true );
  //contact form js start 
  wp_enqueue_script( 'validation-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/validation.js', array(), '1.4.0', true );
  //contact form js end
  wp_enqueue_script( 'appear-js', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/appear.js', array(), '1.4.0', true );
  //porrtfolio
  if (is_page_template('portfolio.php')) {
    
    wp_enqueue_script( 'isotope-js', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/isotope.js', array(), '1.4.15', true );
  }
  wp_enqueue_script( 'owl-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/owl.js', array(), '1.5.0', true );
  wp_enqueue_script( 'wow-css', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/wow.js', array(), '1.6.0', true );
  wp_enqueue_script( 'swiper-min', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/swiper.min.js', array(), '1.7.0', true );
  wp_enqueue_script( 'jquery-nice', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/jquery.nice-select.min.js', array(), '1.8.0', true );
  wp_enqueue_script( 'custom-j', APPITAE_TWENTYFIVE_THEME_DIRECTORY_URI . '/assets/js/script.js', array(), '1.10.0', true );
}
add_action( 'wp_enqueue_scripts', 'appitae_twentyfive_enqueue_styles' );


require_once APPITAE_TWENTYFIVE_THEME_DIRECTORY_PATH . '/include/menus.php';
require_once APPITAE_TWENTYFIVE_THEME_DIRECTORY_PATH . '/include/customizer.php';
require_once APPITAE_TWENTYFIVE_THEME_DIRECTORY_PATH . '/include/custom-post-type.php';

// Add theme support for various features
function appitae_twentyfive_theme_setup() {
  // Add support for WordPress title tag (since WP 4.1)
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails (featured images)
  add_theme_support( 'post-thumbnails' );

  // Define the default size for post thumbnails
  set_post_thumbnail_size( 150, 150, true ); // width, height, crop mode

  // Add support for automatic feed links (RSS feed links in the header)
  add_theme_support( 'automatic-feed-links' );

  // Add support for custom logo (with default sizes)
  add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
  ) );

  // Add support for HTML5 elements (search form, comment form, etc.)
  add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
  ) );

  add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'appitae_twentyfive_theme_setup' );


// Disable updates for the ACF plugin
add_filter('site_transient_update_plugins', function($value) {
  if (isset($value->response['advanced-custom-fields-pro/acf.php'])) {
      unset($value->response['advanced-custom-fields-pro/acf.php']);
  }
  return $value;
});
