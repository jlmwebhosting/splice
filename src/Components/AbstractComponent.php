<?php
namespace Splice\Components;

use Splice\Interfaces\ComponentInterface;

/**
 * A representation of an individual component
 */
abstract class AbstractComponent implements ComponentInterface
{
	/**
	 * The data to be passed to the component
	 *
	 * @var array
	 */
	public $data;

	/**
	 * The path to the Component's template
	 *
	 * @var string
	 */
	protected $path;

	/**
	 * Build a new Component instance
	 */
	public function __construct(array $data = array())
	{
		$this->data = $data;
	}

	/**
	 * Render the component
	 *
	 * @return string
	 */
	public function render($view)
	{
		return $view->render($this->path, $this->data);
	}
}
