<?php
namespace Splice\Interfaces;

/**
 * An interface for a templating engine
 */
interface ViewRendererInterface
{
	/**
	 * Compile a given template string
	 *
	 * @param string $template
	 * @param array  $data
	 *
	 * @return string
	 */
	public function compile($template, array $data = array());

	/**
	 * Renders a view at a given path
	 *
	 * @param string $path
	 * @param array  $data
	 *
	 * @return string
	 */
	public function render($path, array $data = array());
}