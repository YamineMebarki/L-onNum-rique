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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml */
class __TwigTemplate_5420170cec1b7a24965066bcf561cd4211bb0e3cc5649592a1af27bca5b5cbd6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml"));

        // line 1
        echo "
services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    foo_service:
        class: Foo
        tags:
            - { name: foo }
    foo_service_tagged_iterator:
        class: Bar
        arguments: [!tagged { tag: foo, index_by: barfoo, default_index_method: foobar }]
    foo_service_tagged_locator:
        class: Bar
        arguments: [!tagged_locator { tag: foo, index_by: barfoo, default_index_method: foobar }]
    bar_service_tagged_locator:
        class: Bar
        arguments: [!tagged_locator foo]
    Psr\\Container\\ContainerInterface:
        alias: service_container
        public: false
    Symfony\\Component\\DependencyInjection\\ContainerInterface:
        alias: service_container
        public: false
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml";
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
    foo_service:
        class: Foo
        tags:
            - { name: foo }
    foo_service_tagged_iterator:
        class: Bar
        arguments: [!tagged { tag: foo, index_by: barfoo, default_index_method: foobar }]
    foo_service_tagged_locator:
        class: Bar
        arguments: [!tagged_locator { tag: foo, index_by: barfoo, default_index_method: foobar }]
    bar_service_tagged_locator:
        class: Bar
        arguments: [!tagged_locator foo]
    Psr\\Container\\ContainerInterface:
        alias: service_container
        public: false
    Symfony\\Component\\DependencyInjection\\ContainerInterface:
        alias: service_container
        public: false
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services_with_tagged_argument.yml");
    }
}
