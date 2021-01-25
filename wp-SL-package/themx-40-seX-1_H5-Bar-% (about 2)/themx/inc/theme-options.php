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
			
			array(
			
				'type'=>'param_group',
				'value'=>'',
				'heading'=>esc_html__('progress','themx'),
				'param_name'=>'theme_group',
				'group'=>esc_html__('progress','themx'),
				'params'=>array(
					
					array(
						
						'param_name'=>'progress_title',
						'type'=>'textfield',
						'heading'=>esc_html__('Progress Title','themx'),
					
					),
					
					array(
						
						'param_name'=>'progress_amount',
						'type'=>'textfield',
						'heading'=>esc_html__('Progress Amount','themx'),
					
					),
					
					array(
						
						'param_name'=>'text_color',
						'type'=>'colorpicker',
						'heading'=>esc_html__('Text Color','themx'),
					
					),
				array(
						
						'param_name'=>'progress_color',
						'type'=>'colorpicker',
						'heading'=>esc_html__('Progress Color','themx'),
					
					),
				
				),
			
			),
		
		),
	
	));
	
}
add_action('vc_before_init','themx_intrigation');
?>