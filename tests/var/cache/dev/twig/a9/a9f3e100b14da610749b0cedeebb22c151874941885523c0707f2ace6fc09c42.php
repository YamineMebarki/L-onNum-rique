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

/* vendor/symfony/intl/Resources/data/currencies/root.json */
class __TwigTemplate_9d369ef459124a5df2781bcf901c55f3f3bd870c29af622d05f96c0ed2adcf22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/root.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/root.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"BRL\": [
            \"R\$\",
            \"BRL\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"CNY\"
        ],
        \"EUR\": [
            \"€\",
            \"EUR\"
        ],
        \"GBP\": [
            \"£\",
            \"GBP\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"HKD\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"INR\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"JPY\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"USD\": [
            \"US\$\",
            \"USD\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/root.json";
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
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"BRL\": [
            \"R\$\",
            \"BRL\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"CNY\"
        ],
        \"EUR\": [
            \"€\",
            \"EUR\"
        ],
        \"GBP\": [
            \"£\",
            \"GBP\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"HKD\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"INR\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"JPY\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"USD\": [
            \"US\$\",
            \"USD\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/root.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/root.json");
    }
}
