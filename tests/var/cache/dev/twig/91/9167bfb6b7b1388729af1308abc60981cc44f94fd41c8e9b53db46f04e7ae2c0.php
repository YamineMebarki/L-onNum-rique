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

/* vendor/psr/cache/CHANGELOG.md */
class __TwigTemplate_18dd0aca07ec87076ff7b1cff96703f6b04295d6434b1332cba36446fee3eb61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/cache/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/cache/CHANGELOG.md"));

        // line 1
        echo "# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.1 - 2016-08-06

### Fixed

- Make spacing consistent in phpdoc annotations php-fig/cache#9 - chalasr
- Fix grammar in phpdoc annotations php-fig/cache#10 - chalasr
- Be more specific in docblocks that `getItems()` and `deleteItems()` take an array of strings (`string[]`) compared to just `array` php-fig/cache#8 - GrahamCampbell
- For `expiresAt()` and `expiresAfter()` in CacheItemInterface fix docblock to specify null as a valid parameters as well as an implementation of DateTimeInterface php-fig/cache#7 - GrahamCampbell

## 1.0.0 - 2015-12-11

Initial stable release; reflects accepted PSR-6 specification
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/psr/cache/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.1 - 2016-08-06

### Fixed

- Make spacing consistent in phpdoc annotations php-fig/cache#9 - chalasr
- Fix grammar in phpdoc annotations php-fig/cache#10 - chalasr
- Be more specific in docblocks that `getItems()` and `deleteItems()` take an array of strings (`string[]`) compared to just `array` php-fig/cache#8 - GrahamCampbell
- For `expiresAt()` and `expiresAfter()` in CacheItemInterface fix docblock to specify null as a valid parameters as well as an implementation of DateTimeInterface php-fig/cache#7 - GrahamCampbell

## 1.0.0 - 2015-12-11

Initial stable release; reflects accepted PSR-6 specification
", "vendor/psr/cache/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/psr/cache/CHANGELOG.md");
    }
}
