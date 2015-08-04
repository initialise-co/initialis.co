<?php 


	require get_template_directory() . '/includes/customise.php';

	function index_theme_setup(){

	}

	function cc_mime_types($mimes) {
  		$mimes['svg'] = 'image/svg+xml';
  		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

?>