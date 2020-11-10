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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml */
class __TwigTemplate_af527988cc5e3ba79126a7cc07c34f278d9b6a03f09dbe1194ec439a6c1b3a37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml"));

        // line 1
        echo "services:
    App\\Db:
        public: true
        properties:
            schema: '@App\\Schema'

    App\\Bus:
        public: true
        arguments: ['@App\\Db']
        properties:
            handler1: '@App\\Handler1'
            handler2: '@App\\Handler2'

    App\\Handler1:
        ['@App\\Db', '@App\\Schema', '@App\\Processor']

    App\\Handler2:
        ['@App\\Db', '@App\\Schema', '@App\\Processor']

    App\\Processor:
        ['@App\\Registry', '@App\\Db']

    App\\Registry:
        properties:
            processor: ['@App\\Db', '@App\\Bus']

    App\\Schema:
        arguments: ['@App\\Db']
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    App\\Db:
        public: true
        properties:
            schema: '@App\\Schema'

    App\\Bus:
        public: true
        arguments: ['@App\\Db']
        properties:
            handler1: '@App\\Handler1'
            handler2: '@App\\Handler2'

    App\\Handler1:
        ['@App\\Db', '@App\\Schema', '@App\\Processor']

    App\\Handler2:
        ['@App\\Db', '@App\\Schema', '@App\\Processor']

    App\\Processor:
        ['@App\\Registry', '@App\\Db']

    App\\Registry:
        properties:
            processor: ['@App\\Db', '@App\\Bus']

    App\\Schema:
        arguments: ['@App\\Db']
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_adawson.yml");
    }
}
