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

/* vendor/symfony/intl/Resources/data/currencies/ro.json */
class __TwigTemplate_432e171f9b0907e22b10670f91655a6744976ede1e406887554b5621bece58e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ro.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ro.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"pesetă andorrană\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham din Emiratele Arabe Unite\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afgan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"leka albaneză\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armenesc\"
        ],
        \"ANG\": [
            \"ANG\",
            \"gulden din Antilele Olandeze\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angoleză\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentinian (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentinian\"
        ],
        \"ATS\": [
            \"ATS\",
            \"șiling austriac\"
        ],
        \"AUD\": [
            \"AUD\",
            \"dolar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin aruban\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azer (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azer\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia-Herțegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marcă convertibilă din Bosnia și Herțegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dolar din Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka din Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc belgian (convertibil)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc belgian\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc belgian (financiar)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"leva bulgărească\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar din Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc burundez\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dolar din Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dolar din Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano bolivian\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivian\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol bolivian\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brazilian (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brazilian\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brazilian (1993–1994)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dolar din Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum din Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birman\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublă belarusă\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rublă belarusă (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dolar din Belize\"
        ],
        \"CAD\": [
            \"CAD\",
            \"dolar canadian\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolez\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc elvețian\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilian\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan chinezesc (offshore)\"
        ],
        \"CNY\": [
            \"CNY\",
            \"yuan chinezesc\"
        ],
        \"COP\": [
            \"COP\",
            \"peso columbian\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costarican\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar Serbia și Muntenegru (2002–2006)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubanez convertibil\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubanez\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo din Capul Verde\"
        ],
        \"CYP\": [
            \"CYP\",
            \"liră cipriotă\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroană cehă\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marcă est-germană\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marcă germană\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc djiboutian\"
        ],
        \"DKK\": [
            \"DKK\",
            \"coroană daneză\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerian\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"coroană estoniană\"
        ],
        \"EGP\": [
            \"EGP\",
            \"liră egipteană\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreeană\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spaniolă (cont A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spaniolă (cont convertibil)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"pesetă spaniolă\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopian\"
        ],
        \"EUR\": [
            \"EUR\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marcă finlandeză\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dolar fijian\"
        ],
        \"FKP\": [
            \"FKP\",
            \"liră din Insulele Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc francez\"
        ],
        \"GBP\": [
            \"GBP\",
            \"liră sterlină\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgian\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi Ghana (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanez\"
        ],
        \"GIP\": [
            \"GIP\",
            \"liră din Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi din Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc guineean\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drahmă grecească\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalez\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Guineea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dolar guyanez\"
        ],
        \"HKD\": [
            \"HKD\",
            \"dolar din Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira honduriană\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar croat\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croată\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde din Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint maghiar\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupie indoneziană\"
        ],
        \"IEP\": [
            \"IEP\",
            \"liră irlandeză\"
        ],
        \"ILP\": [
            \"ILP\",
            \"liră israeliană\"
        ],
        \"ILS\": [
            \"ILS\",
            \"șechel israelian nou\"
        ],
        \"INR\": [
            \"INR\",
            \"rupie indiană\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar irakian\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroană islandeză\"
        ],
        \"ITL\": [
            \"ITL\",
            \"liră italiană\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dolar jamaican\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar iordanian\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen japonez\"
        ],
        \"KES\": [
            \"KES\",
            \"șiling kenyan\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kârgâz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodgian\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc comorian\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nord-coreean\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sud-coreean\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuweitian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dolar din Insulele Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazahă\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laoțian\"
        ],
        \"LBP\": [
            \"LBP\",
            \"liră libaneză\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupie srilankeză\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolar liberian\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti lesothian\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litu lituanian\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertibil luxemburghez\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburghez\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc financiar luxemburghez\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letonian\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rublă Letonia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libian\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocan\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marocan\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldovenesc\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaș\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc Madagascar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedonean\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat din Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca din Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya mauritană (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritană\"
        ],
        \"MTL\": [
            \"MTL\",
            \"liră malteză\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupie mauritiană\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa maldiviană\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiană\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexican\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso mexican de argint (1861–1992)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaiezian\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo Mozambic\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metical Mozambic vechi\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriană\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguană (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba nicaraguană\"
        ],
        \"NLG\": [
            \"NLG\",
            \"gulden olandez\"
        ],
        \"NOK\": [
            \"NOK\",
            \"coroană norvegiană\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupie nepaleză\"
        ],
        \"NZD\": [
            \"NZD\",
            \"dolar neozeelandez\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanez\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameză\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruvian\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruvian\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruvian (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina din Papua-Noua Guinee\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipinez\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupie pakistaneză\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zlot polonez\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zlot polonez (1950–1995)\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguayan\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatarian\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dolar rhodesian\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu românesc (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"leu românesc\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar sârbesc\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublă rusească\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc rwandez\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dolar din Insulele Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupie din Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanez\"
        ],
        \"SDG\": [
            \"SDG\",
            \"liră sudaneză\"
        ],
        \"SDP\": [
            \"SDP\",
            \"liră sudaneză (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"coroană suedeză\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dolar singaporez\"
        ],
        \"SHP\": [
            \"SHP\",
            \"liră Insula Sf. Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar sloven\"
        ],
        \"SKK\": [
            \"SKK\",
            \"coroană slovacă\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone din Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"șiling somalez\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dolar surinamez\"
        ],
        \"SRG\": [
            \"SRG\",
            \"gulden Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"liră din Sudanul de Sud\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra Sao Tome și Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra Sao Tome și Principe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rublă sovietică\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"liră siriană\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni din Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht thailandez\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rublă Tadjikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tadjic\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmen (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmen\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga tongană\"
        ],
        \"TRL\": [
            \"TRL\",
            \"liră turcească (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"liră turcească\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dolar din Trinidad-Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"dolar nou din Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"șiling tanzanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvna ucraineană\"
        ],
        \"UAK\": [
            \"UAK\",
            \"carboavă ucraineană\"
        ],
        \"UGS\": [
            \"UGS\",
            \"șiling ugandez (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"șiling ugandez\"
        ],
        \"USD\": [
            \"USD\",
            \"dolar american\"
        ],
        \"USN\": [
            \"USN\",
            \"dolar american (ziua următoare)\"
        ],
        \"USS\": [
            \"USS\",
            \"dolar american (aceeași zi)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayan\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum Uzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelean (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelean\"
        ],
        \"VND\": [
            \"VND\",
            \"dong vietnamez\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu din Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoană\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dolar din Caraibele de Est\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unitate de monedă europeană\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc francez de aur\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC francez\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franc CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franc CFP\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yemenit\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar iugoslav greu\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinar iugoslav nou\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar iugoslav convertibil\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sud-african (financiar)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sud-african\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha zambian (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambian\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zair nou\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dolar Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dolar Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dolar Zimbabwe (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ro.json";
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
        \"ADP\": [
            \"ADP\",
            \"pesetă andorrană\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham din Emiratele Arabe Unite\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afgan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"leka albaneză\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armenesc\"
        ],
        \"ANG\": [
            \"ANG\",
            \"gulden din Antilele Olandeze\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angoleză\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentinian (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentinian\"
        ],
        \"ATS\": [
            \"ATS\",
            \"șiling austriac\"
        ],
        \"AUD\": [
            \"AUD\",
            \"dolar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin aruban\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azer (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azer\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia-Herțegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marcă convertibilă din Bosnia și Herțegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dolar din Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka din Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc belgian (convertibil)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc belgian\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc belgian (financiar)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"leva bulgărească\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar din Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc burundez\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dolar din Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dolar din Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano bolivian\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivian\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol bolivian\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brazilian (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brazilian\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brazilian (1993–1994)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dolar din Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum din Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birman\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublă belarusă\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rublă belarusă (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dolar din Belize\"
        ],
        \"CAD\": [
            \"CAD\",
            \"dolar canadian\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolez\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc elvețian\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilian\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan chinezesc (offshore)\"
        ],
        \"CNY\": [
            \"CNY\",
            \"yuan chinezesc\"
        ],
        \"COP\": [
            \"COP\",
            \"peso columbian\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costarican\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar Serbia și Muntenegru (2002–2006)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubanez convertibil\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubanez\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo din Capul Verde\"
        ],
        \"CYP\": [
            \"CYP\",
            \"liră cipriotă\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroană cehă\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marcă est-germană\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marcă germană\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc djiboutian\"
        ],
        \"DKK\": [
            \"DKK\",
            \"coroană daneză\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominican\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerian\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"coroană estoniană\"
        ],
        \"EGP\": [
            \"EGP\",
            \"liră egipteană\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreeană\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spaniolă (cont A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spaniolă (cont convertibil)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"pesetă spaniolă\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopian\"
        ],
        \"EUR\": [
            \"EUR\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marcă finlandeză\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dolar fijian\"
        ],
        \"FKP\": [
            \"FKP\",
            \"liră din Insulele Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc francez\"
        ],
        \"GBP\": [
            \"GBP\",
            \"liră sterlină\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgian\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi Ghana (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanez\"
        ],
        \"GIP\": [
            \"GIP\",
            \"liră din Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi din Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc guineean\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drahmă grecească\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalez\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Guineea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dolar guyanez\"
        ],
        \"HKD\": [
            \"HKD\",
            \"dolar din Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira honduriană\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar croat\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croată\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde din Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint maghiar\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupie indoneziană\"
        ],
        \"IEP\": [
            \"IEP\",
            \"liră irlandeză\"
        ],
        \"ILP\": [
            \"ILP\",
            \"liră israeliană\"
        ],
        \"ILS\": [
            \"ILS\",
            \"șechel israelian nou\"
        ],
        \"INR\": [
            \"INR\",
            \"rupie indiană\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar irakian\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroană islandeză\"
        ],
        \"ITL\": [
            \"ITL\",
            \"liră italiană\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dolar jamaican\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar iordanian\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen japonez\"
        ],
        \"KES\": [
            \"KES\",
            \"șiling kenyan\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kârgâz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodgian\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc comorian\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nord-coreean\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sud-coreean\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuweitian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dolar din Insulele Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazahă\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laoțian\"
        ],
        \"LBP\": [
            \"LBP\",
            \"liră libaneză\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupie srilankeză\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dolar liberian\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti lesothian\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litu lituanian\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertibil luxemburghez\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburghez\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc financiar luxemburghez\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letonian\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rublă Letonia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libian\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocan\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marocan\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldovenesc\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaș\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc Madagascar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedonean\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat din Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca din Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya mauritană (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritană\"
        ],
        \"MTL\": [
            \"MTL\",
            \"liră malteză\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupie mauritiană\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa maldiviană\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiană\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexican\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso mexican de argint (1861–1992)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaiezian\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo Mozambic\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metical Mozambic vechi\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dolar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriană\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguană (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba nicaraguană\"
        ],
        \"NLG\": [
            \"NLG\",
            \"gulden olandez\"
        ],
        \"NOK\": [
            \"NOK\",
            \"coroană norvegiană\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupie nepaleză\"
        ],
        \"NZD\": [
            \"NZD\",
            \"dolar neozeelandez\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanez\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameză\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruvian\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruvian\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruvian (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina din Papua-Noua Guinee\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipinez\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupie pakistaneză\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zlot polonez\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zlot polonez (1950–1995)\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguayan\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatarian\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dolar rhodesian\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu românesc (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"leu românesc\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar sârbesc\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublă rusească\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc rwandez\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dolar din Insulele Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupie din Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanez\"
        ],
        \"SDG\": [
            \"SDG\",
            \"liră sudaneză\"
        ],
        \"SDP\": [
            \"SDP\",
            \"liră sudaneză (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"coroană suedeză\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dolar singaporez\"
        ],
        \"SHP\": [
            \"SHP\",
            \"liră Insula Sf. Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar sloven\"
        ],
        \"SKK\": [
            \"SKK\",
            \"coroană slovacă\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone din Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"șiling somalez\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dolar surinamez\"
        ],
        \"SRG\": [
            \"SRG\",
            \"gulden Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"liră din Sudanul de Sud\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra Sao Tome și Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra Sao Tome și Principe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rublă sovietică\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"liră siriană\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni din Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht thailandez\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rublă Tadjikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tadjic\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmen (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmen\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga tongană\"
        ],
        \"TRL\": [
            \"TRL\",
            \"liră turcească (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"liră turcească\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dolar din Trinidad-Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"dolar nou din Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"șiling tanzanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvna ucraineană\"
        ],
        \"UAK\": [
            \"UAK\",
            \"carboavă ucraineană\"
        ],
        \"UGS\": [
            \"UGS\",
            \"șiling ugandez (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"șiling ugandez\"
        ],
        \"USD\": [
            \"USD\",
            \"dolar american\"
        ],
        \"USN\": [
            \"USN\",
            \"dolar american (ziua următoare)\"
        ],
        \"USS\": [
            \"USS\",
            \"dolar american (aceeași zi)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayan\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum Uzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelean (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelean\"
        ],
        \"VND\": [
            \"VND\",
            \"dong vietnamez\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu din Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoană\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dolar din Caraibele de Est\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unitate de monedă europeană\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc francez de aur\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC francez\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franc CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franc CFP\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial yemenit\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar iugoslav greu\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinar iugoslav nou\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar iugoslav convertibil\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sud-african (financiar)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sud-african\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha zambian (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambian\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zair nou\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dolar Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dolar Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dolar Zimbabwe (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ro.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ro.json");
    }
}
