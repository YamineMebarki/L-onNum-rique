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

/* vendor/symfony/intl/Resources/data/currencies/mg.json */
class __TwigTemplate_9d2dad77bf26b85b3e5455fef03a77847c8ab3f3bef92c2fc600f4a0191f277e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirham\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angoley\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolara aostralianina\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar bahreïni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Farantsa Borondi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pola botsoaney\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dôlara Kanadianina\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Farantsa kôngôley\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Farantsa soisa\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yoan sinoa Renminbi\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Farantsa Djibotianina\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinara alzerianina\"
        ],
        \"EGP\": [
            \"EGP\",
            \"vola venty ejipsiana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfà Eritreanina\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir etiopianina\"
        ],
        \"EUR\": [
            \"€\",
            \"Eoro\"
        ],
        \"GBP\": [
            \"£\",
            \"livre sterling\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cédi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi gambianina\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Farantsa Gineanina\"
        ],
        \"INR\": [
            \"₹\",
            \"Ropia Indianina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Japoney\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling kenianina\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Farantsa Komorianina\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dôlara Liberianina\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinara Libyanina\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham marokianina\"
        ],
        \"MGA\": [
            \"Ar\",
            \"Ariary\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya moritanianina (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya moritanianina\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Ropia maorisianina\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawite\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikaly\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolara namibianina\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira nigerianina\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Farantsa Roande\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Rial saodianina\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Ropia Seysheloà\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinara Sodaney\"
        ],
        \"SDP\": [
            \"SDP\",
            \"livre soudanaise (1956–2007)\"
        ],
        \"SHP\": [
            \"SHP\",
            \"livre de Sainte-Hélène\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilling somalianina\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar tonizianina\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling tanzanianina\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling ogandianina\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolara amerikanina\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Farantsa CFA (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Farantsa CFA (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand afrikanina tatsimo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha zambianina (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha zambianina\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dôlara Zimbaboeanina\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/mg.json";
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
        \"AED\": [
            \"AED\",
            \"Dirham\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angoley\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolara aostralianina\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar bahreïni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Farantsa Borondi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pola botsoaney\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dôlara Kanadianina\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Farantsa kôngôley\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Farantsa soisa\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yoan sinoa Renminbi\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Farantsa Djibotianina\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinara alzerianina\"
        ],
        \"EGP\": [
            \"EGP\",
            \"vola venty ejipsiana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfà Eritreanina\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir etiopianina\"
        ],
        \"EUR\": [
            \"€\",
            \"Eoro\"
        ],
        \"GBP\": [
            \"£\",
            \"livre sterling\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cédi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi gambianina\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Farantsa Gineanina\"
        ],
        \"INR\": [
            \"₹\",
            \"Ropia Indianina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Japoney\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling kenianina\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Farantsa Komorianina\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dôlara Liberianina\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinara Libyanina\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham marokianina\"
        ],
        \"MGA\": [
            \"Ar\",
            \"Ariary\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya moritanianina (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya moritanianina\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Ropia maorisianina\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawite\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikaly\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolara namibianina\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira nigerianina\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Farantsa Roande\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Rial saodianina\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Ropia Seysheloà\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinara Sodaney\"
        ],
        \"SDP\": [
            \"SDP\",
            \"livre soudanaise (1956–2007)\"
        ],
        \"SHP\": [
            \"SHP\",
            \"livre de Sainte-Hélène\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilling somalianina\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar tonizianina\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling tanzanianina\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling ogandianina\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolara amerikanina\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Farantsa CFA (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Farantsa CFA (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand afrikanina tatsimo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha zambianina (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha zambianina\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dôlara Zimbaboeanina\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/mg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/mg.json");
    }
}
