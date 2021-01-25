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
	
	vc_map(array(
		
		"name" => __("Second Section", "themx"),
		"description" => "This Is Our Second Addons",
		"base" => "section_two_base",
		"category" => "Themx",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
			array(
			
				'type'=>'param_group',
				'value'=>'',
				'heading'=>esc_html__('Service','themx'),
				'param_name'=>'theme_group_service',
				'group'=>esc_html__('Service','themx'),
				'params'=>array(
					
					array(
						
						'param_name'=>'service_icon',
						'type'=>'iconpicker',
						'heading'=>esc_html__('Service Icon','themx'),
						'settings'=>array(
							
							'emptyIcon'=>true,
							'IconPerPage'=>50,
							'type'=>'flaticon',
						),
					),
					
					array(
						
						'param_name'=>'service_title',
						'type'=>'textfield',
						'heading'=>esc_html__('Service Title','themx'),
					
					),
					
					array(
						
						'param_name'=>'service_desc',
						'type'=>'textarea',
						'heading'=>esc_html__('Service Description','themx'),
					
					),
				
				),
			
			),
		),
	
	));
	
		vc_map(array(
		
		"name" => __("Pricing Section", "themx"),
		"description" => "This Is Our Pricing Addons",
		"base" => "pricing_section",
		"category" => "Themx",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
			array(
			
				'type'=>'param_group',
				'value'=>'',
				'heading'=>esc_html__('Pricing','themx'),
				'param_name'=>'pricing_gr_one',
				'group'=>esc_html__('Pricing','themx'),
				'params'=>array(

					
					array(
						
						'param_name'=>'pricing_title',
						'type'=>'textfield',
						'heading'=>esc_html__('Pricing Title','themx'),
					
					),
					
					array(
						
						'param_name'=>'pricing_icon',
						'type'=>'iconpicker',
						'heading'=>esc_html__('Pricing Icon','themx'),
					
					),
					
					array(
						
						'param_name'=>'pricing_amount',
						'type'=>'textfield',
						'heading'=>esc_html__('Pricing Amount','themx'),
					
					),
					
					array(
						
						'param_name'=>'pricing_plan',
						'type'=>'textfield',
						'heading'=>esc_html__('Pricing Plan','themx'),
					
					),
					
					array(
					'type' 			=> 'param_group',
					'heading' 		=> __('Package List', 'themex'),
					'param_name' 	=> 'pricing_gr_two',
					'params'  =>array(
					
						array(
							'type' 			=> 'textfield',
							'heading' 		=> __('Package Name', 'themex'),
							'value'			=> __('', 'themex'),
							'param_name' 	=> 'price_list_name',
						
						),	
					)),
				
				),
			
			),
		),
	
	));
	
	
	
	vc_map(array(
		
		"name" => __("Testimonial Section", "themx"),
		"description" => "This Is Our Testimonial Addons",
		"base" => "testimonial_section",
		"category" => "Themx",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
			array(
			
				'type'=>'param_group',
				'value'=>'',
				'heading'=>esc_html__('Testimonial','themx'),
				'param_name'=>'testimonial_group',
				'group'=>esc_html__('Testimonial','themx'),
				'params'=>array(
					
					array(
						
						'param_name'=>'testi_title',
						'type'=>'textarea',
						'heading'=>esc_html__('Testimonial Title','themx'),
					
					),
					
					array(
						
						'param_name'=>'testi_image',
						'type'=>'attach_image',
						'heading'=>esc_html__('Testimonial Image','themx'),
					
					),
					
					array(
						
						'param_name'=>'testi_name',
						'type'=>'textfield',
						'heading'=>esc_html__('Testimonial Name','themx'),
					
					),
					
					array(
						
						'param_name'=>'testi_desig',
						'type'=>'textfield',
						'heading'=>esc_html__('Designation Name','themx'),
					
					),
				
	))
	),
));



 vc_map(array(
 'name'=>'Portfolio Section',
 'description'=>'This is Portfolio',
 'base'=>'portfolio_section',
 'category'=>'Themx',
 'icon'=> get_template_directory_uri().'/images/favicon.ico',
 'params'=>array(
 
     array(
	 'param_name'=>'portfolio_post_per_page',
	 'heading'=>'Post Per Page',
	 'type'=>'textfield', 
	 )

   )
 
 ));
 
 	// Contact Form 7
	
	
	vc_map(array(

	'name'=>'Contact Form',
	'description'=>'This Is Our Contact Form Addon',
	'base'=>'cf_7',
	'category'=>'Themx',
	'icon'=>get_template_directory_uri().'/images/favicon.ico',
	'params'=>array(
	
			    array(
				'type' 			=> 'textarea_html',
				'heading' 		=> __('Title', 'themex'),
				'param_name' 	=> 'content',	
			),			
     	),
	));
	
		// Mailchimp
	
    vc_map(array(

	'name'=>'Mailchimp',
	'description'=>'This Is Our Addon',
	'base'=>'mailchimp',
	'category'=>'Themx',
	'icon'=>get_template_directory_uri().'/images/favicon.ico',
	'params'=>array(
	
			    array(
				'type' 			=> 'textarea_html',
				'heading' 		=> __('Shortcode', 'themex'),
				'param_name' 	=> 'content',	
			),	
			
			
     	),
	
	));
}
add_action('vc_before_init','themx_intrigation');


	vc_map(
		array(
			'name'	=> esc_html__( 'Blog Style', 'themx' ),
			'description'	=> esc_html__( 'Three column blog without image', 'themx' ),
			'base' => 'home_digital_blog',
			'category'	=> esc_html__( 'Themx', 'themx' ),
			'icon'			=> get_template_directory_uri(). '/assets/images/vc_logo.jpg',
			'params' => array(	
				array(
					'type'        => 'textfield',
					'admin_label' => true,
					'heading'     => esc_html__( 'Post per page ', 'themx' ),
					'param_name'  => 'blog_1_pst_num',
					'value'       => 3,
					'description'	=> esc_html__( 'Set the number of post showed in per page  ', 'themx' ),
				),
				array(
					'param_name'	=> 'section_title',
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Section title', 'themx' ),
					),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Section title color', 'themx' ),
					'param_name'  => 'section_title_clr',
					'value'       => '#404040',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Background color', 'themx' ),
					'param_name'  => 'bg_color',
					'value'       => '#ffffff',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Background hover color', 'themx' ),
					'param_name'  => 'bg_hvr_color',
					'value'       => '#0084b4',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Blog title color', 'themx' ),
					'param_name'  => 'blog_title_color',
					'value'       => '#4a4a4a',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Blog content color', 'themx' ),
					'param_name'  => 'blog_content_color',
					'value'       => '#999999',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Blog post time color', 'themx' ),
					'param_name'  => 'blog_time_color',
					'value'       => '#767575',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Category text color', 'themx' ),
					'param_name'  => 'blog_category_txt',
					'value'       => '#ffffff',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Category text hover color', 'themx' ),
					'param_name'  => 'blog_category_txt_hvr',
					'value'       => '#ffffff',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Category background color', 'themx' ),
					'param_name'  => 'blog_category_bg',
					'value'       => '#0084b4',
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Category background hover color', 'themx' ),
					'param_name'  => 'blog_category_bg_hv',
					'value'       => '#252525',
				),
				array(
					'param_name'	=> 'blog_1_read_more',
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Change Read More Text', 'themx' ),
					'value'		=> esc_html__( 'Read more', 'themx' ),
					),
				)
			)
		);

?>