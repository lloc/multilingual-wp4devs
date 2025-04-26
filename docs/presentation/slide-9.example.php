<?php

echo esc_html__( 'Demo__ Text', 'multilingual-wp4devs' );

echo esc_attr__( 'Demo__ Text', 'multilingual-wp4devs' );

esc_html_e( 'Demo_e Text', 'multilingual-wp4devs' );

esc_attr_e( 'Demo_e Text', 'multilingual-wp4devs' );

echo esc_html_x(
	'Demo_x Text',
	'Demo Context',
	'multilingual-wp4devs'
);

echo esc_attr_x(
	'Demo_x Text',
	'Demo Context',
	'multilingual-wp4devs'
);
