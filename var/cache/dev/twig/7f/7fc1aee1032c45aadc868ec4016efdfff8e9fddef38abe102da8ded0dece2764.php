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

/* vendor/symfony/intl/Resources/data/currencies/ln.json */
class __TwigTemplate_12c263e719eb7f5d3c69ee0bc86b5b317d5ee172b5ba9a0c69fa7fc7903bf388 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ln.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ln.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirihamɛ ya Lémila alabo\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angóla\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolarɛ ya Ositali\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinarɛ ya Bahrɛnɛ\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Falánga ya Burundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolarɛ ya Kanadá\"
        ],
        \"CDF\": [
            \"FC\",
            \"Falánga ya Kongó\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Falánga ya Swisɛ\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuanɛ Renminbi ya Sinɛ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikudo ya Kapevɛrɛ\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Falánga ya Dzibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinarɛ ya Alizeri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Paunɛ ya Ezípitɛ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Elitlɛ\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birɛ ya Etsiópi\"
        ],
        \"EUR\": [
            \"€\",
            \"Ɛlɔ́\"
        ],
        \"GBP\": [
            \"£\",
            \"Paunɛ ya Angɛlɛtɛ́lɛ\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Falánga ya Ginɛ\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ya Índɛ\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ya Zapɔ\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingɛ ya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Falánga ya Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolarɛ ya Liberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesóto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinarɛ ya Libí\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirihame ya Marokɛ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Falánga ya Madagasikarɛ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ya Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwasha ya Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolarɛ ya Namibi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nizerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Falánga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyalɛ ya Alabi Sawuditɛ\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ya Sɛshɛlɛ\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinarɛ ya Sudá\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Paunɛ ya Sudá\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Paunɛ ya Sántu elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leonɛ\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingɛ ya Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tomé mpé Presipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tomé mpé Presipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinarɛ ya Tinizi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingɛ ya Tanzani\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingɛ ya Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolarɛ ya Ameriki\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Falánga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Falánga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randɛ ya Afríka Súdi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwasha ya Zambi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwasha ya Zambi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dolarɛ ya Zimbabwɛ\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ln.json";
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
            \"Dirihamɛ ya Lémila alabo\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angóla\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolarɛ ya Ositali\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinarɛ ya Bahrɛnɛ\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Falánga ya Burundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolarɛ ya Kanadá\"
        ],
        \"CDF\": [
            \"FC\",
            \"Falánga ya Kongó\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Falánga ya Swisɛ\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuanɛ Renminbi ya Sinɛ\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikudo ya Kapevɛrɛ\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Falánga ya Dzibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinarɛ ya Alizeri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Paunɛ ya Ezípitɛ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Elitlɛ\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birɛ ya Etsiópi\"
        ],
        \"EUR\": [
            \"€\",
            \"Ɛlɔ́\"
        ],
        \"GBP\": [
            \"£\",
            \"Paunɛ ya Angɛlɛtɛ́lɛ\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Falánga ya Ginɛ\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ya Índɛ\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ya Zapɔ\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingɛ ya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Falánga ya Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolarɛ ya Liberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesóto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinarɛ ya Libí\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirihame ya Marokɛ\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Falánga ya Madagasikarɛ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ya Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwasha ya Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolarɛ ya Namibi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nizerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Falánga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyalɛ ya Alabi Sawuditɛ\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ya Sɛshɛlɛ\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinarɛ ya Sudá\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Paunɛ ya Sudá\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Paunɛ ya Sántu elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leonɛ\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingɛ ya Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tomé mpé Presipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tomé mpé Presipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinarɛ ya Tinizi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingɛ ya Tanzani\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingɛ ya Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolarɛ ya Ameriki\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Falánga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Falánga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randɛ ya Afríka Súdi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwasha ya Zambi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwasha ya Zambi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dolarɛ ya Zimbabwɛ\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ln.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ln.json");
    }
}
