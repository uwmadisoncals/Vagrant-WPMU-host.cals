<?php
/**
Plugin Name: WordPress Slider Plugin
Plugin URI: http://cals.wisc.edu/developers/
Description: A WordPress slider plugin
Version: 0.7
Author: Al Nemec
Author URI: http://www.wisc.edu/directories/person.php?name=ALBERT+M+NEMEC
License: GPLv2 or later
Copyright: 2013 Al Nemec
**/

/**
This plugin uses some of the code and an image from the acf(Advanced Custom Fields) plugin for Slider Custom Post Type UI and also inspiration for great plugin design under GPL license. Thanks You Elliot Condon
Copyright: Elliot Condon
**/

require plugin_dir_path( __FILE__ ) . 'config.php';

require SLIDER_PLUGIN_INCLUDE_DIRECTORY . 'functions.php';

muneeb_load_ssp();

muneeb_ssp_loaded();