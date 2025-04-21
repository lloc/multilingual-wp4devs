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

		$output = 'Demo__ TextDemo__ TextDemo__ Text';

		$this->expectOutputString( $output );
	}

	public function test_demo_e(): void {
		Functions\when( '_e' )->echoArg();
		Functions\when( 'esc_html_e' )->echoArg();
		Functions\when( 'esc_attr_e' )->echoArg();

		( new Api_Functions() )->demo_e();

		$output = 'Demo_e TextDemo_e TextDemo_e Text';
		$this->expectOutputString( $output );
	}

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

	public function test_demo_n(): void {
		Functions\expect( '_n' )->twice()->andReturnUsing(
			function ( $single, $plural, $number ) {
				return $number === 1 ? $single : $plural;
			}
		);

		$output = '1 star5 stars';
		$this->assertSame( $output, ( new Api_Functions() )->demo_n() );
	}

    public function test_demo_(): void {
        Functions\expect( '__' )->once()->andReturnFirstArg();
        Functions\expect( 'wp_kses_post' )->once()->andReturnFirstArg();

        ( new Api_Functions() )->demo_placeholders();

        $output = 'Demo Content - A and B';
        $this->expectOutputString( $output );
    }

}
