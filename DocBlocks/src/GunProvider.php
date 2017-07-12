<?php declare(strict_types = 1);


class GunProvider
{
	public function acquireGun(ITarget $target): IGun
	{
		return $target instanceof ArtificialIntelligenceTarget ? new Hackgun() : new Shotgun();
	}
}
