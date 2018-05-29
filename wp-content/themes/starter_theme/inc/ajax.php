<?php

/*
* example ajax call
*/
function digi_example_callback() {

	if (function_exists('example_function')) {
		$example = example_function();		
	}
	
  echo json_encode($example);
	die();
}

add_action('wp_ajax_digi_example', 'digi_example_callback');
add_action('wp_ajax_nopriv_digi_example', 'digi_example_callback');