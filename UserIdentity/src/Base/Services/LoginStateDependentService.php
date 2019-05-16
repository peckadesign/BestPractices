<?php declare(strict_types = 1);

namespace Base\Services;


class LoginStateDependentService
{
	/**
	 * @var \Nette\Security\IUserStorage
	 */
	private $userStorage;


	public function __construct(\Nette\Security\IUserStorage $userStorage)
	{
		$this->userStorage = $userStorage;
	}


	public function process(): void
	{
		if ($this->userStorage->isAuthenticated()) {
			// magic happens
		}
	}
}
