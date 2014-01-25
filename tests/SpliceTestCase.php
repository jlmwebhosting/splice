<?php
namespace Splice;

use Mustache_Engine;
use PHPUnit_Framework_TestCase;
use Splice\SpliceServiceProvider;

/**
 * Basic test case for all Splice tests
 */
abstract class SpliceTestCase extends PHPUnit_Framework_TestCase
{
	/**
	 * The tests container
	 *
	 * @var Container
	 */
	protected $app;

	/**
	 * Setup the tests
	 */
	public function setUp()
	{
		$this->app = SpliceServiceProvider::make();

		// Bind the Mustache templating engine
		$this->app->bind('mustache', function() {
			return new Mustache_Engine;
		});
	}
}
