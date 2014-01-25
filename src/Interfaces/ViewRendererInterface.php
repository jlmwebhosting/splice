<?php
namespace Splice\Interfaces;

/**
 * An interface for a templating engine
 */
interface ViewRendererInterface
{
	/**
	 * Renders a given string
	 *
	 * @param string $path
	 * @param array  $data
	 *
	 * @return string
	 */
	public function render($path, array $data = array());
}
