<?php declare(strict_types = 1);

namespace Base\Services;

class UserIdentityDependentService
{
	/**
	 * @var \Pd\User\User|null
	 */
	private $userIdentity;


	public function __construct(?\Pd\User\User $userIdentity)
	{
		$this->userIdentity = $userIdentity;
	}


	public function magic(): void
	{
		$userEmail = $this->userIdentity->getEmail();
	}
}
