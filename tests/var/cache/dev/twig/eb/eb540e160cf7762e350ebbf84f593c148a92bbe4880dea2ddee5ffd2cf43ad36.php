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

/* vendor/symfony/intl/Resources/data/currencies/ak.json */
class __TwigTemplate_3791e604bd291fa4b07b0c1ffb3dc43dbfa3900e63223f10bbe973948e343fba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ak.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ak.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Ɛmirete Arab Nkabɔmu Deram\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola Kwanza\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Ɔstrelia Dɔla\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Baren Dina\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi Frank\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana Pula\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada Dɔla\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo Frank\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Ɛskudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Gyebuti Frank\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Ɔlgyeria Dina\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egypt Pɔn\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Ɛretereya Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Itiopia Bir\"
        ],
        \"EUR\": [
            \"€\",
            \"Iro\"
        ],
        \"GBP\": [
            \"£\",
            \"Breten Pɔn\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ghana Sidi (1979–2007)\"
        ],
        \"GHS\": [
            \"GH₵\",
            \"Ghana Sidi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambia Dalasi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Gini Frank\"
        ],
        \"INR\": [
            \"₹\",
            \"India Rupi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Gyapan Yɛn\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenya Hyelen\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoro Frank\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Laeberia Dɔla\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libya Dina\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Moroko Diram\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagasi Frank\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mɔretenia Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mɔretenia Ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mɔrehyeɔs Rupi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawi Kwacha\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambik Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibia Dɔla\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naegyeria Naira\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rewanda Frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyhyɛls Rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan Dina\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudan Pɔn\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pɔn\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somailia Hyelen\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tome ne Principe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Sao Tome ne Principe Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisia Dina\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzania Hyelen\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda Hyelen\"
        ],
        \"USD\": [
            \"US\$\",
            \"Amɛrika Dɔla\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Sefa\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Afrika Anaafo Rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambia Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambia Kwacha\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabwe Dɔla\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ak.json";
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
            \"Ɛmirete Arab Nkabɔmu Deram\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola Kwanza\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Ɔstrelia Dɔla\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Baren Dina\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi Frank\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana Pula\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada Dɔla\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo Frank\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Ɛskudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Gyebuti Frank\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Ɔlgyeria Dina\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egypt Pɔn\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Ɛretereya Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Itiopia Bir\"
        ],
        \"EUR\": [
            \"€\",
            \"Iro\"
        ],
        \"GBP\": [
            \"£\",
            \"Breten Pɔn\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ghana Sidi (1979–2007)\"
        ],
        \"GHS\": [
            \"GH₵\",
            \"Ghana Sidi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambia Dalasi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Gini Frank\"
        ],
        \"INR\": [
            \"₹\",
            \"India Rupi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Gyapan Yɛn\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenya Hyelen\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoro Frank\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Laeberia Dɔla\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libya Dina\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Moroko Diram\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagasi Frank\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mɔretenia Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mɔretenia Ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mɔrehyeɔs Rupi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawi Kwacha\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambik Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibia Dɔla\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naegyeria Naira\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rewanda Frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyhyɛls Rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan Dina\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudan Pɔn\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pɔn\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somailia Hyelen\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tome ne Principe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Sao Tome ne Principe Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisia Dina\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzania Hyelen\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda Hyelen\"
        ],
        \"USD\": [
            \"US\$\",
            \"Amɛrika Dɔla\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Sefa\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Afrika Anaafo Rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambia Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambia Kwacha\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabwe Dɔla\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ak.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ak.json");
    }
}
