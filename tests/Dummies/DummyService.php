<?php
namespace Splice\Dummies;

class DummyService
{
	public function getUsers($name = 'bar')
	{
		return array(['name' => 'foo'], ['name' => $name]);
	}
}
