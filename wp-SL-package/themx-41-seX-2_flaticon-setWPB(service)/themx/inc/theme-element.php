<?php 

function themx_section_one($attr){
	
	extract(
		shortcode_atts(array(
		
		'first_sec_title' => '',
		'first_sec_des' => '',
		'first_sec_title_color' => '',
		'first_sec_image' => '',
		'theme_group' =>array(
			'progress_title'=>'',
			'progress_amount'=>'',
			'progress_color'=>'',
			'text_color'=>'',
		),
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="get_in_tuch_skill">
		<div class="container-fluid nopadding">
		<div class="col-md-6 col-sm-6 padding_left">
			<div class="left_image_get_in">
				
				
				<?php 
				
					$first_sec_image_one = wp_get_attachment_image_src($first_sec_image,'full');
					if($first_sec_image_one){ ?>
						
					<img src="<?php echo esc_url($first_sec_image_one[0]);?>">
					<?php }
				
				?>
				
			</div>
		</div><!-- col-md-6  -->

		<div class="col-md-3 col-sm-6">
			<div class="middle_skill_get_in heroo_get_in_tuch">
				<div class="middle_skill_get_in_cell">
					<div class="hero-progress">
					<?php 
					
						 $theme_group = vc_param_group_parse_atts($attr['theme_group']);
						 
						 if($theme_group){
							 
							 foreach($theme_group as $key => $value){ ?>
								 
								<div class="progress-item">
									<p><?php echo esc_html($value['progress_title']);?><span class="pull-right"><?php echo esc_html($value['progress_amount']);?>%</span></p>
									<div class="progress-main"><span class="progress-bar" style="background:<?php echo esc_html($value['progress_color']);?>" data-value="<?php echo esc_html($value['progress_amount']);?>%"></span></div>
								</div><!-- progress-item  -->
							<?php }} ?>	
					</div>
					
				</div><!-- middle_skill_get_in_cell -->
			</div><!-- middle_skill_get_in -->
		</div><!-- col-md-3  -->

		<div class="col-md-3 padding_right col-sm-6">
			<div class="right_skill_get_in_text">
				<div class="right_skill_get_in_text_cell">
					<h3 style="color:<?php echo esc_html($first_sec_title_color);?>"><?php echo esc_html($first_sec_title);?></h3>
					<p><?php echo esc_html($first_sec_des);?></p>
					<a href="#" class="MESSAGE_uS">MESSAGE US</a>
				</div>
			</div>
		</div><!-- col-md-3  -->
	</div><!-- container-fluid  -->
</div><!-- get_in_tuch_skill  -->
		<?php
	
	return ob_get_clean();
	
}
add_shortcode('section_one_base','themx_section_one');





function themx_section_two($attr){
	
	extract(
		shortcode_atts(array(

		'theme_group_service' =>array(
			'service_icon'=>'',
			'service_title'=>'',
			'service_desc'=>'',
		),
		
		),$attr)
	);
	
	ob_start();
	?>
        <div class="service_section_digital">
            <div class="container">
                <div class="row">
                    <div class="service_section_digital_list">
					
					<?php 
					
						$theme_group_service = vc_param_group_parse_atts($theme_group_service);
						if($theme_group_service){
							
							foreach($theme_group_service as $s_key=>$s_value){ ?>
								
							<div class="col-md-3 col-sm-6">
                            <div class="single_service_digitAl text-center">
                                <div class="c_column_digital_text">
                                    <i class="<?php echo esc_attr($s_value['service_icon']);?>"></i>
                                    <h3><a href="#"><?php echo esc_attr($s_value['service_title']);?></a></h3>
                                    <p><?php echo esc_attr($s_value['service_desc']);?></p>
                                </div>
                            </div>  
                        </div><!-- col-md-3  -->
							<?php }} ?>


                    </div><!-- service_section_digital_list  -->
                </div><!-- row  -->
            </div><!-- container  -->
        </div><!-- service_section_digital  -->
	<?php
	return ob_get_clean();
	
}
add_shortcode('section_two_base','themx_section_two');


?>