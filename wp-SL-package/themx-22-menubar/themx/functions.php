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


