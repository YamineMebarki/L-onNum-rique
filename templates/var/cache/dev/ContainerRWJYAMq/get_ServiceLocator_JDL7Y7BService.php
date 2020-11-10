<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JDL7Y7B' shared service.

return $this->privates['.service_locator.JDL7Y7B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
    'repoArticle' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService.php', true],
], [
    'repo' => 'App\\Repository\\UserRepository',
    'repoArticle' => 'App\\Repository\\ArticleRepository',
]);