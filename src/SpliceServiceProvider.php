<?php
namespace Splice;

use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;
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
		$this->app = static::make($this->app);
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

		$provider = new static($app);
		$app = $provider->bindSpliceClasses($app);

		return $app;
	}

	////////////////////////////////////////////////////////////////////
	/////////////////////////////// BINDINGS ///////////////////////////
	////////////////////////////////////////////////////////////////////

	/**
	 * Bind Splice classes to the Container
	 *
	 * @param Container $app
	 *
	 * @return Container
	 */
	public function bindSpliceClasses(Container $app)
	{
		// Bind the Mustache templating engine if necessary
		$app->bindIf('view', function ($app) {
			$mustache = new Mustache_Engine;
			$mustache->setLoader(new Mustache_Loader_FilesystemLoader($app['path.views']));

			return $mustache;
		});

		// Bind the assembler
		$app->bind('assembler', function ($app) {
			return new Assembler($app['view']);
		});

		return $app;
	}
}
