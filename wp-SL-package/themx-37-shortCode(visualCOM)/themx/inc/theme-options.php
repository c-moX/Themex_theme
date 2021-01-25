<?php 

function shortcode($atts,$content){
	
	extract(shortcode_atts(array(
	
		'color' => 'Black',
		'size' => '25px'
	
	),$atts));

	$content = do_shortcode($content);
	return "<p style='color:".$color." ; font-size:".$size."'>".$content."</p>";
}
add_shortcode('hello','shortcode');

function nested_shortcode($atts,$content){
	
	extract(shortcode_atts(array(
	
		'color' => 'Black',
		'size' => '25px'
	
	),$atts));

	$content = do_shortcode($content);
	return "<p style='color:".$color." ; font-size:".$size."'>".$content."</p>";
}
add_shortcode('shuily','nested_shortcode');
add_filter('widget_text','do_shortcode');

?>