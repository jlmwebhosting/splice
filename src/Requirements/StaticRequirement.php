<?php
namespace Splice\Requirements;

/**
 * A requirement that returns static data
 */
class StaticRequirement extends AbstractRequirement
{
	/**
	 * The service to call
	 *
	 * @var Callable
	 */
	protected $data;

	/**
	 * Build a new ServiceRequirement
	 *
	 * @param string   $property
	 * @param Callable $data
	 */
	public function __construct($property, $data)
	{
		$this->property = $property;
		$this->data     = $data;
	}

	/**
	 * Resolve the requirement to a set of data
	 *
	 * @return array|string|object
	 */
	public function resolve()
	{
		return $this->data;
	}
}
