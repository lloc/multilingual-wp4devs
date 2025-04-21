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
		$text = __( 'Demo__ Text', 'multilingual-wp4devs' );

		/**
		 * Never trust translated strings — always escape them before output.
		 */
		echo esc_html( $text );

		/**
		 * WordPress offers several methods to properly escape translated strings.
		 */
		echo esc_html__( 'Demo__ Text', 'multilingual-wp4devs' );
		echo esc_attr__( 'Demo__ Text', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _e functions.
	 *
	 * @return void
	 */
	public function demo_e(): void {
        // phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction
		_e( 'Demo_e Text', 'multilingual-wp4devs' );

		/**
		 * _e() should not be used in production as it outputs unescaped text —
		 * prefer esc_html_e() or esc_attr_e().
		 */
		esc_html_e( 'Demo_e Text', 'multilingual-wp4devs' );
		esc_attr_e( 'Demo_e Text', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _n functions.
	 *
	 * @return void
	 */
	public function demo_x(): void {
		$text = _x( 'Demo_x Text', 'Demo Context', 'multilingual-wp4devs' );

		// Never trust translated strings — always escape them before output.
		echo esc_html( $text );

        // phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction
		_ex( 'Demo_x Text', 'Demo Context', 'multilingual-wp4devs' );

		/**
		 * _ex() echoes unescaped text —
		 * use esc_html_x() or esc_attr_x() for safe output in production.
		 */
		echo esc_html_x( 'Demo_x Text', 'Demo Context', 'multilingual-wp4devs' );
		echo esc_attr_x( 'Demo_x Text', 'Demo Context', 'multilingual-wp4devs' );
	}

	/**
	 * Demos the use of WordPress API _n functions.
	 *
	 * @param string $content The function may be a callback for a filter and content may be passed.
	 *
	 * @return string
	 */
	public function demo_n( string $content = '' ): string {
		$stars = 1;

		/* translators: %d is an integer for a star-rating. */
		$content .= sprintf(
            _n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ),
            $stars
        );

		$stars = 5;

		/* translators: %d is an integer for a star-rating. */
		$content .= sprintf(
            _n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ),
            $stars
        );

        /* translators: %1$s is a placeholder string and %2$s is a second placeholder string. */
        $content .= sprintf(
            __( 'Demo Content - %1$s and %2$s', 'multilingual-wp4devs' ),
            'A',
            'B'
        );

        return $content;
	}
}
