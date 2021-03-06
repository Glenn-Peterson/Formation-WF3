<?php
/**
 * Customizer options
 * @package     Elemento
 * @link        http://www.greenturtlelab.com/
 * since        1.0.0
 * Author:      Greenturtlelab
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

   // blog area
    $wp_customize->add_section(
        'blog_options',
        array(
            'title' => __('Blog Setting', 'elemento'),
            'priority' => 19,
        )
    );

    // blog layout
    $wp_customize->add_setting('elemento_blog_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',            
        )
    );

    $wp_customize->add_control( new Elemento_Info( $wp_customize, 'layout', array(
        'label' => __('Post Layout', 'elemento'),
        'section' => 'blog_options',
        'settings' => 'elemento_blog_options[info]',
        'priority' => 10
        ) )
    ); 

    $wp_customize->add_setting(
        'blog_layout',
        array(
            'default'           => 'list',
            'sanitize_callback' => 'elemento_sanitize_blog',
        )
    );

    $wp_customize->add_control(
        'blog_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Choose a layout', 'elemento'),
            'section'   => 'blog_options',
            'priority'  => 11,
            'choices'   => array(               
                'list'          => __( 'List', 'elemento' ),
                'grid'          => __( 'Grid', 'elemento' ),              
            ),
        )
    ); 
   

    
    // content / excerpt
    $wp_customize->add_setting('elemento_blog_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',            
        )
    );

    $wp_customize->add_control( new Elemento_Info( $wp_customize, 'content', array(
        'label' => __('Post content/excerpt', 'elemento'),
        'section' => 'blog_options',
        'settings' => 'elemento_blog_options[info]',
        'priority' => 13
        ) )
    );

    $wp_customize->add_setting(
      'full_content_home',
      array(
        'sanitize_callback' => 'elemento_sanitize_checkbox',
        'default' => 0,     
      )   
    );

    $wp_customize->add_control(
        'full_content_home',
        array(
            'type' => 'checkbox',
            'label' => __('Full content on home page', 'elemento'),
            'section' => 'blog_options',
            'priority' => 14,
        )
    );

    $wp_customize->add_setting(
      'full_content_archives',
      array(
        'sanitize_callback' => 'elemento_sanitize_checkbox',
        'default' => 0,     
      )   
    );

    $wp_customize->add_control(
        'full_content_archives',
        array(
            'type'      => 'checkbox',
            'label'     => __('Full content on all archives.', 'elemento'),
            'section'   => 'blog_options',
            'priority'  => 15,
        )
    ); 

    // excerpt length
    $wp_customize->add_setting(
        'exc_lenght',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '18',
        )       
    );

    $wp_customize->add_control( 'exc_lenght', array(
        'type'        => 'number',
        'priority'    => 16,
        'section'     => 'blog_options',
        'label'       => __('Post excerpt length', 'elemento'),
        'description' => __('Default: 18 words', 'elemento'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
        ),
    ) );


    // post meta
    $wp_customize->add_setting('elemento_blog_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',            
        )
    );

    $wp_customize->add_control( new Elemento_Info( $wp_customize, 'meta', array(
        'label' => __('Post meta', 'elemento'),
        'section' => 'blog_options',
        'settings' => 'elemento_blog_options[info]',
        'priority' => 17
        ) )
    ); 

    // hide meta on index / archive
    $wp_customize->add_setting(
      'hide_meta_index',
      array(
        'sanitize_callback' => 'elemento_sanitize_checkbox',
        'default' => 0,     
      )   
    );

    $wp_customize->add_control(
      'hide_meta_index',
      array(
        'type' => 'checkbox',
        'label' => __('Don\'t display post meta on index/archive', 'elemento'),
        'section' => 'blog_options',
        'priority' => 18,
      )
    );

    // hide meta on single
    $wp_customize->add_setting(
      'hide_meta_single',
      array(
        'sanitize_callback' => 'elemento_sanitize_checkbox',
        'default' => 0,     
      )   
    );

    $wp_customize->add_control(
      'hide_meta_single',
      array(
        'type' => 'checkbox',
        'label' => __('Don\'t display post meta on single', 'elemento'),
        'section' => 'blog_options',
        'priority' => 19,
      )
    );

    // post featured image
    $wp_customize->add_setting('elemento_blog_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',            
        )
    );

    $wp_customize->add_control( new Elemento_Info( $wp_customize, 'images', array(
        'label' => __('Post featured images', 'elemento'),
        'section' => 'blog_options',
        'settings' => 'elemento_blog_options[info]',
        'priority' => 21
        ) )
    );  

    // hide featured image on index / archive
    $wp_customize->add_setting(
        'hide_index_feat_image',
        array(
            'sanitize_callback' => 'elemento_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'hide_index_feat_image',
        array(
            'type' => 'checkbox',
            'label' => __('Don\'t display featured images on index/archives.', 'elemento'),
            'section' => 'blog_options',
            'priority' => 22,
        )
    );

     // hide featured image on single pge
    $wp_customize->add_setting(
        'hide_single_feat_image',
        array(
            'sanitize_callback' => 'elemento_sanitize_checkbox',
        )       
    );

    $wp_customize->add_control(
        'hide_single_feat_image',
        array(
            'type' => 'checkbox',
            'label' => __('Don\'t display featured images on single posts', 'elemento'),
            'section' => 'blog_options',
            'priority' => 23,
        )
    );


/**
 * sanitization 
 */
    // blog layout
    function elemento_sanitize_blog( $input ) {
        $valid = array(
            'list'       => __( 'List', 'elemento' ),
            'grid'  => __( 'Grid', 'elemento' ),
       );

        if ( array_key_exists( $input, $valid ) ) {

            return $input;

        } else {

            return '';
        }
    }