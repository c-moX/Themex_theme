<?php 

//Add enqueue supports
if(file_exists(get_template_directory().'/inc/enqueue.php')){
	
	require_once(get_template_directory().'/inc/enqueue.php');
	
}


//Add theme supports
if(file_exists(get_template_directory().'/inc/theme-setup.php')){
	
	require_once(get_template_directory().'/inc/theme-setup.php');
	
}

//Add Nav Walker Support
if(file_exists(get_template_directory().'/inc/wp-bootstrap-navwalker.php')){
	
	require_once(get_template_directory().'/inc/wp-bootstrap-navwalker.php');
	
}

//Add Custom-Widget Support
if(file_exists(get_template_directory().'/inc/custom-widgets.php')){
	
	require_once(get_template_directory().'/inc/custom-widgets.php');
	
}

//Add Custom-Comments Support
if(file_exists(get_template_directory().'/inc/custom-comments.php')){
	
	require_once(get_template_directory().'/inc/custom-comments.php');
	
}

//Add Custom-Comments Support 01 
if(file_exists(get_template_directory().'/inc/theme-element.php')){
	
	require_once(get_template_directory().'/inc/theme-element.php');
	
}

//Add Custom-Comments Support 02 
if(file_exists(get_template_directory().'/inc/theme-options.php')){
	
	require_once(get_template_directory().'/inc/theme-options.php');
	
}

//Add WPBakery Activation Support
if(file_exists(get_template_directory().'/inc/plugin-activation.php')){
	
	require_once(get_template_directory().'/inc/plugin-activation.php');
	
}

//Add WPBakery Activation Support
if(file_exists(get_template_directory().'/inc/libs/class-tgm-plugin-activation.php')){
	
	require_once(get_template_directory().'/inc/libs/class-tgm-plugin-activation.php');
	
}


//Add WPBakery Activation Support
if(file_exists(get_template_directory().'/inc/flaticon.php')){
	
	require_once(get_template_directory().'/inc/flaticon.php');
	
}


//Add Custom Post Support
if(file_exists(get_template_directory().'/inc/custom-posts.php')){
	
	require_once(get_template_directory().'/inc/custom-posts.php');
	
}


//Add Theme Options Support
if(file_exists(get_template_directory().'/theme-options/cs-framework.php')){
	
	require_once(get_template_directory().'/theme-options/cs-framework.php');
	
}


//Add customizer.php Support
if(file_exists(get_template_directory().'/inc/customizer.php')){
	
	require_once(get_template_directory().'/inc/customizer.php');
	
}


//Style Category

add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', '<span class="pull-right">(', $links);
  $links = str_replace(')', ')</span></a>', $links);
  return $links;
}




