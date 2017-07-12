<?php declare(strict_types = 1);


class ArtificialIntelligenceTarget implements ITarget
{
	public function consumeInstruction(string $command)
	{
		eval($command);
	}
}
