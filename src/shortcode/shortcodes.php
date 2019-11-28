<?php
namespace antalTettinger\CollapsibleContent\Shortcode;


add_shortcode('qa', __NAMESPACE__ . '\process_the_shortcode');
add_shortcode('teaser', __NAMESPACE__ . '\process_the_shortcode');


function process_the_shortcode($user_defined_attributes, $hidden_content, $shortcode_name) {
    $config = get_faq_shortcode_config($shortcode_name);
    $attributes = shortcode_atts( 
        $config['defaults'], 
        $user_defined_attributes,
        $shortcode_name
    );

    //do code processing

    $attributes['show_icon'] = esc_attr( $attributes['show_icon']);

    if ( $hidden_content ) {
        $hidden_content = do_shortcode( $hidden_content );
    }

    ob_start();
    include( $config['view']) ;
    return ob_get_clean();
}

function get_faq_shortcode_config($shortcode_name){
    $config = array(
        'view' => __DIR__ . '/views/' . $shortcode_name . '.php',
        'defaults' => array(
            'show_icon' => 'dashicons dashicon-arrow-down-alt2',
            'hide_icon' => 'dashicons dashicon-arrow-up-alt2',
        ),
    );

    if( $shortcode_name == 'qa' ){
        $config['defaults']['question'] = '';
    } elseif( $shortcode_name == 'teaser' ) {
        $config['defaults']['visible_message'] = '';
    }
    
    return $config;

}