<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\Article\FakeArticlePresentationService' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/Article/ArticlePresentationInterface.php';
include_once $this->targetDirs[3].'/src/Service/Article/FakeArticlePresentationService.php';

return $this->privates['App\\Service\\Article\\FakeArticlePresentationService'] = new \App\Service\Article\FakeArticlePresentationService();
