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

/* vendor/symfony/intl/Resources/data/currencies/yo.json */
class __TwigTemplate_a2a91dd7cdeae01b9c896b3a1c52e5200aaad78898326e5175bf9ce6c3044c18 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/yo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/yo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Diami ti Awon Orílẹ́ède Arabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Wansa ti Orílẹ́ède Àngólà\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dọla ti Orílẹ́ède Ástràlìá\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dina ti Orílẹ́ède Báránì\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faransi ti Orílẹ́ède Bùùrúndì\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Owó ti Orílẹ̀-èdè Brazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ti Orílẹ́ède Bọ̀tìsúwánà\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dọla ti Orílẹ́ède Kánádà\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faransi ti Orílẹ́ède Kóngò\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faransi ti Orílẹ́ède Siwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Reminibi ti Orílẹ́ède ṣáínà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabofediano ti Orílẹ́ède Esuodo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faransi ti Orílẹ́ède Dibouti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dina ti Orílẹ́ède Àlùgèríánì\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pọọn ti Orílẹ́ède Egipiti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ti Orílẹ́ède Eriteriani\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biri ti Orílẹ́ède Eutopia\"
        ],
        \"EUR\": [
            \"€\",
            \"owó Yúrò\"
        ],
        \"GBP\": [
            \"£\",
            \"Pọ́n-ùn ti Orilẹ̀-èdè Gẹ̀ẹ́sì\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ṣidi ti Orílẹ́ède Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ti Orílẹ́ède Gamibia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faransi ti Orílẹ́ède Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ti Orílẹ́ède Indina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ti Orílẹ́ède Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"ṣiili ti Orílẹ́ède Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faransi ti Orílẹ́ède ṣomoriani\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dọla ti Orílẹ́ède Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ti Orílẹ́ède Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dina ti Orílẹ́ède Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirami ti Orílẹ́ède Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faransi ti Orílẹ́ède Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ti Orílẹ́ède Maritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ti Orílẹ́ède Maritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ti Orílẹ́ède Maritiusi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kaṣa ti Orílẹ́ède Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ti Orílẹ́ède Mosamibiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dọla ti Orílẹ́ède Namibia\"
        ],
        \"NGN\": [
            \"₦\",
            \"Náìrà ti Orílẹ̀-èdè Nàìjíríà\"
        ],
        \"RUB\": [
            \"₽\",
            \"Owó ruble ti ilẹ̀ Rọ́ṣíà\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faransi ti Orílẹ́ède Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riya ti Orílẹ́ède Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ti Orílẹ́ède Sayiselesi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dina ti Orílẹ́ède Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pọọun ti Orílẹ́ède Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pọọun ti Orílẹ́ède ̣Elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lioni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sile ti Orílẹ́ède Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobira ti Orílẹ́ède Sao tome Ati Pirisipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobira ti Orílẹ́ède Sao tome Ati Pirisipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dina ti Orílẹ́ède Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sile ti Orílẹ́ède Tansania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siile ti Orílẹ́ède Uganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dọ́là\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faransi ti Orílẹ́ède BEKA\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faransi ti Orílẹ́ède BIKEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ti Orílẹ́ède Ariwa Afirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kawaṣa ti Orílẹ́ède Saabia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawaṣa ti Orílẹ́ède Saabia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dọla ti Orílẹ́ède Siibabuwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/yo.json";
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
            \"Diami ti Awon Orílẹ́ède Arabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Wansa ti Orílẹ́ède Àngólà\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dọla ti Orílẹ́ède Ástràlìá\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dina ti Orílẹ́ède Báránì\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faransi ti Orílẹ́ède Bùùrúndì\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Owó ti Orílẹ̀-èdè Brazil\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ti Orílẹ́ède Bọ̀tìsúwánà\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dọla ti Orílẹ́ède Kánádà\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faransi ti Orílẹ́ède Kóngò\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faransi ti Orílẹ́ède Siwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Reminibi ti Orílẹ́ède ṣáínà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabofediano ti Orílẹ́ède Esuodo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faransi ti Orílẹ́ède Dibouti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dina ti Orílẹ́ède Àlùgèríánì\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pọọn ti Orílẹ́ède Egipiti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakifa ti Orílẹ́ède Eriteriani\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biri ti Orílẹ́ède Eutopia\"
        ],
        \"EUR\": [
            \"€\",
            \"owó Yúrò\"
        ],
        \"GBP\": [
            \"£\",
            \"Pọ́n-ùn ti Orilẹ̀-èdè Gẹ̀ẹ́sì\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ṣidi ti Orílẹ́ède Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ti Orílẹ́ède Gamibia\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faransi ti Orílẹ́ède Gini\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupi ti Orílẹ́ède Indina\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ti Orílẹ́ède Japani\"
        ],
        \"KES\": [
            \"KES\",
            \"ṣiili ti Orílẹ́ède Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faransi ti Orílẹ́ède ṣomoriani\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dọla ti Orílẹ́ède Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ti Orílẹ́ède Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dina ti Orílẹ́ède Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirami ti Orílẹ́ède Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Faransi ti Orílẹ́ède Malagasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ti Orílẹ́ède Maritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ti Orílẹ́ède Maritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupi ti Orílẹ́ède Maritiusi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kaṣa ti Orílẹ́ède Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metika ti Orílẹ́ède Mosamibiki\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dọla ti Orílẹ́ède Namibia\"
        ],
        \"NGN\": [
            \"₦\",
            \"Náìrà ti Orílẹ̀-èdè Nàìjíríà\"
        ],
        \"RUB\": [
            \"₽\",
            \"Owó ruble ti ilẹ̀ Rọ́ṣíà\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faransi ti Orílẹ́ède Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riya ti Orílẹ́ède Saudi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupi ti Orílẹ́ède Sayiselesi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Dina ti Orílẹ́ède Sudani\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pọọun ti Orílẹ́ède Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pọọun ti Orílẹ́ède ̣Elena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lioni\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Sile ti Orílẹ́ède Somali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobira ti Orílẹ́ède Sao tome Ati Pirisipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobira ti Orílẹ́ède Sao tome Ati Pirisipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Dina ti Orílẹ́ède Tunisia\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Sile ti Orílẹ́ède Tansania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siile ti Orílẹ́ède Uganda\"
        ],
        \"USD\": [
            \"\$\",
            \"Dọ́là\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faransi ti Orílẹ́ède BEKA\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faransi ti Orílẹ́ède BIKEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ti Orílẹ́ède Ariwa Afirika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kawaṣa ti Orílẹ́ède Saabia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawaṣa ti Orílẹ́ède Saabia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dọla ti Orílẹ́ède Siibabuwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/yo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/yo.json");
    }
}
