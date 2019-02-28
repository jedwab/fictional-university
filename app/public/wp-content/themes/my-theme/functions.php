<?php

function pageBanner ($args = NULL) {

    if (!$args['title']) {
        $args['title'] = get_the_title();
    }
    if (!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }
    if (!$args['photo']) {
        if (get_field('page_banner_background_image')) {
            $args['photo'] = get_field('page_banner_background_image') ['sizes'] ['pageBanner'];
        } else {
        $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
}
?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php 
       echo $args['photo'];
        
        ?>)">
    </div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
        <div class="page-banner__intro">
            <p><?php echo $args['subtitle'];?></p>
        </div>
    </div>
</div>
<?php };
function site_files() {
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDjo8e32du0kyicMSg1ScS6j4hUEIfwKW8', NULL, 1, true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('site_styles', get_stylesheet_uri());
    wp_localize_script('main-university-js','universityData',array(
        'root_url' => get_site_url()
        

    ));
}

function site_features () {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);

}
add_action('wp_enqueue_scripts', 'site_files');
add_action('after_setup_theme', 'site_features');

function adjust_queries($query) {

    $today = date('Ymd');
    if (!is_admin() AND is_post_type_archive('campus') AND $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }
    if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query())  {

    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', '10');
    $query->set('meta_query', array(
        array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
       
      
    
        )));
    }

}
add_action('pre_get_posts', 'adjust_queries');

function mapKey($api) {
    $api['key'] = 'AIzaSyDjo8e32du0kyicMSg1ScS6j4hUEIfwKW8';
    return $api;
}
add_filter('acf/fields/google_map/api', 'mapKey');



?>