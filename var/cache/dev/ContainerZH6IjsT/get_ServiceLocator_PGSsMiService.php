<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PG_ssMi' shared service.

return $this->privates['.service_locator.PG_ssMi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'articlePresentation' => ['privates', 'App\\Service\\Article\\FakeArticlePresentationService', 'getFakeArticlePresentationServiceService.php', true],
], [
    'articlePresentation' => '?',
]);