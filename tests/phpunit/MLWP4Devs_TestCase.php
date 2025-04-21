<?php

namespace lloc\MLWP4Devs_Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey;
use PHPUnit\Framework\TestCase;

class MLWP4Devs_TestCase extends TestCase {


	use MockeryPHPUnitIntegration;

	protected function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}
}
