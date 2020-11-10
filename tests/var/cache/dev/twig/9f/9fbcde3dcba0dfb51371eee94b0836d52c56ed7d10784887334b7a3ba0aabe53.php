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

/* vendor/symfony/intl/Resources/data/currencies/ca.json */
class __TwigTemplate_e717d1791b14aeefb5f4775f944361a8b4073fac29c94bf1db2e8315a6a184d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ca.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ca.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"pesseta andorrana\"
        ],
        \"AED\": [
            \"AED\",
            \"dírham de la UEA\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afgani afganès (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afganès\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek albanès (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanès\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeni\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florí de les Antilles Neerlandeses\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolès\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolès (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"nou kwanza angolès (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza angolès reajustat (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentí\"
        ],
        \"ARL\": [
            \"ARL\",
            \"peso ley argentí (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso argentí (1981–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentí (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentí\"
        ],
        \"ATS\": [
            \"ATS\",
            \"xíling austríac\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"dòlar australià\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florí d’Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azerbaidjanès (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaidjanès\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar de Bòsnia i Hercegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marc convertible de Bòsnia i Hercegovina\"
        ],
        \"BAN\": [
            \"BAN\",
            \"nou dinar de Bòsnia i Hercegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dòlar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka de Bangla Desh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc belga (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc belga (financer)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev fort búlgar\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev socialista búlgar\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgar\"
        ],
        \"BGO\": [
            \"BGO\",
            \"lev búlgar (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar de Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc de Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dòlar de les Bermudes\"
        ],
        \"BND\": [
            \"BND\",
            \"dòlar de Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivià\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviano bolivià (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivià\"
        ],
        \"BOV\": [
            \"BOV\",
            \"MVDOL bolivià\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasiler (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasiler\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasiler (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brasiler\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasiler\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasiler\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"antic cruzeiro brasiler\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dòlar de les Bahames\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum de Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birmà\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula de Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nou ruble bielorús (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"ruble bielorús\"
        ],
        \"BYR\": [
            \"BYR\",
            \"ruble bielorús (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dòlar de Belize\"
        ],
        \"CAD\": [
            \"CAD\",
            \"dòlar canadenc\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolès\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc suís\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escut xilè\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidad de fomento xilena\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso xilè\"
        ],
        \"CNH\": [
            \"CNH\",
            \"iuan xinès extracontinental\"
        ],
        \"CNY\": [
            \"CNY\",
            \"iuan xinès\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombià\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real colombiana\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costa-riqueny\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar serbi antic\"
        ],
        \"CSK\": [
            \"CSK\",
            \"corona forta txecoslovaca\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso convertible cubà\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escut de Cap Verd\"
        ],
        \"CYP\": [
            \"CYP\",
            \"lliura xipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona txeca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marc de l’Alemanya Oriental\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marc alemany\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc de Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicà\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerià\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre equatorià\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unidad de valor constante (UVC) equatoriana\"
        ],
        \"EEK\": [
            \"EEK\",
            \"corona estoniana\"
        ],
        \"EGP\": [
            \"EGP\",
            \"lliura egípcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreu\"
        ],
        \"ESA\": [
            \"ESA\",
            \"pesseta espanyola (compte A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"pesseta espanyola (compte convertible)\"
        ],
        \"ESP\": [
            \"₧\",
            \"pesseta espanyola\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etíop\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marc finlandès\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dòlar fijià\"
        ],
        \"FKP\": [
            \"FKP\",
            \"lliura de les illes Malvines\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc francès\"
        ],
        \"GBP\": [
            \"£\",
            \"lliura esterlina britànica\"
        ],
        \"GEK\": [
            \"GEK\",
            \"cupó de lari georgià\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgià\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi ghanès (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanès\"
        ],
        \"GIP\": [
            \"GIP\",
            \"lliura de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambià\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc guineà\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli guineà\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele de Guinea Equatorial\"
        ],
        \"GRD\": [
            \"GRD\",
            \"dracma grega\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalenc\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escut de la Guinea Portuguesa\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso de Guinea Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dòlar de Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dòlar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurenya\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar croat\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitià\"
        ],
        \"HUF\": [
            \"HUF\",
            \"fòrint hongarès\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonèsia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"lliura irlandesa\"
        ],
        \"ILP\": [
            \"ILP\",
            \"lliura israeliana\"
        ],
        \"ILR\": [
            \"ILR\",
            \"xéquel israelià\"
        ],
        \"ILS\": [
            \"₪\",
            \"nou xéquel israelià\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia índia\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquià\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranià\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"corona islandesa antiga\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandesa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira italiana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dòlar jamaicà\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordà\"
        ],
        \"JPY\": [
            \"¥\",
            \"ien japonès\"
        ],
        \"KES\": [
            \"KES\",
            \"xíling kenyà\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodjà\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc de les Comores\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nord-coreà\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan sud-coreà (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"antic won sud-coreà\"
        ],
        \"KRW\": [
            \"₩\",
            \"won sud-coreà\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitià\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dòlar de les illes Caiman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazakh\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosià\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lliura libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia de Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dòlar liberià\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti de Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituà\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituà\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertible luxemburguès\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburguès\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc financer luxemburguès\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letó\"
        ],
        \"LVR\": [
            \"LVR\",
            \"ruble letó\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dírham marroquí\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marroquí\"
        ],
        \"MCF\": [
            \"MCF\",
            \"franc monegasc\"
        ],
        \"MDC\": [
            \"MDC\",
            \"cupó moldau\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldau\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaix\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc malgaix\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedoni\"
        ],
        \"MKN\": [
            \"MKN\",
            \"denar macedoni (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc malià\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat de Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tögrög mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca de Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya maurità (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya maurità\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltesa\"
        ],
        \"MTP\": [
            \"MTP\",
            \"lliura maltesa\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriciana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia de les Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawià\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexicà\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso de plata mexicà (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversión (UDI) mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit de Malàisia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escut moçambiquès\"
        ],
        \"MZM\": [
            \"MZM\",
            \"antic metical moçambiquès\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical moçambiquès\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dòlar namibià\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigerià\"
        ],
        \"NIC\": [
            \"NIC\",
            \"córdoba nicaragüenca\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaragüenc\"
        ],
        \"NLG\": [
            \"NLG\",
            \"florí neerlandès\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona noruega\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalesa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dòlar neozelandès\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanita\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameny\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruà\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruà\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruà (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina de Papua Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipí\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistanesa\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polonès\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty polonès (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escut portuguès\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguaià\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial de Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dòlar rhodesià\"
        ],
        \"ROL\": [
            \"ROL\",
            \"antic leu romanès\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanès\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbi\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ruble rus\"
        ],
        \"RUR\": [
            \"RUR\",
            \"ruble rus (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc de Ruanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dòlar de les illes Salomó\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia de les Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanès\"
        ],
        \"SDG\": [
            \"SDG\",
            \"lliura sudanesa\"
        ],
        \"SDP\": [
            \"SDP\",
            \"antiga lliura sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dòlar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"lliura de Santa Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar eslovè\"
        ],
        \"SKK\": [
            \"SKK\",
            \"corona eslovaca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xíling somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dòlar de Surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"florí de Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"lliura del Sudan del Sud\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra de São Tomé i Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé i Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"ruble soviètic\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon salvadorenc\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lliura siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazi\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandès\"
        ],
        \"TJR\": [
            \"TJR\",
            \"ruble tadjik\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tadjik\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turcman (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turcman\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisià\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa‘anga tongà\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escut de Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lira turca (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dòlar de Trinitat i Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"nou dòlar de Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xíling tanzà\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hrívnia ucraïnesa\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbóvanets ucraïnès\"
        ],
        \"UGS\": [
            \"UGS\",
            \"xíling ugandès (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xíling ugandès\"
        ],
        \"USD\": [
            \"USD\",
            \"dòlar dels Estats Units\"
        ],
        \"USN\": [
            \"USN\",
            \"dòlar dels Estats Units (dia següent)\"
        ],
        \"USS\": [
            \"USS\",
            \"dòlar dels Estats Units (mateix dia)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso uruguaià en unitats indexades\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso uruguaià (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaià\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbek\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolívar veneçolà (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar veneçolà (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar veneçolà\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VNN\": [
            \"VNN\",
            \"dong vietnamita (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu de Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoà\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dòlar del Carib Oriental\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unitat de moneda europea\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc or francès\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC francès\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franc CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franc CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"fons RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar iemenita\"
        ],
        \"YER\": [
            \"YER\",
            \"rial iemenita\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar fort iugoslau\"
        ],
        \"YUM\": [
            \"YUM\",
            \"nou dinar iugoslau\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar convertible iugoslau\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar iugoslau reformat (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sud-africà (financer)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sud-africà\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha zambià (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambià\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nou zaire zairès\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire zairès\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dòlar zimbabuès (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dòlar zimbabuès (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dòlar zimbabuès (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ca.json";
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
            \"pesseta andorrana\"
        ],
        \"AED\": [
            \"AED\",
            \"dírham de la UEA\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afgani afganès (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afganès\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek albanès (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanès\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeni\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florí de les Antilles Neerlandeses\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolès\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolès (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"nou kwanza angolès (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza angolès reajustat (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentí\"
        ],
        \"ARL\": [
            \"ARL\",
            \"peso ley argentí (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso argentí (1981–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentí (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentí\"
        ],
        \"ATS\": [
            \"ATS\",
            \"xíling austríac\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"dòlar australià\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florí d’Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azerbaidjanès (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azerbaidjanès\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar de Bòsnia i Hercegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marc convertible de Bòsnia i Hercegovina\"
        ],
        \"BAN\": [
            \"BAN\",
            \"nou dinar de Bòsnia i Hercegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dòlar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka de Bangla Desh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc belga (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc belga (financer)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev fort búlgar\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev socialista búlgar\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgar\"
        ],
        \"BGO\": [
            \"BGO\",
            \"lev búlgar (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar de Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc de Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dòlar de les Bermudes\"
        ],
        \"BND\": [
            \"BND\",
            \"dòlar de Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivià\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviano bolivià (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivià\"
        ],
        \"BOV\": [
            \"BOV\",
            \"MVDOL bolivià\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasiler (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasiler\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasiler (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brasiler\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasiler\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasiler\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"antic cruzeiro brasiler\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dòlar de les Bahames\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum de Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birmà\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula de Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nou ruble bielorús (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"ruble bielorús\"
        ],
        \"BYR\": [
            \"BYR\",
            \"ruble bielorús (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dòlar de Belize\"
        ],
        \"CAD\": [
            \"CAD\",
            \"dòlar canadenc\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolès\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc suís\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escut xilè\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidad de fomento xilena\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso xilè\"
        ],
        \"CNH\": [
            \"CNH\",
            \"iuan xinès extracontinental\"
        ],
        \"CNY\": [
            \"CNY\",
            \"iuan xinès\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombià\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real colombiana\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costa-riqueny\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar serbi antic\"
        ],
        \"CSK\": [
            \"CSK\",
            \"corona forta txecoslovaca\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso convertible cubà\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubà\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escut de Cap Verd\"
        ],
        \"CYP\": [
            \"CYP\",
            \"lliura xipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona txeca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marc de l’Alemanya Oriental\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marc alemany\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc de Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicà\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar algerià\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre equatorià\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unidad de valor constante (UVC) equatoriana\"
        ],
        \"EEK\": [
            \"EEK\",
            \"corona estoniana\"
        ],
        \"EGP\": [
            \"EGP\",
            \"lliura egípcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreu\"
        ],
        \"ESA\": [
            \"ESA\",
            \"pesseta espanyola (compte A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"pesseta espanyola (compte convertible)\"
        ],
        \"ESP\": [
            \"₧\",
            \"pesseta espanyola\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etíop\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marc finlandès\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dòlar fijià\"
        ],
        \"FKP\": [
            \"FKP\",
            \"lliura de les illes Malvines\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc francès\"
        ],
        \"GBP\": [
            \"£\",
            \"lliura esterlina britànica\"
        ],
        \"GEK\": [
            \"GEK\",
            \"cupó de lari georgià\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgià\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi ghanès (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanès\"
        ],
        \"GIP\": [
            \"GIP\",
            \"lliura de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambià\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc guineà\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli guineà\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele de Guinea Equatorial\"
        ],
        \"GRD\": [
            \"GRD\",
            \"dracma grega\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalenc\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escut de la Guinea Portuguesa\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso de Guinea Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dòlar de Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dòlar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurenya\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar croat\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitià\"
        ],
        \"HUF\": [
            \"HUF\",
            \"fòrint hongarès\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonèsia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"lliura irlandesa\"
        ],
        \"ILP\": [
            \"ILP\",
            \"lliura israeliana\"
        ],
        \"ILR\": [
            \"ILR\",
            \"xéquel israelià\"
        ],
        \"ILS\": [
            \"₪\",
            \"nou xéquel israelià\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia índia\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquià\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranià\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"corona islandesa antiga\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandesa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira italiana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dòlar jamaicà\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordà\"
        ],
        \"JPY\": [
            \"¥\",
            \"ien japonès\"
        ],
        \"KES\": [
            \"KES\",
            \"xíling kenyà\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodjà\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc de les Comores\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nord-coreà\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan sud-coreà (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"antic won sud-coreà\"
        ],
        \"KRW\": [
            \"₩\",
            \"won sud-coreà\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitià\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dòlar de les illes Caiman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazakh\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosià\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lliura libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia de Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dòlar liberià\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti de Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituà\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituà\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertible luxemburguès\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburguès\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc financer luxemburguès\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letó\"
        ],
        \"LVR\": [
            \"LVR\",
            \"ruble letó\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dírham marroquí\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marroquí\"
        ],
        \"MCF\": [
            \"MCF\",
            \"franc monegasc\"
        ],
        \"MDC\": [
            \"MDC\",
            \"cupó moldau\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldau\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaix\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc malgaix\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedoni\"
        ],
        \"MKN\": [
            \"MKN\",
            \"denar macedoni (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc malià\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat de Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tögrög mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca de Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya maurità (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya maurità\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltesa\"
        ],
        \"MTP\": [
            \"MTP\",
            \"lliura maltesa\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriciana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia de les Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawià\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso mexicà\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso de plata mexicà (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversión (UDI) mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit de Malàisia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escut moçambiquès\"
        ],
        \"MZM\": [
            \"MZM\",
            \"antic metical moçambiquès\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical moçambiquès\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dòlar namibià\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigerià\"
        ],
        \"NIC\": [
            \"NIC\",
            \"córdoba nicaragüenca\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaragüenc\"
        ],
        \"NLG\": [
            \"NLG\",
            \"florí neerlandès\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona noruega\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalesa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dòlar neozelandès\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanita\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameny\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruà\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruà\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruà (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina de Papua Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipí\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistanesa\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polonès\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty polonès (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escut portuguès\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguaià\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial de Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dòlar rhodesià\"
        ],
        \"ROL\": [
            \"ROL\",
            \"antic leu romanès\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanès\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbi\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ruble rus\"
        ],
        \"RUR\": [
            \"RUR\",
            \"ruble rus (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc de Ruanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dòlar de les illes Salomó\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia de les Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanès\"
        ],
        \"SDG\": [
            \"SDG\",
            \"lliura sudanesa\"
        ],
        \"SDP\": [
            \"SDP\",
            \"antiga lliura sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dòlar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"lliura de Santa Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar eslovè\"
        ],
        \"SKK\": [
            \"SKK\",
            \"corona eslovaca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xíling somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dòlar de Surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"florí de Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"lliura del Sudan del Sud\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra de São Tomé i Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé i Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"ruble soviètic\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon salvadorenc\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lliura siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni swazi\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandès\"
        ],
        \"TJR\": [
            \"TJR\",
            \"ruble tadjik\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tadjik\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turcman (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turcman\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisià\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa‘anga tongà\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escut de Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lira turca (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dòlar de Trinitat i Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"nou dòlar de Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xíling tanzà\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hrívnia ucraïnesa\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbóvanets ucraïnès\"
        ],
        \"UGS\": [
            \"UGS\",
            \"xíling ugandès (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xíling ugandès\"
        ],
        \"USD\": [
            \"USD\",
            \"dòlar dels Estats Units\"
        ],
        \"USN\": [
            \"USN\",
            \"dòlar dels Estats Units (dia següent)\"
        ],
        \"USS\": [
            \"USS\",
            \"dòlar dels Estats Units (mateix dia)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso uruguaià en unitats indexades\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso uruguaià (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaià\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbek\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolívar veneçolà (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar veneçolà (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar veneçolà\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VNN\": [
            \"VNN\",
            \"dong vietnamita (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu de Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoà\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dòlar del Carib Oriental\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unitat de moneda europea\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc or francès\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC francès\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franc CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franc CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"fons RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar iemenita\"
        ],
        \"YER\": [
            \"YER\",
            \"rial iemenita\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar fort iugoslau\"
        ],
        \"YUM\": [
            \"YUM\",
            \"nou dinar iugoslau\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar convertible iugoslau\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar iugoslau reformat (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sud-africà (financer)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sud-africà\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha zambià (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambià\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nou zaire zairès\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire zairès\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dòlar zimbabuès (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dòlar zimbabuès (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dòlar zimbabuès (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ca.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ca.json");
    }
}