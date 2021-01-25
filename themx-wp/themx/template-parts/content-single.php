<?php
/**
 * Template part for displaying posts
 *
 * @package WordPress
 * @subpackage Themx
 * @since 1.0.0
 */

?>
<?php $sticky = !is_sticky() ? 'non-sticky' : 'sticky' ?>
<article id="post-<?php the_ID();?> <?php post_class($sticky);?>">
<div class="blog_single_item">
	<div class="blog__single_sa_img">
		<?php if( has_post_thumbnail()) the_post_thumbnail();?>
	</div>
	<div class="blog_single_p_content">
		<div class="blog_single_top_content">
			<h3><?php the_title();?></h3>
			<h5 class="blog_standard_single_admin blog_standard_grid_admin">
				<?php echo esc_html__('By-', 'themx');?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a>
				<span><?php echo esc_html__('|','themx');?></span>
				<span class="color_same2"><?php echo esc_html__(get_the_time('F'));?></span> <?php echo esc_html(get_the_time('d'));?>, <?php echo esc_html(get_the_time('Y'));?>
				<span><?php echo esc_html__('|','themx');?> <?php the_category( '  , ' );?></span>
			</h5>
			<?php the_content();?>
		</div>
		
		<!--- AUTHOR COMMENT --->
		<div class="COMMENT_1_Com">
		<?php
		global $user_ID;
		if ( get_the_author_meta('description', $user_ID) ) : ?>
			<div class="content_blog_a fix">
				<div class="e_blog_A">
					<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 107 ); ?>" alt="<?php echo esc_html__('author avatar', 'themx');?>"> 
				</div>
				<div class="blog_a_text">
					<h5><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ));?>"><?php the_author();?></a></h5>
					<p><?php the_author_meta('description');?></p>
					<ul class="blog_a_social_blog">
					    <li><a href="<?php the_author_meta('twitter'); ?>" title="Twitter" target="_blank" id="twitter"><i class="fa fa-twitter"></i></a></li>
					    <li><a href="<?php the_author_meta('facebook'); ?>" title="facebook" target="_blank" id="facebook"><i class="fa fa-facebook"></i></a></li>
					    <li><a href="<?php the_author_meta('instagram'); ?>" title="instagram" target="_blank" id="instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>
		
		<?php 
			
			if( comments_open() || get_comments_number() ) :
			        comments_template();		
			endif;
		
		?>
		
	</div>
</div><!-- blog_single_item -->
</article>