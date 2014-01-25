<?php
namespace Splice;

/**
 * Tests for the Assembler class
 */
class AssemblerTest extends SpliceTestCase
{
	public function testCanCompileSingleComponent()
	{
		$component = $this->getDummyComponent();
		$template  = $this->app['assembler']->assemble($component);

		$this->assertEquals(
			'<h1>HEADER</h1>'.PHP_EOL.
			'foo<br>'.PHP_EOL.
			'bar<br>',
			$template
		);
	}
}
