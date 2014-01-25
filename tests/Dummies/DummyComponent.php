<?php
namespace Splice\Dummies;

use Splice\Components\AbstractComponent;
use Splice\Requirements\StaticRequirement;

/**
 * A dummy component
 */
class DummyComponent extends AbstractComponent
{
	/**
	 * Collect the data for the component
	 *
	 * @return array
	 */
	public function collect()
	{
		yield new StaticRequirement(
			'users',
			array(
				['name' => 'foo'],
				['name' => 'bar'],
			)
		);

		yield new StaticRequirement(
			'header',
			'HEADER'
		);
	}
}