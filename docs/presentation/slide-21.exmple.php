<?php

wp_register_script(
	'multilingual-wp4devs-script',
	plugins_url( 'js/index.js', __FILE__ ),
	array( 'wp-blocks', 'react', 'wp-i18n', 'wp-block-editor' ),
	'1.0.0',
	true
);

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
