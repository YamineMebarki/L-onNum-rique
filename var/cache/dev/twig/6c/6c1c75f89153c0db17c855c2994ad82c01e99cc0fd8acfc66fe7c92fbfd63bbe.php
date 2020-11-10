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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml */
class __TwigTemplate_9a8150c847c355cdbc72eb05d08381bc5ea07220bf6a1b857e0af2bf9f3b73ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml"));

        // line 1
        echo "parameters:
    project_dir: '/foo/bar'
    env(FOO): foo
    env(DB): 'sqlite://%%project_dir%%/var/data.db'
    bar: '%env(FOO)%'
    baz: '%env(int:Baz)%'
    json: '%env(json:file:json_file)%'
    db_dsn: '%env(resolve:DB)%'

services:
    test:
        public: true
        class: '%env(FOO)%'
        arguments:
            - '%env(Bar)%'
            - 'foo%bar%baz'
            - '%baz%'
    bar:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Bar
        public: true
        bind:
            \$quz: '%env(QUZ)%'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    project_dir: '/foo/bar'
    env(FOO): foo
    env(DB): 'sqlite://%%project_dir%%/var/data.db'
    bar: '%env(FOO)%'
    baz: '%env(int:Baz)%'
    json: '%env(json:file:json_file)%'
    db_dsn: '%env(resolve:DB)%'

services:
    test:
        public: true
        class: '%env(FOO)%'
        arguments:
            - '%env(Bar)%'
            - 'foo%bar%baz'
            - '%baz%'
    bar:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Bar
        public: true
        bind:
            \$quz: '%env(QUZ)%'
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services26.yml");
    }
}
