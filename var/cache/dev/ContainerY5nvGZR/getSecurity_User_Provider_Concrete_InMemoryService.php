<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.in_memory' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/InMemoryUserProvider.php';

return $this->privates['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(array('Erwan' => array('password' => '$2y$12$.h.7EWbxoYb1sakKbaqYJu5LCs9lGHASJ5VuEdqPA2xV2q2WSTyqO', 'roles' => array(0 => 'ROLE_ADMIN'))));
