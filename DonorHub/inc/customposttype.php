<?php
defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");

add_action('init','donation_post');
function donation_post(){
    register_post_type('Donations',array(
        'label'=>'DonorHub',

        'labels'=>array( 
            'all_items'=>'All Campains',
            'add_new_item'=>__('Add New Campain','Donations'),
        ),

        'menu_position'=>22,
        'capability_type'=>'post',
        'show_ui'=>true,
        'public'=>true,
        'description'=>'Donations Custom Post Type',
        'supports'=>['title','editor','custom_fields'],
    ));
}
add_filter("template_include",'donor_templates');
function donor_templates($template){
    global $post;
    if(is_single() AND $post->post_type=='donor_post'){
        $template=Plugin_Path.'templates/donor_post.php';
    }
    return $template;
}