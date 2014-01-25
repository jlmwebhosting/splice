<?php
namespace Splice\Requirements;

use Splice\SpliceTestCase;

class StaticRequirementTest extends SpliceTestCase
{
	public function testCanResolveStaticRequirement()
	{
		$requirement = new StaticRequirement('foobar', ['foo', 'bar']);

		$this->assertEquals(['foo', 'bar'], $requirement->resolve());
	}
}
