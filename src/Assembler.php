<?php
namespace Splice;

use Splice\Interfaces\ComponentInterface;
use Splice\Interfaces\ViewRendererInterface;

/**
 * Assembles one or more views
 */
class Assembler
{
	/**
	 * The ViewRendererInterface implementation
	 *
	 * @var ViewRendererInterface
	 */
	protected $view;

	/**
	 * Build a new Assembler
	 *
	 * @param ViewRendererInterface $view
	 */
	public function __construct($view)
	{
		$this->view = $view;
	}

	/**
	 * Assemble a particular component
	 *
	 * @param ComponentInterface $component
	 *
	 * @return string
	 */
	public function assemble(ComponentInterface $component)
	{
		// Collect the required data
		foreach ($component->collect() as $requirement) {
			$component->data[$requirement->getProperty()] = $requirement->resolve();
		}

		// Get and render the template
		$template = $component->getTemplate();
		$template = $this->view->render($template, $component->data);

		return trim($template);
	}
}