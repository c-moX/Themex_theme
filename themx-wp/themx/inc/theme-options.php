<?php 

function themx_intrigation(){
/*-----------------------------------------------------------------------
	                               //HOME PAGE 
---------------------------------------------------------------------------*/
	
	/* First Section About */
	//--------------------------
	vc_map(array(
		
		"name" => __("About (01)", "themx"),
		"description" => "This Is Our First Addons",
		"base" => "section_one_base",
		"category" => "Themx  (HM)",
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
			
				'param_name'=>'theme_group',
				'type'=>'param_group',
				'group'=>esc_html__('progress bar','themx'),
				'heading'=>esc_html__('Progress customaization', 'themx'),
				'value'=>'',
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
	
	/* Second Section Services */
	//------------------------------
	vc_map(array(
		
		"name" => __("Services (02)", "themx"),
		"description" => "This Is Our Second Addons",
		"base" => "section_two_base",
		"category" => "Themx  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
			array(
			
				'param_name'=>'theme_group_service',
				'type'=>'param_group',
				'group'=>esc_html__('Service','themx'),
				'heading'=>esc_html__('Service','themx'),
				'value'=>'',
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
	
	/* Three Section Experiance */
    //------------------------------
	vc_map(array(
        'name'=>'Experiance (03)',
        'description'=>'This is Experiance',
        'base'=>'experiance_section',
        'category'=>'Themx  (HM)',
        'icon'=> get_template_directory_uri().'/images/favicon.ico',
        'params'=>array(
 
            array(
			
				'param_name'=>'theme_group_experiance',
				'type'=>'param_group',
				'group'=>esc_html__('Experiance','themx'),
				'heading'=>esc_html__('Experiance customaization','themx'),
				'value'=>'',
				'params'=>array(
					
					array(
						
						'param_name'=>'experiance_icon',
						'type'=>'iconpicker',
						'heading'=>esc_html__('Experiance Icon','themx'),
						'settings'=>array(
							
							'emptyIcon'=>true,
							'IconPerPage'=>50,
							'type'=>'flaticon',
						),
					),
					
					array(
						
						'param_name'=>'experiance_amount',
						'type'=>'textfield',
						'heading'=>esc_html__('Experiance Amount','themx'),
						'value'=>'your amount here',
					
					),
					
					array(
						
						'param_name'=>'experiance_desc',
						'type'=>'textarea',
						'heading'=>esc_html__('Experiance Description','themx'),
						'value'=>'your description here',
					
					),
				
				),
			
			),			
		)
	));
	
	/* Four Section Portfolio */
    //------------------------------
    vc_map(array(
        'name'=>'Portfolio (04)',
        'description'=>'This is Portfolio',
        'base'=>'portfolio_section',
        'category'=>'Themx  (HM)',
        'icon'=> get_template_directory_uri().'/images/favicon.ico',
        'params'=>array(
 
            array(
	            'param_name'=>'portfolio_post_per_page',
				'type'=>'textfield', 
	            'heading'=>'Post Per Page',
	        )
        )
    ));
	
	/* Five Section Testimonial */
	//-------------------------------
	vc_map(array(
		
		"name" => __("Testimonial (05)", "themx"),
		"description" => "This Is Testimonial Addons",
		"base" => "testimonial_section",
		"category" => "Themx  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
		    array(
			    'param_name'=>'tesiti_headerr',
			    'type'=>'textfield',
			    'heading'=>'Header Title',
			    'value'=>'Header text...',
			),
		
			array(
			
				'param_name'=>'testimonial_group',
				'type'=>'param_group',
				'group'=>esc_html__('Testimonial', 'themx'),
				'heading'=>esc_html__('Testimonial customaization', 'themx'),
				'value'=>'',
				'params'=>array(
					
					array(
						
						'param_name'=>'testi_title',
						'type'=>'textarea',
						'heading'=>esc_html__('Testimonial Title','themx'),
						'value'=>'',
					
					),
					
					array(
						
						'param_name'=>'testi_image',
						'type'=>'attach_image',
						'heading'=>esc_html__('Testimonial Image','themx'),
						'value'=>'',
					
					),
					
					array(
						
						'param_name'=>'testi_name',
						'type'=>'textfield',
						'heading'=>esc_html__('Testimonial Name','themx'),
						'value'=>'',
					
					),
					
					array(
						
						'param_name'=>'testi_desig',
						'type'=>'textfield',
						'heading'=>esc_html__('Designation Name','themx'),
						'value'=>'',
					
					),
	            )
			)
	    ),
    ));
	
	/* Six Section Pricing */
	//--------------------------
	vc_map(array(
		
		"name" => __("Pricing (06)", "themx"),
		"description" => "This Is Our Pricing Addons",
		"base" => "pricing_sectionn",
		"category" => "Themx  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" =>array(
		
			array(
			    'param_name'=>'pricing_gr_one',
				'type'=>'param_group',
				'group'=>esc_html__('Pricing', 'themx'),
				'heading'=>esc_html__('Pricing customaization', 'themx'),
				'params'=>array(
			
			        array(
				        'param_name'=>'pricing_title',
				        'type'=>'textfield',
				        'heading'=>'Pricing title',
				        'value'=>'',
				    ),
					
					array(
				        'param_name'=>'pricing_icon',
				        'type'=>'iconpicker',
				        'heading'=>'Pricing icon',
				        'value'=>'',
				    ),
					
					array(
				        'param_name'=>'pricing_amount',
				        'type'=>'textarea',
				        'heading'=>'Pricing amount',
				        'value'=>'',
				    ),
					
					array(
				        'param_name'=>'pricing_plan',
				        'type'=>'textarea',
				        'heading'=>'Pricing plan',
				        'value'=>'',
				    ),
					
					//----------Package List ---------//
					array(
					    'param_name'=>'pack_list1',
				        'type'=>'textarea',
				        'heading'=>'Package list 1',
				        'value'=>'',
					),
					array(
					    'param_name'=>'pack_list2',
				        'type'=>'textarea',
				        'heading'=>'Package list 2',
				        'value'=>'',
					),
					array(
					    'param_name'=>'pack_list3',
				        'type'=>'textarea',
				        'heading'=>'Package list 3',
				        'value'=>'',
					),
					array(
					    'param_name'=>'pack_list4',
				        'type'=>'textarea',
				        'heading'=>'Package list 4',
				        'value'=>'',
					),
					array(
					    'param_name'=>'pack_list5',
				        'type'=>'textarea',
				        'heading'=>'Package list 5',
						'description'	=> esc_html__( 'Do not set the expair package of your offer in list', 'themx' ),
				        'value'=>'',
					),
					
					//-------- Cross Package -------//
					array(
					    'param_name'=>'pack_cross',
				        'type'=>'textarea',
				        'heading'=>'Expair package',
						'description'	=> esc_html__( 'Set the expair package of your offer in list', 'themx' ),
				        'value'=>'',
					),
				),
			),
		),
	
	));
	
	/* Seven Section Blog */
    //------------------------------
	vc_map(
		array(
			'name'	=> esc_html__( 'Blog Post', 'themx' ),
			'description'	=> esc_html__( 'Three column blog + image', 'themx' ),
			'base' => 'home_digital_blog',
			'category'	=> esc_html__( 'Themx  (HM)', 'themx' ),
			"icon" => get_template_directory_uri()."/images/favicon.ico",
			'params' => array(	
			
				array(
				    'param_name'  => 'blog_1_pst_num',
					'type'        => 'textfield',
					'admin_label' => true,
					'heading'     => esc_html__( 'Post per page ', 'themx' ),
					'description'	=> esc_html__( 'Set the number of post showed in per page', 'themx' ),
					'value'       => 3,
				),
				array(
					'param_name'	=> 'section_title',
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Section title', 'themx' ),
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Category text color', 'themx' ),
					'param_name'  => 'blog_category_txt',
					'value'       => '#ffffff',
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
	
	/* Eight Section Subscribe */
    //------------------------------
	vc_map(array(
        'name'=>'Subscribe (08)',
        'description'=>'This is Subscribe',
        'base'=>'subscribe_section',
        'category'=>'Themx  (HM)',
        'icon'=> get_template_directory_uri().'/images/favicon.ico',
        'params'=>array(
		
		    array(
			    'param_name'=>'subscribe_grp',
				'type'=>'param_group',
				'group'=>esc_html__('Subscribe','themx'),
				'heading'=>esc_html__('Subscribe customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
					    'param_name'=>'subscribe_title',
			            'type'=>'textfield',
			            'heading'=>'Subscribe title',
			            'value'=>'',
					),
					
					array(
			            'param_name'=>'subscribe_desc',
			            'type'=>'textarea',
			            'heading'=>'Subscribe description',
			            'value'=>'',
			        ),
				),	
			),
		),
	));
	
	/* Nine Section Company */
    //------------------------------
	vc_map(array(
        'name'=>'Company (09)',
        'description'=>'This is Company',
        'base'=>'company_section',
        'category'=>'Themx  (HM)',
        'icon'=> get_template_directory_uri().'/images/favicon.ico',
        'params'=>array(
 
            array(
			    'param_name'=>'company_grps',
				'type'=>'param_group',
				'group'=>esc_html__('Company','themx'),
				'heading'=>esc_html__('Company customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
					    'param_name'=>'companny_img',
					    'type'=>'attach_image',
					    'heading'=>esc_html__('Add image', 'themx'),
					    'value'=>'',
						
					),
				),
			),	
		),
	));

/*------------------------------------------------------------------------
							//ABOUT PAGE
-------------------------------------------------------------------------*/

    // About section one-1  
	//----------------------
	vc_map(array(

	    'name'=>'About section (1)',
	    'description'=>'This Is About Section One',
	    'base'=>'about_grp_one',
	    'category'=>'About  (tmx)',
	    'icon'=>get_template_directory_uri().'/images/favicon1.ico',
	    'params'=>array(
		
		    array(
			    'param_name'=>'about_title',
			    'type'=>'textfield',
			    'heading'=>esc_html__('About title', 'themx'),
			    'value'=>'title text...',
			),
			array(
			    'param_name'=>'about_desc',
			    'type'=>'textarea',
			    'heading'=>esc_html__('About description', 'themx'),
			    'value'=>'description text...',
			),
		
			array(
			    'param_name'=>'serviis_grps',
			    'type'=>'param_group',
				'group'=>esc_html__('Services','themx'),
				'heading'=>esc_html__('Service customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
				        'param_name'=>'serviss_icon',
				        'type'=>'iconpicker',
				        'heading'=>'Add icon',
					),
					array(
				        'param_name'=>'serv_title',
				        'type'=>'textfield',
				        'heading'=>'Add icon title',
				        'value'=>'',
			        ),
			    ),
			),
					
			array(
			    'param_name'=>'sliderr_grps',
			    'type'=>'param_group',
				'group'=>esc_html__('Slider','themx'),
				'heading'=>esc_html__('Slider customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
					    'param_name'=>'slid_img',
					    'type'=>'attach_images',
					    'heading'=>esc_html__('Add images', 'themx'),
						'description'=>'Adding must be 3 images!',
					    'value'=>'',
						
					),
				),
			),			
     	),
	));
	
	// About section two-2
	//-----------------------
	vc_map(array(

	    'name'=>'About section (2)',
	    'description'=>'This Is About section two',
	    'base'=>'about_grp_two',
	    'category'=>'About  (tmx)',
	    'icon'=>get_template_directory_uri().'/images/favicon1.ico',
	    'params'=>array(
		
		    // Section one //
			array(
			    'param_name'=>'svis_img',
			    'type'=>'attach_image',
			    'heading'=>'Add service image 1',
			    'value'=>'',
			),
			array(
			    'param_name'=>'svis_title',
			    'type'=>'textfield',
			    'heading'=>'Title of service group1',
			    'value'=>'',
			),
			
			// Section two //
			array(
			    'param_name'=>'skll_img',
			    'type'=>'attach_image',
			    'heading'=>'Add skill image 2',
			    'value'=>'',
			),
			array(
			    'param_name'=>'skll_title',
			    'type'=>'textfield',
			    'heading'=>'Title of skill group 2',
			    'value'=>'',
			),
			
			
			//------------ Group one ----------//
			array(
			    'param_name'=>'custom_svis_grp',
			    'type'=>'param_group',
				'group'=>esc_html__('Services','themx'),
				'heading'=>esc_html__('Service customaization','themx'),
				'params'=>array(
				    
					array(
					    'param_name'=>'custom_ser_icon',
				        'type'=>'iconpicker',
				        'heading'=>'Add icon',
				        'value'=>'',
					),
					array(
					    'param_name'=>'custom_ser_title',
				        'type'=>'textfield',
				        'heading'=>'Title of icon',
				        'value'=>'',
					),
					array(
					    'param_name'=>'custom_ser_descrip',
				        'type'=>'textarea',
				        'heading'=>'Description of group',
				        'value'=>'',
					),
				),
			),
			
			//------------- Group two ----------------//
			array(
			
				'param_name'=>'custom_skill_grp',
				'type'=>'param_group',
				'group'=>esc_html__('progress','themx'),
				'heading'=>esc_html__('Progress bar customaization', 'themx'),
				'value'=>'',
				'params'=>array(
					
					array(
						
						'param_name'=>'prog_skll_title',
						'type'=>'textfield',
						'heading'=>esc_html__('Progress Title','themx'),
						'value'=>'',
					),
					array(
						
						'param_name'=>'prog_skll_amount',
						'type'=>'textfield',
						'heading'=>esc_html__('Progress Amount','themx'),
						'value'=>'',
					),
				),
			
			),
			
		),
	));
	
	/* About teams section */
    //------------------------------
	vc_map(array(
        'name'=>'Teams (03)',
        'description'=>'This Is Team Section',
        'base'=>'teams_grp_ptn',
        'category'=>'About  (tmx)',
        'icon'=> get_template_directory_uri().'/images/favicon1.ico',
        'params'=>array(
		
		    array(
				'param_name'=>'hedar_title',
				'type'=>'textfield',
				'heading'=>'Header of teams',
				'description'=>'This is must be used your headar!',
			    'value'=>'text...',
			),
 
            array(
			    'param_name'=>'temm_grps',
				'type'=>'param_group',
				'group'=>esc_html__('Hover','themx'),
				'heading'=>esc_html__('Team customaization','themx'),
				'params'=>array(
				
				    array(
					    'param_name'=>'team_img',
					    'type'=>'attach_image',
					    'heading'=>esc_html__('Add image (main)', 'themx'),
					    'value'=>'',
						
					),
					array(
					    'param_name'=>'team_titlee',
					    'type'=>'textfield',
					    'heading'=>esc_html__('Person name (hover)', 'themx'),
					    'value'=>'',
						
					),
					array(
					    'param_name'=>'creative_team',
					    'type'=>'textarea',
					    'heading'=>esc_html__('Add experiance (hover)', 'themx'),
					    'value'=>'',
						
					),
					//--- Social icons ---//
					array(
						'param_name'=>'title_icon1',
						'type'=>'iconpicker',
						'heading'=>'Facebook',
						'value'=>'',
					),
					array(
						'param_name'=>'title_link1',
						'type'=>'textarea',
						'heading'=>'Facebook link',
						'value'=>'',
					),
					
					array(
						'param_name'=>'title_icon2',
						'type'=>'iconpicker',
						'heading'=>'Twitter',
						'value'=>'',
					),
					array(
						'param_name'=>'title_link2',
						'type'=>'textarea',
						'heading'=>'Twitter link',
						'value'=>'',
					),
					
					array(
						'param_name'=>'title_icon3',
						'type'=>'iconpicker',
						'heading'=>'Linkdin',
						'value'=>'',
					),
					array(
						'param_name'=>'title_link3',
						'type'=>'textarea',
						'heading'=>'Linkdin link',
						'value'=>'',
					),
					
					array(
						'param_name'=>'title_icon4',
						'type'=>'iconpicker',
						'heading'=>'Instagram',
						'value'=>'',
					),
					array(
						'param_name'=>'title_link4',
						'type'=>'textarea',
						'heading'=>'Instagram link',
						'value'=>'',
					),
					
				),
			),	
		),
	));
	
	/* About companny section */
    //------------------------------
	vc_map(array(
        'name'=>'ACompany (04)',
        'description'=>'This is ACompany sex',
        'base'=>'abt_compny_grp_ptn',
        'category'=>'About  (tmx)',
        'icon'=> get_template_directory_uri().'/images/favicon1.ico',
        'params'=>array(
 
            array(
			    'param_name'=>'company_grps_about',
				'type'=>'param_group',
				'group'=>esc_html__('ACompany','themx'),
				'heading'=>esc_html__('ACompany customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
					    'param_name'=>'companny_about_img',
					    'type'=>'attach_image',
					    'heading'=>esc_html__('Add image', 'themx'),
					    'value'=>'',
						
					),
				),
			),	
		),
	));

/*------------------------------------------------------------------------
							//BLOG PAGE
-------------------------------------------------------------------------*/

    // Name of blog sex  
	//-------------------
	vc_map(array(

	    'name'=>'Blog Post',
	    'description'=>'This Is Blog Post Addon',
	    'base'=>'blog_grp_one',
	    'category'=>'Blog  (tmx)',
	    'icon'=>get_template_directory_uri().'/images/favicon.icon',
	    'params'=>array(
	
			array(
			    'param_name'=>'blog_grps',
			    'type'=>'param_group',
				'group'=>esc_html__('Blog','themx'),
				'heading'=>esc_html__('Blog customaization','themx'),
				'value'=>'',
				'params'=>array(
				
				    array(
					    'param_name'=>'blog_post',
					    'type'=>'textfield',
					    'heading'=>esc_html__('Blog title', 'themx'),
					    'value'=>'',
						
					),
				),
			),			
     	),
	));

/*------------------------------------------------------------------------
							//CONTACT PAGE
-------------------------------------------------------------------------*/
 
	// Contact Form 7 
	//-----------------
	vc_map(array(

	'name'=>'Contact Form',
	'description'=>'This Is Contact Form Addon',
	'base'=>'contact_grp_one',
	'category'=>'Contact  (tmx)',
	'icon'=>get_template_directory_uri().'/images/favicon1.ico',
	'params'=>array(
	
			array(
				'param_name'=>'email_address',
				'type'=>'textfield',
				'group'=>__('Contact Info', 'themx'),
				'heading'=>__( ' Add your contact information here!<br><br>E-mail', 'themx' ),
				'value'=> 'admin123@gmail.com',
		    ),
			
            array(
				'param_name'=>'phone_no_one',
				'type'=>'textfield',
				'group'=>__('Contact Info', 'themx'),
				'heading'=> 'Mobile phone no',
				'value'=> 01700000052,
		    ),
			array(
				'param_name'=>'phone_no_two',
				'type'=>'textfield',
				'group'=>__('Contact Info', 'themx'),
				'heading'=>'Land phone no',
				'value'=> 12345,
		    ),
			
            array(
				'param_name'=>'location_address',
				'type'=>'textarea',
				'group'=>__('Contact Info', 'themx'),
				'heading'=> 'Location',
				'value'=> 'Themex Park, Hello world 88, Orchard St New York',
		    ),
			
			//Contact Form 7 Shortcode 
		    array(
			    'param_name' 	=> 'content',	
			    'type' 			=> 'textarea_html',
				'group'=>__('Contact Form 7', 'themx'),
			    'heading' 		=> 'Contact form 7 shortcode here!',
				'value'=>'Your contact form 7 shortcode past here!',
		    ),
	    ),
	));
	
	// gmap section 
	//---------------
    vc_map(array(

	'name'=> __( 'Google Map', 'themx'),
	'description'=> __('Edit Google Map', 'themx'),
	'base'=> 'contact_gmap',
	'category'=> __('Contact  (tmx)', 'themx'),
	'admin_enqueue_js'=> array(get_template_directory_uri().'/assets/js/gmaps.js'),
	'icon'=> get_template_directory_uri().'/images/favicon1.ico',
	'params'=>array(
	
	// Map Center // 
	    array(
		    'param_name'=>'map_center_lat',
		    'type'=>'textfield',
			'group'=>__('Map Center', 'themx'),
		    'heading'=>__( ' Note: It should be \'Country Name\' of center/main branch!<br><br>Latitute', 'themx' ),
		    'value'=> 1.3581617,
		),
        array(
		    'param_name'=>'map_center_lan',
		    'type'=>'textfield',
		    'group'=>__('Map Center', 'themx'),
			'heading'=> 'Longitute',
		    'value'=> 103.9090659,
		),
        array(
		    'param_name'=>'map_zoom_pstn',
		    'type'=>'textfield',
		    'group'=>__('Map Center', 'themx'),
			'heading'=> 'Map zoom position',
		    'value'=> 13,
		),
		
    // Add Branch Group // 
        array(
		    'param_name'=>'google_branch_grp',
		    'type'=>'param_group',
		    'group'=>__('Add Branch', 'themx'),
			'heading'=>__( 'Note: Add your branch in map!', 'themx' ),
		    'params'=> array(
			    array(
				    'param_name'=>'branch_name',
				    'type'=>'textfield',
				    'heading'=>'Place Name',
				    'value'=>'Dhaka Bangladesh',
				),
				array(
				    'param_name'=>'branch_lat',
				    'type'=>'textfield',
				    'heading'=>'Latitute',
				    'value'=> 23.810331,
				),
				array(
				    'param_name'=>'branch_lan',
				    'type'=>'textfield',
				    'heading'=>'Longitute',
				    'value'=> 90.412521,
				),
				array(
				    'param_name'=>'branch_indecator',
				    'type'=>'attach_image',
				    'heading'=>'Location indecator',
				    'value'=> '',
				),
				
			),
		),
        // Color Option //  
        array(
		    'param_name'=>'textt_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>__( 'Note: Add your color in map!<br><br>Text Color', 'themx' ),
		    'value'=>'',
		),
		array(
		    'param_name'=>'water_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>'Water Color',
		    'value'=>'',
		),
		array(
		    'param_name'=>'landscape_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>'Landscape Color',
		    'value'=>'',
		),
		array(
		    'param_name'=>'highway_road_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>'Highway Road Color',
		    'value'=>'',
		),
		array(
		    'param_name'=>'local_road_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>'Local Road Color',
		    'value'=>'',
		),
		array(
		    'param_name'=>'extra_clr',
		    'type'=>'colorpicker',
			'group'=>__('Color Option', 'themx'),
		    'heading'=>'Extra Color',
		    'value'=>'',
		),
		
    ),
	
	));
	
	// Mailchimp 
	//------------
    vc_map(array(

	'name'=>'Mailchimp',
	'description'=>'This Is Contact Page',
	'base'=>'mailchimp',
	'category'=>'Contact  (tmx)',
	'icon'=>get_template_directory_uri().'/images/favicon1.ico',
	'params'=>array(
	
			array(
				'param_name' 	=> 'content',	
				'type' 			=> 'textarea_html',
				'heading' 		=> esc_html__('Shortcode', 'themex'),
			),	
			
			
     	),
	
	));
}
add_action('vc_before_init','themx_intrigation');

?>