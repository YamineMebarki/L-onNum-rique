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

/* vendor/symfony/intl/Resources/data/currencies/yo_BJ.json */
class __TwigTemplate_fd96b67f26194383c399f34dc3894f4e1490cb7d6f4c4a533d6cabeeccc221d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/yo_BJ.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/yo_BJ.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Diami ti Awon Orílɛ́ède Arabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Wansa ti Orílɛ́ède Àngólà\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dɔla ti Orílɛ́ède Ástràlìá\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dina ti Orílɛ́ède Báránì\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faransi ti Orílɛ́ède Bùùrúndì\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Owó ti Orílɛ̀-èdè Brazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ti Orílɛ́ède Bɔ̀tìsúwánà\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dɔla ti Orílɛ́ède Kánádà\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faransi ti Orílɛ́ède Kóngò\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faransi ti Orílɛ́ède Siwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Reminibi ti Orílɛ́ède sháínà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabofediano ti Orílɛ́ède Esuodo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faransi ti Orílɛ́ède Dibouti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dina ti Orílɛ́ède Àlùgèríánì\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pɔɔn ti Orílɛ́ède Egipiti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ti Orílɛ́ède Eriteriani\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biri ti Orílɛ́ède Eutopia\"
        ],
        \"GBP\": [
            \"£\",
            \"Pɔ́n-ùn ti Orilɛ̀-èdè Gɛ̀ɛ́sì\"
        ],
        \"GHC\": [
            \"GHC\",
            \"shidi ti Orílɛ́ède Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ti Orílɛ́ède Gamibia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faransi ti Orílɛ́ède Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ti Orílɛ́ède Indina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ti Orílɛ́ède Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"shiili ti Orílɛ́ède Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faransi ti Orílɛ́ède shomoriani\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dɔla ti Orílɛ́ède Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ti Orílɛ́ède Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dina ti Orílɛ́ède Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirami ti Orílɛ́ède Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faransi ti Orílɛ́ède Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ti Orílɛ́ède Maritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ti Orílɛ́ède Maritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ti Orílɛ́ède Maritiusi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kasha ti Orílɛ́ède Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ti Orílɛ́ède Mosamibiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dɔla ti Orílɛ́ède Namibia\"
        ],
        \"NGN\": [
            \"₦\",
            \"Náìrà ti Orílɛ̀-èdè Nàìjíríà\"
        ],
        \"RUB\": [
            \"₽\",
            \"Owó ruble ti ilɛ̀ Rɔ́shíà\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faransi ti Orílɛ́ède Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riya ti Orílɛ́ède Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ti Orílɛ́ède Sayiselesi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dina ti Orílɛ́ède Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pɔɔun ti Orílɛ́ède Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pɔɔun ti Orílɛ́ède ̣Elena\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sile ti Orílɛ́ède Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobira ti Orílɛ́ède Sao tome Ati Pirisipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobira ti Orílɛ́ède Sao tome Ati Pirisipe\"
        ],
        \"TND\": [
            \"TND\",
            \"Dina ti Orílɛ́ède Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sile ti Orílɛ́ède Tansania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siile ti Orílɛ́ède Uganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dɔ́là\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faransi ti Orílɛ́ède BEKA\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faransi ti Orílɛ́ède BIKEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ti Orílɛ́ède Ariwa Afirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kawasha ti Orílɛ́ède Saabia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawasha ti Orílɛ́ède Saabia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dɔla ti Orílɛ́ède Siibabuwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/yo_BJ.json";
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
            \"Diami ti Awon Orílɛ́ède Arabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Wansa ti Orílɛ́ède Àngólà\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dɔla ti Orílɛ́ède Ástràlìá\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dina ti Orílɛ́ède Báránì\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faransi ti Orílɛ́ède Bùùrúndì\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Owó ti Orílɛ̀-èdè Brazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ti Orílɛ́ède Bɔ̀tìsúwánà\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dɔla ti Orílɛ́ède Kánádà\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faransi ti Orílɛ́ède Kóngò\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faransi ti Orílɛ́ède Siwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Reminibi ti Orílɛ́ède sháínà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabofediano ti Orílɛ́ède Esuodo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faransi ti Orílɛ́ède Dibouti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dina ti Orílɛ́ède Àlùgèríánì\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pɔɔn ti Orílɛ́ède Egipiti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ti Orílɛ́ède Eriteriani\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biri ti Orílɛ́ède Eutopia\"
        ],
        \"GBP\": [
            \"£\",
            \"Pɔ́n-ùn ti Orilɛ̀-èdè Gɛ̀ɛ́sì\"
        ],
        \"GHC\": [
            \"GHC\",
            \"shidi ti Orílɛ́ède Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ti Orílɛ́ède Gamibia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faransi ti Orílɛ́ède Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ti Orílɛ́ède Indina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ti Orílɛ́ède Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"shiili ti Orílɛ́ède Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faransi ti Orílɛ́ède shomoriani\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dɔla ti Orílɛ́ède Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ti Orílɛ́ède Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dina ti Orílɛ́ède Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirami ti Orílɛ́ède Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faransi ti Orílɛ́ède Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ti Orílɛ́ède Maritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ti Orílɛ́ède Maritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ti Orílɛ́ède Maritiusi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kasha ti Orílɛ́ède Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ti Orílɛ́ède Mosamibiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dɔla ti Orílɛ́ède Namibia\"
        ],
        \"NGN\": [
            \"₦\",
            \"Náìrà ti Orílɛ̀-èdè Nàìjíríà\"
        ],
        \"RUB\": [
            \"₽\",
            \"Owó ruble ti ilɛ̀ Rɔ́shíà\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faransi ti Orílɛ́ède Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riya ti Orílɛ́ède Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ti Orílɛ́ède Sayiselesi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dina ti Orílɛ́ède Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pɔɔun ti Orílɛ́ède Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pɔɔun ti Orílɛ́ède ̣Elena\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sile ti Orílɛ́ède Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobira ti Orílɛ́ède Sao tome Ati Pirisipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobira ti Orílɛ́ède Sao tome Ati Pirisipe\"
        ],
        \"TND\": [
            \"TND\",
            \"Dina ti Orílɛ́ède Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sile ti Orílɛ́ède Tansania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siile ti Orílɛ́ède Uganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dɔ́là\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faransi ti Orílɛ́ède BEKA\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faransi ti Orílɛ́ède BIKEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ti Orílɛ́ède Ariwa Afirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kawasha ti Orílɛ́ède Saabia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawasha ti Orílɛ́ède Saabia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dɔla ti Orílɛ́ède Siibabuwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/yo_BJ.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/yo_BJ.json");
    }
}
