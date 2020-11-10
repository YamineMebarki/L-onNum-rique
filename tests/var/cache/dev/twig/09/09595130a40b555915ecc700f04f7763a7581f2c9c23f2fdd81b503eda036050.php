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

/* vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md */
class __TwigTemplate_ffe93e92db433554d513c366ce838a9fd5f2bd250d8cb7140686d57d73953ae7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md"));

        // line 1
        echo "CHANGELOG for 3.1.x
===================

This changelog references the relevant changes (bug and security fixes) done in
3.1 minor versions.

3.1.0 (2018-12-21)
------------------

 - [270: Show the name of the database being purged when loading fixtures](https://github.com/doctrine/DoctrineFixturesBundle/pull/270) thanks to @alcaeus
 - [265: Drop support for PHP &lt; 7.1 and older versions of data-fixtures](https://github.com/doctrine/DoctrineFixturesBundle/pull/265) thanks to @alcaeus
 - [260: Add fixture groups via a static method interface or service tags](https://github.com/doctrine/DoctrineFixturesBundle/pull/260) thanks to @weaverryan
 - [269: Apply Doctrine Coding Standard](https://github.com/doctrine/DoctrineFixturesBundle/pull/269) thanks to @carusogabriel
 - [219: Dynamic namespace](https://github.com/doctrine/DoctrineFixturesBundle/issues/219) thanks to @MassiveHiggsField
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG for 3.1.x
===================

This changelog references the relevant changes (bug and security fixes) done in
3.1 minor versions.

3.1.0 (2018-12-21)
------------------

 - [270: Show the name of the database being purged when loading fixtures](https://github.com/doctrine/DoctrineFixturesBundle/pull/270) thanks to @alcaeus
 - [265: Drop support for PHP &lt; 7.1 and older versions of data-fixtures](https://github.com/doctrine/DoctrineFixturesBundle/pull/265) thanks to @alcaeus
 - [260: Add fixture groups via a static method interface or service tags](https://github.com/doctrine/DoctrineFixturesBundle/pull/260) thanks to @weaverryan
 - [269: Apply Doctrine Coding Standard](https://github.com/doctrine/DoctrineFixturesBundle/pull/269) thanks to @carusogabriel
 - [219: Dynamic namespace](https://github.com/doctrine/DoctrineFixturesBundle/issues/219) thanks to @MassiveHiggsField
", "vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/CHANGELOG-3.1.md");
    }
}
