<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'WP - Footer Selector',
        'icon'      => 'page-layout-footer',
        'color'     => '#82B1FF',
        'path'      => __FILE__,
    ]);
} );