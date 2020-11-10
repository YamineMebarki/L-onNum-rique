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

/* vendor/symfony/intl/Resources/data/currencies/es_419.json */
class __TwigTemplate_96c1182a1fc8ab927e31d2db0a2481e0a3f806b1b3d7857f44752e2222ee2f30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/es_419.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/es_419.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"CAD\": [
            \"CAD\",
            \"dólar canadiense\"
        ],
        \"EUR\": [
            \"EUR\",
            \"euro\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malauí\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandes\"
        ],
        \"USD\": [
            \"USD\",
            \"dólar estadounidense\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeko\"
        ],
        \"VND\": [
            \"VND\",
            \"dong\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/es_419.json";
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
        \"CAD\": [
            \"CAD\",
            \"dólar canadiense\"
        ],
        \"EUR\": [
            \"EUR\",
            \"euro\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malauí\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandes\"
        ],
        \"USD\": [
            \"USD\",
            \"dólar estadounidense\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeko\"
        ],
        \"VND\": [
            \"VND\",
            \"dong\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/es_419.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/es_419.json");
    }
}
