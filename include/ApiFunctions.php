<?php declare( strict_types=1 );

namespace lloc\MultilingualWordPress;

class ApiFunctions {

	public static function add_content( string $content ): string {
		$content .= __( 'Demo Content', 'multilingual-wp4devs' );
		$content .= _x( 'Demo Content', 'other-context', 'multilingual-wp4devs' );

		/* translators: %d is an integer for a star-rating */
		$stars    = 5;
		$content .= sprintf( __( 'Demo Content %d something', 'multilingual-wp4devs' ), $stars );
		$content .= sprintf( _n( '%d star', '%d stars', $stars, 'multilingual-wp4devs' ), $stars );

		return $content;
	}

	public static function add_meta( string $meta ): void {
		_e( 'Demo Content', 'multilingual-wp4devs' );
		_ex( 'Demo Meta', 'other-context', 'multilingual-wp4devs' );
	}
}
