<?php
namespace Splice\Requirements;

use Splice\SpliceTestCase;
use Splice\Dummies\DummyHeaderComponent;

class ComponentRequirementTest extends SpliceTestCase
{
	public function testCanResolveComponentRequirement()
	{
		$requirement = new ComponentRequirement('foobar', DummyHeaderComponent::class, ['header' => 'foobar']);
		$requirement->setAssembler($this->app['assembler']);

		$this->assertEquals('<h1>foobar</h1>', $requirement->resolve());
	}
}
