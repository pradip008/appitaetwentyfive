<?php

function customizer_top_header_settings($wp_customize) {
    // Add a section for the top header.
    $wp_customize->add_section('top_header_section', array(
        'title'       => __('Header Customization', 'your-theme'),
        'description' => __('Settings for the top header.', 'your-theme'),
        'priority'    => 30,
    ));

    // Phone Number.
    $wp_customize->add_setting('top_header_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_phone', array(
        'label'   => __('Phone Number', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Phone Link.
    $wp_customize->add_setting('top_header_phone_link', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_phone_link', array(
        'label'   => __('Phone Link (tel:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    
     // Phone Number.
     $wp_customize->add_setting('top_header_button', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_button', array(
        'label'   => __('Button Name', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Menu Call to Action Button Name
    $wp_customize->add_setting('menu_header_button_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('menu_header_button_link', array(
        'label'   => __('Menu Call To Button Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Email Address.
    $wp_customize->add_setting('top_header_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('top_header_email', array(
        'label'   => __('Email Address', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Email Link.
    $wp_customize->add_setting('top_header_email_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_email_link', array(
        'label'   => __('Email Link (mailto:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

     // Phone Number.
     $wp_customize->add_setting('top_header_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_address', array(
        'label'   => __('Address', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));


     // Add a section for the Social Link.
     $wp_customize->add_section('socail_link_section', array(
        'title'       => __('Social Link', 'your-theme'),
        'description' => __('Settings for Socail Media.', 'your-theme'),
        'priority'    => 30,
    ));

    //Facebook Link
    $wp_customize->add_setting('top_header_facebook_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_facebook_link', array(
        'label'   => __('Facebook Link', 'your-theme'),
        'section' => 'socail_link_section',
        'type'    => 'text',
    ));
    //Instagram Link
    $wp_customize->add_setting('top_header_instagram_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_instagram_link', array(
        'label'   => __('Instagram Link', 'your-theme'),
        'section' => 'socail_link_section',
        'type'    => 'text',
    ));

    //Linkdin Link  
    $wp_customize->add_setting('top_header_linkedin_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_linkedin_link', array(
        'label'   => __('Linkedin Link', 'your-theme'),
        'section' => 'socail_link_section',
        'type'    => 'text',
    ));

    //Twitter Link  
    $wp_customize->add_setting('top_header_twitter_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_twitter_link', array(
        'label'   => __('Twitter Link', 'your-theme'),
        'section' => 'socail_link_section',
        'type'    => 'text',
    ));

    
     // Add a section for the Social Link.
     $wp_customize->add_section('footer_theme_section', array(
        'title'       => __('Footer Setting', 'your-theme'),
        'description' => __('Settings for Footer.', 'your-theme'),
        'priority'    => 30,
    ));


    $wp_customize->add_setting('footer_about_content', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_about_content', array(
        'label'   => __('Footer : About Content', 'your-theme'),
        'section' => 'footer_theme_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer_copyright_content', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('footer_copyright_content', array(
        'label'   => __('Footer : Copyright Content', 'your-theme'),
        'section' => 'footer_theme_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('footer_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw', // Use esc_url_raw for image URLs
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
            'label'   => __('Footer Logo', 'your-theme'),
            'section' => 'footer_theme_section',
            'settings' => 'footer_logo',
        )
    ));

     
     

}
add_action('customize_register', 'customizer_top_header_settings');


