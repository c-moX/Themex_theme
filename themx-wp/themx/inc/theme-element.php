<?php 
/*-------------------------------------------------------------------------
                               //HOME PAGE 
----------------------------------------------------------------------------*/

/* First Section About */
//--------------------------
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
					<a href="<?php the_permalink();?>" class="MESSAGE_uS">MESSAGE US</a>
				</div>
			</div>
		</div><!-- col-md-3  -->
	    </div><!-- container-fluid  -->
    </div><!-- get_in_tuch_skill  -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('section_one_base','themx_section_one');

/* Second Section Services */
//------------------------------
function themx_section_two($attr){
	
	extract(
		shortcode_atts(array(

		'theme_group_service' =>array(
			'service_icon'=>'',
			'service_title'=>'',
			'service_desc'=>'',
		),
		
		), $attr)
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
                                    <h3><a href="<?php the_permalink();?>"><?php echo esc_attr($s_value['service_title']);?></a></h3>
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

/* Three Section Experience */
//-------------------------------
function themx_experiance_section($attr){
	
	extract(
		shortcode_atts(array(
		
		'theme_group_experiance'=>array(
		    'experiance_icon'=>'',
		    'experiance_amount'=>'',
		    'experiance_desc'=>'',
		),
			
		),$attr)
	);
	
	ob_start();
	?>
	    <div class="Counter_section_digital_home">
            <div class="container">
                <div class="numbers_resume_home text-center">
                    <div class="row">
					<?php 
					
						$theme_group_experiance = vc_param_group_parse_atts($theme_group_experiance);
						if($theme_group_experiance){
							
							foreach($theme_group_experiance as $s_key=>$s_value){ ?>
					
                        <div class="number_tem_resume col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/<?php echo get_template_directory_uri();?>/images/flat_img/resume_home_counter_single_01.png" alt=""> -->
                            <i class="<?php echo esc_attr($s_value['experiance_icon']);?>"></i>
                            <span class="counter"><?php echo esc_attr($s_value['experiance_amount']);?></span>
                            <h6><?php echo esc_attr($s_value['experiance_desc']);?></h6>
                        </div><!-- number_tem_resume  -->
						<?php }} ?>
						
                    </div><!--.row-->
                </div><!--.numbers-->
            </div><!--.container-->
        </div><!--.Counter_section_digital_home-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('experiance_section','themx_experiance_section');

/* Four Section Portfolio */
//-------------------------------
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
			 
				 <div class="full_width_masonery-item full_width_masonery-item--<?php echo $port_meta_var['port_image_size'];?><?php echo $on_draught; ?>">
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
				<?php  endif; ?>
				<?php endwhile; endif; ?>
			
			</div><!--.full_width_masonery-container-->
	   </div><!--.portfolio2-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('portfolio_section','themx_portfolio_section');

/* Five Section Testimonial */
//--------------------------------
function themx_testimonial_section($attr){
	
	extract(
		shortcode_atts(array(
		
			'tesiti_headerr'=>'',
			
			'testimonial_group'=>array(
			    'testi_title'=>'',
			    'testi_image'=>'',
			    'testi_name'=>'',
			),

		),$attr)
	);
	
	ob_start();
	?>
		
        <div class="testimomnial_section_start_up">
            <div class="container">
                <div class="section_title_digitaL text-center">
                    <h3><?php echo esc_html($tesiti_headerr);?></h3>
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
											<h4 class="start_up_details_admin_tess"><?php echo esc_html($testi_value['testi_name']);?> - <a href="<?php the_permalink();?>"><?php echo esc_html($testi_value['testi_desig']);?></a></h4>
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

/* Six Section Pricing */
//---------------------------
function themx_pricing_section($attr){
	
	extract(
		shortcode_atts(array(
		
			'pricing_gr_one'=>array(
			    'pricing_title'=>'',
			    'pricing_icon'=>'',
			    'pricing_amount'=>'',
			    'pricing_plan'=>'',
				
				'pack_list1'=> '',
				'pack_list2'=> '',
				'pack_list3'=> '',
				'pack_list4'=> '',
				'pack_list5'=> '',
				
				'pack_cross'=> '',
			),

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
								    <li><?php echo esc_html($p_value['pack_list1']);?></li>
								    <li><?php echo esc_html($p_value['pack_list2']);?></li>
								    <li><?php echo esc_html($p_value['pack_list3']);?></li>
								    <li><?php echo esc_html($p_value['pack_list4']);?></li>
								    <li><?php echo esc_html($p_value['pack_list5']);?></li>
										
									<li><s><?php echo esc_html($p_value['pack_cross']);?></s></li>
								</ul>
								<a href="<?php the_permalink();?>" class="order_now_s_price"><?php echo esc_html__('Order Now', 'themx');?></a>			
											
						
                            </div>
                        </div>
						<?php } } ?>
				
                </div>
            </div>
        </div>		
    </div>				
	<?php
	return ob_get_clean();
	
}
add_shortcode('pricing_sectionn','themx_pricing_section');

/* Seven Section Blog */
//-------------------------------
function themx_home_digital_blog($attr, $content = null){ 
	extract(
	    shortcode_atts(array(
		
		'section_title'		=> '',
		'blog_1_read_more'		=> '',
		'blog_1_pst_num'		=> '',
		'blog_category_txt'		=> '',
		
	), $attr)
	);
	
	ob_start();
	?>
		   <div class="latest_news_digital_home">
            <div class="container">
                <div class="section_title_digitaL text-center">
                    <h3><?php echo esc_html($section_title);?></h3>
                </div><!--.section_title_digitaL-->

                <div class="row">
                    <div class="latest_news_list_digital">
					
					<?php
						
						$home_blg_1= new WP_Query(array(
						'post_type'=>'post',
						'posts_per_page'=>$blog_1_pst_num,
						));
						
						if($home_blg_1->have_posts()):while($home_blg_1->have_posts()): $home_blg_1->the_post();
					
					?>
					<?php $sticky = !is_sticky() ? "non-sticky" : 'sticky'; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="c_column_digital wow fadeInLeft" data-wow-delay="300ms">
                                <div class="c_column_digital_text">
                                    <div class="top_dj">
                                        <h3 style="color:<?php echo esc_html($blog_category_txt);?>"><?php the_category();?></h3>
                                    </div>
                                    <h2 class="title_nesw_d" href="<?php the_permalink();?>"><?php the_title();?></h2>
                                    <h4><?php echo esc_html__( 'Posted on', 'themx' );?> <?php echo esc_html(get_the_time('F')); ?> <?php echo esc_html(get_the_time('d')); ?>, <?php echo esc_html(get_the_time('Y')); ?></h4>
                                    <p>
									<?php if( ! has_excerpt() ) {
										echo esc_html(wp_trim_words( get_the_content(), 23, ' ' )); } 
										else { the_excerpt(); } ?>
									</p>
                                    <a href="<?php the_permalink();?>" class="apply_digital"><?php echo esc_html($blog_1_read_more);?></a>
                                </div>
                            </div>
                        </div><!--.col-md-4-->
						</article>
						<?php endwhile; endif; ?>
                    </div>
                </div><!--.row-->
            </div><!--.container-->
        </div><!--.latest_news_digital_home-->
	<?php return ob_get_clean();
	}
add_shortcode('home_digital_blog','themx_home_digital_blog');

/* Eight Section Subscribe */
//-------------------------------
function themx_subscribe_section($attr){
	
	extract(
		shortcode_atts(array(
		
		'subscribe_grp'=>array(
			'subscribe_title'=>'',
			'subscribe_desc'=>'',
		),
			
		),$attr)
	);
	
	ob_start();
	?>
	    <div class="what_you_see_digital">
            <div class="container">
                <div class="row">
				<?php 
						
						$subscribe_grp = vc_param_group_parse_atts($subscribe_grp);
						if($subscribe_grp){
							
							foreach($subscribe_grp as $p_key => $p_value){ ?>
				
                    <div class="t_what_you_see_text text-center">
                        <h4><?php echo esc_attr($p_value['subscribe_title']);?></h4>
                        <p><?php echo esc_attr($p_value['subscribe_desc']);?></p>
                        <a href="<?php the_permalink();?>" class="t_what_you_see_btn"><?php echo esc_html__('LEARN MORE', 'themx');?></a>
                    </div>
						<?php } } ?>
					
                </div><!--.row-->
            </div><!--.container-->
        </div><!--.what_you_see_digital--> 
	<?php
	return ob_get_clean();
	
}
add_shortcode('subscribe_section','themx_subscribe_section');

/* Nine Section Company */
//-------------------------------
function themx_company_section($attr){
	
	extract(
		shortcode_atts(array(
		
		'company_grps'=>array(
		
		    'companny_img'=>'',
		),
			
		),$attr)
	);
	
	ob_start();
	?>
	    <div class="Our_partners_digital_ text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single_a_me_list owl-carousel">
						<?php 
								$company_grps = vc_param_group_parse_atts($attr['company_grps']);
								$i = 0;
								if($company_grps){
									foreach($company_grps as $testi_key=>$testi_value){ ?>
						
                            <div class="single_logo_about_ME <?php if(!$i){ echo esc_html__( 'active', 'themx' ); }else{ echo esc_html__( ' ', 'themx' ); }?>">
							<?php $companny_img = wp_get_attachment_image_src($testi_value['companny_img'], 'full');?>
								
								<a href="<?php the_permalink();?>">
								    <img src="<?php echo esc_url($companny_img[0]);?>" alt="client_img_01">
								</a>
                            </div>
							
								<?php $i++;} } ?>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- Our_partners_digital_ -->
	<?php
	return ob_get_clean();
	
}
add_shortcode('company_section','themx_company_section');

/*------------------------------------------------------------------------
							//ABOUT PAGE
-------------------------------------------------------------------------*/
    
/* About section one-1 */
//-------------------------
function themx_about_form_one($attr,$content){
	
	extract(
		shortcode_atts(array(
		
		    'about_title'=>'',
			'about_desc'=>'',
			
			'serviis_grps'=>array(
			    'serviss_icon'=>'',
			    'serv_title'=>'',
			),
			
			'sliderr_grps'=>array(
			    'slid_img'=>'',
			),
			
			
		),$attr)
	);
	
	ob_start();
	?>
	    <div class="page_title_banner about_us_title_bg">
            <div class="page_title_banner_overlay"></div>
            <div class="page_title_banner_cell">
                <div class="container">
                    <div class="row">
                        <div class="page_title_banner_cell_text text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="300ms">About Us</h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->
		
		<div class="about_us_section_themex">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="section_themex_left">
                            <h3><?php echo esc_html($about_title);?></h3>
                            <p><?php echo esc_html($about_desc);?></p>

                            <?php 
							$serviis_grps = vc_param_group_parse_atts($serviis_grps);
						    if($serviis_grps){
							
							    foreach($serviis_grps as $s_key=>$s_value){ ?>
							
							<ul class="section_themex_left_list">
                                <li class="wow fadeInLeft" data-wow-delay="300ms">
                                    <i class="<?php echo esc_attr($s_value['serviss_icon']);?>"></i>
                                    <span><?php echo esc_attr($s_value['serv_title']);?></span>
                                </li>
                            </ul>
							
								<?php } } ?>
                        </div><!-- section_themex_left -->
					</div><!-- col-md-6 -->
								
					    <div class="col-md-6 col-sm-12">
						<?php 
							$sliderr_grps = vc_param_group_parse_atts($attr['sliderr_grps']);
							$i = 0;
							if($sliderr_grps){
								foreach($sliderr_grps as $light_key=>$light_value){ ?>
						
                            <div class="section_themex_right <?php if(!$i){ echo esc_html__( 'active', 'themx' ); }else{ echo esc_html__( ' ', 'themx' ); }?>">
                                <div class="section_themex_right_active owl-carousel">
								<?php $slid_img = wp_get_attachment_image_src($light_value['slid_img'], 'full'); ?>
											
									<div class="item">
                                        <img src="<?php echo esc_url($slid_img[0]);?>" alt="" />
                                    </div>
									
                                </div>
                            </div>
							<?php $i++;} } ?>
							
                        </div><!-- col-md-6 -->
                </div><!-- row -->
            </div><!-- Container -->
        </div><!-- about_us_section_themex -->
	<?php
	return ob_get_clean();
	
}
add_shortcode('about_grp_one','themx_about_form_one'); 

/* About section two-2 */
//-------------------------
function themx_about_form_two($attr,$content){
	
	extract(
		shortcode_atts(array(
		
		'svis_img'=>'',
		'svis_title'=>'',
		
		'skll_img'=>'',
		'skll_title'=>'',
		
		'custom_svis_grp'=>array(
		    'custom_ser_icon'=>'',
		    'custom_ser_title'=>'',
		    'custom_ser_descrip'=>'',
		),
		
		'custom_skill_grp'=>array(
		    'prog_skll_title'=>'',
		    'prog_skll_amount'=>'',
		),
			
		),$attr)
	);
	
	ob_start();
	?>
	    <div class="service2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 nopadding">
                        <div class="service2_big_img se_rvi_ce_">
                            <?php 
				
					            $srvs_gr_xx = wp_get_attachment_image_src($svis_img,'full');
					            if($srvs_gr_xx){ ?>
						
					        <img src="<?php echo esc_url($srvs_gr_xx[0]);?>">
					        <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6 nopadding">
                        <div class="s2-txt s2_bg_txt">
                            <div class="p-title">
                                <h2><?php echo esc_html($svis_title);?></h2>
                            </div>
                            <div class="row">
							<?php 
							        $custom_svis_grp = vc_param_group_parse_atts($custom_svis_grp);
						            if($custom_svis_grp){
							
							            foreach($custom_svis_grp as $s_key=>$s_value){ ?>
							
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="s2-content">
                                        <div class="overflow_s2_content">
                                            <div class="s2_content_icon">
                                                <i class="<?php echo esc_attr($s_value['custom_ser_icon']);?>"></i>
                                            </div>
                                            <div class="s2_content">
                                                <h4><?php echo esc_attr($s_value['custom_ser_title']);?></h4>
                                            </div>
                                        </div>
                                        <p><?php echo esc_attr($s_value['custom_ser_descrip']);?></p>
                                    </div>
                                </div>
								
								<?php } } ?>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->


                <div class="row">
                    <div class="col-md-6 nopadding">
                        <div class="skill_left_about_us hero">
                            <div class="skill_re_right_titlE">
                                <h4><?php echo esc_html($skll_title);?></h4>
                            </div>
                            <div class="hero-progress">
							<?php 
					
						        $custom_skill_grp = vc_param_group_parse_atts($attr['custom_skill_grp']);
						 
						        if($custom_skill_grp){
							 
							        foreach($custom_skill_grp as $key => $value){ ?>
							
                                <div class="progress-item">
                                    <p><?php echo esc_html($value['prog_skll_title']);?><span class="pull-right"><?php echo esc_html($value['prog_skll_amount']);?></span></p>
                                    <div class="progress-main"><span class="progress-bar" data-value="<?php echo esc_html($value['prog_skll_amount']);?>"></span></div>
                                </div>

								<?php } } ?>
                            </div>
                        </div>
                    </div><!--.col-md-6-->

                    <div class="col-md-6 nopadding">
                        <div class="service2_big_img se_rvi_ce_">
                            <?php 
				
					            $srvs_gr_yy = wp_get_attachment_image_src($skll_img,'full');
					            if($srvs_gr_yy){ ?>
						
					        <img src="<?php echo esc_url($srvs_gr_yy[0]);?>">
					        <?php } ?>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container-fluid -->
        </div><!--.service2-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('about_grp_two','themx_about_form_two');

/* Teams section */
//-------------------
function themx_about_team_ptn($attr,$content){
	
	extract(
		shortcode_atts(array(
		
		    'hedar_title'=>'',
		
		'temm_grps'=>array(
			'team_img'=>'',
			'team_titlee'=>'',
			'creative_team'=>'',
			//Icons 
			'title_icon1'=>'',
			'title_icon2'=>'',
			'title_icon3'=>'',
			'title_icon4'=>'',
			//Link icon
			'title_link1'=>'',
			'title_link2'=>'',
			'title_link3'=>'',
			'title_link4'=>'',
		),

		),$attr)
	);
	
	ob_start();
	?>
	    <div class="team_sEction_CreativeHome">
            <div class="container">
                <div class="creative_home_s_title text-center">
                    <h3><?php echo esc_html($hedar_title);?></h3>
                </div>

                <div class="row">
                    <div class="team_sEction_CreativeHome_list">
					<?php 
						$temm_grps = vc_param_group_parse_atts($temm_grps);
						if($temm_grps){
						    foreach($temm_grps as $s_key=>$s_value){ ?>
					
                        <div class="col-md-4 col-sm-6">
                            <div class="single_team_s_C_Home text-center wow fadeInUp" data-wow-delay="300ms">
								<img src="<?php echo get_template_directory_uri();?>/images/home/creative_home_team_03.jpg" alt="">
								
                                <div class="team_CreativeHome_overlay">
                                    <div class="top_CreativeHome">
                                        <h4><?php echo esc_attr($s_value['team_titlee']);?></h4>
                                        <p><?php echo esc_attr($s_value['creative_team']);?></p>
                                    </div>
                                    <ul class="bottom_CreativeHome">
                                        <li><a href="<?php echo esc_attr($s_value['title_link1']);?>" target="_blank" class="<?php echo esc_attr($s_value['title_icon1']);?>"></a></li>
                                        <li><a href="<?php echo esc_attr($s_value['title_link2']);?>" target="_blank" class="<?php echo esc_attr($s_value['title_icon2']);?>"></a></li>
                                        <li><a href="<?php echo esc_attr($s_value['title_link3']);?>" target="_blank" class="<?php echo esc_attr($s_value['title_icon3']);?>"></a></li>
                                        <li><a href="<?php echo esc_attr($s_value['title_link4']);?>" target="_blank" class="<?php echo esc_attr($s_value['title_icon4']);?>"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<?php }} ?>
                        
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- team_sEction_CreativeHome -->
    <?php
	return ob_get_clean();
	
}
add_shortcode('teams_grp_ptn','themx_about_team_ptn');

/* Companny section */
//-------------------
function themx_about_companny_ptn($attr,$content){
	
	extract(
		shortcode_atts(array(
		
		'company_grps_about'=>array(
		
			'companny_about_img'=>'',
		),

		),$attr)
	);
	
	ob_start();
	?>
	    <div class="Our_partners_about_me text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single_a_me_list owl-carousel">
						<?php 
							$company_grps_about = vc_param_group_parse_atts($attr['company_grps_about']);
							$i = 0;
							if($company_grps_about){
								foreach($company_grps_about as $tesla_key=>$tesla_value){ ?>
								
                            <div class="single_logo_about_ME <?php if(!$i){ echo esc_html__( 'active', 'themx' ); }else{ echo esc_html__( ' ', 'themx' ); }?>">
                                <?php $companny_about_img = wp_get_attachment_image_src($tesla_value['companny_about_img'], 'full');?>
								
								<a href="<?php the_permalink();?>">
								    <img src="<?php echo esc_url($companny_about_img[0]);?>" alt="client_img">
								</a>
								
                            </div>
							<?php $i++;} } ?>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- Our_partners_about_me --> 
    <?php
	return ob_get_clean();
	
}
add_shortcode('abt_compny_grp_ptn','themx_about_companny_ptn');

/*------------------------------------------------------------------------
							//BLOG PAGE
-------------------------------------------------------------------------*/

/* Name of blog sex */
function themx_blog_form($attr,$content){
	
	extract(
		shortcode_atts(array( ),$attr)
	);
	
	ob_start();
	?>
	    
	<?php
	return ob_get_clean();
	
}
add_shortcode('blog_grp_one','themx_blog_form'); 

/*------------------------------------------------------------------------
							//CONTACT PAGE
-------------------------------------------------------------------------*/
 
/* Contact Form 7 left */
function themx_contact_form($attr,$content){
	
	extract(
		shortcode_atts(array(
		'email_address'=>'',
		'phone_no_one'=>'',
		'phone_no_two'=>'',
		'location_address'=>'',
		
		),$attr)
	);
	
	ob_start();
	?>
		<div class="page_title_banner Contact_page_title_img">
            <div class="page_title_banner_overlay"></div>
            <div class="page_title_banner_cell">
                <div class="container">
                    <div class="row">
                        <div class="page_title_banner_cell_text text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="300ms"><?php echo esc_html__('Contact Us');?></h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->
		
		<div class="contact_padding_toP">
            <div class="container">
                <div class="row">
				
                    <div class="col-md-4">
                        <div class="address_form_themx">
                            <div class="address_form_singlE">
                                <h4><?php echo esc_html('Email', 'themx');?></h4>
                                <p class="email"><?php echo esc_html($email_address);?></p>
                            </div>

                            <div class="address_form_singlE">
                                <h4><?php echo esc_html('Phone Numbers', 'themx');?></h4>
                                <p class="phoneNo"><?php echo esc_html($phone_no_one);?></p>
                                <p class="phoneNo"><?php echo esc_html($phone_no_two);?></p>
                            </div>

                            <div class="address_form_singlE">
                                <h4><?php echo esc_html('Location', 'themx');?></h4>
                                <p><?php echo esc_html($location_address);?></p>
                            </div>

                            <div class="address_form_singlE">
                                <h4><?php echo esc_html('Social Networks', 'themx');?></h4>
                                <ul class="blog_a_social_blog">
									<li><a href="<?php the_author_meta('twitter'); ?>" title="Twitter" target="_blank" id="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php the_author_meta('facebook'); ?>" title="facebook" target="_blank" id="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php the_author_meta('instagram'); ?>" title="instagram" target="_blank" id="instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
                            </div>
                        </div>
                    </div><!-- col-md-4 -->
					
                    <!--- Contact Form 7 right --->
					<div class="col-md-8">
                        <div class="msg_form wow fadeInRight" data-wow-delay="300ms">
                                
								<?php 
									include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
									if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) { 
									    echo  do_shortcode($content);
									}
								?> 
                     
                        </div>
                    </div><!-- col-md-8-->
                </div><!-- row-->
            </div><!-- container-->
        </div><!-- contact_padding_toP-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('contact_grp_one','themx_contact_form');
 
/* gmap section */
function themx_gmap_set($attr,$content){
	
	extract(
		shortcode_atts(array(
		
	//Map center // 
		'map_center_lat'=>'',
		'map_center_lan'=>'',
		'map_zoom_pstn'=>'',
		
	//Add branch // 
	'google_branch_grp'=>array(
	    'branch_name'=>'',
		'branch_lat'=>'',
		'branch_lan'=>'',
		'branch_indecator'=>'',  
	),
		
	//Color option // 
		'textt_clr'=>'',
		'water_clr'=>'',
		'landscape_clr'=>'',
		'highway_road_clr'=>'',
		'local_road_clr'=>'',
		'extra_clr'=>'',
		
		),$attr)
	);
	
	ob_start();
	?>
	
<!--- Map Start --->
    <div id="map" class="ev-map-display c-page"></div>
	
	<script type="text/javascript">
	/*---- Gmaps ----*/
	//------------------//
	var map;
	$('.ev-map-display').each(function() {
		var element = $(this).attr('id');
		map = new GMaps({
		el: '#' + element,
		center: new google.maps.LatLng(
		            <?php if($map_center_lat){
			            echo esc_html($map_center_lat);
		            }else{
			            echo esc_html(23.6788817);
		            }?>,
		            <?php if($map_center_lan){
			            echo esc_html($map_center_lan);
		            }else{
			            echo esc_html(88.1000581);
		            }?>),
		
		zoom:<?php if($map_zoom_pstn){
			    echo esc_html($map_zoom_pstn);
		    }else{
			    echo esc_html(5);
		    }?>,
		
		scrollwheel: false,
		styles: [
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": <?php echo esc_html($water_clr);?>
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": <?php echo esc_html($landscape_clr);?>
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": <?php echo esc_html($highway_road_clr);?>
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": <?php echo esc_html($local_road_clr);?>
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ccc"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dedede"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#333"
						},
						{
							"lightness": 6
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": <?php echo esc_html($textt_clr);?>
						},
						{
							"lightness": 40
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f2f2f2"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						},
						{
							"weight": 1.2
						}
					]
				}
			]
		});
		//For Branch //
		<?php 
		    $google_branch_grp = vc_param_group_parse_atts($atts['google_branch_grp']);
			//print_r($google_branch_grp);
			if( is_array($google_branch_grp) && ! empty( $google_branch_grp) ){
				    foreach($google_branch_grp as $key => $value){ ?>
					<?php echo esc_html($value['branch_lat']); ?>
		
		map.addMarker({
			//For Latitute //
			<?php if( isset($value['branch_lat']) ) { ?>
			    lat: <?php echo esc_html($value['branch_lat']); ?>,
			<?php } ?>
			
			//For Longitute //
			<?php if( isset($value['branch_lan']) ) { ?>
			    lng: <?php echo esc_html($value['branch_lan']); ?>,
			<?php } ?>
			
			//For Title //
			<?php if( isset($value['branch_name']) ) { ?>
			    title: <?php echo esc_html($value['branch_name']); ?>,
			<?php } ?>
			
			//For image //
			<?php
			if( isset($value['branch_indecator'])) {
			    $p_gmap_branch_indecator = wp_get_attachment_image_src($value['branch_indecator'], 'full'); ?>
				icon: '<?php echo esc_url($p_gmap_branch_indecator[0]); ?>'
			<?php } ?>
		});
			<?php }}?>
	});
	</script>	
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('contact_gmap','themx_gmap_set');

/* Mailchim Subscribe */
function themx_mailchimp_set($attr,$content){
	
	extract(
		shortcode_atts(array(
		
		    ''=>'',
		
		),$attr)
	);
	
	ob_start();
	?>
		<div class="subscribe_themex">
            <div class="container">
                <div class="col-md-12">
                    <div class="cupon_shop_cart">
                        <div class="row">
                            <div class="col-md-6 col-sm-3">
                                <div class="pull-right_shop_Cart wow fadeInLeft" data-wow-delay="300ms">
                                    <?php
								        $custom_logo_id = get_theme_mod( 'custom_logo' );
								        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								        if ( has_custom_logo() ) {
										    echo '<a href="'. esc_url( home_url('/')).'"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_html__( 'Logo', 'themx' ) . '"/></a>';
								        } else {
										    echo '<a href="'. esc_url( home_url('/')).'"><h2 class="themx-site-title">'. esc_attr( get_bloginfo( 'name' )) . '</h2></a>';
								        }	
							        ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-9">
                            <h5 class="newsneller_subscribe"><?php echo esc_html__('Subscribe To My Newsletter', 'themx');?></h5>
                                <?php 
									include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
									if ( is_plugin_active( 'mailchimp-for-wp/mailchimp-for-wp.php' ) ) { 
										echo  do_shortcode($content);
									}
								?> 
                            </div>
                        </div>
                    </div>
                </div><!--.col-md-12-->
            </div><!--.container-->
        </div><!--.subscribe_themex-->
	<?php
	return ob_get_clean();
	
}
add_shortcode('mailchimp','themx_mailchimp_set');

?>