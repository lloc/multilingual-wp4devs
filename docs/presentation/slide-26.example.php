<?php

$number = number_format_i18n( 1234567.89 );

echo esc_html( $number );

$number = number_format_i18n(
	1234567.89,
	2
);

echo esc_html( $number );
