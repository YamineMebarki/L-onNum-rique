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

/* vendor/symfony/intl/Resources/data/currencies/fr_CA.json */
class __TwigTemplate_89f14db3c3043304250dd424ef31c94a4686ebdb4acea631fa01aa967029dafc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fr_CA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fr_CA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"AUD\": [
            \"\$ AU\",
            \"dollar australien\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaïdjanais\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar bermudien\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar brunéien\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar bélizéen\"
        ],
        \"CAD\": [
            \"\$\",
            \"dollar canadien\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilien\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi chinois\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombien\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo cap-verdien\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar fidjien\"
        ],
        \"FKP\": [
            \"FKP\",
            \"livre des Îles Malouines\"
        ],
        \"GBP\": [
            \"£\",
            \"livre sterling\"
        ],
        \"GIP\": [
            \"GIP\",
            \"livre de Gibraltar\"
        ],
        \"HKD\": [
            \"\$ HK\",
            \"dollar de Hong Kong\"
        ],
        \"ILS\": [
            \"ILS\",
            \"nouveau shekel israélien\"
        ],
        \"INR\": [
            \"INR\",
            \"roupie indienne\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranien\"
        ],
        \"JPY\": [
            \"¥\",
            \"yen japonais\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sud-coréen\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laotien\"
        ],
        \"LBP\": [
            \"LBP\",
            \"livre libanaise\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexicain\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibien\"
        ],
        \"NZD\": [
            \"\$ NZ\",
            \"dollar néo-zélandais\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanais\"
        ],
        \"PEN\": [
            \"PEN\",
            \"nouveau sol péruvien\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papou-néo-guinéen\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal du Qatar\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saoudien\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar des îles Salomon\"
        ],
        \"SGD\": [
            \"\$ SG\",
            \"dollar de Singapour\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar du Suriname\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar de Trinité-et-Tobago\"
        ],
        \"USD\": [
            \"\$ US\",
            \"dollar des États-Unis\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayen\"
        ],
        \"VND\": [
            \"VND\",
            \"dông vietnamien\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"franc CFA (BEAC)\"
        ],
        \"XOF\": [
            \"XOF\",
            \"franc CFA (BCEAO)\"
        ],
        \"XPF\": [
            \"XPF\",
            \"franc CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yéménite\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/fr_CA.json";
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
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"AUD\": [
            \"\$ AU\",
            \"dollar australien\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaïdjanais\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar bermudien\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar brunéien\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar bélizéen\"
        ],
        \"CAD\": [
            \"\$\",
            \"dollar canadien\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilien\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi chinois\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombien\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo cap-verdien\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar fidjien\"
        ],
        \"FKP\": [
            \"FKP\",
            \"livre des Îles Malouines\"
        ],
        \"GBP\": [
            \"£\",
            \"livre sterling\"
        ],
        \"GIP\": [
            \"GIP\",
            \"livre de Gibraltar\"
        ],
        \"HKD\": [
            \"\$ HK\",
            \"dollar de Hong Kong\"
        ],
        \"ILS\": [
            \"ILS\",
            \"nouveau shekel israélien\"
        ],
        \"INR\": [
            \"INR\",
            \"roupie indienne\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranien\"
        ],
        \"JPY\": [
            \"¥\",
            \"yen japonais\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sud-coréen\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laotien\"
        ],
        \"LBP\": [
            \"LBP\",
            \"livre libanaise\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexicain\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibien\"
        ],
        \"NZD\": [
            \"\$ NZ\",
            \"dollar néo-zélandais\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanais\"
        ],
        \"PEN\": [
            \"PEN\",
            \"nouveau sol péruvien\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papou-néo-guinéen\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal du Qatar\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saoudien\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar des îles Salomon\"
        ],
        \"SGD\": [
            \"\$ SG\",
            \"dollar de Singapour\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar du Suriname\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar de Trinité-et-Tobago\"
        ],
        \"USD\": [
            \"\$ US\",
            \"dollar des États-Unis\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayen\"
        ],
        \"VND\": [
            \"VND\",
            \"dông vietnamien\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"franc CFA (BEAC)\"
        ],
        \"XOF\": [
            \"XOF\",
            \"franc CFA (BCEAO)\"
        ],
        \"XPF\": [
            \"XPF\",
            \"franc CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yéménite\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/fr_CA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/fr_CA.json");
    }
}
