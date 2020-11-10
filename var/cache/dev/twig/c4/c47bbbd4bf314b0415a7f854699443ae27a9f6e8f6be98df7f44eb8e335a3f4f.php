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

/* vendor/symfony/intl/Resources/data/currencies/tl.json */
class __TwigTemplate_1a7fb862a602b341d1a6ee034296e3dd34d262934426ed5876aab178adf9999e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/tl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/tl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"United Arab Emirates Dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghan Afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanian Lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenian Dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Antillean Guilder ng Netherlands\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Piso ng Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolyar ng Australya\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin ng Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Herzegovina Convertible Mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dolyar ng Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeshi Taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgarian Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahraini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundian Franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dolyar ng Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dolyar ng Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano ng Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real ng Barzil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dolyar ng Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswanan Pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusian Ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarusian Ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dolyar ng Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolyar ng Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Congolese Franc\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Swiss Franc\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Piso ng Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Chinese Yuan (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Piso ng Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón ng Costa Rica\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Convertible na Piso ng Cuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Piso ng Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Czech Republic Koruna\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Deutsche Marks\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboutian Franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danish Krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Piso ng Dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algerian Dinar\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonian Kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egyptian Pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrean Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Ethiopian Birr\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dolyar ng Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pound ng Falkland Islands\"
        ],
        \"FRF\": [
            \"FRF\",
            \"French Franc\"
        ],
        \"GBP\": [
            \"£\",
            \"British Pound\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgian Lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ghanaian Cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar Pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambian Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinean Franc\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal ng Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dolyar ng Guyanese\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dolyar ng Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira ng Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Croatian Kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde ng Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Hungarian Forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesian Rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"Israeli New Sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indian Rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Iraqi Dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranian Rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Icelandic Króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dolyar ng Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanian Dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"Japanese Yen\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenyan Shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kyrgystani Som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Cambodian Riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Comorian Franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won ng Hilagang Korea\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won ng Timog Korea\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuwaiti Dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dolyar ng Cayman Islands\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazakhstani Tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laotian Kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pound ng Lebanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolyar ng Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho Loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lithuanian Litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latvian Lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libyan Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Moroccan Dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldovan Leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasy Ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Macedonian Denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanmar Kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolian Tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Macanese Pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanian Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ng Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauritian Rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivian Rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawian Kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Piso ng Mexico\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaysian Ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambican Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolyar ng Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerian Naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdoba ng Nicaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norwegian Krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalese Rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dolyar ng New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omani Rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa ng Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruvian Sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua New Guinean Kina\"
        ],
        \"PHP\": [
            \"₱\",
            \"Piso ng Pilipinas\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistani Rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polish Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguayan Guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatari Rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Romanian Leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbian Dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russian Ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rwandan Franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dolyar ng Solomon Islands\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pound ng Sudan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dolyar ng Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Saint Helena Pound\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenian Tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovak Koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leonean Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali Shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dolyar ng Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pound ng Timog Sudan\"
        ],
        \"STD\": [
            \"STD\",
            \"São Tomé & Príncipe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"São Tomé & Príncipe Dobra (2018)\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thai Baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tajikistani Somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistani Manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisian Dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongan Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkish Lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dolyar ng Trinidad and Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dolyar ng New Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanian Shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainian Hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandan Shilling\"
        ],
        \"USD\": [
            \"\$\",
            \"Dolyar ng US\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Piso ng Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistan Som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venezuelan Bolívar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar ng Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar ng Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Vietnamese Dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu Vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoan Tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA Franc BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dolyar ng Silangang Caribbean\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA Franc ng Kanlurang Africa\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"Yemeni Rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand ng Timog Africa\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambian Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambian Kwacha\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/tl.json";
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
            \"United Arab Emirates Dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghan Afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanian Lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenian Dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Antillean Guilder ng Netherlands\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Piso ng Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolyar ng Australya\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin ng Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Herzegovina Convertible Mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dolyar ng Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeshi Taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgarian Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahraini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundian Franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dolyar ng Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dolyar ng Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano ng Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real ng Barzil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dolyar ng Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswanan Pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusian Ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belarusian Ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dolyar ng Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolyar ng Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Congolese Franc\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Swiss Franc\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Piso ng Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Chinese Yuan (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Piso ng Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón ng Costa Rica\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Convertible na Piso ng Cuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Piso ng Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Czech Republic Koruna\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Deutsche Marks\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboutian Franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danish Krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Piso ng Dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algerian Dinar\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonian Kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egyptian Pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrean Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Ethiopian Birr\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dolyar ng Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pound ng Falkland Islands\"
        ],
        \"FRF\": [
            \"FRF\",
            \"French Franc\"
        ],
        \"GBP\": [
            \"£\",
            \"British Pound\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgian Lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ghanaian Cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltar Pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambian Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinean Franc\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal ng Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dolyar ng Guyanese\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dolyar ng Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira ng Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Croatian Kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde ng Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Hungarian Forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesian Rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"Israeli New Sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indian Rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Iraqi Dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranian Rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Icelandic Króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dolyar ng Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanian Dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"Japanese Yen\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenyan Shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kyrgystani Som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Cambodian Riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Comorian Franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won ng Hilagang Korea\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won ng Timog Korea\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuwaiti Dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dolyar ng Cayman Islands\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazakhstani Tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laotian Kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pound ng Lebanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolyar ng Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho Loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lithuanian Litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latvian Lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libyan Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Moroccan Dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldovan Leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagasy Ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Macedonian Denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Myanmar Kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolian Tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Macanese Pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanian Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ng Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauritian Rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivian Rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawian Kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Piso ng Mexico\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaysian Ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambican Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolyar ng Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerian Naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdoba ng Nicaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norwegian Krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalese Rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dolyar ng New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omani Rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa ng Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruvian Sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua New Guinean Kina\"
        ],
        \"PHP\": [
            \"₱\",
            \"Piso ng Pilipinas\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistani Rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Polish Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguayan Guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Qatari Rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Romanian Leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbian Dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russian Ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rwandan Franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dolyar ng Solomon Islands\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pound ng Sudan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dolyar ng Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Saint Helena Pound\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenian Tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovak Koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leonean Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somali Shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dolyar ng Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pound ng Timog Sudan\"
        ],
        \"STD\": [
            \"STD\",
            \"São Tomé & Príncipe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"São Tomé & Príncipe Dobra (2018)\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thai Baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tajikistani Somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistani Manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisian Dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongan Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkish Lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dolyar ng Trinidad and Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dolyar ng New Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanian Shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainian Hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandan Shilling\"
        ],
        \"USD\": [
            \"\$\",
            \"Dolyar ng US\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Piso ng Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistan Som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venezuelan Bolívar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar ng Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar ng Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Vietnamese Dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu Vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoan Tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA Franc BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dolyar ng Silangang Caribbean\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA Franc ng Kanlurang Africa\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"Yemeni Rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand ng Timog Africa\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambian Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambian Kwacha\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/tl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/tl.json");
    }
}
