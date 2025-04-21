<?php

namespace lloc\MLWP4Devs_Tests;

use lloc\Multilingual_WP4Devs\Api_Functions;
use Brain\Monkey\Functions;

class Test_Api_Functions extends MLWP4Devs_TestCase {


	public function test_demo__(): void {
		Functions\expect( '__' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html__' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_attr__' )->once()->andReturnFirstArg();

		( new Api_Functions() )->demo__();

		$output = 'Demo TextDemo TextDemo Text';

		$this->expectOutputString( $output );
	}

	public function test_demo_e(): void {
		Functions\when( '_e' )->echoArg();
		Functions\when( 'esc_html_e' )->echoArg();
		Functions\when( 'esc_attr_e' )->echoArg();

		( new Api_Functions() )->demo_e();

		$output = 'Demo Text with _eDemo Text with esc_html_eDemo Text with esc_attr_e';
		$this->expectOutputString( $output );
	}

	public function test_demo_x(): void {
		Functions\expect( '_x' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_html' )->once()->andReturnFirstArg();
		Functions\when( '_ex' )->echoArg();
		Functions\expect( 'esc_html_x' )->once()->andReturnFirstArg();
		Functions\expect( 'esc_attr_x' )->once()->andReturnFirstArg();

		( new Api_Functions() )->demo_x();

		$output = 'Demo Text with _xDemo Text with _exDemo Text with esc_html_xDemo Text with esc_attr_x';
		$this->expectOutputString( $output );
	}

	public function test_demo_n(): void {
		Functions\expect( '__' )->once()->andReturnFirstArg();
		Functions\expect( '_n' )->twice()->andReturnUsing(
			function ( $single, $plural, $number ) {
				return $number === 1 ? $single : $plural;
			}
		);

		$output = 'Demo Content - Any string1 star5 stars';
		$this->assertSame( $output, ( new Api_Functions() )->demo_n() );
	}
}
