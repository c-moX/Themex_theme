<?php 

function themx_intrigation(){
	
	vc_map(array(
		
		"name" => __("First Section", "themx"),
		"description" => "This Is Our First Addons",
		"base" => "section_one_base",
		"category" => "Themx",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(
		
			array(
				
				'param_name'=>'first_sec_title',
				'type'=>'textfield',
				'heading'=>'Section First Title',
				'value'=>'Write a title',
			
			),
			
			array(
				
				'param_name'=>'first_sec_des',
				'type'=>'textarea',
				'heading'=>'Section First Description',
				'value'=>'Write Your Description',
			
			),
			
			array(
				
				'param_name'=>'first_sec_title_color',
				'type'=>'colorpicker',
				'heading'=>'Select Your Title Color',
			
			),
			
			array(
				
				'param_name'=>'first_sec_image',
				'type'=>'attach_image',
				'heading'=>'Select Your Image',
			
			),
		
		),
	
	));
	
}
add_action('vc_before_init','themx_intrigation');
?>