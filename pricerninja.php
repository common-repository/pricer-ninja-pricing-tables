<?php
/*
 * Plugin Name: Pricer Ninja - Pricing Tables
 * Plugin URI: https://pricingtables.commoninja.com
 * Description: Add & create <strong>responsive pricing tables</strong> for your Wordpress website on-the-fly. No prior knowledge require. Just a simple integration with Pricer Ninja.
 * Version: 2.1.0
 * Author: Common Ninja
 * Author URI: https://www.commoninja.com/
 * License: GPLv2 or later
 */

/*
 * Shortcode to diplay Pricer Ninja table in your site.
 * 
 *	   The list of arguments is below:
 *     'tableid' (string) - Table GUID
 */
 
function pricerninja_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'tableid' => '95320fe4-2f7a-4b1b-a9b0-4551533dab58'
	), $atts ) );
	
	$html = "<div class=\"commonninja_component\" comp-type=\"pricing_table\" comp-id=\"$tableid\"></div>
	<script type=\"text/javascript\">
	(function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://cdn.commoninja.com/sdk/latest/commonninja.js';
		document.getElementsByTagName('head')[0].appendChild(script);
	})();
	</script>";

	return $html;
}

add_shortcode( 'pricerninja', 'pricerninja_shortcode' );

?>