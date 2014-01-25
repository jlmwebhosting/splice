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
	 * The data to be passed to the components
	 *
	 * @var array
	 */
	protected $data = array();

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
			list ($property, $data) = $requirement;
			$this->data[$property] = $data;
		}

		// Get and render the template
		$template = $component->getTemplate();
		$template = $this->view->render($template, $this->data);

		return trim($template);
	}
}