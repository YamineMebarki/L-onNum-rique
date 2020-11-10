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

/* vendor/doctrine/reflection/README.md */
class __TwigTemplate_199d4206fedaba6f6b83a2096ea5578245d7ba0ef220ab68c0b8449c844422af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/README.md"));

        // line 1
        echo "# Doctrine Reflection

[![Build Status](https://travis-ci.org/doctrine/reflection.svg)](https://travis-ci.org/doctrine/reflection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/reflection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/reflection/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-reflection/en/latest/)
* [Downloads](https://github.com/doctrine/reflection/releases)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Reflection

[![Build Status](https://travis-ci.org/doctrine/reflection.svg)](https://travis-ci.org/doctrine/reflection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/reflection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/reflection/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-reflection/en/latest/)
* [Downloads](https://github.com/doctrine/reflection/releases)
", "vendor/doctrine/reflection/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/README.md");
    }
}
