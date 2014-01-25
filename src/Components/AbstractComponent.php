<?php
namespace Splice\Components;

use Splice\Interfaces\ComponentInterface;

/**
 * A representation of an individual component
 */
abstract class AbstractComponent implements ComponentInterface
{
	/**
	 * The path to the Component's template
	 *
	 * @var string
	 */
	protected $path;

	/**
	 * Build a new Component instance
	 */
	public function __construct($path)
	{
		$this->path = $path;
	}

	/**
	 * Get the contents of the component's template
	 *
	 * @return string
	 */
	public function getTemplate()
	{
		return file_get_contents($this->path);
	}
}
