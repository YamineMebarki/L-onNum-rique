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

/* vendor/symfony/intl/Resources/data/locales/de_AT.json */
class __TwigTemplate_2ca7bfbf7802fa0853f8f41d6c00c46e72ca527a1fd11acc86a868f12aff3bc6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/de_AT.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/de_AT.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ha\": \"Hausa\",
        \"ha_GH\": \"Hausa (Ghana)\",
        \"ha_NE\": \"Hausa (Niger)\",
        \"ha_NG\": \"Hausa (Nigeria)\",
        \"nb_SJ\": \"Norwegisch Bokmål (Svalbard und Jan Mayen)\",
        \"sh\": \"Serbokroatisch\",
        \"sh_BA\": \"Serbokroatisch (Bosnien und Herzegowina)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/de_AT.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ha\": \"Hausa\",
        \"ha_GH\": \"Hausa (Ghana)\",
        \"ha_NE\": \"Hausa (Niger)\",
        \"ha_NG\": \"Hausa (Nigeria)\",
        \"nb_SJ\": \"Norwegisch Bokmål (Svalbard und Jan Mayen)\",
        \"sh\": \"Serbokroatisch\",
        \"sh_BA\": \"Serbokroatisch (Bosnien und Herzegowina)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/de_AT.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/de_AT.json");
    }
}
