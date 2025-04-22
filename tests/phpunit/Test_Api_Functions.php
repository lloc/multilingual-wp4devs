<?php
/**
 * Test Api_Functions
 *
 * @package lloc\MLWP4Devs_Tests
 */

namespace lloc\MLWP4Devs_Tests;

use lloc\Multilingual_WP4Devs\Api_Functions;
use Brain\Monkey\Functions;

/**
 * Class Test_Api_Functions
 */
class Test_Api_Functions extends MLWP4Devs_TestCase {

	/**
	 * Tests the __ functions.
	 *
	 * @return void
	 */
	public function test_demo__(): void {
		Functions\expect( '__' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html__' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_attr__' )->once()->andReturnFirstArg();

		( new Api_Functions() )->demo__();

		$output = 'Demo__ TextDemo__ TextDemo__ Text';

		$this->expectOutputString( $output );
	}

	/**
	 * Tests the _e functions.
	 *
	 * @return void
	 */
	public function test_demo_e(): void {
		Functions\when( '_e' )->echoArg();
		Functions\when( 'esc_html_e' )->echoArg();
		Functions\when( 'esc_attr_e' )->echoArg();

		( new Api_Functions() )->demo_e();

		$output = 'Demo_e TextDemo_e TextDemo_e Text';
		$this->expectOutputString( $output );
	}

	/**
	 * Tests the _x functions.
	 *
	 * @return void
	 */
	public function test_demo_x(): void {
		Functions\expect( '_x' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html' )->once()->andReturnFirstArg();
		Functions\when( '_ex' )->echoArg();
		Functions\expect( 'esc_html_x' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_attr_x' )->once()->andReturnFirstArg();

		( new Api_Functions() )->demo_x();

		$output = 'Demo_x TextDemo_x TextDemo_x TextDemo_x Text';
		$this->expectOutputString( $output );
	}

	/**
	 * Tests the _n functions.
	 *
	 * @return void
	 */
	public function test_demo_n(): void {
		Functions\expect( '_n' )->twice()->andReturnUsing(
			function ( $single, $plural, $number ) {
				return 1 === $number ? $single : $plural;
			}
		);

		$output = '1 star5 stars';
		$this->assertSame( $output, ( new Api_Functions() )->demo_n() );
	}

	/**
	 * Tests the demo_placeholders method.
	 *
	 * @return void
	 */
	public function test_demo_placeholders(): void {
		Functions\expect( '__' )->once()->andReturnFirstArg();
		Functions\expect( 'wp_kses_post' )->once()->andReturnFirstArg();

		( new Api_Functions() )->demo_placeholders();

		$output = 'Demo Content - A and B';
		$this->expectOutputString( $output );
	}

	/**
	 * Tests the demo_date_i18n method.
	 *
	 * @return void
	 */
	public function test_demo_date_i18n() {
		Functions\expect( 'get_option' )->twice()->andReturn( 'F j, Y' );
		Functions\expect( 'date_i18n' )->twice()->andReturn( 'January 1, 2023' );
		Functions\expect( 'esc_html' )->twice()->andReturnFirstArg();

		( new Api_Functions() )->demo_date_i18n();

		$this->expectOutputString( 'January 1, 2023January 1, 2023' );
	}

	/**
	 * Test the demo_number_format_i18n method.
	 *
	 * @return void
	 */
	public function test_demo_number_format_i18n() {
		Functions\expect( 'number_format_i18n' )->twice()->andReturnUsing(
			function ( $number, $decimals = 0 ) {
				return number_format( $number, $decimals, '.', ',' );
			}
		);
		Functions\expect( 'esc_html' )->twice()->andReturnFirstArg();

		( new Api_Functions() )->demo_number_format_i18n();

		$this->expectOutputString( '1,234,5681,234,567.89' );
	}
}
