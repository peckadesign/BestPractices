<?php declare(strict_types = 1);


class Hackgun implements IGun
{
	/**
	 * @param ArtificialIntelligenceTarget $target
	 */
	public function eliminate(ITarget $target)
	{
		$target->consumeInstruction("echo 'I\'m dead, Jim!';die();");
	}
}
