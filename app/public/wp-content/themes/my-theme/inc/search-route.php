<?php
add_action('rest_api_init', 'universityRegisterSearch');

function universityRegisterSearch () {
    register_rest_route('university/v1', 'search', array (
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'universitySearchResults',
     

    ));
}

function universitySearchResults () {
    $mainQuery = new WP_Query(array(
        's' => sanitize_text_field($data['term']),
        'post_type' => array('post', 'page', 'professor', 'program', 'event', 'campus')
    ));
    $mainResults = array(
        'generalInfo' => array(),
        'professors' => array(),
        'programs' => array(),
        'events' => array(),
        'campuses' =>array()

    );
    while($mainQuery -> have_posts()) {
        $mainQuery->the_post();
        if(get_the_post_type() =='post' OR  get_the_post_type() =='page ') {
            array_push($mainResults['generalInfo'], array(
            'title'=>get_the_title(),
            'permalink' =>get_the_permalink()
        ));  
        }
        if(get_the_post_type() =='professor')  {
            array_push($mainResults['professors'], array(
            'title'=>get_the_title(),
            'permalink' =>get_the_permalink()
        ));  
        }
        if(get_the_post_type() =='program')  {
            array_push($mainResults['programs'], array(
            'title'=>get_the_title(),
            'permalink' =>get_the_permalink()
        ));  
        }
        if(get_the_post_type() =='campus' ) {
            array_push($mainResults['campuses'], array(
            'title'=>get_the_title(),
            'permalink' =>get_the_permalink()
        ));  
        }
        if(get_the_post_type() =='event')  {
            array_push($mainResults['events'], array(
            'title'=>get_the_title(),
            'permalink' =>get_the_permalink()
        ));  
        }
      
    }

    return $mainResults;
}