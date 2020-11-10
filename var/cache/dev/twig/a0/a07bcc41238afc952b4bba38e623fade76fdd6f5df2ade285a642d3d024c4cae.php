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

/* vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml */
class __TwigTemplate_ad6a25e44642b29f97a69a9086fca8d5e9cc0cf1d46e21dc35a71827c1a15676 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml"));

        // line 1
        echo "
services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo
        public: true
        tags:
            - { name: tag, k: v }
        lazy: true
        properties: { p: 1 }
        calls:
            - [setFoo, ['@foo']]

        shared: false
        configurator: c
    foo:
        class: App\\FooService
        public: true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo
        public: true
        tags:
            - { name: tag, k: v }
        lazy: true
        properties: { p: 1 }
        calls:
            - [setFoo, ['@foo']]

        shared: false
        configurator: c
    foo:
        class: App\\FooService
        public: true
", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.expected.yml");
    }
}
