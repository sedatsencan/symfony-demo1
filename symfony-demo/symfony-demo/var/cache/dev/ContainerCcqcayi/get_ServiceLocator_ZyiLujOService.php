<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zyiLujO' shared service.

return $this->privates['.service_locator.zyiLujO'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('post' => function (): \App\Entity\Post {
    return ($this->privates['.errored..service_locator.zyiLujO.App\Entity\Post'] ?? $this->load('getPost2Service.php'));
}));
