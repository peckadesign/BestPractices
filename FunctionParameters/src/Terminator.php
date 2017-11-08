<?php declare(strict_types = 1);

namespace FunctionParameters;


class Terminator
{

	/**
	 * @var bool
	 */
	private $booted;


	/**
	 * No parameters
	 */
	public function boot() : bool
	{
		$this->booted = TRUE;

		return $this->booted;
	}

	/**
	 * One parameter
	 */
	public function seekAndDestroy(
		\FunctionParameters\TargetCollection $targets
	) : void
	{
	}


	/**
	 * Multiple parameters
	 */
	public function maintenance(
		\FunctionParameters\GunCollection $guns,
		\FunctionParameters\PowerSource $powerSource,
		\FunctionParameters\ExoSkeleton $exoSkeleton
	) : \FunctionParameters\MaintenanceReport
	{
		$gunStatuses= [];
		foreach ($guns as $gun) {
			$gunStatuses[] = $gun->maintenance();
		}
		return new \FunctionParameters\MaintenanceReport(
			$powerSource->maintenance(),
			$exoSkeleton->maintenance(),
			$gunStatuses
		);
	}
}
