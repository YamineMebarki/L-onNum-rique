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

/* vendor/symfony/intl/Resources/data/currencies/ia.json */
class __TwigTemplate_f88395e3bc644d4572b1ace3d827ced415131e741526b3c0b0871bd37dd7175b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ia.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ia.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ALL\": [
            \"ALL\",
            \"lek albanese\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florino antillan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolan\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florino aruban\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertibile de Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar barbadian\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgare\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundese\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar bermudan\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano bolivian\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar bahamian\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswanese\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorusse\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar belizan\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollar canadian\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolese\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suisse\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilen\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan chinese\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombian\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costarican\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cuban convertibile\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cuban\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo capoverdian\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona chec\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Marco geman\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco djibutian\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danese\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerin\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Corona estonian\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra egyptie\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritree\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr ethiope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Marco finnese\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar fijian\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra falklandese\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franco francese\"
        ],
        \"GBP\": [
            \"£\",
            \"libra sterling\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanese\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambian\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guinean\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemaltec\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar guyanese\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurese\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croate\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint hungare\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Libra irlandese\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandese\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar jamaican\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen japonese\"
        ],
        \"KES\": [
            \"KES\",
            \"shilling kenyan\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comorian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar del Insulas Caiman\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar liberian\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libyc\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocchin\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldave\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgache\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedonie\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya mauritan (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritan\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauritian\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawian\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexican\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigerian\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba nicaraguan\"
        ],
        \"NLG\": [
            \"ƒ\",
            \"Florino nederlandese\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona norvegian\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollar neozelandese\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamen\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruvian\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polonese\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguayan\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanian\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbe\"
        ],
        \"RUB\": [
            \"₽\",
            \"rublo russe\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandese\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar del insulas Salomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia seychellese\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libra sudanese\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona svedese\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra de St. Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone sierraleonese\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilling somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar surinamese\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sud-sudanese\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé e Príncipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazilandese\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongan\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar de Trinidad e Tobago\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilling tanzanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ukrainian\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilling ugandese\"
        ],
        \"USD\": [
            \"US\$\",
            \"dollar statounitese\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelan (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelan\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatuan\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoan\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA de Africa Central\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollar del Caribes Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA de Africa Occidental\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sudafrican\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambian\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ia.json";
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
        \"ALL\": [
            \"ALL\",
            \"lek albanese\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florino antillan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolan\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florino aruban\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertibile de Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar barbadian\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgare\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundese\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar bermudan\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano bolivian\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar bahamian\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswanese\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorusse\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar belizan\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollar canadian\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolese\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suisse\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilen\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan chinese\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombian\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costarican\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cuban convertibile\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cuban\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo capoverdian\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona chec\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Marco geman\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco djibutian\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danese\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerin\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Corona estonian\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra egyptie\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritree\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr ethiope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Marco finnese\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar fijian\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra falklandese\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franco francese\"
        ],
        \"GBP\": [
            \"£\",
            \"libra sterling\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanese\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambian\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guinean\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemaltec\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar guyanese\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurese\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croate\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint hungare\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Libra irlandese\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandese\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar jamaican\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen japonese\"
        ],
        \"KES\": [
            \"KES\",
            \"shilling kenyan\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comorian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar del Insulas Caiman\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar liberian\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libyc\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocchin\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldave\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgache\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedonie\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya mauritan (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritan\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauritian\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawian\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexican\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigerian\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba nicaraguan\"
        ],
        \"NLG\": [
            \"ƒ\",
            \"Florino nederlandese\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona norvegian\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollar neozelandese\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamen\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruvian\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polonese\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguayan\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanian\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbe\"
        ],
        \"RUB\": [
            \"₽\",
            \"rublo russe\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandese\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar del insulas Salomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia seychellese\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libra sudanese\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona svedese\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra de St. Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone sierraleonese\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilling somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar surinamese\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sud-sudanese\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé e Príncipe\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazilandese\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongan\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar de Trinidad e Tobago\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilling tanzanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ukrainian\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilling ugandese\"
        ],
        \"USD\": [
            \"US\$\",
            \"dollar statounitese\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelan (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelan\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatuan\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoan\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA de Africa Central\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollar del Caribes Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA de Africa Occidental\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sudafrican\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambian\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ia.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ia.json");
    }
}
