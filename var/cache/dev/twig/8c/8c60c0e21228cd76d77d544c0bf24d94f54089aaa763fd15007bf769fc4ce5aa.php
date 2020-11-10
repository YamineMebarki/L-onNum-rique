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

/* vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml */
class __TwigTemplate_4614be96b6489891d449fa006eb3ba24a7d4bf1e4ae74f49bd8a336f8c0c1c3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml"));

        // line 1
        echo "imports:
    - { resource: ../config/default.yml }

parameters:
    env(REDIS_HOST): 'localhost'

framework:
    cache:
        app: cache.adapter.redis
        default_redis_provider: \"redis://%env(REDIS_HOST)%\"
        pools:
            cache.pool1:
                public: true
                clearer: cache.system_clearer
            cache.pool2:
                public: true
                clearer: ~
            cache.pool3:
                clearer: ~
            cache.pool4:
                tags: true
                public: true
            cache.pool5:
                tags: cache.pool2
                public: true
            cache.pool6:
                tags: cache.pool4
                public: true
            cache.pool7:
                adapter: cache.pool4
                public: true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ../config/default.yml }

parameters:
    env(REDIS_HOST): 'localhost'

framework:
    cache:
        app: cache.adapter.redis
        default_redis_provider: \"redis://%env(REDIS_HOST)%\"
        pools:
            cache.pool1:
                public: true
                clearer: cache.system_clearer
            cache.pool2:
                public: true
                clearer: ~
            cache.pool3:
                clearer: ~
            cache.pool4:
                tags: true
                public: true
            cache.pool5:
                tags: cache.pool2
                public: true
            cache.pool6:
                tags: cache.pool4
                public: true
            cache.pool7:
                adapter: cache.pool4
                public: true
", "vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/CachePools/redis_config.yml");
    }
}
