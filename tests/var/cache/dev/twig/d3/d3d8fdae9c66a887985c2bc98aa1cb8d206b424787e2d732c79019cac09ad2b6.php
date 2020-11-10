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

/* vendor/symfony/intl/Resources/data/currencies/nd.json */
class __TwigTemplate_441eae293908b72990c3e109dc433d174f2bac5339a5693261c572bc8ddfc353 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/nd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/nd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dola laseArab\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza yase Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola yase Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari yase Bhahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Fulenki yase Bhurundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Phula yase Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola yase Khanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Fulenki yase Khongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Fulenki yase Swisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi yase China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Caboverdiano\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Fulenki yase Jibhuthi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinali yase Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Phawundi laseGibhide\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa yase Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Dola laseEthiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Phawundi yase Ngilandi\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi yase Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi yase Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Fulenki yase Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi yase Indiya\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni yase Japhani\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingi yase Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Fulenki yase Khomoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola yase Libheriya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lothi yase Lesotho\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari yase Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham yase Morokho\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Fulenki yase Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya yase Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya yase Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi yase Morishasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha yase Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali yase Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola yase Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayira yase Nijeriya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Fulenki yase Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal yase Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi yase Seyisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinari yase Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Phawundi yase Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Phawundindi laseSt Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leyoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingi yase Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra yase Sao Tome lo Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra yase Sao Tome lo Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari yase Tunisiya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingi yase Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingi yase Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dola yase Amelika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Fulenki CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Fulenki CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi yase Afrika ye Zanzi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha yase Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha yase Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola yase Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/nd.json";
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
            \"Dola laseArab\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza yase Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola yase Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari yase Bhahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Fulenki yase Bhurundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Phula yase Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola yase Khanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Fulenki yase Khongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Fulenki yase Swisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi yase China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Caboverdiano\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Fulenki yase Jibhuthi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinali yase Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Phawundi laseGibhide\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa yase Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Dola laseEthiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Phawundi yase Ngilandi\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi yase Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi yase Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Fulenki yase Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi yase Indiya\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni yase Japhani\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingi yase Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Fulenki yase Khomoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola yase Libheriya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lothi yase Lesotho\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari yase Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham yase Morokho\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Fulenki yase Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya yase Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya yase Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi yase Morishasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha yase Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali yase Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola yase Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayira yase Nijeriya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Fulenki yase Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal yase Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi yase Seyisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinari yase Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Phawundi yase Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Phawundindi laseSt Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leyoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingi yase Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra yase Sao Tome lo Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra yase Sao Tome lo Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari yase Tunisiya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingi yase Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingi yase Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dola yase Amelika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Fulenki CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Fulenki CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi yase Afrika ye Zanzi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha yase Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha yase Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola yase Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/nd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/nd.json");
    }
}
