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

/* vendor/doctrine/instantiator/phpstan.neon.dist */
class __TwigTemplate_97fc688dd505050241da44f3aa09eea6fde9a2eb670ca4f4bd3fe2fbc8d68bbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/phpstan.neon.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/phpstan.neon.dist"));

        // line 1
        echo "includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon

parameters:
    level: max
    paths:
        - src
        - tests

    ignoreErrors:
        -
            message: '#::__construct\\(\\) does not call parent constructor from#'
            path: '*/tests/DoctrineTest/InstantiatorTestAsset/*.php'

        # dynamic properties confuse static analysis
        -
            message: '#Access to an undefined property object::\\\$foo\\.#'
            path: '*/tests/DoctrineTest/InstantiatorTest/InstantiatorTest.php'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/phpstan.neon.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon

parameters:
    level: max
    paths:
        - src
        - tests

    ignoreErrors:
        -
            message: '#::__construct\\(\\) does not call parent constructor from#'
            path: '*/tests/DoctrineTest/InstantiatorTestAsset/*.php'

        # dynamic properties confuse static analysis
        -
            message: '#Access to an undefined property object::\\\$foo\\.#'
            path: '*/tests/DoctrineTest/InstantiatorTest/InstantiatorTest.php'
", "vendor/doctrine/instantiator/phpstan.neon.dist", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/phpstan.neon.dist");
    }
}
