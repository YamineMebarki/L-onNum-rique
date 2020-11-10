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

/* vendor/symfony/intl/Resources/data/currencies/lg.json */
class __TwigTemplate_7140c53dbec6e7d5415773d9be5ac20fc67edc214503e4c6fc22c22ef9a9908f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Diraamu eya Emireeti\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ey’Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Doola ey’Awusiturelya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaali ey’eBaareeni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ey’eburundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ey’eBotiswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Doola ey’eKanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ey’eKongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ey’eSwitizirandi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwani Reniminibi ey’eCayina\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikudo ey’Keepu Veredi\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ey’eJjibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaali ey’Aligerya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pawundi ey’eMisiri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ey’Eritureya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biiru ey’Esyopya\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pawundi ey’eBungereza\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ey’eGana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ey’eGambya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ey’eGini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupiya ey’eBuyindi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ey’eJapani\"
        ],
        \"KES\": [
            \"KES\",
            \"Silingi ey’eKenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ey’eKomoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Doola ey’eLiberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ey’eLesoso\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaali ey’eLibya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diraamu ey’eMoroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faranga ey’eMalagase\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Wugwiya ey’eMawritenya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Wugwiya ey’eMawritenya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupiya ey’eMawurisyasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwaca ey’eMalawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikaali ey’eMozambiiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Doola ey’eNamibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayira ey’eNayijerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ey’eRwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaali ey’eBuwarabu\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupiya ey’eSesere\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinaali ey’eSudaani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pawundi ey’eSudaani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pawundi ey’eSenti Herena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lewone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Silingi ey’eSomaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobura ey’eSantome ne Purincipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobura ey’eSantome ne Purincipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaali ey’eTunizya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Silingi ey’eTanzaniya\"
        ],
        \"UGX\": [
            \"USh\",
            \"Silingi eya Yuganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Doola ey’Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ey’omu Afirika eya wakati\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ey’omu Afirika ey’ebugwanjuba\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ey’eSawusafirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwaca ey’eZambya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwaca ey’eZambya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Doola ey’eZimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/lg.json";
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
            \"Diraamu eya Emireeti\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ey’Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Doola ey’Awusiturelya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaali ey’eBaareeni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ey’eburundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ey’eBotiswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Doola ey’eKanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ey’eKongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ey’eSwitizirandi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwani Reniminibi ey’eCayina\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikudo ey’Keepu Veredi\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ey’eJjibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaali ey’Aligerya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pawundi ey’eMisiri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ey’Eritureya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biiru ey’Esyopya\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pawundi ey’eBungereza\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ey’eGana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ey’eGambya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ey’eGini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupiya ey’eBuyindi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ey’eJapani\"
        ],
        \"KES\": [
            \"KES\",
            \"Silingi ey’eKenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ey’eKomoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Doola ey’eLiberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ey’eLesoso\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaali ey’eLibya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diraamu ey’eMoroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faranga ey’eMalagase\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Wugwiya ey’eMawritenya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Wugwiya ey’eMawritenya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupiya ey’eMawurisyasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwaca ey’eMalawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikaali ey’eMozambiiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Doola ey’eNamibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayira ey’eNayijerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ey’eRwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaali ey’eBuwarabu\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupiya ey’eSesere\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinaali ey’eSudaani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pawundi ey’eSudaani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pawundi ey’eSenti Herena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lewone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Silingi ey’eSomaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobura ey’eSantome ne Purincipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobura ey’eSantome ne Purincipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaali ey’eTunizya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Silingi ey’eTanzaniya\"
        ],
        \"UGX\": [
            \"USh\",
            \"Silingi eya Yuganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Doola ey’Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ey’omu Afirika eya wakati\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ey’omu Afirika ey’ebugwanjuba\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ey’eSawusafirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwaca ey’eZambya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwaca ey’eZambya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Doola ey’eZimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/lg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/lg.json");
    }
}
