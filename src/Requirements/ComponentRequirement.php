<?php
namespace Splice\Requirements;

use Splice\Assembler;

/**
 * A requirement that returns another Component
 */
class ComponentRequirement extends AbstractRequirement
{
	/**
	 * The class of the component
	 *
	 * @var string
	 */
	protected $component;

	/**
	 * The data to prefill on the child component
	 *
	 * @var array
	 */
	protected $data;

	/**
	 * The assembler to use
	 *
	 * @var Assembler
	 */
	protected $assembler;

	/**
	 * Build a new ComponentRequirement
	 *
	 * @param string $property
	 * @param string $component
	 * @param array  $data
	 */
	public function __construct($property, $component, $data)
	{
		$this->property  = $property;
		$this->component = $component;
		$this->data      = $data;
	}

	/**
	 * Set the assembler to use to compile the requirement
	 *
	 * @param Assembler $assembler
	 */
	public function setAssembler(Assembler $assembler)
	{
		$this->assembler = $assembler;
	}

	/**
	 * Resolve the requirement to a set of data
	 *
	 * @return array|string|object
	 */
	public function resolve()
	{
		return $this->assembler->render($this->component, $this->data);
	}
}
