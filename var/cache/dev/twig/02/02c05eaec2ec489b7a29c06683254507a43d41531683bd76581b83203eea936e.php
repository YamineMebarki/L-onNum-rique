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

/* vendor/symfony/intl/Resources/data/timezones/en_001.json */
class __TwigTemplate_07fc926f87c32ea884954d95cda2f267eae979969203dbcb5095b7a06e5f70f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/en_001.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/timezones/en_001.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"America\\/Miquelon\": \"St Pierre & Miquelon Time\",
        \"America\\/St_Barthelemy\": \"Atlantic Time (St Barthélemy)\",
        \"America\\/St_Johns\": \"Newfoundland Time (St John’s)\",
        \"America\\/St_Kitts\": \"Atlantic Time (St Kitts)\",
        \"America\\/St_Lucia\": \"Atlantic Time (St Lucia)\",
        \"America\\/St_Thomas\": \"Atlantic Time (St Thomas)\",
        \"America\\/St_Vincent\": \"Atlantic Time (St Vincent)\",
        \"Atlantic\\/St_Helena\": \"Greenwich Mean Time (St Helena)\"
    },
    \"Meta\": []
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/timezones/en_001.json";
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
        \"America\\/Miquelon\": \"St Pierre & Miquelon Time\",
        \"America\\/St_Barthelemy\": \"Atlantic Time (St Barthélemy)\",
        \"America\\/St_Johns\": \"Newfoundland Time (St John’s)\",
        \"America\\/St_Kitts\": \"Atlantic Time (St Kitts)\",
        \"America\\/St_Lucia\": \"Atlantic Time (St Lucia)\",
        \"America\\/St_Thomas\": \"Atlantic Time (St Thomas)\",
        \"America\\/St_Vincent\": \"Atlantic Time (St Vincent)\",
        \"Atlantic\\/St_Helena\": \"Greenwich Mean Time (St Helena)\"
    },
    \"Meta\": []
}
", "vendor/symfony/intl/Resources/data/timezones/en_001.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/timezones/en_001.json");
    }
}
