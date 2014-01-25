<?php
namespace Splice;

use Illuminate\Container\Container;
use Mockery;
use PHPUnit_Framework_TestCase;
use Splice\Dummies\DummyComponent;

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
		$this->app = new Container;
		$this->app->instance('path.views', __DIR__.'/views');

		$this->app = SpliceServiceProvider::make($this->app);
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
		return new DummyComponent;
	}
}
