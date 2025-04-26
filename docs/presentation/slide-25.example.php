<?php

$date = date_i18n(
	get_option( 'date_format' )
);

echo esc_html( $date );

$timestamp = mktime( 13, 42, 23, 7, 17, 2025 );
$date      = date_i18n(
	get_option( 'date_format' ),
	$timestamp
);

echo esc_html( $date );
