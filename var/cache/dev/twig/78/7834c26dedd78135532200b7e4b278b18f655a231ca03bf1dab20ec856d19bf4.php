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

/* vendor/symfony/intl/Resources/data/currencies/rn.json */
class __TwigTemplate_e2c04d4fbad5762b5a9b6a98a15330f5da6c41b3a8f55d87288155e206eed663 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/rn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/rn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Idiramu ryo muri Leta Zunze Ubumwe z’Abarabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Ikwanza ryo muri Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Idolari ryo muri Ositaraliya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Idinari ry’iribahireyini\"
        ],
        \"BIF\": [
            \"FBu\",
            \"Ifaranga ry’Uburundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Ipula ryo muri Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Idolari rya Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Ifaranga rya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Ifaranga ry’Ubusuwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Iyuwani ryo mu Bushinwa\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Irikaboveridiyano ryo muri Esikudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Ifaranga ryo muri Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Idinari ryo muri Alijeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Ipawundi rya Misiri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Irinakufa ryo muri Eritereya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Ibiri ryo muri Etiyopiya\"
        ],
        \"EUR\": [
            \"€\",
            \"Iyero\"
        ],
        \"GBP\": [
            \"£\",
            \"Ipawundi ryo mu Bwongereza\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Icedi ryo muri Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Idalasi ryo muri Gambiya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Ifaranga ryo muri Gineya\"
        ],
        \"INR\": [
            \"₹\",
            \"Irupiya ryo mu Buhindi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Iyeni ry’Ubuyapani\"
        ],
        \"KES\": [
            \"KES\",
            \"Ishilingi rya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Ifaranga rya Komore\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Idolari rya Liberiya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Iloti ryo muro Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Idinari rya Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Idiramu ryo muri Maroke\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Iriyari ryo muri Madagasikari\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ryo muri Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ryo muri Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Irupiya ryo mu birwa bya Morise\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Ikwaca ryo muri Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Irimetikali ryo muri Mozambike\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Idolari rya Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Inayira ryo muri Nijeriya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ifaranga ry’u Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Iriyari ryo muri Arabiya Sawudite\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Irupiya ryo mu birwa bya Sayisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Ipawundi rya Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ipawundi rya Sente Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Ilewone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Ishilingi ryo muri Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Idobura ryo muri Sawotome na Perensipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Idobura ryo muri Sawotome na Perensipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Ililangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Idinari ryo muri Tuniziya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Ishilingi rya Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ishilingi ry’Ubugande\"
        ],
        \"USD\": [
            \"US\$\",
            \"Idolari ry’abanyamerika\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Irandi ryo muri Afurika y’Epfo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Ikwaca ryo muri Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Ikwaca ryo muri Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Idolari ryo muri Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/rn.json";
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
            \"Idiramu ryo muri Leta Zunze Ubumwe z’Abarabu\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Ikwanza ryo muri Angola\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Idolari ryo muri Ositaraliya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Idinari ry’iribahireyini\"
        ],
        \"BIF\": [
            \"FBu\",
            \"Ifaranga ry’Uburundi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Ipula ryo muri Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Idolari rya Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Ifaranga rya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Ifaranga ry’Ubusuwisi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Iyuwani ryo mu Bushinwa\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Irikaboveridiyano ryo muri Esikudo\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Ifaranga ryo muri Jibuti\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Idinari ryo muri Alijeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Ipawundi rya Misiri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Irinakufa ryo muri Eritereya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Ibiri ryo muri Etiyopiya\"
        ],
        \"EUR\": [
            \"€\",
            \"Iyero\"
        ],
        \"GBP\": [
            \"£\",
            \"Ipawundi ryo mu Bwongereza\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Icedi ryo muri Gana\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Idalasi ryo muri Gambiya\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Ifaranga ryo muri Gineya\"
        ],
        \"INR\": [
            \"₹\",
            \"Irupiya ryo mu Buhindi\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Iyeni ry’Ubuyapani\"
        ],
        \"KES\": [
            \"KES\",
            \"Ishilingi rya Kenya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Ifaranga rya Komore\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Idolari rya Liberiya\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Iloti ryo muro Lesoto\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Idinari rya Libiya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Idiramu ryo muri Maroke\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Iriyari ryo muri Madagasikari\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugwiya ryo muri Moritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugwiya ryo muri Moritaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Irupiya ryo mu birwa bya Morise\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Ikwaca ryo muri Malawi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Irimetikali ryo muri Mozambike\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Idolari rya Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Inayira ryo muri Nijeriya\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ifaranga ry’u Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Iriyari ryo muri Arabiya Sawudite\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Irupiya ryo mu birwa bya Sayisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Ipawundi rya Sudani\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Ipawundi rya Sente Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Ilewone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Ishilingi ryo muri Somaliya\"
        ],
        \"STD\": [
            \"STD\",
            \"Idobura ryo muri Sawotome na Perensipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Idobura ryo muri Sawotome na Perensipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Ililangeni\"
        ],
        \"TND\": [
            \"TND\",
            \"Idinari ryo muri Tuniziya\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Ishilingi rya Tanzaniya\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ishilingi ry’Ubugande\"
        ],
        \"USD\": [
            \"US\$\",
            \"Idolari ry’abanyamerika\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Irandi ryo muri Afurika y’Epfo\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Ikwaca ryo muri Zambiya (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Ikwaca ryo muri Zambiya\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Idolari ryo muri Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/rn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/rn.json");
    }
}
