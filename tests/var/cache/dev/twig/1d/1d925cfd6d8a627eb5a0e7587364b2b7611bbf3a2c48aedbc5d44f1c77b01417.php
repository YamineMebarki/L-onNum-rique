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

/* vendor/symfony/intl/Resources/data/currencies/fo.json */
class __TwigTemplate_2645627801957441ef975a6a06eac8c9656670f36960e1693a4dd4ebe8ee581f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fo.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/fo.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Sameindu Emirríkini dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistan afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albania lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenia dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niðurlonds Karibia gyllin\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstralskur dollari\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florin\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Aserbadjan manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Hersegovina mark (kann vekslast)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollari\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesj taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgaria lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Barein dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi frankur\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollari\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunei dollari\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivia boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brasilianskur real\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamaoyggjar dollari\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Hvítarussland ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Hvítarussland ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belis dollari\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollari\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo frankur\"
        ],
        \"CHF\": [
            \"CHF\",
            \"sveisiskur frankur\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Kili peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kinesiskur yuan (úr landi)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"kinesiskur yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolombia peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rika colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba peso (sum kann vekslast)\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Grønhøvdaoyggjar escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Kekkia koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djibuti frankur\"
        ],
        \"DKK\": [
            \"kr\",
            \"donsk króna\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominika peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algeria dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egyptaland pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrea nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopia birr\"
        ],
        \"EUR\": [
            \"€\",
            \"Evra\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollari\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklandsoyggjar pund\"
        ],
        \"GBP\": [
            \"£\",
            \"bretsk pund\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgia lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gana cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambia dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinea frankur\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Guatemala quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gujana dollari\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hong Kong dollari\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduras lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatia kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haiti gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Ungarn forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesia rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"Ísrael new shekel\"
        ],
        \"INR\": [
            \"₹\",
            \"indiskir rupis\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irak dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranskir rials\"
        ],
        \"ISK\": [
            \"ISK\",
            \"íslendsk króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaika dollari\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordan dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"japanskur yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenjanskur skillingur\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgisia som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodja riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoroyggjar frankur\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Norðurkorea won\"
        ],
        \"KRW\": [
            \"₩\",
            \"Suðurkorea won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvait dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Caymanoyggjar dollari\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kasakstan tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanon pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lanka rupi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberia dollari\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libya dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokko dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagaskar ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedónia denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanmar (Burma) kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolia tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Móritania ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Móritania ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Móritius rupi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivoyggjar rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksiko peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaisia ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mosambik metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibia dollari\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeria naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norsk króna\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Nýsæland dollari\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Nýguinea kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipsoyggjar peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistan rupi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Pólland zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguai guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katar rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumenia leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbia dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russland ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda frankur\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudiarabia riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomonoyggjar dollari\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyskelloyggjar rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan pund\"
        ],
        \"SEK\": [
            \"SEK\",
            \"svensk króna\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapor dollari\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St. Helena pund\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leona leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalia skillingur\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollari\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Suðursudan pund\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tome & Prinsipi dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Sao Tome & Prinsipi dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sýria pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svasiland lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailand baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadsjikistan somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistan manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunesia dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkaland liri\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad & Tobago dollari\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Taivan new dollari\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tansania skillingur\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukraina hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda skillingur\"
        ],
        \"USD\": [
            \"US\$\",
            \"US dollari\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruguai peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Usbekistan som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"Vjetnam dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Miðafrika CFA frankur\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Eystur Karibia dollari\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Vesturafrika CFA frankur\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frankur\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemen rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Suðurafrika rand\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Sambia kwacha\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/fo.json";
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
            \"Sameindu Emirríkini dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistan afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albania lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenia dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Niðurlonds Karibia gyllin\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angola kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentina peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Avstralskur dollari\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Aruba florin\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Aserbadjan manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Hersegovina mark (kann vekslast)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados dollari\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesj taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgaria lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Barein dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundi frankur\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda dollari\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunei dollari\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivia boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brasilianskur real\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamaoyggjar dollari\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butan ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvana pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Hvítarussland ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Hvítarussland ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belis dollari\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanada dollari\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo frankur\"
        ],
        \"CHF\": [
            \"CHF\",
            \"sveisiskur frankur\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Kili peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kinesiskur yuan (úr landi)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"kinesiskur yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolombia peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rika colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kuba peso (sum kann vekslast)\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kuba peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Grønhøvdaoyggjar escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Kekkia koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djibuti frankur\"
        ],
        \"DKK\": [
            \"kr\",
            \"donsk króna\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominika peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algeria dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egyptaland pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrea nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopia birr\"
        ],
        \"EUR\": [
            \"€\",
            \"Evra\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fiji dollari\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklandsoyggjar pund\"
        ],
        \"GBP\": [
            \"£\",
            \"bretsk pund\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgia lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Gana cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambia dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinea frankur\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Guatemala quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gujana dollari\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hong Kong dollari\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduras lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatia kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haiti gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Ungarn forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesia rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"Ísrael new shekel\"
        ],
        \"INR\": [
            \"₹\",
            \"indiskir rupis\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irak dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranskir rials\"
        ],
        \"ISK\": [
            \"ISK\",
            \"íslendsk króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaika dollari\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordan dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"japanskur yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenjanskur skillingur\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgisia som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodja riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoroyggjar frankur\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Norðurkorea won\"
        ],
        \"KRW\": [
            \"₩\",
            \"Suðurkorea won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvait dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Caymanoyggjar dollari\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kasakstan tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laos kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanon pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lanka rupi\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberia dollari\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libya dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokko dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldova leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagaskar ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedónia denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanmar (Burma) kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolia tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Móritania ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Móritania ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Móritius rupi\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivoyggjar rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavi kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Meksiko peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaisia ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mosambik metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibia dollari\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeria naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragua córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norsk króna\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepal rupi\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Nýsæland dollari\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Oman rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panama balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Nýguinea kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipsoyggjar peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistan rupi\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Pólland zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguai guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katar rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumenia leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbia dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russland ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruanda frankur\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudiarabia riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomonoyggjar dollari\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seyskelloyggjar rupi\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudan pund\"
        ],
        \"SEK\": [
            \"SEK\",
            \"svensk króna\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapor dollari\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St. Helena pund\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leona leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalia skillingur\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinam dollari\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Suðursudan pund\"
        ],
        \"STD\": [
            \"STD\",
            \"Sao Tome & Prinsipi dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Sao Tome & Prinsipi dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sýria pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svasiland lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailand baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadsjikistan somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistan manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunesia dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonga paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkaland liri\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad & Tobago dollari\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Taivan new dollari\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tansania skillingur\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukraina hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Uganda skillingur\"
        ],
        \"USD\": [
            \"US\$\",
            \"US dollari\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruguai peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Usbekistan som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuela bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuela bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"Vjetnam dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Miðafrika CFA frankur\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Eystur Karibia dollari\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Vesturafrika CFA frankur\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frankur\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemen rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Suðurafrika rand\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Sambia kwacha\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/fo.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/fo.json");
    }
}
