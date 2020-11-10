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

/* vendor/symfony/intl/Resources/data/currencies/ha.json */
class __TwigTemplate_27d845d809c6b0287831bcf39ef08f5bc7a6308c71f8dc178298ef7fab784c4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ha.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ha.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Kuɗin Haɗaɗɗiyar Daular Larabawa\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kuɗin Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dalar Ostareliya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Kuɗin Baharan\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Kuɗin Burundi\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Ril Kudin Birazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Kuɗin Baswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dalar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kuɗin Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Kuɗin Suwizalan\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwan kasar Sin\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kuɗin Tsibiran Kap Barde\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Kuɗin Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Kuɗin Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Fam kin Masar\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Kuɗin Eritireya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Kuɗin Habasha\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Fam na Ingila\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Cedi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Kuɗin Gambiya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Kuɗin Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Kuɗin Indiya\"
        ],
        \"JPY\": [
            \"¥\",
            \"Yen kasar Japan\"
        ],
        \"KES\": [
            \"KES\",
            \"Sulen Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Kuɗin Kwamoras\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dalar Laberiya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Kuɗin Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Kuɗin Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Kuɗin Maroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Kuɗin Madagaskar\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Kuɗin Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Kuɗin Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Kuɗin Moritus\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuɗin Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Kuɗin Mozambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dalar Namibiya\"
        ],
        \"NGN\": [
            \"₦\",
            \"Nairar Najeriya\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruble kasar Rasha\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Kuɗin Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Kuɗin Saishal\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Fam kin Sudan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Fam kin San Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Kuɗin Salewo\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sulen Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Kuɗin Sawo Tome da Paransip (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Kuɗin Sawo Tome da Paransip\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Kuɗin Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Kuɗin Tunisiya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sulen Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Sule Yuganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dalar Amirka\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Kuɗin Sefa na Afirka Ta Tsakiya\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Kuɗin Sefa na Afirka Ta Yamma\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Kuɗin Afirka Ta Kudu\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kuɗin Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuɗin Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dalar zimbabuwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ha.json";
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
            \"Kuɗin Haɗaɗɗiyar Daular Larabawa\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kuɗin Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dalar Ostareliya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Kuɗin Baharan\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Kuɗin Burundi\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Ril Kudin Birazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Kuɗin Baswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dalar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kuɗin Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Kuɗin Suwizalan\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwan kasar Sin\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kuɗin Tsibiran Kap Barde\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Kuɗin Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Kuɗin Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Fam kin Masar\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Kuɗin Eritireya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Kuɗin Habasha\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"GBP\": [
            \"£\",
            \"Fam na Ingila\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Cedi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Kuɗin Gambiya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Kuɗin Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Kuɗin Indiya\"
        ],
        \"JPY\": [
            \"¥\",
            \"Yen kasar Japan\"
        ],
        \"KES\": [
            \"KES\",
            \"Sulen Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Kuɗin Kwamoras\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dalar Laberiya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Kuɗin Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Kuɗin Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Kuɗin Maroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Kuɗin Madagaskar\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Kuɗin Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Kuɗin Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Kuɗin Moritus\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuɗin Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Kuɗin Mozambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dalar Namibiya\"
        ],
        \"NGN\": [
            \"₦\",
            \"Nairar Najeriya\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruble kasar Rasha\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Kuɗin Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Kuɗin Saishal\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Fam kin Sudan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Fam kin San Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Kuɗin Salewo\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sulen Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Kuɗin Sawo Tome da Paransip (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Kuɗin Sawo Tome da Paransip\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Kuɗin Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Kuɗin Tunisiya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sulen Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Sule Yuganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dalar Amirka\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Kuɗin Sefa na Afirka Ta Tsakiya\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Kuɗin Sefa na Afirka Ta Yamma\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Kuɗin Afirka Ta Kudu\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kuɗin Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuɗin Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dalar zimbabuwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ha.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ha.json");
    }
}
