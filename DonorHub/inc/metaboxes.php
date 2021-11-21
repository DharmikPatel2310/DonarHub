<?php
defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");  

add_action('admin_init',function(){
    add_meta_box('mymetaboxe1',"My First Metabox",'custom_metabox1',['post','page']);
});
function custom_metabox1($post){
    $postvalue=get_post_meta($post->ID,'postvalue',true)?get_post_meta($post->ID,'postvalue',true):'';//true because this func return one vlaue instead of array
    ?>
    <input id="" class="" name="postvalue" value="<?php echo $postvalue;?>" />
    <?php
}

add_action('save_post','metaboxsave');
function metaboxsave($postid){
    if(array_key_exists('postvalue',$_POST)){
        update_post_meta($postid,'postvalue',$_POST['postvalue']);
    }
}