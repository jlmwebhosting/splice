<?php
namespace Splice\Requirements;

use Splice\SpliceTestCase;

class ServiceRequirementTest extends SpliceTestCase
{
	public function testCanResolveServiceRequirement()
	{
		$requirement = new ServiceRequirement('foobar', ['Splice\Dummies\DummyService', 'getUsers']);

		$this->assertEquals(array(['name' => 'foo'], ['name' => 'bar']), $requirement->resolve());
	}

	public function testCanResolveServiceRequirementWithArguments()
	{
		$requirement = new ServiceRequirement('foobar', ['Splice\Dummies\DummyService', 'getUsers'], ['test']);

		$this->assertEquals(array(['name' => 'foo'], ['name' => 'test']), $requirement->resolve());
	}
}
