<?php
/**
 * WordPress API function
 *
 * @package Multilingual_WP4Devs
 */

declare( strict_types=1 );

namespace lloc\Multilingual_WP4Devs;

/**
 * Class provides callbacks to demonstrate the use of WordPress API functions.
 */
class Api_Functions {

	/**
	 * Adds content to the given string.
	 *
	 * @param string $content The content to be modified.
	 *
	 * @return string The modified content.
	 */
	public static function the_content( string $content ): string {
		$content .= __( 'Demo Content', 'multilingual-wp4devs' );
		$content .= _x( 'Demo Content', 'other-context', 'multilingual-wp4devs' );

		$stars = 5;

		/* translators: %d is an integer for a star-rating */
		$content .= sprintf( __( 'Demo Content %d something', 'multilingual-wp4devs' ), $stars );

		/* translators: %d is an integer for a star-rating */
		$content .= sprintf( _n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ), $stars );

		return $content;
	}

	/**
	 * Output into the head of a webpage.
	 *
	 * @return void
	 */
	public static function custom_output(): void {
		_e( 'Demo Content', 'multilingual-wp4devs' );
		_ex( 'Demo Meta', 'other-context', 'multilingual-wp4devs' );
	}
}
