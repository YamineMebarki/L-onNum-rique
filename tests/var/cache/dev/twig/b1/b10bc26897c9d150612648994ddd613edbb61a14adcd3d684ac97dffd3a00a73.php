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

/* vendor/symfony/console/Tests/Fixtures/command_2.json */
class __TwigTemplate_22bc6c3e70cd846629f47449c57d58caa05a1d140626fd6c176d9c208c26af72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/command_2.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/command_2.json"));

        // line 1
        echo "{
    \"name\": \"descriptor:command2\",
    \"hidden\": false,
    \"usage\": [
        \"descriptor:command2 [-o|--option_name] [--] <argument_name>\",
        \"descriptor:command2 -o|--option_name <argument_name>\",
        \"descriptor:command2 <argument_name>\"
    ],
    \"description\": \"command 2 description\",
    \"help\": \"command 2 help\",
    \"definition\": {
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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/command_2.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"descriptor:command2\",
    \"hidden\": false,
    \"usage\": [
        \"descriptor:command2 [-o|--option_name] [--] <argument_name>\",
        \"descriptor:command2 -o|--option_name <argument_name>\",
        \"descriptor:command2 <argument_name>\"
    ],
    \"description\": \"command 2 description\",
    \"help\": \"command 2 help\",
    \"definition\": {
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
}
", "vendor/symfony/console/Tests/Fixtures/command_2.json", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/command_2.json");
    }
}
