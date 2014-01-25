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
	 * The arguments to pass to the service
	 *
	 * @var array
	 */
	protected $arguments;

	/**
	 * Build a new ServiceRequirement
	 *
	 * @param string   $property
	 * @param Callable $service
	 */
	public function __construct($property, $service, array $arguments = array())
	{
		$this->property  = $property;
		$this->service   = $service;
		$this->arguments = $arguments;
	}

	/**
	 * Resolve the requirement to a set of data
	 *
	 * @return array|string|object
	 */
	public function resolve()
	{
		// Instantiate service
		list ($class, $method) = $this->service;
		$service = new $class;

		return call_user_func_array([$service, $method], $this->arguments);
	}
}
