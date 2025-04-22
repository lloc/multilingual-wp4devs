<?php
/**
 * Parent TestCase Class
 *
 * @package lloc\MLWP4Devs_Tests
 */

namespace lloc\MLWP4Devs_Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey;
use PHPUnit\Framework\TestCase;

/**
 * Class MLWP4Devs_TestCase
 */
class MLWP4Devs_TestCase extends TestCase {

	use MockeryPHPUnitIntegration;

	/**
	 * Tear down the test case.
	 *
	 * @return void
	 */
	protected function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}
}
