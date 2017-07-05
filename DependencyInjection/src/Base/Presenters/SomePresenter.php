<?php declare(strict_types = 1);

namespace Base\Presenters;

use Base;

class SomePresenter
{
	/**
	 * @var Base\Services\BaseService
	 */
	private $baseService;

	/**
	 * @var Base\Services\AnotherBaseService
	 */
	private $anotherBaseService;


	public function __construct(
		Base\Services\BaseService $baseService,
		Base\Services\AnotherBaseService $anotherBaseService
	) {
		$this->baseService = $baseService;
		$this->anotherBaseService = $anotherBaseService;
	}
}
