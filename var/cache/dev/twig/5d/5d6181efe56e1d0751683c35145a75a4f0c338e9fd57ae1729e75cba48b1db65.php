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

/* vendor/easycorp/easy-log-handler/composer.json */
class __TwigTemplate_cfc26e7b13cc3d6fbb8861c8a2343a4eb554a55483feba6f39f9ed525517613e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/easycorp/easy-log-handler/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/easycorp/easy-log-handler/composer.json"));

        // line 1
        echo "{
    \"name\": \"easycorp/easy-log-handler\",
    \"description\": \"A handler for Monolog that optimizes log messages to be processed by humans instead of software. Improve your productivity with log that are easy to understand.\",
    \"keywords\": [\"log\", \"logging\", \"monolog\", \"easy\", \"productivity\"],
    \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Javier Eguiluz\",
            \"email\": \"javiereguiluz@gmail.com\"
        },
        {
            \"name\": \"Project Contributors\",
            \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\"
        }
    ],
    \"require\": {
        \"php\"             : \">=7.1\",
        \"monolog/monolog\" : \"~1.6|~2.0\",
        \"symfony/yaml\"    : \"^3.4|^4.0|^5.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"EasyCorp\\\\EasyLog\\\\\": \"src\" }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/easycorp/easy-log-handler/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"easycorp/easy-log-handler\",
    \"description\": \"A handler for Monolog that optimizes log messages to be processed by humans instead of software. Improve your productivity with log that are easy to understand.\",
    \"keywords\": [\"log\", \"logging\", \"monolog\", \"easy\", \"productivity\"],
    \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Javier Eguiluz\",
            \"email\": \"javiereguiluz@gmail.com\"
        },
        {
            \"name\": \"Project Contributors\",
            \"homepage\": \"https://github.com/EasyCorp/easy-log-handler\"
        }
    ],
    \"require\": {
        \"php\"             : \">=7.1\",
        \"monolog/monolog\" : \"~1.6|~2.0\",
        \"symfony/yaml\"    : \"^3.4|^4.0|^5.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"EasyCorp\\\\EasyLog\\\\\": \"src\" }
    }
}
", "vendor/easycorp/easy-log-handler/composer.json", "/var/www/public/DevLaon/templates/vendor/easycorp/easy-log-handler/composer.json");
    }
}
