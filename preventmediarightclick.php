<?php
	/*
	Plugin Name: Prevent Media Right Click Wordpress Plugin
	Plugin URI: http://www.juthawong.com
	Description: Prevent Noobs from stole your content
	Version: 1.0
	Author: Juthawong Naisanguansee
	Author URI: http://www.juthawong.com/
	License: GPLv2
	*/
	

	function defapreventrightclickmedia(){
		wp_enqueue_script('jquery');
		wp_register_script('preventrightclick', plugins_url( 'preventrightclick.js', __FILE__ ),array('jquery'),'1.1', true);
		wp_enqueue_script('preventrightclick');

	}
	add_action( 'wp_enqueue_scripts', 'defapreventrightclickmedia' ); 