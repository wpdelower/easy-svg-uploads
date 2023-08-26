<?php
/**
 * @package           Easy_SVG_Uploads
 * @version           1.0
 * @author            Delower Hossain
 * @copyright         2023 Delower Hossain
 * @license           GPL-2.0-or-later
 */

 /*
 * Plugin Name:       Easy SVG Uploads
 * Plugin URI:        https://www.delowerhossain.com
 * Description:       The Easy SVG Uploads plugin simplifies the process of uploading and managing SVG (Scalable Vector Graphics) files on your WordPress website. With its user-friendly interface and powerful features, this plugin streamlines the integration of SVG graphics into your content, making it perfect for designers, developers, and bloggers.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Delower Hossain
 * Author URI:        https://www.delowerhossain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       esu
 * Domain Path:       /languages
 */


//Avoiding Direct File Access

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

 function esu_custom_mime_type( $mimes ) {
	
	// Enabling SVG Upload
	$mimes['svg']  = 'image/svg+xml';

  	return $mimes;
}

add_filter( 'upload_mimes', 'esu_custom_mime_type' );

