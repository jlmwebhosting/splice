<?php
namespace Splice\Interfaces;

/**
 * An interface for a basic component
 */
interface ComponentInterface
{
	/**
	 * Collect the data to pass to the component
	 *
	 * @return array
	 */
	public function collect();

	/**
	 * Get the contents of the component's template
	 *
	 * @return string
	 */
	public function getTemplate();
}