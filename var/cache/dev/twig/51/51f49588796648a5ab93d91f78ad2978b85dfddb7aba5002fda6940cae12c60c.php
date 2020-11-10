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

/* vendor/doctrine/cache/README.md */
class __TwigTemplate_5a94f15038107dcb18816eb57b02a49fe4dc1a665fc638c5696e8da7147c193c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/README.md"));

        // line 1
        echo "# Doctrine Cache

[![Build Status](https://images.shields.io/travis/doctrine/cache/master.svg?style=flat-square)](http://travis-ci.org/doctrine/cache) 
[![Scrutinizer Code Quality](https://images.shields.io/scrutinizer/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master) 
[![Code Coverage](https://images.shields.io/scrutinizer/coverage/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master)

[![Latest Stable Version](https://images.shields.io/packagist/v/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)
[![Total Downloads](https://images.shields.io/packagist/dt/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)

Cache component extracted from the Doctrine Common project. [Documentation](http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/caching.html)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Cache

[![Build Status](https://images.shields.io/travis/doctrine/cache/master.svg?style=flat-square)](http://travis-ci.org/doctrine/cache) 
[![Scrutinizer Code Quality](https://images.shields.io/scrutinizer/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master) 
[![Code Coverage](https://images.shields.io/scrutinizer/coverage/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master)

[![Latest Stable Version](https://images.shields.io/packagist/v/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)
[![Total Downloads](https://images.shields.io/packagist/dt/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)

Cache component extracted from the Doctrine Common project. [Documentation](http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/caching.html)
", "vendor/doctrine/cache/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/README.md");
    }
}
