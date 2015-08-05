<?php 


	require get_template_directory() . '/includes/customise.php';

	function index_theme_setup(){

	}

	function cc_mime_types($mimes) {
  		$mimes['svg'] = 'image/svg+xml';
  		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

	function index_homepage($query){
		if(!is_admin() && is_front_page()){
			$query->set('posts_per_page', '1');
			$query->set('orderby', 'rand');
		}
		return $query;
	}

	add_action('pre_get_posts', 'index_homepage');

?>