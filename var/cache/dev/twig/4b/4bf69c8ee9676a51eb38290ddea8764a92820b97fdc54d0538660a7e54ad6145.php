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

/* vendor/symfony/intl/Resources/data/currencies/sn.json */
class __TwigTemplate_780b64f9981200452f0dc60773e6e17fd7af9a716b2390aeb8a3f1d88f9b2b33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Diramu re United Arab Emirates\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ye Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dora re Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dhinari re Bhahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Furenki re Bhurundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pura re Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dora re Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Furenki re Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Furenki re Swisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ye China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Dhora re Escudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Furenki re Jibhuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dhinari re Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Paundi re Ijipita\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa re Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Dhora re Etiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Paundi ye Bhiriteni\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ye Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ye Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Furenki re Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupe re India\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ye Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"Shiringi ye Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Furenki re Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dora re Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ye Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari re Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ye Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Furenki re Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ye Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ye Moritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ye Morishasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ye Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ye Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dora re Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ye Nijeria\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Furenki re Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyali re Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi re Seyisheri\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinari re Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Paundi re Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Paundi re Senti Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shiringi re Somalia\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra re Sao Tome ne Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra re Sao Tome ne Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari re Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shiringi re Tanzania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shiringi re Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dora re Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Furenki CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Furenki CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ye Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ye Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dora re Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sn.json";
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
            \"Diramu re United Arab Emirates\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ye Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dora re Australia\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dhinari re Bhahareni\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Furenki re Bhurundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pura re Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dora re Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Furenki re Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Furenki re Swisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Renminbi ye China\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Dhora re Escudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Furenki re Jibhuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dhinari re Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Paundi re Ijipita\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa re Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Dhora re Etiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Paundi ye Bhiriteni\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ye Ghana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ye Gambia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Furenki re Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupe re India\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ye Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"Shiringi ye Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Furenki re Komoro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dora re Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ye Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari re Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ye Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Furenki re Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ye Moritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ye Moritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ye Morishasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ye Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ye Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dora re Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ye Nijeria\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Furenki re Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyali re Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi re Seyisheri\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dinari re Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Paundi re Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Paundi re Senti Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shiringi re Somalia\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra re Sao Tome ne Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra re Sao Tome ne Principe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari re Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shiringi re Tanzania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shiringi re Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dora re Amerika\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Furenki CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Furenki CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ye Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ye Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dora re Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sn.json");
    }
}
