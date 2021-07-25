<?php
/**
 * Plugin Name:       Mobile Container Scrollable
 * Plugin URI:        https://www.cawoy.com
 * Description:       Specific purpose plugin to display a scrollable mobile screen container.
 * Version:           1.0
 * Author:            Cawoy LTD
 * Created: 	      19 Jun,2021
 * Text Domain:       mobile-container-scrollable
 */

if(!defined('ABSPATH'))
{
	die("No script kiddie!");
}
define("MB_CONTAINER_URL",plugin_dir_url(__FILE__));
if(!function_exists('mobile_container')){
	function mobile_container($atts){
		$arr = shortcode_atts(array('image' => '0','scroll'=>"false"), $atts);

	$html = "<div class='mobile-slider-container'><div class='phone-slider'>
	<img src='".MB_CONTAINER_URL."assets/images/mobile.png"."' alt='' class='phone-slider__mask box-scroll-".$arr['scroll']."'>
	<div class='free-scroll scroll-".$arr['scroll']."'>
	<img src='".MB_CONTAINER_URL."assets/images/".$arr['image'].".png' alt=''>
	</div>
	</div></div>";

	return $html;

}
}
add_shortcode('mobile_slider','mobile_container');

function container_style(){
	wp_enqueue_style("container_style", MB_CONTAINER_URL."phone_slider.css");
}
add_action("wp_enqueue_scripts", "container_style");

?>