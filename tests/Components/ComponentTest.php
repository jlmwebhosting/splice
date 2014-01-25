<?php
namespace Splice\Components;

use Splice\SpliceTestCase;
use Splice\Dummies\DummyComponent;

class ComponentTest extends SpliceTestCase
{
	public function testCanGetContentsOfComponentTemplate()
	{
		$template  = __DIR__.'/../views/test-view.mustache';
		$component = $this->getDummyComponent();

//		$this->assertEquals(file_get_contents($template), $component->getTemplate());
	}
}
