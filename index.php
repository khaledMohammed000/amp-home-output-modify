<?php
/*
Plugin Name: AMP Home Page Modify
Version: 0.0.1
Author: Mohammed Khaled
Author URI: https://ampforwp.com/
Donate link: https://www.paypal.me/Kaludi/5
License: GPL2
*/
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

//Use Case 1: Exclude Specific Categories from Homepage 
/* remove this line to use Use case 1
    $q = array(
              'post_type'           => 'post',
              'orderby'             => 'date',
              'ignore_sticky_posts' => 1,
                //just replace -1,-7,-15 with appropriate ID of the categories
                //you want to exclude and add a "-" before each and separate with comma
              'cat'                 => '-1,-7,-15',
              );
*/ // remove this line to use Example Use Case
//cut code from here and replace below inside funtion ampforwp_return_loop_args() between line 29-33

//Use Case 2: Show posts from different Post types
function ampforwp_return_loop_args(){
    // learn more to Modify args @ https://developer.wordpress.org/reference/classes/wp_query/
    //remove code between these comments and replace with your code here
  $q = array(
            'post_type'           => 'page',
            'orderby'             => 'date',
            'ignore_sticky_posts' => 1,
            );
 //remove code between these comments and replace with your code here
    return $q;
}
function ampforwp_custom_home_output(){
  add_filter('ampforwp_query_args', 'ampforwp_return_loop_args');
}
add_action('amp_init','ampforwp_custom_home_output');