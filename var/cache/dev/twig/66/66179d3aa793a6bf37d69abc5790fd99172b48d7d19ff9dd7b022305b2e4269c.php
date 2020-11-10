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

/* vendor/symfony/intl/Resources/data/currencies/fa_AF.json */
class __TwigTemplate_dfde97d229e5b5c9e08b85b1471349b4307a09a6c64854251b690e332c5e2626 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fa_AF.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fa_AF.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AUD\": [
            \"A\$\",
            \"دالر آسترالیا\"
        ],
        \"BND\": [
            \"BND\",
            \"دالر برونی\"
        ],
        \"BYN\": [
            \"BYN\",
            \"روبل روسیهٔ سفید\"
        ],
        \"BYR\": [
            \"BYR\",
            \"روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"دالر کانادا\"
        ],
        \"CHF\": [
            \"CHF\",
            \"فرانک سویس\"
        ],
        \"DKK\": [
            \"DKK\",
            \"کرون دنمارک\"
        ],
        \"JPY\": [
            \"¥\",
            \"ین جاپان\"
        ],
        \"MXN\": [
            \"\$MX\",
            \"پزوی مکسیکو\"
        ],
        \"NLG\": [
            \"NLG\",
            \"گیلدر هالند\"
        ],
        \"NOK\": [
            \"NOK\",
            \"کرون ناروی\"
        ],
        \"SEK\": [
            \"SEK\",
            \"کرون سویدن\"
        ],
        \"SGD\": [
            \"SGD\",
            \"دالر سینگاپور\"
        ],
        \"TJS\": [
            \"TJS\",
            \"سامانی تاجکستان\"
        ],
        \"USD\": [
            \"\$\",
            \"دالر امریکا\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/fa_AF.json";
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
            \"دالر آسترالیا\"
        ],
        \"BND\": [
            \"BND\",
            \"دالر برونی\"
        ],
        \"BYN\": [
            \"BYN\",
            \"روبل روسیهٔ سفید\"
        ],
        \"BYR\": [
            \"BYR\",
            \"روبل روسیهٔ سفید (۲۰۰۰–۲۰۱۶)\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"دالر کانادا\"
        ],
        \"CHF\": [
            \"CHF\",
            \"فرانک سویس\"
        ],
        \"DKK\": [
            \"DKK\",
            \"کرون دنمارک\"
        ],
        \"JPY\": [
            \"¥\",
            \"ین جاپان\"
        ],
        \"MXN\": [
            \"\$MX\",
            \"پزوی مکسیکو\"
        ],
        \"NLG\": [
            \"NLG\",
            \"گیلدر هالند\"
        ],
        \"NOK\": [
            \"NOK\",
            \"کرون ناروی\"
        ],
        \"SEK\": [
            \"SEK\",
            \"کرون سویدن\"
        ],
        \"SGD\": [
            \"SGD\",
            \"دالر سینگاپور\"
        ],
        \"TJS\": [
            \"TJS\",
            \"سامانی تاجکستان\"
        ],
        \"USD\": [
            \"\$\",
            \"دالر امریکا\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/fa_AF.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/fa_AF.json");
    }
}
