<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4aXVz2j' shared service.

return $this->privates['.service_locator.4aXVz2j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\DefaultController::article' => ['privates', '.service_locator.PG_ssMi', 'get_ServiceLocator_PGSsMiService.php', true],
    'App\\Controller\\DefaultController::index' => ['privates', '.service_locator.PG_ssMi', 'get_ServiceLocator_PGSsMiService.php', true],
    'App\\Controller\\DefaultController:article' => ['privates', '.service_locator.PG_ssMi', 'get_ServiceLocator_PGSsMiService.php', true],
    'App\\Controller\\DefaultController:index' => ['privates', '.service_locator.PG_ssMi', 'get_ServiceLocator_PGSsMiService.php', true],
], [
    'App\\Controller\\DefaultController::article' => '?',
    'App\\Controller\\DefaultController::index' => '?',
    'App\\Controller\\DefaultController:article' => '?',
    'App\\Controller\\DefaultController:index' => '?',
]);
