<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\BlogController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/BlogController.php';

$this->services['App\Controller\BlogController'] = $instance = new \App\Controller\BlogController();

$instance->setContainer(($this->privates['.service_locator.1cY6ruu'] ?? $this->load('get_ServiceLocator_1cY6ruuService.php'))->withContext('App\\Controller\\BlogController', $this));

return $instance;
