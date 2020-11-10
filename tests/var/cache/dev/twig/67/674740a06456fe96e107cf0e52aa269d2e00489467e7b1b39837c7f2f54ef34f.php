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

/* vendor/symfony/serializer-pack/composer.json */
class __TwigTemplate_bf79cefa6c6beea16036b1623bec6cdd509c306e1e2173d60f0a8a7e27c95544 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer-pack/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer-pack/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/serializer-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A pack for the Symfony serializer\",
    \"require\": {
        \"php\": \"^7.0\",
        \"doctrine/annotations\": \"^1.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"symfony/property-access\": \"*\",
        \"symfony/property-info\": \"*\",
        \"symfony/serializer\": \"*\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer-pack/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/serializer-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A pack for the Symfony serializer\",
    \"require\": {
        \"php\": \"^7.0\",
        \"doctrine/annotations\": \"^1.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"symfony/property-access\": \"*\",
        \"symfony/property-info\": \"*\",
        \"symfony/serializer\": \"*\"
    }
}
", "vendor/symfony/serializer-pack/composer.json", "/var/www/public/DevLaon/templates/vendor/symfony/serializer-pack/composer.json");
    }
}
