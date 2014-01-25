<?php
namespace Splice\Dummies;

use Splice\Components\AbstractComponent;
use Splice\Requirements\ComponentRequirement;

/**
 * A dummy component parent of a child component
 */
class DummyHeaderComponent extends AbstractComponent
{
	protected $path = 'header';

	/**
	 * Collect the data for the component
	 *
	 * @return array
	 */
	public function collect()
	{
		return array();
	}
}