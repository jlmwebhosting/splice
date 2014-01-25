<?php
namespace Splice\Interfaces;

/**
 * Interface for all requirements
 */
interface RequirementInterface
{
	/**
	 * Resolve the requirement to a set of data
	 *
	 * @return string|array|object
	 */
	public function resolve();
}