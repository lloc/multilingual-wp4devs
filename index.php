<?php

/**
 * WCEU 2025
 *
 * Plugin Name: WCEU 2025
 * Version: 1.0.0
 * Description: Companion plugin for my talk "Multilingual WordPress for developers" at WCEU 2025.
 * Author: Dennis Plötner
 * Author URI: http://lloc.de/
 * Text Domain: wceu-2025
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

/**
 * The hook 'init' should be used to load the plugin's translation files.
 *
 * Don't use 'plugins_loaded' since it will create a warning!
 */
add_action(
	'init',
	static function () {
		load_plugin_textdomain(
			'wceu-2025',
			false,
			__DIR__ . '/languages'
		);

		wp_register_script(
			'wceu-2025-script',
			plugins_url( 'js/index.js', __FILE__ ),
			array( 'wp-blocks', 'react', 'wp-i18n', 'wp-block-editor' ),
			'1.0.0',
			true
		);

		// Register the block type.
		register_block_type(
			'lloc/wceu-2025',
			array(
				'api_version'   => 3,
				'editor_script' => 'wceu-2025-script',
			)
		);

		wp_set_script_translations(
			'wceu-2025-script',
			'wceu-2025',
			plugin_dir_path( __FILE__ ) . 'languages'
		);
	}
);
