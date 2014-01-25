<?php
namespace Splice\Facades;

use Illuminate\Support\Facades\Facade;
use Splice\SpliceServiceProvider;

/**
 * Facade for Splice
 */
class Splice extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		// Create the container if none exists
		if (!static::$app) {
			static::$app = SpliceServiceProvider::make();
		}

		return 'splice.assembler';
	}
}
