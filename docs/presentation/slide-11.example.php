<?php

$stars = wp_rand( 1, 5 );

$stars_str = sprintf(
	// translators: %d is an integer for a star-rating.
	_n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ),
	$stars
);

$demo_str = sprintf(
	// translators: %1$s can be any character, %2$s is another placeholder string.
	__( 'Demo Content - %1$s and %2$s', 'multilingual-wp4devs' ),
	'A',
	'B'
);
