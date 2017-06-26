<?php

include __DIR__ . '/bootstrap.php';


class FunctionTest extends Tester\TestCase
{

	public function testHelloWorld()
	{
		$output = helloWorld();

		Tester\Assert::equal('Hello world', $output);
	}
}

(new FunctionTest())->run();
