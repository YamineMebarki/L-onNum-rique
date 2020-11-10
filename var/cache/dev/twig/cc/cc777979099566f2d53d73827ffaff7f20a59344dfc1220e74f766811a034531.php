<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* config/packages/prod/doctrine.yaml */
class __TwigTemplate_f53ebf05e862cfd63822a1c6e9f22e5ad28a613adef6fd5dd74b3f4c7e4b8645 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/prod/doctrine.yaml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/prod/doctrine.yaml"));

        // line 1
        echo "doctrine:
    orm:
        auto_generate_proxy_classes: false
        metadata_cache_driver:
            type: service
            id: doctrine.system_cache_provider
        query_cache_driver:
            type: service
            id: doctrine.system_cache_provider
        result_cache_driver:
            type: service
            id: doctrine.result_cache_provider

services:
    doctrine.result_cache_provider:
        class: Symfony\\Component\\Cache\\DoctrineProvider
        public: false
        arguments:
            - '@doctrine.result_cache_pool'
    doctrine.system_cache_provider:
        class: Symfony\\Component\\Cache\\DoctrineProvider
        public: false
        arguments:
            - '@doctrine.system_cache_pool'

framework:
    cache:
        pools:
            doctrine.result_cache_pool:
                adapter: cache.app
            doctrine.system_cache_pool:
                adapter: cache.system
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "config/packages/prod/doctrine.yaml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("doctrine:
    orm:
        auto_generate_proxy_classes: false
        metadata_cache_driver:
            type: service
            id: doctrine.system_cache_provider
        query_cache_driver:
            type: service
            id: doctrine.system_cache_provider
        result_cache_driver:
            type: service
            id: doctrine.result_cache_provider

services:
    doctrine.result_cache_provider:
        class: Symfony\\Component\\Cache\\DoctrineProvider
        public: false
        arguments:
            - '@doctrine.result_cache_pool'
    doctrine.system_cache_provider:
        class: Symfony\\Component\\Cache\\DoctrineProvider
        public: false
        arguments:
            - '@doctrine.system_cache_pool'

framework:
    cache:
        pools:
            doctrine.result_cache_pool:
                adapter: cache.app
            doctrine.system_cache_pool:
                adapter: cache.system
", "config/packages/prod/doctrine.yaml", "/var/www/public/DevLaon/templates/config/packages/prod/doctrine.yaml");
    }
}
