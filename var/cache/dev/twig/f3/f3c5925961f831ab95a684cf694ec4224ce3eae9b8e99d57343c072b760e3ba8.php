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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml */
class __TwigTemplate_e7b0d1bd128a298dcf7389052c3f5a0e72b8a56c037e741d8b138e527f7c05d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml"));

        // line 1
        echo "imports:
    - { resource: new_and_priority_import.yml }

monolog:
    handlers:
        custom:
            type: stream
            path: /tmp/symfony.log
            bubble: true
            level: WARNING
        first:
            type: rotating_file
            path: /tmp/monolog.log
            bubble: true
            level: ERROR
            priority: 3
        last:
            type: stream
            path: /tmp/last.log
            bubble: true
            level: ERROR
            priority: -3
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: new_and_priority_import.yml }

monolog:
    handlers:
        custom:
            type: stream
            path: /tmp/symfony.log
            bubble: true
            level: WARNING
        first:
            type: rotating_file
            path: /tmp/monolog.log
            bubble: true
            level: ERROR
            priority: 3
        last:
            type: stream
            path: /tmp/last.log
            bubble: true
            level: ERROR
            priority: -3
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/new_and_priority.yml");
    }
}
