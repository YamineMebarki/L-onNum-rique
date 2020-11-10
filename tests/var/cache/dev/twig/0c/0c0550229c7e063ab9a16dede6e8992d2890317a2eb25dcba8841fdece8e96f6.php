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

/* vendor/symfony/intl/Resources/data/currencies/en_AU.json */
class __TwigTemplate_efd0a4161c288a502146ed5f1c86614c7c4b40c53f90af96468bb81bc57d6375 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/en_AU.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/en_AU.json"));

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
        \"AOA\": [
            \"AOA\",
            \"Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentine Peso\"
        ],
        \"AUD\": [
            \"\$\",
            \"Australian Dollar\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Herzegovina Convertible Marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados Dollar\"
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
            \"Bermuda Dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunei Dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilian Real\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswanan Pula\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Canadian Dollar\"
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
            \"Chilean Peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Colombian Peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Czech Koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboutian Franc\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algerian Dinar\"
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
            \"EUR\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fijian Dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falkland Islands Pound\"
        ],
        \"GBP\": [
            \"GBP\",
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
        \"GYD\": [
            \"GYD\",
            \"Guyanaese Dollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hong Kong Dollar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Croatian Kuna\"
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
            \"ILS\",
            \"Israeli Shekel\"
        ],
        \"INR\": [
            \"INR\",
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
        \"JOD\": [
            \"JOD\",
            \"Jordanian Dinar\"
        ],
        \"JPY\": [
            \"JPY\",
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
            \"North Korean Won\"
        ],
        \"KRW\": [
            \"KRW\",
            \"South Korean Won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuwaiti Dinar\"
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
            \"Lebanese Pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberian Dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho Loti\"
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
            \"MXN\",
            \"Mexican Peso\"
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
            \"Namibian Dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerian Naira\"
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
            \"NZD\",
            \"New Zealand Dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omani Rial\"
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
            \"PHP\",
            \"Philippine Piso\"
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
            \"Qatari Riyal\"
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
            \"Russian Rouble\"
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
            \"Solomon Islands Dollar\"
        ],
        \"SCR\": [
            \"Rs\",
            \"Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanese Pound\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapore Dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pound\"
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
            \"Suriname Dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"South Sudanese Pound\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi Lilangeni\"
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
        \"TWD\": [
            \"TWD\",
            \"New Taiwan Dollar\"
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
            \"USD\",
            \"US Dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguayo\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistani Som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezuelan Bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"VND\",
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
            \"XAF\",
            \"Central African CFA Franc\"
        ],
        \"XCD\": [
            \"XCD\",
            \"East Caribbean Dollar\"
        ],
        \"XOF\": [
            \"XOF\",
            \"West African CFA Franc\"
        ],
        \"XPF\": [
            \"CFP\",
            \"CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"Yemeni Rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"South African Rand\"
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
        return "vendor/symfony/intl/Resources/data/currencies/en_AU.json";
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
        \"AOA\": [
            \"AOA\",
            \"Angolan Kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentine Peso\"
        ],
        \"AUD\": [
            \"\$\",
            \"Australian Dollar\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaijani Manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnia-Herzegovina Convertible Marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados Dollar\"
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
            \"Bermuda Dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunei Dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilian Real\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhutanese Ngultrum\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswanan Pula\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Canadian Dollar\"
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
            \"Chilean Peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Chinese Yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"Colombian Peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Cape Verdean Escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Czech Koruna\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboutian Franc\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algerian Dinar\"
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
            \"EUR\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fijian Dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falkland Islands Pound\"
        ],
        \"GBP\": [
            \"GBP\",
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
        \"GYD\": [
            \"GYD\",
            \"Guyanaese Dollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hong Kong Dollar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Croatian Kuna\"
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
            \"ILS\",
            \"Israeli Shekel\"
        ],
        \"INR\": [
            \"INR\",
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
        \"JOD\": [
            \"JOD\",
            \"Jordanian Dinar\"
        ],
        \"JPY\": [
            \"JPY\",
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
            \"North Korean Won\"
        ],
        \"KRW\": [
            \"KRW\",
            \"South Korean Won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuwaiti Dinar\"
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
            \"Lebanese Pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankan Rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberian Dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho Loti\"
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
            \"MXN\",
            \"Mexican Peso\"
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
            \"Namibian Dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerian Naira\"
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
            \"NZD\",
            \"New Zealand Dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omani Rial\"
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
            \"PHP\",
            \"Philippine Piso\"
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
            \"Qatari Riyal\"
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
            \"Russian Rouble\"
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
            \"Solomon Islands Dollar\"
        ],
        \"SCR\": [
            \"Rs\",
            \"Seychellois Rupee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanese Pound\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Swedish Krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapore Dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"St Helena Pound\"
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
            \"Suriname Dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"South Sudanese Pound\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Syrian Pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazi Lilangeni\"
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
        \"TWD\": [
            \"TWD\",
            \"New Taiwan Dollar\"
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
            \"USD\",
            \"US Dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguayo\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistani Som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezuelan Bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"VND\",
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
            \"XAF\",
            \"Central African CFA Franc\"
        ],
        \"XCD\": [
            \"XCD\",
            \"East Caribbean Dollar\"
        ],
        \"XOF\": [
            \"XOF\",
            \"West African CFA Franc\"
        ],
        \"XPF\": [
            \"CFP\",
            \"CFP Franc\"
        ],
        \"YER\": [
            \"YER\",
            \"Yemeni Rial\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"South African Rand\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambian Kwacha\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/en_AU.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/en_AU.json");
    }
}
