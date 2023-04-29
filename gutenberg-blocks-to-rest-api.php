<?php
/**
 * Plugin Name:       Gutenberg Blocks to REST-API
 * Description:       Register Gutenberg blocks to the WordPress REST-API as structured data.
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            Greg Rickaby
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package GRD\Gutenberg_Blocks_To_Rest_Api
 */

namespace GRD\Gutenberg_Blocks_To_Rest_Api;

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

// Define constants.
define( 'GUTENBERG_BLOCKS_TO_REST_API_VERSION', '1.0.0' );
define( 'GUTENBERG_BLOCKS_TO_REST_API_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'GUTENBERG_BLOCKS_TO_REST_API_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once 'inc/blocks.php';
