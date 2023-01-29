<?php 

/*
 * Plugin Name:       Inspire One Custom Post
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Saiful Kader
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       inspireone
 * Domain Path:       /languages
 */
 
 function inspireone_custom_post(){
  // Slider Custom Post
  register_post_type('sliders', array(
    'labels' => array(
        'name' => __('Slides', 'inspireone'),
        'singular_name' => __('Slider', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title', 'thumbnail', 'custom-fields')
));

// Services Custom Post
register_post_type('services', array(
    'labels' => array(
        'name' => __('Services', 'inspireone'),
        'singular_name' => __('Service', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'custom-fields')
));

// Teams Custom Post
register_post_type('teams', array(
    'labels' => array(
        'name' => __('Teams', 'inspireone'),
        'singular_name' => __('Team', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title','thumbnail' , 'custom-fields')
));

// Testimonial Custom Post
register_post_type('testimonials', array(
    'labels' => array(
        'name' => __('Testimonials', 'inspireone'),
        'singular_name' => __('Testimonial', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title','editor','thumbnail' , 'custom-fields')
));

// Gallery Custom Post
register_post_type('gallerys', array(
    'labels' => array(
        'name' => __('Gallerys', 'inspireone'),
        'singular_name' => __('Gallery', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title', 'custom-fields')
));

// Portfolio Custom Post
register_post_type('portfolio', array(
    'labels' => array(
        'name' => __('Portfolios', 'inspireone'),
        'singular_name' => __('Portfolio', 'inspireone')
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes')
));

// Portfolio Taxonomy

register_taxonomy('portfolio-cat', 'portfolio',array(
    'labels' => array(
        'name' => __('Categories', 'inspireone'),
        'singular_name' => __('Category', 'inspireone')
    ),
    'hierarchical' => true,
    'show_admin_column' => true
));




}
add_action('init','inspireone_custom_post');