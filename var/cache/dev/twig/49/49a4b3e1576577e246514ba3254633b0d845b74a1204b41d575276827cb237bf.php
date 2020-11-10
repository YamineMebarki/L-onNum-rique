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

/* vendor/symfony/intl/Resources/data/currencies/eu.json */
class __TwigTemplate_9e7a63492cf7c59bc8a7c73bd4a2126e5e025636f205d1a8b214ad48f2cd5b3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/eu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/eu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Arabiar Emirerri Batuetako dirhama\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afganiarra\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albaniarra\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeniarra\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Holandarren Antilletako florina\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolarra\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentinarra\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dolar australiarra\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin arubarra\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaijandarra\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marko bihurgarri bosniarra\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dolar barbadostarra\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladeshtarra\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgariarra\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar bahraindarra\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franko burundiarra\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dolar bermudarra\"
        ],
        \"BND\": [
            \"BND\",
            \"dolar bruneitarra\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano boliviarra\"
        ],
        \"BRL\": [
            \"R\$\",
            \"erreal brasildarra\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dolar bahamarra\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum bhutandarra\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswanarra\"
        ],
        \"BYN\": [
            \"BYN\",
            \"errublo bielorrusiarra\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Bielorrusiako errubloa (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dolar belizetarra\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dolar kanadarra\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franko kongoarra\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franko suitzarra\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso txiletarra\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan txinatarra (itsasoz haraindikoa)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan txinatarra\"
        ],
        \"COP\": [
            \"COP\",
            \"peso kolonbiarra\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Costa Ricako colona\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso bihurgarri kubatarra\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso kubatarra\"
        ],
        \"CVE\": [
            \"CVE\",
            \"ezkutu caboverdetarra\"
        ],
        \"CZK\": [
            \"CZK\",
            \"koroa txekiarra\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franko djibutiarra\"
        ],
        \"DKK\": [
            \"DKK\",
            \"koroa danimarkarra\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominikarra\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar aljeriarra\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libera egiptoarra\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritrearra\"
        ],
        \"ESP\": [
            \"₧\",
            \"ESP\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopiarra\"
        ],
        \"EUR\": [
            \"€\",
            \"euroa\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dolar fijiarra\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libera falklandarra\"
        ],
        \"GBP\": [
            \"£\",
            \"libera esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiarra\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanatarra\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libera gibraltartarra\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi ganbiarra\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franko ginearra\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ketzal guatemalarra\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dolar guyanarra\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dolar hongkongtarra\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hodurastarra\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna kroaziarra\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiarra\"
        ],
        \"HUF\": [
            \"HUF\",
            \"florin hungariarra\"
        ],
        \"IDR\": [
            \"IDR\",
            \"errupia indonesiarra\"
        ],
        \"ILS\": [
            \"₪\",
            \"shekel israeldar berria\"
        ],
        \"INR\": [
            \"₹\",
            \"errupia indiarra\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar irakiarra\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial irandarra\"
        ],
        \"ISK\": [
            \"ISK\",
            \"koroa islandiarra\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikako dolarra\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordaniarra\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen japoniarra\"
        ],
        \"KES\": [
            \"KES\",
            \"txelin kenyarra\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirgizistandarra\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel kanbodiarra\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franko komoretarra\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won iparkorearra\"
        ],
        \"KRW\": [
            \"₩\",
            \"won hegokorearra\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitarra\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dolar kaimandarra\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazakhstandarra\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laostarra\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libera libanoarra\"
        ],
        \"LKR\": [
            \"LKR\",
            \"errupia srilankarra\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolar liberiarra\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesothoko lotia\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lituaniako litasa\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Letoniako latsa\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libiarra\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marokoarra\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldaviarra\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary madagaskartarra\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar mazedoniarra\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat myanmartarra\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongoliarra\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca macauarra\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritaniako ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"uguiya mauritaniarra\"
        ],
        \"MUR\": [
            \"MUR\",
            \"errupia mauriziarra\"
        ],
        \"MVR\": [
            \"MVR\",
            \"errupia maldivarra\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiarra\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexikarra\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaysiarra\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambiketarra\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolar namibiarra\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriarra\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nikaraguarra\"
        ],
        \"NOK\": [
            \"NOK\",
            \"koroa norvegiarra\"
        ],
        \"NPR\": [
            \"NPR\",
            \"errupia nepaldarra\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dolar zeelandaberritarra\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omandarra\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamarra\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol perutarra\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina gineaberriarra\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipinarra\"
        ],
        \"PKR\": [
            \"PKR\",
            \"errupia pakistandarra\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty poloniarra\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaitarra\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal qatartarra\"
        ],
        \"RON\": [
            \"RON\",
            \"leu errumaniarra\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbiarra\"
        ],
        \"RUB\": [
            \"RUB\",
            \"errublo errusiarra\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franko ruandarra\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudiarabiarra\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dolar salomondarra\"
        ],
        \"SCR\": [
            \"SCR\",
            \"errupia seychelletarra\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libera sudandarra\"
        ],
        \"SEK\": [
            \"SEK\",
            \"koroa suediarra\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dolar singapurtarra\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Santa Helenako libera\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone sierraleonarra\"
        ],
        \"SOS\": [
            \"SOS\",
            \"txelin somaliarra\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dolar surinamdarra\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libera hegosudandarra\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tomeko eta Principeko dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra saotometarra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libera siriarra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazilandiarra\"
        ],
        \"THB\": [
            \"฿\",
            \"baht thailandiarra\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tajikistandarra\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmenistandarra\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisiarra\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongako Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turkiarra\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad eta Tobagoko dolarra\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"dolar taiwandar berria\"
        ],
        \"TZS\": [
            \"TZS\",
            \"txelin tanzaniarra\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainako hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"txelin ugandarra\"
        ],
        \"USD\": [
            \"US\$\",
            \"dolar estatubatuarra\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaitarra\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum uzbekistandarra\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezuelako bolivarra (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelarra\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamdarra\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatuarra\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoarra\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Afrika erdialdeko CFA frankoa\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Karibe ekialdeko dolarra\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Afrika mendebaldeko CFA frankoa\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frankoa\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yemendarra\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand hegoafrikarra\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiako kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiarra\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/eu.json";
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
            \"Arabiar Emirerri Batuetako dirhama\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afganiarra\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albaniarra\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeniarra\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Holandarren Antilletako florina\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolarra\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentinarra\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dolar australiarra\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin arubarra\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaijandarra\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marko bihurgarri bosniarra\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dolar barbadostarra\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladeshtarra\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgariarra\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar bahraindarra\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franko burundiarra\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dolar bermudarra\"
        ],
        \"BND\": [
            \"BND\",
            \"dolar bruneitarra\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano boliviarra\"
        ],
        \"BRL\": [
            \"R\$\",
            \"erreal brasildarra\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dolar bahamarra\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum bhutandarra\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswanarra\"
        ],
        \"BYN\": [
            \"BYN\",
            \"errublo bielorrusiarra\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Bielorrusiako errubloa (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dolar belizetarra\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dolar kanadarra\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franko kongoarra\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franko suitzarra\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso txiletarra\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan txinatarra (itsasoz haraindikoa)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan txinatarra\"
        ],
        \"COP\": [
            \"COP\",
            \"peso kolonbiarra\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Costa Ricako colona\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso bihurgarri kubatarra\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso kubatarra\"
        ],
        \"CVE\": [
            \"CVE\",
            \"ezkutu caboverdetarra\"
        ],
        \"CZK\": [
            \"CZK\",
            \"koroa txekiarra\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franko djibutiarra\"
        ],
        \"DKK\": [
            \"DKK\",
            \"koroa danimarkarra\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominikarra\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar aljeriarra\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libera egiptoarra\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritrearra\"
        ],
        \"ESP\": [
            \"₧\",
            \"ESP\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopiarra\"
        ],
        \"EUR\": [
            \"€\",
            \"euroa\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dolar fijiarra\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libera falklandarra\"
        ],
        \"GBP\": [
            \"£\",
            \"libera esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiarra\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanatarra\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libera gibraltartarra\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi ganbiarra\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franko ginearra\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"ketzal guatemalarra\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dolar guyanarra\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dolar hongkongtarra\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hodurastarra\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna kroaziarra\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiarra\"
        ],
        \"HUF\": [
            \"HUF\",
            \"florin hungariarra\"
        ],
        \"IDR\": [
            \"IDR\",
            \"errupia indonesiarra\"
        ],
        \"ILS\": [
            \"₪\",
            \"shekel israeldar berria\"
        ],
        \"INR\": [
            \"₹\",
            \"errupia indiarra\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar irakiarra\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial irandarra\"
        ],
        \"ISK\": [
            \"ISK\",
            \"koroa islandiarra\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikako dolarra\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordaniarra\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen japoniarra\"
        ],
        \"KES\": [
            \"KES\",
            \"txelin kenyarra\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirgizistandarra\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel kanbodiarra\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franko komoretarra\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won iparkorearra\"
        ],
        \"KRW\": [
            \"₩\",
            \"won hegokorearra\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitarra\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dolar kaimandarra\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazakhstandarra\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laostarra\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libera libanoarra\"
        ],
        \"LKR\": [
            \"LKR\",
            \"errupia srilankarra\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolar liberiarra\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesothoko lotia\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lituaniako litasa\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Letoniako latsa\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libiarra\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marokoarra\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldaviarra\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary madagaskartarra\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar mazedoniarra\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat myanmartarra\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongoliarra\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca macauarra\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritaniako ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"uguiya mauritaniarra\"
        ],
        \"MUR\": [
            \"MUR\",
            \"errupia mauriziarra\"
        ],
        \"MVR\": [
            \"MVR\",
            \"errupia maldivarra\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiarra\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexikarra\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaysiarra\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambiketarra\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolar namibiarra\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriarra\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nikaraguarra\"
        ],
        \"NOK\": [
            \"NOK\",
            \"koroa norvegiarra\"
        ],
        \"NPR\": [
            \"NPR\",
            \"errupia nepaldarra\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dolar zeelandaberritarra\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omandarra\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamarra\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol perutarra\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina gineaberriarra\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipinarra\"
        ],
        \"PKR\": [
            \"PKR\",
            \"errupia pakistandarra\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty poloniarra\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaitarra\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal qatartarra\"
        ],
        \"RON\": [
            \"RON\",
            \"leu errumaniarra\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbiarra\"
        ],
        \"RUB\": [
            \"RUB\",
            \"errublo errusiarra\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franko ruandarra\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudiarabiarra\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dolar salomondarra\"
        ],
        \"SCR\": [
            \"SCR\",
            \"errupia seychelletarra\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libera sudandarra\"
        ],
        \"SEK\": [
            \"SEK\",
            \"koroa suediarra\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dolar singapurtarra\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Santa Helenako libera\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone sierraleonarra\"
        ],
        \"SOS\": [
            \"SOS\",
            \"txelin somaliarra\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dolar surinamdarra\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libera hegosudandarra\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tomeko eta Principeko dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra saotometarra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libera siriarra\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazilandiarra\"
        ],
        \"THB\": [
            \"฿\",
            \"baht thailandiarra\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tajikistandarra\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmenistandarra\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisiarra\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongako Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turkiarra\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad eta Tobagoko dolarra\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"dolar taiwandar berria\"
        ],
        \"TZS\": [
            \"TZS\",
            \"txelin tanzaniarra\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainako hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"txelin ugandarra\"
        ],
        \"USD\": [
            \"US\$\",
            \"dolar estatubatuarra\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaitarra\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum uzbekistandarra\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezuelako bolivarra (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelarra\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamdarra\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatuarra\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoarra\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Afrika erdialdeko CFA frankoa\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Karibe ekialdeko dolarra\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Afrika mendebaldeko CFA frankoa\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frankoa\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yemendarra\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand hegoafrikarra\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiako kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiarra\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/eu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/eu.json");
    }
}
