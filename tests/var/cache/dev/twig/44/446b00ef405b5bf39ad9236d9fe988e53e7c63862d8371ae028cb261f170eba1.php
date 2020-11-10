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

/* vendor/symfony/intl/Resources/data/regions/en_001.json */
class __TwigTemplate_684b26f9a8e4e12132233d8a6f5aa89f20f413af3949be9d5bd69aa7efc17e8a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/en_001.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/en_001.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"BL\": \"St Barthélemy\",
        \"KN\": \"St Kitts & Nevis\",
        \"LC\": \"St Lucia\",
        \"MF\": \"St Martin\",
        \"PM\": \"St Pierre & Miquelon\",
        \"SH\": \"St Helena\",
        \"UM\": \"US Outlying Islands\",
        \"VC\": \"St Vincent & Grenadines\",
        \"VI\": \"US Virgin Islands\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/en_001.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"BL\": \"St Barthélemy\",
        \"KN\": \"St Kitts & Nevis\",
        \"LC\": \"St Lucia\",
        \"MF\": \"St Martin\",
        \"PM\": \"St Pierre & Miquelon\",
        \"SH\": \"St Helena\",
        \"UM\": \"US Outlying Islands\",
        \"VC\": \"St Vincent & Grenadines\",
        \"VI\": \"US Virgin Islands\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/en_001.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/en_001.json");
    }
}
