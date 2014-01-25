<?php
namespace Splice;

use Mockery;
use Mustache_Engine;
use PHPUnit_Framework_TestCase;
use Splice\Dummies\DummyComponent;
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

		// Bind the assembler
		$this->app->bind('assembler', function ($app) {
			return new Assembler($app['mustache']);
		});
	}

	/**
	 * Tear down the tests
	 *
	 * @return void
	 */
	public function tearDown()
	{
		Mockery::close();
	}

	////////////////////////////////////////////////////////////////////
	/////////////////////////////// DUMMIES ////////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Get a dummy component instance
	 *
	 * @return AbstractComponent
	 */
	protected function getDummyComponent()
	{
		return new DummyComponent(__DIR__.'/views/test-view.mustache');
	}
}
