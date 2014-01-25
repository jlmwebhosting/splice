<?php
namespace Splice\Dummies;

use Splice\Components\AbstractComponent;

/**
 * A dummy component parent of a child component
 */
class DummyParentComponent extends AbstractComponent
{
	protected $path = 'parent';

	/**
	 * Collect the data for the component
	 *
	 * @return array
	 */
	public function collect()
	{
		yield new WidgetRequirement(
			DummyHeaderComponent::class,
			array(
				'header' => 'HEADERYAY'
			)
		);
	}
}
