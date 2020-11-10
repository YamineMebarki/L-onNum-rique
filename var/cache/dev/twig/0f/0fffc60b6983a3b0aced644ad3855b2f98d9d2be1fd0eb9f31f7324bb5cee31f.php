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

/* vendor/symfony/intl/Resources/data/currencies/lu.json */
class __TwigTemplate_9307cb7242fbc02e8cfa699c2aac8e916824ce51a5410d19533bbf925c9c34ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Ndiriha wa Lemila alabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza wa Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Ndola wa Ositali\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Ndina wa Bahrene\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Nfalanga wa Bulundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula wa Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Ndola wa Kanada\"
        ],
        \"CDF\": [
            \"FC\",
            \"Nfalanga wa Kongu\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Nfalanga wa Swise\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuani Renminbi wa Shine\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikuludo wa Kapevere\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Nfalanga wa Dzibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Ndina wa Alijeri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni wa Mushidi\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa wa Elitle\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bira wa Etshiopi\"
        ],
        \"EUR\": [
            \"€\",
            \"Iro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pauni wa Angeletele\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi wa Ngana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Ndalasi wa Ngambi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Nfalanga wa Ngina\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi wa Inde\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni wa Zapɔ\"
        ],
        \"KES\": [
            \"KES\",
            \"Nshili wa Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Nfalanga wa Komoru\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Ndola wa Liberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti wa Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Ndina wa Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Ndiriha wa Maroke\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Nfalanga wa Madagasikare\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya wa Moritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya wa Moritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia wa Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwasha wa Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali wa Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Ndola wa Namibi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira wa Nizerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Nfalanga wa Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyale wa Alabu Nsawu\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupya wa Seshele\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Ndina wa Suda\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pauni wa Suda\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni wa Santu Elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Nshili wa Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra wa Sao Tome ne Presipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra wa Sao Tome ne Presipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Ndina wa Tinizi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Nshili wa Tanzani\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Nshili wa Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Ndola wa Ameriki\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Nfalanga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Nfalanga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rande wa Afrika wa Mwinshi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwasha wa Zambi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwasha wa Zambi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Ndola wa Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/lu.json";
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
            \"Ndiriha wa Lemila alabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza wa Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Ndola wa Ositali\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Ndina wa Bahrene\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Nfalanga wa Bulundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula wa Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Ndola wa Kanada\"
        ],
        \"CDF\": [
            \"FC\",
            \"Nfalanga wa Kongu\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Nfalanga wa Swise\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuani Renminbi wa Shine\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Esikuludo wa Kapevere\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Nfalanga wa Dzibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Ndina wa Alijeri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni wa Mushidi\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa wa Elitle\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bira wa Etshiopi\"
        ],
        \"EUR\": [
            \"€\",
            \"Iro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pauni wa Angeletele\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi wa Ngana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Ndalasi wa Ngambi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Nfalanga wa Ngina\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi wa Inde\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni wa Zapɔ\"
        ],
        \"KES\": [
            \"KES\",
            \"Nshili wa Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Nfalanga wa Komoru\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Ndola wa Liberya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti wa Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Ndina wa Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Ndiriha wa Maroke\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Nfalanga wa Madagasikare\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya wa Moritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya wa Moritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia wa Morisi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwasha wa Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali wa Mozambiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Ndola wa Namibi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira wa Nizerya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Nfalanga wa Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyale wa Alabu Nsawu\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupya wa Seshele\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Ndina wa Suda\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pauni wa Suda\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni wa Santu Elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Nshili wa Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra wa Sao Tome ne Presipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra wa Sao Tome ne Presipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Ndina wa Tinizi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Nshili wa Tanzani\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Nshili wa Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Ndola wa Ameriki\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Nfalanga CFA BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Nfalanga CFA BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rande wa Afrika wa Mwinshi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwasha wa Zambi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwasha wa Zambi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Ndola wa Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/lu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/lu.json");
    }
}
