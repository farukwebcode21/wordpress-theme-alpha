<?php

function alpha_bootstrapping() {
    load_theme_textdomain("alpha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "alpha_bootstrapping");

function alpha_assets() {
    wp_enqueue_style("alpha", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "alpha_assets");