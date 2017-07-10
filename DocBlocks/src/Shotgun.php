<?php declare(strict_types = 1);


class Shotgun implements IGun
{
	public function eliminate(Target $target)
	{
		unset($target);
	}
}
