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

/* vendor/phpdocumentor/reflection-common/easy-coding-standard.neon */
class __TwigTemplate_ac13143477ece24545816eb86ed80ed1b5d01e7db7c391e602ad973ba64ee601 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/easy-coding-standard.neon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/easy-coding-standard.neon"));

        // line 1
        echo "includes:
    - temp/ecs/config/clean-code.neon
    - temp/ecs/config/psr2.neon
    - temp/ecs/config/common.neon

parameters:
    exclude_checkers:
        # from temp/ecs/config/common.neon
        - PhpCsFixer\\Fixer\\ClassNotation\\OrderedClassElementsFixer
        - PhpCsFixer\\Fixer\\PhpUnit\\PhpUnitStrictFixer
        - PhpCsFixer\\Fixer\\ControlStructure\\YodaStyleFixer
        # from temp/ecs/config/spaces.neon
        - PhpCsFixer\\Fixer\\Operator\\NotOperatorWithSuccessorSpaceFixer

    skip:
        PHP_CodeSniffer\\Standards\\Generic\\Sniffs\\NamingConventions\\CamelCapsFunctionNameSniff:
            - */tests/**
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/easy-coding-standard.neon";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("includes:
    - temp/ecs/config/clean-code.neon
    - temp/ecs/config/psr2.neon
    - temp/ecs/config/common.neon

parameters:
    exclude_checkers:
        # from temp/ecs/config/common.neon
        - PhpCsFixer\\Fixer\\ClassNotation\\OrderedClassElementsFixer
        - PhpCsFixer\\Fixer\\PhpUnit\\PhpUnitStrictFixer
        - PhpCsFixer\\Fixer\\ControlStructure\\YodaStyleFixer
        # from temp/ecs/config/spaces.neon
        - PhpCsFixer\\Fixer\\Operator\\NotOperatorWithSuccessorSpaceFixer

    skip:
        PHP_CodeSniffer\\Standards\\Generic\\Sniffs\\NamingConventions\\CamelCapsFunctionNameSniff:
            - */tests/**
", "vendor/phpdocumentor/reflection-common/easy-coding-standard.neon", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/easy-coding-standard.neon");
    }
}
