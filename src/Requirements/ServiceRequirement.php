<?php
namespace Splice\Requirements;

/**
 * A requirement that fetches its data for a service's method
 */
class ServiceRequirement extends AbstractRequirement
{
	/**
	 * The service to call
	 *
	 * @var Callable
	 */
	protected $service;

	/**
	 * Build a new ServiceRequirement
	 *
	 * @param string   $property
	 * @param Callable $service
	 */
	public function __construct($property, $service)
	{
		$this->property = $property;
		$this->service  = $service;
	}

	/**
	 * Resolve the requirement to a set of data
	 *
	 * @return array|string|object
	 */
	public function resolve()
	{
		return $this->service();
	}
}
