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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml */
class __TwigTemplate_00a7fa4c1865f20fa899ff5642e38d3a1b2a66029e8227ddff228855bbd9ce11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml"));

        // line 1
        echo "
services:
    foo:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph
        public: true
        arguments:
            - '@bar'
            - !service
                class: stdClass
                properties:
                    p2: !service
                        class: stdClass
                        properties:
                            p3: !service
                                class: stdClass

    bar:
        class: stdClass
        public: true
        properties:
            p5: !service
                class: stdClass
                arguments: ['@foo']

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
services:
    foo:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph
        public: true
        arguments:
            - '@bar'
            - !service
                class: stdClass
                properties:
                    p2: !service
                        class: stdClass
                        properties:
                            p3: !service
                                class: stdClass

    bar:
        class: stdClass
        public: true
        properties:
            p5: !service
                class: stdClass
                arguments: ['@foo']

", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_deep_graph.yml");
    }
}
