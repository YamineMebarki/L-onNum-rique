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

/* vendor/symfony/intl/Resources/data/currencies/uz.json */
class __TwigTemplate_aa3510b51d9b1a7c7bde92f781f86f43436cf884973e9323e33c314da3eb5e94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/uz.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/uz.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Birlashgan Arab Amirliklari dirhami\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afg‘oniston afg‘oniysi\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albaniya leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armaniston drami\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderlandiya antil guldeni\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kvanzasi\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina pesosi\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstraliya dollari\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florini\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Ozarbayjon manati\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosniya va Gertsegovina ayirboshlash markasi\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollari\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesh takasi\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolgariya levi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahrayn dinori\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi franki\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollari\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruney dollari\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviya bolivianosi\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Braziliya reali\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bagama dollari\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrumi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana pulasi\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus rubli\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarus rubli (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz dollari\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollari\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo franki\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Shveytsariya franki\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Chili pesosi\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Xitoy yuani\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiya pesosi\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta-Rika koloni\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba ayirboshlash pesosi\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba pesosi\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabo-Verde eskudosi\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Chexiya kronasi\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Jibuti franki\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Daniya kronasi\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikana pesosi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Jazoir dinori\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Misr funti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreya nakfasi\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiya biri\"
        ],
        \"EUR\": [
            \"€\",
            \"Yevro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollari\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend orollari funti\"
        ],
        \"GBP\": [
            \"£\",
            \"Angliya funt sterlingi\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruziya larisi\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gana sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar funti\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiya dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvineya franki\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemala ketsali\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gayana dollari\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Gonkong dollari\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Gonduras lempirasi\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Xorvatiya kunasi\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gaiti gurdi\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Vengriya forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indoneziya rupiyasi\"
        ],
        \"ILS\": [
            \"₪\",
            \"Isroil yangi shekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindiston rupiyasi\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Iroq dinori\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Eron riyoli\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandiya kronasi\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Yamayka dollari\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Iordaniya dinori\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yaponiya iyenasi\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniya shillingi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Qirg‘iziston somi\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodja rieli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor orollari franki\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Shimoliy Koreya voni\"
        ],
        \"KRW\": [
            \"₩\",
            \"Janubiy Koreya voni\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvayt dinori\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kayman orollari dollari\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Qozog‘iston tengesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Livan funti\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Shri-Lanka rupiyasi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiya dollari\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litva liti\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latviya lati\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liviya dinori\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokash dirhami\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova leyi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasi ariarisi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedoniya dinori\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanma kyati\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongoliya tugriki\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao patakasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mavritaniya uqiyasi (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mavritaniya uqiyasi\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mavritaniya rupiyasi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiv rupiyasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi kvachasi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksika pesosi\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malayziya ringgiti\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik metikali\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiya dollari\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriya nayrasi\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua kordobasi\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norvegiya kronasi\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupiyasi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Yangi Zelandiya dollari\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Ummon riyoli\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboasi\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru soli\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua – Yangi Gvineya kinasi\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin pesosi\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pokiston rupiyasi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polsha zlotiyi\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvay guaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatar riyoli\"
        ],
        \"RON\": [
            \"RON\",
            \"Ruminiya leyi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbiya dinori\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rossiya rubli\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda franki\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudiya Arabistoni riyoli\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon orollari dollari\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyshel rupiyasi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan funti\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Shvetsiya kronasi\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapur dollari\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Muqaddas Yelena oroli funti\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Syerra-Leone leonesi\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali shillingi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollari\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Janubiy Sudan funti\"
        ],
        \"STD\": [
            \"STD\",
            \"San-Tome va Prinsipi dobrasi (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San-Tome va Prinsipi dobrasi\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Suriya funti\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilend lilangenisi\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailand bati\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tojikiston somoniysi\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmaniston manati\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis dinori\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paangasi\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turk lirasi\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad va Tobago dollari\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Yangi Tayvan dollari\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniya shillingi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukraina grivnasi\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda shillingi\"
        ],
        \"USD\": [
            \"US\$\",
            \"AQSH dollari\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvay pesosi\"
        ],
        \"UZS\": [
            \"soʻm\",
            \"O‘zbekiston so‘mi\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela bolivari (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela bolivari\"
        ],
        \"VND\": [
            \"₫\",
            \"Vyetnam dongi\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatusi\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa talasi\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Markaziy Afrika CFA franki\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Sharqiy Karib dollari\"
        ],
        \"XOF\": [
            \"CFA\",
            \"G‘arbiy Afrika CFA franki\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransuz Polineziyasi franki\"
        ],
        \"YER\": [
            \"YER\",
            \"Yaman riyoli\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Janubiy Afrika rendi\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiya kvachasi\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/uz.json";
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
            \"Birlashgan Arab Amirliklari dirhami\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afg‘oniston afg‘oniysi\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albaniya leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armaniston drami\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderlandiya antil guldeni\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kvanzasi\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina pesosi\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstraliya dollari\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florini\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Ozarbayjon manati\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosniya va Gertsegovina ayirboshlash markasi\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollari\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesh takasi\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolgariya levi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahrayn dinori\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi franki\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollari\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruney dollari\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviya bolivianosi\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Braziliya reali\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bagama dollari\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrumi\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana pulasi\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus rubli\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarus rubli (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz dollari\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollari\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo franki\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Shveytsariya franki\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Chili pesosi\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Xitoy yuani\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiya pesosi\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta-Rika koloni\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba ayirboshlash pesosi\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba pesosi\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabo-Verde eskudosi\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Chexiya kronasi\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Jibuti franki\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Daniya kronasi\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikana pesosi\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Jazoir dinori\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Misr funti\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreya nakfasi\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiya biri\"
        ],
        \"EUR\": [
            \"€\",
            \"Yevro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollari\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend orollari funti\"
        ],
        \"GBP\": [
            \"£\",
            \"Angliya funt sterlingi\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruziya larisi\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gana sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar funti\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiya dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvineya franki\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemala ketsali\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gayana dollari\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Gonkong dollari\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Gonduras lempirasi\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Xorvatiya kunasi\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gaiti gurdi\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Vengriya forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indoneziya rupiyasi\"
        ],
        \"ILS\": [
            \"₪\",
            \"Isroil yangi shekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindiston rupiyasi\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Iroq dinori\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Eron riyoli\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandiya kronasi\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Yamayka dollari\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Iordaniya dinori\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yaponiya iyenasi\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniya shillingi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Qirg‘iziston somi\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodja rieli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor orollari franki\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Shimoliy Koreya voni\"
        ],
        \"KRW\": [
            \"₩\",
            \"Janubiy Koreya voni\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvayt dinori\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kayman orollari dollari\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Qozog‘iston tengesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Livan funti\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Shri-Lanka rupiyasi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiya dollari\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litva liti\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latviya lati\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liviya dinori\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokash dirhami\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova leyi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasi ariarisi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedoniya dinori\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanma kyati\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongoliya tugriki\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao patakasi\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mavritaniya uqiyasi (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mavritaniya uqiyasi\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mavritaniya rupiyasi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiv rupiyasi\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi kvachasi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksika pesosi\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malayziya ringgiti\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik metikali\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiya dollari\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriya nayrasi\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua kordobasi\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norvegiya kronasi\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupiyasi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Yangi Zelandiya dollari\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Ummon riyoli\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboasi\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru soli\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua – Yangi Gvineya kinasi\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin pesosi\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pokiston rupiyasi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polsha zlotiyi\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvay guaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatar riyoli\"
        ],
        \"RON\": [
            \"RON\",
            \"Ruminiya leyi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbiya dinori\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rossiya rubli\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda franki\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudiya Arabistoni riyoli\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon orollari dollari\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyshel rupiyasi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan funti\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Shvetsiya kronasi\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapur dollari\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Muqaddas Yelena oroli funti\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Syerra-Leone leonesi\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali shillingi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollari\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Janubiy Sudan funti\"
        ],
        \"STD\": [
            \"STD\",
            \"San-Tome va Prinsipi dobrasi (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San-Tome va Prinsipi dobrasi\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Suriya funti\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilend lilangenisi\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailand bati\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tojikiston somoniysi\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmaniston manati\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis dinori\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paangasi\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turk lirasi\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad va Tobago dollari\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Yangi Tayvan dollari\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniya shillingi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukraina grivnasi\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda shillingi\"
        ],
        \"USD\": [
            \"US\$\",
            \"AQSH dollari\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvay pesosi\"
        ],
        \"UZS\": [
            \"soʻm\",
            \"O‘zbekiston so‘mi\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela bolivari (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela bolivari\"
        ],
        \"VND\": [
            \"₫\",
            \"Vyetnam dongi\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatusi\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa talasi\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Markaziy Afrika CFA franki\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Sharqiy Karib dollari\"
        ],
        \"XOF\": [
            \"CFA\",
            \"G‘arbiy Afrika CFA franki\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransuz Polineziyasi franki\"
        ],
        \"YER\": [
            \"YER\",
            \"Yaman riyoli\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Janubiy Afrika rendi\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiya kvachasi\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/uz.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/uz.json");
    }
}
