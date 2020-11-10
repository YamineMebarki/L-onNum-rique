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

/* vendor/symfony/intl/Resources/data/currencies/bm.json */
class __TwigTemplate_749385c99096728c9a6d552e9d5ba4931176c8ef4328a2df106a4f559e186419 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/bm.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/bm.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"arabu mara kafoli Diram\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angola Kwanza\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ositirali Dolar\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bareyini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundi Fraŋ\"
        ],
        \"BWP\": [
            \"BWP\",
            \"bɔtisiwana Pula\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"kanada Dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongole Fraŋ\"
        ],
        \"CHF\": [
            \"CHF\",
            \"suwisi Fraŋ\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"siniwa Yuwan\"
        ],
        \"CVE\": [
            \"CVE\",
            \"capivɛrdi Esekudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"jibuti Fraŋ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"alizeri Dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"eziputi Livri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritere Nafika\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopi Bir\"
        ],
        \"EUR\": [
            \"€\",
            \"ero\"
        ],
        \"GBP\": [
            \"£\",
            \"angilɛ Livri\"
        ],
        \"GHC\": [
            \"GHC\",
            \"gana Sedi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambi Dalasi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"gine Fraŋ\"
        ],
        \"INR\": [
            \"₹\",
            \"Ɛndu Rupi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"zapɔne Yɛn\"
        ],
        \"KES\": [
            \"KES\",
            \"keniya Siling\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komɔri Fraŋ\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiya Dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesoto Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libi Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marɔku Diram\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagasikari Fraŋ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mɔritani Uguwiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mɔritani Uguwiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"morisi Rupi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawi Kwaca\"
        ],
        \"MZM\": [
            \"MZM\",
            \"mozanbiki Metikali\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibi Dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nizeriya Nɛra\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ruwanda Fraŋ\"
        ],
        \"SAR\": [
            \"SAR\",
            \"sawudiya Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sesɛli Rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudani Dinar\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudani Livri\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ɛlɛni-Senu Livri\"
        ],
        \"SLL\": [
            \"SLL\",
            \"siyeralewɔni Lewɔni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somali Siling\"
        ],
        \"STD\": [
            \"STD\",
            \"sawotome Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"sawotome Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swazilandi Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"tunizi Dinar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzani Siling\"
        ],
        \"UGX\": [
            \"UGX\",
            \"uganda Siling\"
        ],
        \"USD\": [
            \"US\$\",
            \"ameriki Dolar\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"sefa Fraŋ (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"sefa Fraŋ (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sudafriki Randi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambi Kwaca (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambi Kwaca\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabuwe Dolar\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/bm.json";
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
            \"arabu mara kafoli Diram\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angola Kwanza\"
        ],
        \"AUD\": [
            \"A\$\",
            \"ositirali Dolar\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bareyini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundi Fraŋ\"
        ],
        \"BWP\": [
            \"BWP\",
            \"bɔtisiwana Pula\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"kanada Dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongole Fraŋ\"
        ],
        \"CHF\": [
            \"CHF\",
            \"suwisi Fraŋ\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"siniwa Yuwan\"
        ],
        \"CVE\": [
            \"CVE\",
            \"capivɛrdi Esekudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"jibuti Fraŋ\"
        ],
        \"DZD\": [
            \"DZD\",
            \"alizeri Dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"eziputi Livri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritere Nafika\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopi Bir\"
        ],
        \"EUR\": [
            \"€\",
            \"ero\"
        ],
        \"GBP\": [
            \"£\",
            \"angilɛ Livri\"
        ],
        \"GHC\": [
            \"GHC\",
            \"gana Sedi\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambi Dalasi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"gine Fraŋ\"
        ],
        \"INR\": [
            \"₹\",
            \"Ɛndu Rupi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"zapɔne Yɛn\"
        ],
        \"KES\": [
            \"KES\",
            \"keniya Siling\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komɔri Fraŋ\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiya Dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesoto Loti\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libi Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marɔku Diram\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagasikari Fraŋ\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mɔritani Uguwiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mɔritani Uguwiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"morisi Rupi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawi Kwaca\"
        ],
        \"MZM\": [
            \"MZM\",
            \"mozanbiki Metikali\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibi Dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nizeriya Nɛra\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ruwanda Fraŋ\"
        ],
        \"SAR\": [
            \"SAR\",
            \"sawudiya Riyal\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sesɛli Rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudani Dinar\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudani Livri\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ɛlɛni-Senu Livri\"
        ],
        \"SLL\": [
            \"SLL\",
            \"siyeralewɔni Lewɔni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somali Siling\"
        ],
        \"STD\": [
            \"STD\",
            \"sawotome Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"sawotome Dobra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swazilandi Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"tunizi Dinar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzani Siling\"
        ],
        \"UGX\": [
            \"UGX\",
            \"uganda Siling\"
        ],
        \"USD\": [
            \"US\$\",
            \"ameriki Dolar\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"sefa Fraŋ (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"sefa Fraŋ (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sudafriki Randi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambi Kwaca (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambi Kwaca\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabuwe Dolar\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/bm.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/bm.json");
    }
}
