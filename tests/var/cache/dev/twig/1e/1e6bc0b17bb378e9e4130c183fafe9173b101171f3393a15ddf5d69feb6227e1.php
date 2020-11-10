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

/* vendor/symfony/intl/Resources/data/currencies/sg.json */
class __TwigTemplate_412f978966bcc54452b8d3d6dd6dfa8b3c50aed32397398a18292ea324b55a29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sg.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sg.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"dirâm tî âEmirâti tî Arâbo Ôko\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwânza tî Angoläa\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dolära tî Ostralïi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dolùara tî Bahrâina\"
        ],
        \"BIF\": [
            \"BIF\",
            \"farânga tî Burundïi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pûla tî Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dolära tî kanadäa\"
        ],
        \"CDF\": [
            \"CDF\",
            \"farânga tî Kongöo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"farânga tî Sûîsi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi tî Shîni\"
        ],
        \"CVE\": [
            \"CVE\",
            \"eskûêdo tî Kâpo-Vêre\"
        ],
        \"DJF\": [
            \"DJF\",
            \"farânga tî Dibutïi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinäri tî Alzerïi\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pôndo tî Kâmitâ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakafa tî Eritrëe\"
        ],
        \"ETB\": [
            \"ETB\",
            \"bir tî Etiopïi\"
        ],
        \"EUR\": [
            \"€\",
            \"zoröo\"
        ],
        \"GBP\": [
            \"£\",
            \"pôndo tî Anglëe\"
        ],
        \"GHC\": [
            \"GHC\",
            \"sêdi tî Ganäa\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi tî gambïi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"sili tî Ginëe\"
        ],
        \"INR\": [
            \"₹\",
            \"rupïi tî Ênnde\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yêni tî Zapön\"
        ],
        \"KES\": [
            \"KES\",
            \"shilîngi tî Kenyäa\"
        ],
        \"KMF\": [
            \"KMF\",
            \"farânga tî Kömôro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolära tî Liberïa\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti tî Lesôtho\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinäar tî Libïi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirâm tî Marôko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariâri tî Madagasikära\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ugîya tî Moritanïi (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ugîya tî Moritanïi\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupïi tî Mörîsi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwâtia tî Malawïi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metikala tî Mozambîka\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolära tî Namibïi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nâîra tî Nizerïa\"
        ],
        \"RWF\": [
            \"RWF\",
            \"farânga tî Ruandäa\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riâli tî Saûdi Arabïi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupïi tî Sëyshêle\"
        ],
        \"SDG\": [
            \"SDG\",
            \"pôndo tî Sudäan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"pôndo tî Zûâ Sênt-Helêna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leône tî Sierâ-Leône\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilîngi tî Somalïi\"
        ],
        \"STD\": [
            \"STD\",
            \"dôbra tî Sâô Tomë na Prinsîpe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dôbra tî Sâô Tomë na Prinsîpe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangùeni tî Swazïlânde\"
        ],
        \"TND\": [
            \"TND\",
            \"dinära tî Tunizïi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilîngi tî Tanzanïi\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilîngi tî Ugandäa\"
        ],
        \"USD\": [
            \"US\$\",
            \"dol\$ara ttî äLetäa-Ôko tî Amerîka\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"farânga CFA (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"farânga CFA (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rânde tî Mbongo-Afrîka\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwâtia tî Zambïi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwâtia tî Zambïi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dolära tî Zimbäbwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sg.json";
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
            \"dirâm tî âEmirâti tî Arâbo Ôko\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwânza tî Angoläa\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dolära tî Ostralïi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dolùara tî Bahrâina\"
        ],
        \"BIF\": [
            \"BIF\",
            \"farânga tî Burundïi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pûla tî Botswana\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dolära tî kanadäa\"
        ],
        \"CDF\": [
            \"CDF\",
            \"farânga tî Kongöo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"farânga tî Sûîsi\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi tî Shîni\"
        ],
        \"CVE\": [
            \"CVE\",
            \"eskûêdo tî Kâpo-Vêre\"
        ],
        \"DJF\": [
            \"DJF\",
            \"farânga tî Dibutïi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinäri tî Alzerïi\"
        ],
        \"EGP\": [
            \"EGP\",
            \"pôndo tî Kâmitâ\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakafa tî Eritrëe\"
        ],
        \"ETB\": [
            \"ETB\",
            \"bir tî Etiopïi\"
        ],
        \"EUR\": [
            \"€\",
            \"zoröo\"
        ],
        \"GBP\": [
            \"£\",
            \"pôndo tî Anglëe\"
        ],
        \"GHC\": [
            \"GHC\",
            \"sêdi tî Ganäa\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi tî gambïi\"
        ],
        \"GNS\": [
            \"GNS\",
            \"sili tî Ginëe\"
        ],
        \"INR\": [
            \"₹\",
            \"rupïi tî Ênnde\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yêni tî Zapön\"
        ],
        \"KES\": [
            \"KES\",
            \"shilîngi tî Kenyäa\"
        ],
        \"KMF\": [
            \"KMF\",
            \"farânga tî Kömôro\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolära tî Liberïa\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti tî Lesôtho\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinäar tî Libïi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirâm tî Marôko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariâri tî Madagasikära\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ugîya tî Moritanïi (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ugîya tî Moritanïi\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupïi tî Mörîsi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwâtia tî Malawïi\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metikala tî Mozambîka\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolära tî Namibïi\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nâîra tî Nizerïa\"
        ],
        \"RWF\": [
            \"RWF\",
            \"farânga tî Ruandäa\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riâli tî Saûdi Arabïi\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupïi tî Sëyshêle\"
        ],
        \"SDG\": [
            \"SDG\",
            \"pôndo tî Sudäan\"
        ],
        \"SHP\": [
            \"SHP\",
            \"pôndo tî Zûâ Sênt-Helêna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leône tî Sierâ-Leône\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilîngi tî Somalïi\"
        ],
        \"STD\": [
            \"STD\",
            \"dôbra tî Sâô Tomë na Prinsîpe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dôbra tî Sâô Tomë na Prinsîpe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangùeni tî Swazïlânde\"
        ],
        \"TND\": [
            \"TND\",
            \"dinära tî Tunizïi\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilîngi tî Tanzanïi\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilîngi tî Ugandäa\"
        ],
        \"USD\": [
            \"US\$\",
            \"dol\$ara ttî äLetäa-Ôko tî Amerîka\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"farânga CFA (BEAC)\"
        ],
        \"XOF\": [
            \"CFA\",
            \"farânga CFA (BCEAO)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rânde tî Mbongo-Afrîka\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwâtia tî Zambïi (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwâtia tî Zambïi\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dolära tî Zimbäbwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sg.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sg.json");
    }
}
