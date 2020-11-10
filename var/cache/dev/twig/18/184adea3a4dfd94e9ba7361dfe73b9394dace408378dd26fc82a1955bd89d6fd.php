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

/* vendor/symfony/intl/Resources/data/currencies/ki.json */
class __TwigTemplate_2ec6b1ea09c98bcf6e4a9dcfa424580f6edfaed9c352f3169fc4d04b366e1f34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ki.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ki.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirham ya Falme za Kiarabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola ya Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari ya Bahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ya Burundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Ndora ya Kananda\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ya Uswisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ya China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Kepuvede\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari ya Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni ya Misri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir ya Uhabeshi\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Mbauini cia Ngeretha\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ya Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rubia rwa India\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Sarafu ya Kijapani\"
        ],
        \"KES\": [
            \"Ksh\",
            \"Ciringi ya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola ya Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari ya Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ya Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary ya Bukini\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia ya Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ya Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Msumbiji\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola ya Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nijeria\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal ya Saudia\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Shelisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni ya Santahelena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"ciringi cia cumarĩ\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tome na Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tome na Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari ya Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"ciringi cia Tanizania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ciringi cia Ũganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Ndora cia Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ya Afrika Kusini\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ya Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ya Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola ya Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ki.json";
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
            \"Dirham ya Falme za Kiarabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola ya Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari ya Bahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ya Burundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Ndora ya Kananda\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ya Uswisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ya China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Kepuvede\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari ya Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni ya Misri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bir ya Uhabeshi\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Mbauini cia Ngeretha\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ya Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rubia rwa India\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Sarafu ya Kijapani\"
        ],
        \"KES\": [
            \"Ksh\",
            \"Ciringi ya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola ya Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari ya Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ya Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary ya Bukini\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ya Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ya Moritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia ya Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ya Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Msumbiji\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola ya Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nijeria\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal ya Saudia\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Shelisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni ya Santahelena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"ciringi cia cumarĩ\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tome na Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tome na Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari ya Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"ciringi cia Tanizania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ciringi cia Ũganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Ndora cia Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ya Afrika Kusini\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ya Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ya Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola ya Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ki.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ki.json");
    }
}
