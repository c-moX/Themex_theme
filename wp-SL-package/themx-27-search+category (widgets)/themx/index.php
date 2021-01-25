<?php get_header();?>
        <div class="page_title_banner blog_page_four_title_img">
            <div class="page_title_banner_overlay"></div>
            <div class="page_title_banner_cell">
                <div class="container">
                    <div class="row">
                        <div class="page_title_banner_cell_text text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">Blog Standard</h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->



        <div class="Blog_standard_grid_page_blog B_page_four">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-9">
                        <div class="blog_three_pd">
                            <div class="row">
								<?php
								if(have_posts()): while(have_posts()): the_post(); 
								get_template_part('template-parts/content', get_post_format());
								?>
								<?php
								endwhile;
								?>
								<div class="pageedit blog_standard_single">							
									<nav class="navigation pagination" role="navigation">
										<?php the_posts_pagination( array(
											'mid_size' => 2,
											'prev_text' => esc_html__( 'Previous', 'themx' ),
											'next_text' => esc_html__( 'Next', 'themx' ),
										) ); ?>
									</nav>						
								</div>
								<?php
								 else:
								 get_template_part('template-parts/content', 'none');
								 endif;
								 wp_reset_postdata(); ?>
                            </div><!-- row -->
                        </div><!-- blog_three_pd -->
                    </div><!-- col-md-8 -->

                    <div class="col-md-3">
                        <div class="blog_right_sidebaR">
						<?php dynamic_sidebar('themx-blog-sidebar');?>
                            <div class="Blog_standard_right_widget">
                                <div class="right_widget_titles">
                                    <h4>LATEST POSTS</h4>
                                </div>
                                <ul class="r-course">
                                    <li>
                                        <div class="rcourse-img"><img src="<?php echo get_template_directory_uri();?>/images/home/blog_standard_page_04.jpg" alt="Image"></div>
                                        <div class="rcourse-txt">
                                            <p>Travel</p>
                                            <a href="#"><h4>Aliquam Placerat Erat Ligula</h4></a>
                                            <a href="#">November 21, 2017</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rcourse-img"><img src="<?php echo get_template_directory_uri();?>/images/home/blog_standard_page_05.jpg" alt="Image"></div>
                                        <div class="rcourse-txt">
                                            <p>Travel</p>
                                            <a href="#"><h4>Aliquam Placerat Erat Ligula</h4></a>
                                            <a href="#">November 21, 2017</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rcourse-img"><img src="<?php echo get_template_directory_uri();?>/images/home/blog_standard_page_06.jpg" alt="Image"></div>
                                        <div class="rcourse-txt">
                                            <p>Travel</p>
                                            <a href="#"><h4>Aliquam Placerat Erat Ligula</h4></a>
                                            <a href="#">November 21, 2017</a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Blog_standard_right_widget -->

                            <div class="Blog_standard_right_widget">
                                <div class="right_widget_titles">
                                    <h4>ARCHIVES</h4>
                                </div>
                                <ul class="categories_item_b">
                                    <li><a href="#">September 2017</a></li>
                                    <li><a href="#">August 2017</a></li>
                                    <li><a href="#">July 2017</a></li>
                                    <li><a href="#">March 2017</a></li>
                                </ul>
                            </div><!-- Blog_standard_right_widget -->

                        </div><!-- blog_right_sidebaR -->
                    </div><!-- col-md-4 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- Blog_standard_grid_page_blog -->
<?php get_footer();?>