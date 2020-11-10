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

/* vendor/doctrine/annotations/phpstan.neon */
class __TwigTemplate_3e0c4957f2b562ec137fcea32a455a09f1fe05a543104cbb67badcf89cc622b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/phpstan.neon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/phpstan.neon"));

        // line 1
        echo "parameters:
    autoload_files:
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/DocParserTest.php
    excludes_analyse:
        - %currentWorkingDirectory%/tests/*/Fixtures/*
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/ReservedKeywordsClasses.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/Ticket/DCOM58Entity.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/DoctrineTestCase.php
    polluteScopeWithLoopInitialAssignments: true
    ignoreErrors:
        - '#Class Doctrine_Tests_Common_Annotations_Fixtures_ClassNoNamespaceNoComment not found#'
        - '#Instantiated class Doctrine_Tests_Common_Annotations_Fixtures_ClassNoNamespaceNoComment not found#'
        - '#Property Doctrine\\\\Tests\\\\Common\\\\Annotations\\\\DummyClassNonAnnotationProblem::\\\$foo has unknown class#'
        - '#Call to an undefined method ReflectionClass::getUseStatements\\(\\)#'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/phpstan.neon";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    autoload_files:
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/DocParserTest.php
    excludes_analyse:
        - %currentWorkingDirectory%/tests/*/Fixtures/*
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/ReservedKeywordsClasses.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Annotations/Ticket/DCOM58Entity.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/DoctrineTestCase.php
    polluteScopeWithLoopInitialAssignments: true
    ignoreErrors:
        - '#Class Doctrine_Tests_Common_Annotations_Fixtures_ClassNoNamespaceNoComment not found#'
        - '#Instantiated class Doctrine_Tests_Common_Annotations_Fixtures_ClassNoNamespaceNoComment not found#'
        - '#Property Doctrine\\\\Tests\\\\Common\\\\Annotations\\\\DummyClassNonAnnotationProblem::\\\$foo has unknown class#'
        - '#Call to an undefined method ReflectionClass::getUseStatements\\(\\)#'
", "vendor/doctrine/annotations/phpstan.neon", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/phpstan.neon");
    }
}
