<?php

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
	}
);
