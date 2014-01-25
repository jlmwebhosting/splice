<?php
namespace Splice\Dummies;

use Splice\Components\AbstractComponent;

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
		yield array(
			'users',
			array(
				['name' => 'foo'],
				['name' => 'bar'],
			),
		);

		yield array(
			'header',
			'HEADER',
		);
	}
}