<?php
namespace Splice\Components;

use Splice\Interfaces\ViewRendererInterface;

/**
 * A representation of an individual component
 */
abstract class AbstractComponent
{
	/**
	 * The ViewRenderer implementation
	 *
	 * @var ViewRendererInterface
	 */
	protected $view;

	/**
	 * Build a new Component instance
	 */
	public function __construct(ViewRendererInterface $view)
	{
		$this->view = $view;
	}
}
