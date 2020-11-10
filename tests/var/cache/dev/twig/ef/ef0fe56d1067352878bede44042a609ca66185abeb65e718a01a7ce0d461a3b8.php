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

/* vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml */
class __TwigTemplate_d72ef5c7838fdac1c6b708ca4b635df50c9ea999f71b4ee9c2f27b875f2419ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml"));

        // line 1
        echo "imports:
    - { resource: ../config/default.yml }

services:
    dummy:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\DeclaredClass
        arguments: ['@cache.private_pool']
        public: true
    custom_clearer:
        parent: cache.default_clearer
        tags:
            - name: kernel.cache_clearer

framework:
    cache:
        pools:
            cache.private_pool: ~
            cache.public_pool:
                public: true
            cache.pool_with_clearer:
                public: true
                clearer: custom_clearer
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ../config/default.yml }

services:
    dummy:
        class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\DeclaredClass
        arguments: ['@cache.private_pool']
        public: true
    custom_clearer:
        parent: cache.default_clearer
        tags:
            - name: kernel.cache_clearer

framework:
    cache:
        pools:
            cache.private_pool: ~
            cache.public_pool:
                public: true
            cache.pool_with_clearer:
                public: true
                clearer: custom_clearer
", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/CachePoolClear/config.yml");
    }
}
