<?php declare(strict_types = 1);

namespace App\Presenters;

use App;
use Base;

class AnotherPresenter extends Base\Presenters\SomePresenter
{
	/**
	 * @var Base\Services\AnotherBaseService
	 */
	private $anotherBaseService;

	/**
	 * @var App\Services\AppService
	 */
	private $appService;


	public function __construct(
		Base\Services\BaseService $baseService,
		Base\Services\AnotherBaseService $anotherBaseService,
		App\Services\AppService $appService
	) {
		parent::__construct($baseService, $anotherBaseService);
		$this->anotherBaseService = $anotherBaseService; // chci pracovat s anotherBaseService v tomto presenteru
		$this->appService = $appService;
	}


	public function doThatWhichIDesire(): void
	{
		$this->anotherBaseService->gimmeFuel();
		$this->appService->gimmeFire();
	}
}
