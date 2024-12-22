<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head> 
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('title'); ?> - <?php bloginfo('description'); ?></title>
<!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"> -->
<link rel="icon" href="<?php get_site_icon_url(); ?>" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;800;900&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;800;900&display=swap" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php wp_head(); ?>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">close</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                           I
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!--Search Popup-->
    <!-- <div id="search-popup" class="search-popup">
        <div class="popup-inner">
            <div class="upper-box clearfix">
                <figure class="logo-box pull-left"><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Sasen.png" alt=""></a></figure>
                <div class="close-search pull-right"><span class="fa fa-times"></span></div>
            </div>
            <div class="overlay-layer"></div>
            <div class="auto-container">
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                <button type="submit"><i class="icon-1"></i></button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
 	
    <!-- Main Header-->
    <header class="main-header four header-style-three">
    
    	<!-- Main Box -->
    	<div class="main-box">
        	<div class="container-fulid">
                <div class="outer-container">
                    <!--Logo Box-->
                    <div class="logo-box">
                    <div class="logo logo-theme-main">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                        the_custom_logo();
                        } else {
                        // Fallback: display the site name or a default logo
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
                        }
                        ?>
                    </div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="menu-area two">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu four navbar-expand-md navbar-light">
                            
                            <div class="navbar-collapse collapse show" id="navbarSupportedContent">
                                
                                <?php 
                                wp_nav_menu( array(
                                    'menu'   => 'Something custom walker',
                                    'walker' => new WPDocs_Walker_Nav_Menu(),
                                    'menu_class' => 'navigation',
                                    'container'      => false,
                                    'theme_location' => 'primary_menu',
                                ) );
                                ?>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <!--Search Box-->
                            <!--Search Box-->
                            <!-- <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn one search-toggler"><span class="icon-1"></span></button>
                                </div>
                            </div> -->
                            <?php 
                                 $phone      = get_theme_mod('top_header_phone', '');
                                 $phone_link = get_theme_mod('top_header_phone_link', '');
                                 $buttolink = get_theme_mod('menu_header_button_link', '');
                                 $buttonname = get_theme_mod('top_header_button', '');
                                 $email      = get_theme_mod('top_header_email', '');
                                 $email_link = get_theme_mod('top_header_email_link', '');
                                 $address = get_theme_mod('top_header_address', '');
                               
                                 if ($phone && $phone_link) {
                                    echo '<div class="support-box tell-number"> <i class="icon-18"></i><a  href="tel:' . esc_attr($phone_link) . '">' . esc_html($phone) . '</a></div>';
                                 }
                                 if ($buttolink && $buttonname) {
                                    echo '<div class="start_trils_btn btn_three"><a class="theme-btn" href="' . esc_attr($buttolink) . '">' . esc_html($buttonname) . '</a>  </div>';
                                 }
                            ?>
                        
                        </div>
                    </div>
                    <!--Nav Outer End-->
                </div>    
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="container-fulid">
                <div class="outer-container">
                    <!--Logo-->

                    <div class="logo logo-theme-main">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                        the_custom_logo();
                        } else {
                        // Fallback: display the site name or a default logo
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
                        }
                        ?>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col">
                        <div class="menu-area">
                            <nav class="main-menu">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>

                            <div class="outer-box">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn one search-toggler"><span class="icon-1"></span></button>
                                    </div>
                                </div>
    
                                <div class="support-box">
                                    <a href="#"><i class="icon-18"></i></a>
                                    <a href="tel:2395432170108">(239)-543-217-0108</a>
                                </div>
                                <!--Button-->
                                <div class="start_trils_btn">
                                    <a href="index.html" class="theme-btn">Start Free Trial</a>
                                </div>
                            </div>
                        </div>
                        <!-- Main Menu End-->
                    </div>    
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="icon-13"></i></div>
        
        <nav class="menu-box pb-3">
            </br></br>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    
                    <?php
                    if ($address) {
                        echo '<li>' . esc_html($address) . '</li>';
                    }
                    if ($phone && $phone_link) {
                     echo '<li><a  href="tel:' . esc_attr($phone_link) . '">' . esc_html($phone) . '</a></li>';
                    }
                    if ($email && $email_link) {
                     echo '<li><a  href="mailto:' . esc_attr($email_link) . '">' . esc_html($email) . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                <?php 
                $facebook_link = get_theme_mod('top_header_facebook_link', '');
                $instagram_link = get_theme_mod('top_header_instagram_link', '');
                $linkedin_link = get_theme_mod('top_header_linkedin_link', '');
                $twitter_link = get_theme_mod('top_header_twitter_link', '');
                ?>
                    
                    <li><a href="<?php echo $facebook_link;?>"><span class="fa fa-facebook-square"></span></a></li>
                    <li><a href="<?php echo $instagram_link;?>"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="<?php echo $linkedin_link;?>"><span class="fa fa fa-linkedin"></span></a></li>
                    <li><a href="<?php echo $twitter_link;?>"><span class="fa fa-twitter"></span></a></li>
                    
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->