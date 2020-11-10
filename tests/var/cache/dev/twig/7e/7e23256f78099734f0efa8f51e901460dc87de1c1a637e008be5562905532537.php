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

/* vendor/symfony/intl/Resources/data/currencies/es_MX.json */
class __TwigTemplate_1309b5b86ceaf59789619e0c260c381bfbcd47e49fc6838db0bf3d2f3ce7d04b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/es_MX.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/es_MX.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"BDT\": [
            \"BDT\",
            \"taka bangladesí\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanés\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel camboyano\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosiano\"
        ],
        \"MRO\": [
            \"MRU\",
            \"uguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"UM\",
            \"uguiya\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia de Maldivas\"
        ],
        \"MXN\": [
            \"\$\",
            \"peso mexicano\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra santotomense\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandés\"
        ],
        \"VND\": [
            \"VND\",
            \"dong vietnamita\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiano\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/es_MX.json";
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
        \"BDT\": [
            \"BDT\",
            \"taka bangladesí\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanés\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel camboyano\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosiano\"
        ],
        \"MRO\": [
            \"MRU\",
            \"uguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"UM\",
            \"uguiya\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia de Maldivas\"
        ],
        \"MXN\": [
            \"\$\",
            \"peso mexicano\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra santotomense\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandés\"
        ],
        \"VND\": [
            \"VND\",
            \"dong vietnamita\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiano\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/es_MX.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/es_MX.json");
    }
}
