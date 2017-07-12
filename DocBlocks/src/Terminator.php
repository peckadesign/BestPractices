<?php declare(strict_types = 1);


class Terminator
{
	/**
	 * @var IVisualProcessor
	 */
	private $targetProcessor;

	/**
	 * @var GunProvider
	 */
	private $gunProvider;


	public function __construct(IVisualProcessor $targetProcessor, GunProvider $gunProvider)
	{
		$this->targetProcessor = $targetProcessor;
		$this->gunProvider = $gunProvider;
	}


	/**
	 * This is Terminator's purpose - to seek and destroy defined targets with final state of void (no targets left).
	 */
	public function seekAndDestroy(): void
	{
		/** @var Target $potentialTarget */
		foreach ($this->targetProcessor->acquireTargets() as $potentialTarget) {
			$gun = $this->gunProvider->acquireGun($potentialTarget);
			// evaluate target ... yeah, kill it:
			$gun->eliminate($potentialTarget);
		}
	}
}
