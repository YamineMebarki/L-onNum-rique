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

/* vendor/symfony/intl/Resources/data/currencies/ff.json */
class __TwigTemplate_21898db027d1b7c08b86422e9baf829d3d22224ae6f0a71df77d0c8529cda646 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ff.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ff.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirham Emiraati Araab Dentuɗi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwansaa Anngolaa\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolaar Ostaraalii\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaar Bahrayn\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Mbuuɗu Burunndi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pulaa Botwanaa\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolaar Kandaaa\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faraa Konngo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faraa Suwiis\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuam Siin\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudoo Kap Weer\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faraa Jibutii\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaar Alaseri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Liibar Ejipt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nafka Eriteree\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biir Ecoppi\"
        ],
        \"EUR\": [
            \"€\",
            \"Oroo\"
        ],
        \"GBP\": [
            \"£\",
            \"Liibar Sterling\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi Ganaa\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gammbi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faraa Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupii Enndo\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Sapoo\"
        ],
        \"KES\": [
            \"KES\",
            \"Siling Keñaa\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faraa Komoor\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolaar Liberiyaa\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti Lesotoo\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaar Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diraham Maruk\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariyari Madagaskaar\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugiyya Muritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugiyya Muritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupii Moriis\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuwacca Malaawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikal Mosammbik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolaar Namibii\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayraa Nijeriyaa\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faraa Ruwanndaa\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaal Arabi Sawdit\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupii Seysel\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Liibar Sudaan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Liibar Sent Helen\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lewoon Seraa Liyon\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Siling Soomali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra Sawo Tome e Prensipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sawo Tome e Prensipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swaasilannda\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaar Tunisii\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Siling Tansanii\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siling Uganndaa\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolaar Dowlaaji Dentuɗi\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Mbuuɗi Seefaa BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Mbuuɗu Seefaa BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rannda Afrik Bŋ Worgo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kuwacca Sammbi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuwacca Sammbi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dolaar Simbaabuwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ff.json";
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
            \"Dirham Emiraati Araab Dentuɗi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwansaa Anngolaa\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolaar Ostaraalii\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaar Bahrayn\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Mbuuɗu Burunndi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pulaa Botwanaa\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolaar Kandaaa\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faraa Konngo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faraa Suwiis\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuam Siin\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudoo Kap Weer\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faraa Jibutii\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaar Alaseri\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Liibar Ejipt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nafka Eriteree\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Biir Ecoppi\"
        ],
        \"EUR\": [
            \"€\",
            \"Oroo\"
        ],
        \"GBP\": [
            \"£\",
            \"Liibar Sterling\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi Ganaa\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gammbi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faraa Gine\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupii Enndo\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Sapoo\"
        ],
        \"KES\": [
            \"KES\",
            \"Siling Keñaa\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faraa Komoor\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolaar Liberiyaa\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti Lesotoo\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaar Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diraham Maruk\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariyari Madagaskaar\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugiyya Muritani (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugiyya Muritani\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupii Moriis\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuwacca Malaawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikal Mosammbik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolaar Namibii\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nayraa Nijeriyaa\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faraa Ruwanndaa\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaal Arabi Sawdit\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupii Seysel\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Liibar Sudaan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Liibar Sent Helen\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Lewoon Seraa Liyon\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Siling Soomali\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra Sawo Tome e Prensipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sawo Tome e Prensipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swaasilannda\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaar Tunisii\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Siling Tansanii\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Siling Uganndaa\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolaar Dowlaaji Dentuɗi\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Mbuuɗi Seefaa BEAC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Mbuuɗu Seefaa BCEAO\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rannda Afrik Bŋ Worgo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kuwacca Sammbi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuwacca Sammbi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dolaar Simbaabuwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ff.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ff.json");
    }
}
