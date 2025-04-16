<?php

/**
 * Multilingual 4 Devs
 *
 * Plugin Name: Multilingual 4 Devs
 * Version: 1.0.0
 * Description: Companion plugin for my talk "Multilingual WordPress for developers" at various WordCamps.
 * Author: Dennis Plötner
 * Author URI: http://lloc.de/
 * Text Domain: multilingual-wp4devs
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @copyright Copyright (C) 2025, Dennis Plötner, re@lloc.de
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 or later
 * @wordpress-plugin
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use lloc\MultilingualWordPress\ApiFunctions;

/**
 * The hook 'init' should be used to load the plugin's translation files.
 *
 * Don't use 'plugins_loaded' since it will create a warning!
 */
add_action(
	'init',
	static function () {
		load_plugin_textdomain(
			'multilingual-wp4devs',
			false,
			__DIR__ . '/languages'
		);

		wp_register_script(
			'multilingual-wp4devs',
			plugins_url( 'js/index.js', __FILE__ ),
			array( 'wp-blocks', 'react', 'wp-i18n', 'wp-block-editor' ),
			'1.0.0',
			true
		);

		// Register the block type.
		register_block_type(
			'lloc/multilingual-wp4devs',
			array(
				'api_version'   => 3,
				'editor_script' => 'multilingual-wp4devs-script',
			)
		);

		wp_set_script_translations(
			'multilingual-wp4devs-script',
			'multilingual-wp4devs',
			plugin_dir_path( __FILE__ ) . 'languages'
		);

		add_filter( 'the_content', array( ApiFunctions::class, 'add_content' ) );
		add_action( 'wp_head', array( ApiFunctions::class, 'add_meta' ) );
	}
);
