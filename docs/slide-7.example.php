<?php

$translated_string = __(
	'Demo__ Text',
	'multilingual-wp4devs'
);

$translated_string_with_context = _x(
	'Demo_x Text',
	'Demo Context',
	'multilingual-wp4devs'
);

$stars = wp_rand( 1, 5 );

_n(
	'%d star',
	'%d stars',
	$stars,
	'multilingual-wp4devs'
);
