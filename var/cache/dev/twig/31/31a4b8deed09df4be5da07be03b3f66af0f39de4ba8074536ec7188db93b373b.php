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

/* vendor/symfony/intl/Resources/data/currencies/sw.json */
class __TwigTemplate_adc2b7ca2dcae2ee7101cdac7b98027f11ccc944a303a8b730c320748f5899e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirham ya Falme za Kiarabu\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani ya Afghanistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek ya Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram ya Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder ya Antili za Kiholanzi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso ya Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola ya Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin ya Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat ya Azerbaijan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Convertible Mark ya Bosnia na Hezegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dola ya Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka ya Bangladesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev ya Bulgaria\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar ya Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ya Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dola ya Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dola ya Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano ya Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real ya Brazil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dola ya Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum ya Bhutan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble ya Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Ruble ya Belarusi (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dola ya Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola ya Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ya Uswisi\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso ya Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan ya Uchina (huru)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan ya Uchina\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso ya Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon ya Costa Rica\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso ya Cuba Inayoweza Kubadilishwa\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso ya Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Cape Verde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"CZK\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone ya Denmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso ya Dominica\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar ya Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni ya Misri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr ya Uhabeshi\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dola ya Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pauni ya Visiwa vya Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Pauni ya Uingereza\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari ya Georgia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Ghana\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi ya Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pauni ya Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Faranga ya Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ya Gine\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal ya Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dola ya Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dola ya Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira ya Hondurasi\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna ya Croatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde ya Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint ya Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupiah ya Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekeli Mpya ya Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia ya India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar ya Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial ya Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Krona ya Aisilandi\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dola ya Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar ya Jordan\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen ya Ujapani\"
        ],
        \"KES\": [
            \"Ksh\",
            \"Shilingi ya Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som ya Kyrgystan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel ya Cambodia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Comoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won ya Korea Kaskazini\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won ya Korea Kusini\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar ya Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dola ya Visiwa vya Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge ya Kazakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip ya Laosi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pauni ya Lebanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia ya Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola ya Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesoto\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas ya Lithuania\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats ya Lativia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari ya Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ya Morocco\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu ya Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariari ya Madagascar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar ya Macedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat ya Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik ya Mongolia\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca ya Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ya Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ya Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia ya Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa ya Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ya Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso ya Mexico\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit ya Malaysia\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Msumbiji (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikali ya Msumbiji\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola ya Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nigeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba ya Nicaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone ya Norway\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia ya Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dola ya New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial ya Omani\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa ya Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol ya Peru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina ya Papua New Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso ya Ufilipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia ya Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty ya Poland\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani ya Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial ya Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu ya Romania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar ya Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruble ya Urusi\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal ya Saudia\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dola ya Visiwa vya Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Ushelisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pauni ya Sudani (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona ya Uswidi\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dola ya Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni ya St. Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingi ya Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dola ya Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pauni ya Sudan Kusini\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tome na Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tome na Principe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Pauni ya Syria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Baht ya Tailandi\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni ya Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat ya Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari ya Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga ya Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira ya Uturuki\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dola ya Trinidad na Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dola ya Taiwan\"
        ],
        \"TZS\": [
            \"TSh\",
            \"Shilingi ya Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia ya Ukraine\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingi ya Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dola ya Marekani\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso ya Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som ya Uzbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivar ya Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivar ya Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong ya Vietnam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu ya Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala ya Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ya Afrika ya Kati CFA\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dola ya Caribbean Mashariki\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ya Afrika Magharibi CFA\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Faranga ya CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial ya Yemen\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ya Afrika Kusini\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ya Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ya Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola ya Zimbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sw.json";
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
            \"Dirham ya Falme za Kiarabu\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani ya Afghanistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek ya Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram ya Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder ya Antili za Kiholanzi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza ya Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso ya Argentina\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dola ya Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin ya Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat ya Azerbaijan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Convertible Mark ya Bosnia na Hezegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dola ya Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka ya Bangladesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev ya Bulgaria\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar ya Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranga ya Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dola ya Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Dola ya Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano ya Bolivia\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real ya Brazil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dola ya Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum ya Bhutan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula ya Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble ya Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Ruble ya Belarusi (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dola ya Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola ya Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranga ya Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranga ya Uswisi\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso ya Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan ya Uchina (huru)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan ya Uchina\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso ya Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon ya Costa Rica\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso ya Cuba Inayoweza Kubadilishwa\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso ya Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Cape Verde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"CZK\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone ya Denmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso ya Dominica\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar ya Aljeria\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Pauni ya Misri\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa ya Eritrea\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr ya Uhabeshi\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dola ya Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Pauni ya Visiwa vya Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Pauni ya Uingereza\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari ya Georgia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Sedi ya Ghana\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi ya Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pauni ya Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi ya Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Faranga ya Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Faranga ya Gine\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal ya Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dola ya Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dola ya Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira ya Hondurasi\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna ya Croatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde ya Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint ya Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupiah ya Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekeli Mpya ya Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia ya India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar ya Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial ya Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Krona ya Aisilandi\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dola ya Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar ya Jordan\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen ya Ujapani\"
        ],
        \"KES\": [
            \"Ksh\",
            \"Shilingi ya Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som ya Kyrgystan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel ya Cambodia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Comoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won ya Korea Kaskazini\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won ya Korea Kusini\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar ya Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dola ya Visiwa vya Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge ya Kazakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip ya Laosi\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pauni ya Lebanon\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia ya Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dola ya Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti ya Lesoto\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas ya Lithuania\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats ya Lativia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari ya Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham ya Morocco\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu ya Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariari ya Madagascar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar ya Macedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat ya Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik ya Mongolia\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca ya Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya ya Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya ya Mauritania\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia ya Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa ya Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha ya Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso ya Mexico\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit ya Malaysia\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Metikali ya Msumbiji (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikali ya Msumbiji\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dola ya Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Nigeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba ya Nicaragua\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone ya Norway\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia ya Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dola ya New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial ya Omani\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa ya Panama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol ya Peru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina ya Papua New Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso ya Ufilipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia ya Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty ya Poland\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani ya Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial ya Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu ya Romania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar ya Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruble ya Urusi\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranga ya Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal ya Saudia\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dola ya Visiwa vya Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia ya Ushelisheli\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Pauni ya Sudani (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona ya Uswidi\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dola ya Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Pauni ya St. Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilingi ya Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dola ya Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pauni ya Sudan Kusini\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra ya Sao Tome na Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra ya Sao Tome na Principe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Pauni ya Syria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Baht ya Tailandi\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni ya Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat ya Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari ya Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga ya Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira ya Uturuki\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dola ya Trinidad na Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dola ya Taiwan\"
        ],
        \"TZS\": [
            \"TSh\",
            \"Shilingi ya Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia ya Ukraine\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingi ya Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dola ya Marekani\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso ya Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som ya Uzbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivar ya Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivar ya Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong ya Vietnam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu ya Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala ya Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ya Afrika ya Kati CFA\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dola ya Caribbean Mashariki\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ya Afrika Magharibi CFA\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Faranga ya CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial ya Yemen\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi ya Afrika Kusini\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha ya Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha ya Zambia\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Dola ya Zimbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sw.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sw.json");
    }
}
