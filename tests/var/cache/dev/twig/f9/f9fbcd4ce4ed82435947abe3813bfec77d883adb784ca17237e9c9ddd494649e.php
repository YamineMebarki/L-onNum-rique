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

/* vendor/symfony/intl/Resources/data/currencies/zu.json */
class __TwigTemplate_c056494f1efc57536533669b588b1b963e956170911a117a32fd6edf3dc83559 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/zu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/zu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"i-Dirham yase-United Arab Emirates\"
        ],
        \"AFN\": [
            \"AFN\",
            \"i-Afghan Afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"i-Albanian Lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"i-Armenian Dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"i-Netherlands Antillean Guilder\"
        ],
        \"AOA\": [
            \"AOA\",
            \"i-Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"i-Argentina Peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"i-Austrilian Dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"i-Aruban Florin\"
        ],
        \"AZN\": [
            \"AZN\",
            \"i-Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"i-Bosnia-Herzegovina Convertible Mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"i-Barbadian Dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"i-Bangladeshi Taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"i-Bulgarian Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"i-Bahraini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"i-Burundian Franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"i-Bermudan Dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"i-Brunei Dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"i-Bolivian Boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"i-Brazilian Real\"
        ],
        \"BSD\": [
            \"BSD\",
            \"i-Bahamian Dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"i-Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"i-Botswana Pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"i-Belarusian Ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"i-Belarusian Ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"i-Belize Dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"i-Candian Dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"i-Congolese Franc\"
        ],
        \"CHF\": [
            \"CHF\",
            \"i-Swiss Franc\"
        ],
        \"CLP\": [
            \"CLP\",
            \"i-Chilean Peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"i-Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"i-Colombian Peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"i-Costa Rican Colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"i-Cuban Convertable Peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"i-Cuban Peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"i-Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"i-Czech Republic Koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"i-Djiboutian Franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"i-Danish Krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"i-Dominican Peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"i-Algerian Dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"i-Egyptian Pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"i-Eritrean Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"i-Ethopian Birr\"
        ],
        \"EUR\": [
            \"€\",
            \"i-Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"i-Fijian Dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"i-Falkland Islands Pound\"
        ],
        \"GBP\": [
            \"£\",
            \"i-British Pound\"
        ],
        \"GEL\": [
            \"GEL\",
            \"i-Georgian Lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"i-Ghanaian Cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"i-Gibraltar Pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"i-Gambian Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"i-Gunean Franc\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"i-Guatemalan Quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"i-Guyanaese Dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"i-Hong Kong Dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"i-Honduran Lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"i-Croatian Kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"i-Haitian Gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"i-Hungarian Forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"i-Indonesian Rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"i-Israeli New Sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"i-Indian Rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"i-Iraqi Dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"i-Iranian Rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"i-Icelandic Króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"i-Jamaican Dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"i-Jordanian Dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"i-Japanese Yen\"
        ],
        \"KES\": [
            \"KES\",
            \"i-Kenyan Shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"i-Kyrgystani Som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"i-Cambodian Riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"i-Comorian Franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"i-North Korean Won\"
        ],
        \"KRW\": [
            \"₩\",
            \"i-South Korean Won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"i-Kuwaiti Dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"i-Cayman Islands Dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"i-Kazakhstani Tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"i-Laotian Kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"i-Lebanese Pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"i-Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"i-Liberian Dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"i-Lesotho Loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"i-Lithuanian Litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"i-Latvian Lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"i-Libyan Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"i-Moroccan Dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"i-Moldovan Leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"i-Malagasy Ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"i-Macedonian Denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"i-Myanma Kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"i-Mongolian Tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"i-Macanese Pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"i-Mauritanian Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"i-Mauritanian Ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"i-Mauritian Rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"i-Maldivian Rufiyana\"
        ],
        \"MWK\": [
            \"MWK\",
            \"i-Malawian Kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"i-Mexican Peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"i-Malaysian Ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"i-Mozambican Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"i-Namibian Dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"i-Nigerian Naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"i-Nicaraguan Córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"i-Norwegian Krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"i-Nepalese Rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"i-New Zealand Dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"i-Omani Rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"i-Panamanian Balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"i-Peruvian Nuevo Sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"i-Papua New Guinean Kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"i-Philippine Peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"i-Pakistani Rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"i-Polish Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"i-Paraguayan Guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"i-Qatari Rial\"
        ],
        \"RON\": [
            \"RON\",
            \"i-Romanian Leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"i-Serbian Dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"i-Russian Ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"i-Rwandan Franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"i-Saudi Riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"i-Solomon Islands Dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"i-Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"i-Sudanese Pound\"
        ],
        \"SEK\": [
            \"SEK\",
            \"i-Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"i-Singapore Dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"i-Saint Helena Pound\"
        ],
        \"SLL\": [
            \"SLL\",
            \"i-Sierra Leonean Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"i-Somali Shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"i-Surinamese Dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"i-South Sudanese Pound\"
        ],
        \"STD\": [
            \"STD\",
            \"i-São Tomé kanye ne-Príncipe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"i-São Tomé kanye ne-Príncipe Dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"i-Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"i-Swazi Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"i-Thai Baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"i-Tajikistani Somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"i-Turkmenistani Manat\"
        ],
        \"TND\": [
            \"TND\",
            \"i-Tunisian Dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"i-Tongan Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"i-Turkish Lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"i-Trinidad and Tobago Dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"i-New Taiwan Dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"i-Tanzanian Shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"i-Ukrainian Hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"i-Ugandan Shilling\"
        ],
        \"USD\": [
            \"\$\",
            \"i-US Dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"i-Uruguayan Peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"i-Uzbekistan Som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"i-Venezuelan Bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"i-Venezuelan Bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"i-Vietnamese Dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"i-Vanuatu Vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"i-Samoan Tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"i-Central African CFA Franc\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"i-East Caribbean Dollar\"
        ],
        \"XOF\": [
            \"CFA\",
            \"i-West African CFA Franc\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"i-CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"i-Yemeni Rial\"
        ],
        \"ZAR\": [
            \"R\",
            \"i-South African Rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"i-Zambian Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"i-Zambian Kwacha\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/zu.json";
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
            \"i-Dirham yase-United Arab Emirates\"
        ],
        \"AFN\": [
            \"AFN\",
            \"i-Afghan Afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"i-Albanian Lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"i-Armenian Dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"i-Netherlands Antillean Guilder\"
        ],
        \"AOA\": [
            \"AOA\",
            \"i-Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"i-Argentina Peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"i-Austrilian Dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"i-Aruban Florin\"
        ],
        \"AZN\": [
            \"AZN\",
            \"i-Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"i-Bosnia-Herzegovina Convertible Mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"i-Barbadian Dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"i-Bangladeshi Taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"i-Bulgarian Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"i-Bahraini Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"i-Burundian Franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"i-Bermudan Dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"i-Brunei Dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"i-Bolivian Boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"i-Brazilian Real\"
        ],
        \"BSD\": [
            \"BSD\",
            \"i-Bahamian Dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"i-Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"i-Botswana Pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"i-Belarusian Ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"i-Belarusian Ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"i-Belize Dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"i-Candian Dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"i-Congolese Franc\"
        ],
        \"CHF\": [
            \"CHF\",
            \"i-Swiss Franc\"
        ],
        \"CLP\": [
            \"CLP\",
            \"i-Chilean Peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"i-Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"i-Colombian Peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"i-Costa Rican Colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"i-Cuban Convertable Peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"i-Cuban Peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"i-Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"i-Czech Republic Koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"i-Djiboutian Franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"i-Danish Krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"i-Dominican Peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"i-Algerian Dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"i-Egyptian Pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"i-Eritrean Nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"i-Ethopian Birr\"
        ],
        \"EUR\": [
            \"€\",
            \"i-Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"i-Fijian Dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"i-Falkland Islands Pound\"
        ],
        \"GBP\": [
            \"£\",
            \"i-British Pound\"
        ],
        \"GEL\": [
            \"GEL\",
            \"i-Georgian Lari\"
        ],
        \"GHS\": [
            \"GHS\",
            \"i-Ghanaian Cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"i-Gibraltar Pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"i-Gambian Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"i-Gunean Franc\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"i-Guatemalan Quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"i-Guyanaese Dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"i-Hong Kong Dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"i-Honduran Lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"i-Croatian Kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"i-Haitian Gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"i-Hungarian Forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"i-Indonesian Rupiah\"
        ],
        \"ILS\": [
            \"₪\",
            \"i-Israeli New Sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"i-Indian Rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"i-Iraqi Dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"i-Iranian Rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"i-Icelandic Króna\"
        ],
        \"JMD\": [
            \"JMD\",
            \"i-Jamaican Dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"i-Jordanian Dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"i-Japanese Yen\"
        ],
        \"KES\": [
            \"KES\",
            \"i-Kenyan Shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"i-Kyrgystani Som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"i-Cambodian Riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"i-Comorian Franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"i-North Korean Won\"
        ],
        \"KRW\": [
            \"₩\",
            \"i-South Korean Won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"i-Kuwaiti Dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"i-Cayman Islands Dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"i-Kazakhstani Tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"i-Laotian Kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"i-Lebanese Pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"i-Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"i-Liberian Dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"i-Lesotho Loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"i-Lithuanian Litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"i-Latvian Lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"i-Libyan Dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"i-Moroccan Dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"i-Moldovan Leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"i-Malagasy Ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"i-Macedonian Denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"i-Myanma Kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"i-Mongolian Tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"i-Macanese Pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"i-Mauritanian Ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"i-Mauritanian Ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"i-Mauritian Rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"i-Maldivian Rufiyana\"
        ],
        \"MWK\": [
            \"MWK\",
            \"i-Malawian Kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"i-Mexican Peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"i-Malaysian Ringgit\"
        ],
        \"MZN\": [
            \"MZN\",
            \"i-Mozambican Metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"i-Namibian Dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"i-Nigerian Naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"i-Nicaraguan Córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"i-Norwegian Krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"i-Nepalese Rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"i-New Zealand Dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"i-Omani Rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"i-Panamanian Balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"i-Peruvian Nuevo Sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"i-Papua New Guinean Kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"i-Philippine Peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"i-Pakistani Rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"i-Polish Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"i-Paraguayan Guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"i-Qatari Rial\"
        ],
        \"RON\": [
            \"RON\",
            \"i-Romanian Leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"i-Serbian Dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"i-Russian Ruble\"
        ],
        \"RWF\": [
            \"RWF\",
            \"i-Rwandan Franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"i-Saudi Riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"i-Solomon Islands Dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"i-Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"i-Sudanese Pound\"
        ],
        \"SEK\": [
            \"SEK\",
            \"i-Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"i-Singapore Dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"i-Saint Helena Pound\"
        ],
        \"SLL\": [
            \"SLL\",
            \"i-Sierra Leonean Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"i-Somali Shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"i-Surinamese Dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"i-South Sudanese Pound\"
        ],
        \"STD\": [
            \"STD\",
            \"i-São Tomé kanye ne-Príncipe Dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"i-São Tomé kanye ne-Príncipe Dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"i-Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"i-Swazi Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"i-Thai Baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"i-Tajikistani Somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"i-Turkmenistani Manat\"
        ],
        \"TND\": [
            \"TND\",
            \"i-Tunisian Dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"i-Tongan Paʻanga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"i-Turkish Lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"i-Trinidad and Tobago Dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"i-New Taiwan Dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"i-Tanzanian Shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"i-Ukrainian Hryvnia\"
        ],
        \"UGX\": [
            \"UGX\",
            \"i-Ugandan Shilling\"
        ],
        \"USD\": [
            \"\$\",
            \"i-US Dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"i-Uruguayan Peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"i-Uzbekistan Som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"i-Venezuelan Bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"i-Venezuelan Bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"i-Vietnamese Dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"i-Vanuatu Vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"i-Samoan Tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"i-Central African CFA Franc\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"i-East Caribbean Dollar\"
        ],
        \"XOF\": [
            \"CFA\",
            \"i-West African CFA Franc\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"i-CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"i-Yemeni Rial\"
        ],
        \"ZAR\": [
            \"R\",
            \"i-South African Rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"i-Zambian Kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"i-Zambian Kwacha\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/zu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/zu.json");
    }
}
