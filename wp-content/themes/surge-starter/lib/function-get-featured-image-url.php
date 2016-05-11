<?php
/*=========================================
=         get featured image url            =
=========================================*/
//Call inside the loop

function get_featured_image($id = NULL, $size = 'full'){
	if(NULL != $id){
		$thumb_id = get_post_thumbnail_id($id);
	} else {
		$thumb_id = get_post_thumbnail_id();
	}
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, $size, true);
	$thumb_url = $thumb_url_array[0];
	return $thumb_url;
}
function is_default($url){
	if (strpos($url, 'wp-include') !== false) {
    return true;
	} else{
		return false;
	}
}