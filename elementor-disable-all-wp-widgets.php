<?php
/**
 * Disable elementor registered widget.
 *
 * This will disable all WordPress native widgets
 *
 * @param \Elementor\Widgets_Manager $widgets_manager Instance of elementor widgets manager
 * 
 * @author eleas
 *
 * @return void
 */
add_action( 'elementor/widgets/widgets_registered', function ( $widgets_manager ) {
    
    $wp_widgets = [
        'wp-widget-pages',
        'wp-widget-calendar',
        'wp-widget-archives',
        'wp-widget-media_audio',
        'wp-widget-media_image',
        'wp-widget-media_gallery',
        'wp-widget-media_video',
        'wp-widget-meta',
        'wp-widget-search',
        'wp-widget-text',
        'wp-widget-categories',
        'wp-widget-recent-posts',
        'wp-widget-recent-comments',
        'wp-widget-rss',
        'wp-widget-tag_cloud',
        'wp-widget-nav_menu',
        'wp-widget-custom_html',
    ];

    foreach ( $wp_widgets as $widget ) {
        $widgets_manager->unregister_widget_type( $widget );
    }
} );
