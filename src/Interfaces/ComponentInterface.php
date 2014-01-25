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
	 * Render the component
	 *
	 * @param ViewRendererInterface $view
	 *
	 * @return string
	 */
	public function render($view);
}