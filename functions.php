<?php
//<editor-fold defaultstate="collapsed" desc="Activation/Deactivation/Initial">

function myactivationfunction($oldname, $oldtheme = false) {
}

add_action("after_switch_theme", "myactivationfunction", 10, 2);

function mydeactivationfunction($newname, $newtheme) {
}

add_action("switch_theme", "mydeactivationfunction", 10, 2);

function my_theme_scripts() {
    //wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    //wp_enqueue_script('jquery-210', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-210', get_template_directory_uri() . '/js/jquery-2.1.0.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-311', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="Bootstrap Menu">
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus(array(
    'primary' => __('Primary Menu', 'sinqa'),
));
//</editor-fold>
?>