<?php declare( strict_types=1 );

namespace lloc\Wceu2025\ApiFunctions;

/**
 * Gets demo content string
 *
 * @return string
 */
function get_demo_content(): string {
	return __( 'Demo Content', 'wceu-2025' );
}

/**
 * Gets demo content string with context
 *
 * @return string
 */
function get_demo_content_with_context(): string {
	return _x( 'Demo Content', 'other-context', 'wceu-2025' );
}

/**
 * Prints a demo string
 *
 * @return void
 */
function print_demo_string(): void {
	_e( 'Demo Content', 'wceu-2025' );
}

/**
 * Returns a translated string with a star rating
 *
 * @param int $stars
 *
 * @return string
 */
function star_rating( int $stars ): string {
	/* translators: %d is an integer for a star-rating */
	return sprintf( _n( '%d star', '%d stars', $stars, 'wceu-2025' ), $stars );
}
