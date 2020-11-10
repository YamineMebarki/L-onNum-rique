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

/* vendor/symfony/intl/Resources/data/currencies/tk.json */
class __TwigTemplate_249a4a36305897ee6c9f8b79d8840b7f7ccd1bae28c4c606b625468e5b5ed7fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/tk.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/tk.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"BAE dirhemi\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Owgan afganisi\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Alban leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Ermeni dramy\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderland antil guldeni\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kwanzasy\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentin pesosy\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Awstraliýa dollary\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florini\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaýjan manady\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Konwertirlenýän Bosniýa we Gersegowina markasy\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollary\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeş takasy\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolgar lewi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreýn dinary\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi franky\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollary\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruneý dollary\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliwiýa boliwianosy\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brazil realy\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bagama dollary\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrumy\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana pulasy\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus rubly\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belorus rubly (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz dollary\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollary\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo franky\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Şweýsar franky\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Çili pesosy\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Hytaý ýuany (ofşor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Hytaý ýuany\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiýa pesosy\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta-Rika kolony\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Konwertirlenýän kuba pesosy\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba pesosy\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabo-Werde eskudosy\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Çeh kronasy\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Jibuti franky\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Daniýa kronasy\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikan pesosy\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžir dinary\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Müsür funty\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreýa nakfasy\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiýa byry\"
        ],
        \"EUR\": [
            \"EUR\",
            \"Ýewro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollary\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend adalarynyň funty\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Britan funt sterlingi\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzin larisi\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gano sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar funty\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiýa dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gwineý franky\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gwatemala ketsaly\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gaýana dollary\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Gonkong dollary\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Gonduras lempirasy\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Horwat kunasy\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gaiti gurdy\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Wenger forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indoneziýa rupiýasy\"
        ],
        \"ILS\": [
            \"₪\",
            \"Täze Ysraýyl şekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindi rupiýasy\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Yrak dinary\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Eýran rialy\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandiýa kronasy\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Ýamaýka dollary\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Iordan dinary\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Ýapon ýeni\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniýa şillingi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Gyrgyz somy\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kamboja riýeli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor adalarynyň franky\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Demirgazyk Koreý wony\"
        ],
        \"KRW\": [
            \"₩\",
            \"Günorta Koreý wony\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuweýt dinary\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kaýman adalarynyň dollary\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Gazak teňňesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Liwan funty\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Şri-Lanka rupiýasy\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiýa dollary\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liwiýa dinary\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokko dirhamy\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldaw leýi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasiý ariarisi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedon dinary\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mýanma kýaty\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongol tugrigi\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao patakasy\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mawritan ugiýasy (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mawritan ugiýasy\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mawrikiý rupiýasy\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiw rufiýasy\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawi kwaçasy\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksikan pesosy\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaýziýa ringgiti\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik metikaly\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiýa dollary\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriýa naýrasy\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua kordobasy\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norwegiýa kronasy\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupiýasy\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Täze Zelandiýa dollary\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman rialy\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboasy\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru soly\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua - Täze Gwineýa kinasy\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin pesosy\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Päkistan rupiýasy\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polýak zlotysy\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragwaý guaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katar rialy\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumyn leýi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serb dinary\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rus rubly\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda franky\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saud rialy\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon adalarynyň dollary\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seýşel rupiýasy\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan funty\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Şwed kronasy\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapur dollary\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Keramatly Ýelena adasynyň funty\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sýerra-Leone leony\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali şillingi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollary\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Günorta Sudan funty\"
        ],
        \"STD\": [
            \"STD\",
            \"San-Tome we Prinsipi dobrasy (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San-Tome we Prinsipi dobrasy\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Siriýa funty\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"Taýland baty\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Täjik somonisi\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Türkmen manady\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis dinary\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paangasy\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Türk lirasy\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trininad we Tobago dollary\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Täze Taýwan dollary\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniýa şillingi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrain griwnasy\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda şillingi\"
        ],
        \"USD\": [
            \"US\$\",
            \"ABŞ dollary\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugwaý pesosy\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Özbek somy\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Wenesuela boliwary (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Wenesuela boliwary\"
        ],
        \"VND\": [
            \"₫\",
            \"Wýetnam dongy\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Wanuatu watusy\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa talasy\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"KFA BEAC franky\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Gündogar karib dollary\"
        ],
        \"XOF\": [
            \"CFA\",
            \"KFA BCEAO franky\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransuz ýuwaş umman franky\"
        ],
        \"YER\": [
            \"YER\",
            \"Ýemen rialy\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Günorta Afrika rendi\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiýa kwaçasy\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/tk.json";
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
            \"BAE dirhemi\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Owgan afganisi\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Alban leki\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Ermeni dramy\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niderland antil guldeni\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kwanzasy\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentin pesosy\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Awstraliýa dollary\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florini\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaýjan manady\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Konwertirlenýän Bosniýa we Gersegowina markasy\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollary\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeş takasy\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bolgar lewi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreýn dinary\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi franky\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollary\"
        ],
        \"BND\": [
            \"BND\",
            \"Bruneý dollary\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliwiýa boliwianosy\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brazil realy\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bagama dollary\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrumy\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana pulasy\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarus rubly\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belorus rubly (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliz dollary\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollary\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo franky\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Şweýsar franky\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Çili pesosy\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Hytaý ýuany (ofşor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Hytaý ýuany\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbiýa pesosy\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta-Rika kolony\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Konwertirlenýän kuba pesosy\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba pesosy\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kabo-Werde eskudosy\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Çeh kronasy\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Jibuti franky\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Daniýa kronasy\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikan pesosy\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžir dinary\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Müsür funty\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritreýa nakfasy\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Efiopiýa byry\"
        ],
        \"EUR\": [
            \"EUR\",
            \"Ýewro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollary\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklend adalarynyň funty\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Britan funt sterlingi\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzin larisi\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gano sedisi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar funty\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiýa dalasisi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gwineý franky\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gwatemala ketsaly\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gaýana dollary\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Gonkong dollary\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Gonduras lempirasy\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Horwat kunasy\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gaiti gurdy\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Wenger forinti\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indoneziýa rupiýasy\"
        ],
        \"ILS\": [
            \"₪\",
            \"Täze Ysraýyl şekeli\"
        ],
        \"INR\": [
            \"₹\",
            \"Hindi rupiýasy\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Yrak dinary\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Eýran rialy\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandiýa kronasy\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Ýamaýka dollary\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Iordan dinary\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Ýapon ýeni\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniýa şillingi\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Gyrgyz somy\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kamboja riýeli\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komor adalarynyň franky\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Demirgazyk Koreý wony\"
        ],
        \"KRW\": [
            \"₩\",
            \"Günorta Koreý wony\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuweýt dinary\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kaýman adalarynyň dollary\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Gazak teňňesi\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kipi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Liwan funty\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Şri-Lanka rupiýasy\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiýa dollary\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Liwiýa dinary\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokko dirhamy\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldaw leýi\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasiý ariarisi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedon dinary\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mýanma kýaty\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongol tugrigi\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao patakasy\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mawritan ugiýasy (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mawritan ugiýasy\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mawrikiý rupiýasy\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldiw rufiýasy\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawi kwaçasy\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksikan pesosy\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaýziýa ringgiti\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambik metikaly\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiýa dollary\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriýa naýrasy\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua kordobasy\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norwegiýa kronasy\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupiýasy\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Täze Zelandiýa dollary\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman rialy\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboasy\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru soly\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua - Täze Gwineýa kinasy\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippin pesosy\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Päkistan rupiýasy\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polýak zlotysy\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragwaý guaranisi\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katar rialy\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumyn leýi\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serb dinary\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rus rubly\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda franky\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saud rialy\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomon adalarynyň dollary\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seýşel rupiýasy\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan funty\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Şwed kronasy\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapur dollary\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Keramatly Ýelena adasynyň funty\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sýerra-Leone leony\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali şillingi\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollary\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Günorta Sudan funty\"
        ],
        \"STD\": [
            \"STD\",
            \"San-Tome we Prinsipi dobrasy (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San-Tome we Prinsipi dobrasy\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Siriýa funty\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"Taýland baty\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Täjik somonisi\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Türkmen manady\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunis dinary\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paangasy\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Türk lirasy\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trininad we Tobago dollary\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Täze Taýwan dollary\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniýa şillingi\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrain griwnasy\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda şillingi\"
        ],
        \"USD\": [
            \"US\$\",
            \"ABŞ dollary\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugwaý pesosy\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Özbek somy\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Wenesuela boliwary (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Wenesuela boliwary\"
        ],
        \"VND\": [
            \"₫\",
            \"Wýetnam dongy\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Wanuatu watusy\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa talasy\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"KFA BEAC franky\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Gündogar karib dollary\"
        ],
        \"XOF\": [
            \"CFA\",
            \"KFA BCEAO franky\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Fransuz ýuwaş umman franky\"
        ],
        \"YER\": [
            \"YER\",
            \"Ýemen rialy\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Günorta Afrika rendi\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiýa kwaçasy\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/tk.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/tk.json");
    }
}
