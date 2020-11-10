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

/* vendor/symfony/console/Tests/Fixtures/input_definition_4.json */
class __TwigTemplate_bd1da22d5ab941b96f1fddc0f332d0c268b39e43200e0a68999942fef378015e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/input_definition_4.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/input_definition_4.json"));

        // line 1
        echo "{
    \"arguments\": {
        \"argument_name\": {
            \"name\": \"argument_name\",
            \"is_required\": true,
            \"is_array\": false,
            \"description\": \"\",
            \"default\": null
        }
    },
    \"options\": {
        \"option_name\": {
            \"name\": \"--option_name\",
            \"shortcut\": \"-o\",
            \"accept_value\": false,
            \"is_value_required\": false,
            \"is_multiple\": false,
            \"description\": \"\",
            \"default\": false
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/input_definition_4.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"arguments\": {
        \"argument_name\": {
            \"name\": \"argument_name\",
            \"is_required\": true,
            \"is_array\": false,
            \"description\": \"\",
            \"default\": null
        }
    },
    \"options\": {
        \"option_name\": {
            \"name\": \"--option_name\",
            \"shortcut\": \"-o\",
            \"accept_value\": false,
            \"is_value_required\": false,
            \"is_multiple\": false,
            \"description\": \"\",
            \"default\": false
        }
    }
}
", "vendor/symfony/console/Tests/Fixtures/input_definition_4.json", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/input_definition_4.json");
    }
}
