<?php
namespace Splice\Requirements;

use Splice\Interfaces\RequirementInterface;

/**
 * An abstract class for all requirements
 */
abstract class AbstractRequirement implements RequirementInterface
{
	/**
	 * The property to set on the component
	 *
	 * @var string
	 */
	protected $property;

	/**
	 * Get the property set on the component
	 *
	 * @return string
	 */
	public function getProperty()
	{
		return $this->property;
	}
}
