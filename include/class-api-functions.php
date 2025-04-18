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
	 * Demos the use of WordPress API __ functions.
	 *
	 * @return void
	 */
	public function demo__(): void {
		$text = __( 'Demo Text', 'multilingual-wp4devs' );

		// // Never trust translated strings — always escape them before output.
		echo esc_html( $text );

		// WordPress offers several methods to properly escape translated strings.
		echo esc_html__( 'Demo Text', 'multilingual-wp4devs' );
		echo esc_attr__( 'Demo Text', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _e functions.
	 *
	 * @return void
	 */
	public function demo_e(): void {
		_e( 'Demo Text with _e', 'multilingual-wp4devs' );

		// WordPress offers several methods to properly escape translated strings.
		esc_html_e( 'Demo Text with esc_html_e', 'multilingual-wp4devs' );
		esc_attr_e( 'Demo Text with esc_attr_e', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _n functions.
	 *
	 * @return void
	 */
	public function demo_x() {
		echo _x( 'Demo Text with _x', 'Demo Context', 'multilingual-wp4devs' );

        // phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
		_ex( 'Demo Text with _ex', 'Demo Context', 'multilingual-wp4devs' );

		echo esc_html_x( 'Demo Text with esc_html_x', 'Demo Context', 'multilingual-wp4devs' );
		echo esc_attr_x( 'Demo Text with esc_attr_x', 'Demo Context', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _n functions.
	 *
	 * @return void
	 */
	public function demo_n(): void {
	}

	/**
	 * Callback for the_content filter.
	 *
	 * @param string $content The content to be filtered.
	 *
	 * @return string
	 */
	public static function the_content( string $content ): string {
		$stars = 5;

		/* translators: %d is an integer for a star-rating */
		$content .= sprintf( __( 'Demo Content %d something', 'multilingual-wp4devs' ), $stars );

		/* translators: %d is an integer for a star-rating */
		$content .= sprintf( _n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ), $stars );

		return $content;
	}
}
