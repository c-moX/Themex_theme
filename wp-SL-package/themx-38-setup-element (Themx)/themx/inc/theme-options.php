<?php 

function themx_intrigation(){
	
	vc_map(array(
		
		"name" => __("First Section", "themx"),
		"description" => "This Is Our First Addons",
		"base" => "section_one_base",
		"category" => "Themx",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(),
	
	));
	
}
add_action('vc_before_init','themx_intrigation');
?>