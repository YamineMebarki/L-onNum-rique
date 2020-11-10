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

/* vendor/doctrine/migrations/README.md */
class __TwigTemplate_26d26e17a0b01accc54938633688f7033e129fa7d5725432326d83f81b8a5513 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/README.md"));

        // line 1
        echo "# Doctrine Migrations

[![Build Status](https://travis-ci.org/doctrine/migrations.svg)](https://travis-ci.org/doctrine/migrations)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/migrations/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/migrations/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/migrations/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/migrations/?branch=master)

## Documentation

All available documentation can be found [here](https://www.doctrine-project.org/projects/migrations.html).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Migrations

[![Build Status](https://travis-ci.org/doctrine/migrations.svg)](https://travis-ci.org/doctrine/migrations)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/migrations/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/migrations/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/migrations/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/migrations/?branch=master)

## Documentation

All available documentation can be found [here](https://www.doctrine-project.org/projects/migrations.html).
", "vendor/doctrine/migrations/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/README.md");
    }
}
