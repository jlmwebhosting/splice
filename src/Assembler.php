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
	 * Render a component by name
	 *
	 * @param string $component
	 *
	 * @return string
	 */
	public function render($component, array $data = array())
	{
		return $this->assemble(new $component($data));
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
			if ($requirement instanceof ComponentRequirement) {
				$requirement->setAssembler($this);
			}

			$component->data[$requirement->getProperty()] = $requirement->resolve();
		}

		// Render the template
		$template = $component->render($this->view);
		$template = trim($template);

		return $template;
	}
}
