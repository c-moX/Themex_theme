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


function themx_pricing_section($attr){
	
	extract(
		shortcode_atts(array(
		
			'pricing_gr_one'=>'',
			'pricing_gr_two'=>'',
			
		),$attr)
	);
	
	ob_start();
	?>
        <div class="service_page_twO pricing_table_digital">
            <div class="container">
                <div class="row">
                    <div class="pricing_table_LIst pricing_table_digital">
					
						<?php 
						
						$pricing_gr_one = vc_param_group_parse_atts($pricing_gr_one);
						if($pricing_gr_one){
							
							foreach($pricing_gr_one as $p_key => $p_value){ ?>
								
							<div class="col-md-4 col-sm-6">
								<div class="single_price_item_e text-center wow fadeInUp" data-wow-delay="300ms">
									<h3><?php echo esc_html($p_value['pricing_title']);?></h3>
									<hr class="hr_top">
									<p><i class="<?php echo esc_html($p_value['pricing_icon']);?>"></i> <b><?php echo esc_html($p_value['pricing_amount']);?></b> /<?php echo esc_html($p_value['pricing_plan']);?> </p>
									<hr class="hr_bottom">
									<ul class="pricing_list_thex">
										<?php 
										
										$pricing_gr_two = vc_param_group_parse_atts($p_value['pricing_gr_two']);
										if($pricing_gr_two){
											
											foreach($pricing_gr_two as $p_list_key=>$p_list_value){?>
												
												<li><?php echo $p_list_value['price_list_name'];?></li>
												
											<?php } } ?>										
									</ul>
									<a href="#" class="order_now_s_price">Order Now</a>
								</div>
							</div><!-- col-md-4 -->
							<?php } } ?>
					



                    </div>
                </div>
            </div>
        </div>
	<?php
	return ob_get_clean();
	
}
add_shortcode('pricing_section','themx_pricing_section');


function themx_testimonial_section($attr){
	
	extract(
		shortcode_atts(array(
		
			'testimonial_group'=>'',

		),$attr)
	);
	
	ob_start();
	?>
		
        <div class="testimomnial_section_start_up">
            <div class="container">
                <div class="section_title_digitaL text-center">
                    <h3>Happy Clients</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_digital owl-carousel">
							<?php 
								$testimonial_group = vc_param_group_parse_atts($attr['testimonial_group']);
								$i = 0;
								if($testimonial_group){
									foreach($testimonial_group as $testi_key=>$testi_value){ ?>							
									<div class="item <?php if(!$i){ echo esc_html__( 'active', 'themx' ); }else{ echo esc_html__( ' ', 'themx' ); }?>">
										<div class="sinfle_item_t_s_up text-center">
											<p class="testimonial_start_up_details"><?php echo esc_html($testi_value['testi_title']);?></p>
											
											<?php 
											$testi_image = wp_get_attachment_image_src($testi_value['testi_image'], 'full');
											?>
											
											<div class="pic_s_up">
												<img src="<?php echo esc_url($testi_image[0]);?>" alt="">
											</div>
											<h4 class="start_up_details_admin_tess"><?php echo esc_html($testi_value['testi_name']);?> - <a href="#"><?php echo esc_html($testi_value['testi_desig']);?></a></h4>
										</div>
									</div>
									<?php $i++;} } ?>
                        </div>
                    </div>
                </div><!--.row-->
            </div><!--.container-->
        </div><!--.testimomnial_section_start_up-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('testimonial_section','themx_testimonial_section');


function themx_portfolio_section($attr){
	
	extract(
		shortcode_atts(array(
		
			'portfolio_post_per_page'=>'',

		),$attr)
	);
	
	ob_start();
	?>
		
       	<div class="portfolio2_h_default">
			<div class="container">
			 <div class="default_section_titLe text-center">
			  <h3>Latest Works</h3>
			 </div>
			</div>
			<div class="home_default_masonery_menu_menu text-center">
			 <div class="title">ALL</div>
			 <div class="toggle">
			  <a class="active" data-filter="*">Show All</a>
			  
			  <?php 
			  
					$terms = get_terms( 'Portfolio' );
					foreach($terms as $term){ ?>
						<a data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
					<?php } ?>
			 </div>
			</div>
			<div class="full_width_masonery-container text-center">
			 <div class="full_width_masonery-sizer"></div>
				
				<?php 
				
					$themx_portfolio_post= new WP_Query(
					  array(
					  'post_type'=>'portfolio',
					  'taxonomy'=>'Portfolio',
					  'post_per_page'=>$portfolio_post_per_page,
					  ));
					  
					  if($themx_portfolio_post->have_posts()):while($themx_portfolio_post->have_posts()):$themx_portfolio_post->the_post();
					  
				?>
				
				 <?php
					  
					  $port_meta_var= get_post_meta(get_the_ID(), '_portfolio_setting', true );
					  
					  $terms = get_the_terms( get_the_ID(), 'Portfolio' );
                         
						if ( $terms && ! is_wp_error( $terms ) ) : 
						 
							$draught_links = array();
						 
							foreach ( $terms as $term ) {
								$draught_links[] = $term->slug;
							}
												 
							$on_draught = join( " ", $draught_links );
											  
					
					 ?>
			 
				 <div class="full_width_masonery-item full_width_masonery-item--<?php echo $port_meta_var['port_image_size'];?><?php echo $on_draught;?>">
				  <a href="#">
				   <div class="portfolio_preview_single_1">
					<?php the_post_thumbnail();?>
					<div class="portfolio_preview_OverLy">
					 <div class="overlay_table_default_p_home">
					  <div class="overlay_table_cell_default_p_home">
					   <h3>Creative Design</h3>
					   <p>Brandings UI / UX</p>
					  </div>
					 </div>
					</div>
				   </div>
				  </a>
				 </div><!--full_width_masonery-item-->
				<?php endif; ?>
					
				<?php endwhile; endif; ?>
			
			</div><!--.full_width_masonery-container-->
	   </div><!--.portfolio2-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('portfolio_section','themx_portfolio_section');
?>