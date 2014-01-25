<?php
namespace Splice;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;

/**
 * Base service provider for Splice
 */
class SpliceServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// ...
	}

	/**
	 * Bind the Splice classes to a Container
	 *
	 * @param Container $app
	 *
	 * @return Container
	 */
	public static function make(Container $app = null)
	{
		// Create a new Container if necessart
		if (!$app) {
			$app = new Container;
		}

		return $app;
	}
}
