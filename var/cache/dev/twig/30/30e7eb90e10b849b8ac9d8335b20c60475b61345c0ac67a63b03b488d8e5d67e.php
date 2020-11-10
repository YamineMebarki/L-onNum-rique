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

/* vendor/symfony/intl/Resources/data/currencies/jv.json */
class __TwigTemplate_e6bde7818b9d2fd4b173df99021820c40c9cd6bce25204e99690888dcae293fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/jv.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/jv.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirham Uni Emirat Arab\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani Afganistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder Antilla Walanda\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolar Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin Aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat Azerbaijan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Mark Konvertibel Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dolar Barbadian\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev Bulgaria\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahrain Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franc Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dolar Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dolar Brunai\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Brasil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dolar Bahamian\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Bhutan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble Belarusia\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dolar Belise\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franc Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franc Swiss\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chili\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan Tyongkok (Jaban Rangkah)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Tyongkok\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Kolumbia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon Kosta Rika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Konvertibel Kuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Tanjung Verde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna Czech\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franc Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone Denmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Algeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pound Mesir\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Ethiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dolar Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pound Kepuloan Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Pound Inggris\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgia\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pound Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franc Guinea\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dolar Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dolar Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Kroasia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint Hungaria\"
        ],
        \"IDR\": [
            \"Rp\",
            \"Rupiah Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekel Anyar Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupee India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Irak\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Krona Islandia\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dolar Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Yordania\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Jepang\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kirgistan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Kamboja\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franc Komoro\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Korea Lor\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Korea Kidul\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dolar Kepuloan Caiman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kasakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Laos\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pound Libanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupee Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolar Liberia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham Maroko\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malagasi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar Masedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya Mauritania (1973 - 2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupee Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa Maladewa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malaysia\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mosambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolar Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba Nikaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone Norwegia\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupee Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dolar Selandia Anyar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol Peru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papua Nugini\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Piso Filipina\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupee Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty Polandia\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Rumania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubel Rusia\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franc Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Saudi\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dolar Kepuloan Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupee Seichelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pound Sudan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona Swedia\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dolar Singapura\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pound Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilling Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dolar Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pound Sudan Kidul\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Tome lan Principe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Pound Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swasi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baht Thai\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira Turki\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dolar Trinidad lan Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dolar Anyar Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling Tansania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia Ukrania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolar Amerika Serikat\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Usbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivar Venezuela (2008 - 2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivar Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong Vietnam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA Franc Afrika Tengah\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dolar Karibia Wetan\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA Franc Afrika Kulon\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franc CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yaman\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Afrika Kidul\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Sambia\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/jv.json";
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
            \"Dirham Uni Emirat Arab\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani Afganistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder Antilla Walanda\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dolar Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin Aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat Azerbaijan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Mark Konvertibel Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dolar Barbadian\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev Bulgaria\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahrain Dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franc Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dolar Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dolar Brunai\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Brasil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dolar Bahamian\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Bhutan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble Belarusia\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dolar Belise\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dolar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franc Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franc Swiss\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chili\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan Tyongkok (Jaban Rangkah)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Tyongkok\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Kolumbia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon Kosta Rika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Konvertibel Kuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Tanjung Verde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna Czech\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franc Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone Denmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Algeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pound Mesir\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Ethiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dolar Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pound Kepuloan Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Pound Inggris\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgia\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pound Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franc Guinea\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dolar Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dolar Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Kroasia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint Hungaria\"
        ],
        \"IDR\": [
            \"Rp\",
            \"Rupiah Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekel Anyar Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupee India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Irak\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Krona Islandia\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dolar Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Yordania\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Jepang\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kirgistan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Kamboja\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franc Komoro\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Korea Lor\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Korea Kidul\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dolar Kepuloan Caiman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kasakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Laos\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pound Libanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupee Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dolar Liberia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham Maroko\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malagasi\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar Masedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya Mauritania (1973 - 2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupee Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa Maladewa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malaysia\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mosambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dolar Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba Nikaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone Norwegia\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupee Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dolar Selandia Anyar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol Peru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papua Nugini\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Piso Filipina\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupee Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty Polandia\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Rumania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubel Rusia\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franc Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Saudi\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dolar Kepuloan Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupee Seichelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pound Sudan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona Swedia\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dolar Singapura\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pound Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilling Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dolar Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pound Sudan Kidul\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Tome lan Principe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Pound Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swasi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baht Thai\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira Turki\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dolar Trinidad lan Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dolar Anyar Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling Tansania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia Ukrania\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dolar Amerika Serikat\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Usbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivar Venezuela (2008 - 2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivar Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong Vietnam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA Franc Afrika Tengah\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dolar Karibia Wetan\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA Franc Afrika Kulon\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franc CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yaman\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Afrika Kidul\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Sambia\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/jv.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/jv.json");
    }
}