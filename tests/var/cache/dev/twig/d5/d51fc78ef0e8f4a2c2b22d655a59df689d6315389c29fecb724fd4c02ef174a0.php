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

/* vendor/doctrine/doctrine-migrations-bundle/README.markdown */
class __TwigTemplate_3e43d8723547e1ca08a5fe78b93d6ddc8f634ca26e749ba0bfa2adbdf7c8be25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/README.markdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/README.markdown"));

        // line 1
        echo "DoctrineMigrationsBundle
========================

This bundle integrates the [Doctrine2 Migrations library](http://www.doctrine-project.org/projects/migrations.html)
into Symfony applications. Database migrations help you version the changes in
your database schema and apply them in a predictable way on every server running
the application.

[Read the documentation of this bundle](https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/site.html).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/README.markdown";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("DoctrineMigrationsBundle
========================

This bundle integrates the [Doctrine2 Migrations library](http://www.doctrine-project.org/projects/migrations.html)
into Symfony applications. Database migrations help you version the changes in
your database schema and apply them in a predictable way on every server running
the application.

[Read the documentation of this bundle](https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/site.html).
", "vendor/doctrine/doctrine-migrations-bundle/README.markdown", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/README.markdown");
    }
}
