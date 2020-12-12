<?php
/**
 * Disable elementor registered widget.
 *
 * This will remove elemtor widget from the editor panel
 * as well as the the widget instance will get removed.
 * And following this method you can disable any elementor widget
 * including elementor and elementor pro widgets.
 *
 * @param \Elementor\Widgets_Manager $widgets_manager Instance of elementor widgets manager
 * 
 * @author eleas
 *
 * @return void
 */
add_action( 'elementor/widgets/widgets_registered', function ( $widgets_manager ) {
    // $widget_name_goes_here could be 'heading', 'text-widget', 'wp-widget-pages'
    $widgets_manager->unregister_widget_type( $widget_name_goes_here );
} );
