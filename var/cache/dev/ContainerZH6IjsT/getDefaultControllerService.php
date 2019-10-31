<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\DefaultController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/DefaultController.php';

$this->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'session' => ['services', 'session', 'getSessionService.php', true],
    'twig' => ['services', 'twig', 'getTwigService.php', true],
], [
    'http_kernel' => '?',
    'parameter_bag' => '?',
    'request_stack' => '?',
    'router' => '?',
    'session' => '?',
    'twig' => '?',
]))->withContext('App\\Controller\\DefaultController', $this));

return $instance;
