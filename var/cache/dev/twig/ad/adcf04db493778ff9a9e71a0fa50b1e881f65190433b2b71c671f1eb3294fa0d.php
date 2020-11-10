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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml */
class __TwigTemplate_febc3c94118eddbc3f9a267696bfeb5ea5bd26acd3d1cee86013760b6abee06b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml"));

        // line 1
        echo "parameters:
    foo: '%baz%'
    baz: bar
    bar: 'foo is %%foo bar'
    escape: '@@escapeme'
    values: [true, false, null, 0, 1000.3, 'true', 'false', 'null']
    binary: !!binary 8PDw8A==
    binary-control-char: !!binary VGhpcyBpcyBhIEJlbGwgY2hhciAH

services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
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
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    foo: '%baz%'
    baz: bar
    bar: 'foo is %%foo bar'
    escape: '@@escapeme'
    values: [true, false, null, 0, 1000.3, 'true', 'false', 'null']
    binary: !!binary 8PDw8A==
    binary-control-char: !!binary VGhpcyBpcyBhIEJlbGwgY2hhciAH

services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    Psr\\Container\\ContainerInterface:
        alias: service_container
        public: false
    Symfony\\Component\\DependencyInjection\\ContainerInterface:
        alias: service_container
        public: false
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services8.yml");
    }
}
