<?php
show_admin_bar(false);
	
add_post_type_support('page', 'excerpt');

add_theme_support('post-thumbnails');

// require_once('custom-widgets/widgets.php');
// Stop WP adding extra <p> </p> to your pages' content
// remove_filter( 'the_content', 'wpautop' );
function register_menus() {
    register_nav_menus (
        array (
            'main-menu'				=> __('Menu główne'),
            'main-menu-mobile'		=> __('Menu mobilne'),
            'weapons'               => __('Bronie'),
            'armors'                => __('Pancerze'),
            'accesories'            => __('Akcesoria'),
            'skills'                => __('Umiejętności'),
            'dungeons'              => __('Lochy'),
            'footer-1'              => __('Menu stopki #1'),
            'footer-2'              => __('Menu stopki #2'),
            'footer-3'              => __('Menu stopki #3'),

            
        )
    );
}
add_action('init', 'register_menus');

function buildTree(array &$flatNav, $parentId = 0) {
    $branch = [];

    foreach ($flatNav as &$navItem) {
        if($navItem->menu_item_parent == $parentId) {
            $children = buildTree($flatNav, $navItem->ID);
            if($children) {
                $navItem->children = $children;
            }

            $branch[$navItem->menu_order] = $navItem;
            unset($navItem);
        }
    }

    return $branch;
}

function monthname($month) {
    $months = ['stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'];

    return $months[$month - 1];
}

function monthtext($month) {
    $months = ['styczeń', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień'];

    return $months[$month - 1];
}
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
  
?>
