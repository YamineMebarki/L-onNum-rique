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

/* vendor/symfony/intl/Resources/data/currencies/it.json */
class __TwigTemplate_b55d9ec13386700536c2d3b9510574896888fa6454b663c5bfda9ed53d7df69f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/it.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/it.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"peseta andorrana\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham degli Emirati Arabi Uniti\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanese\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeno\"
        ],
        \"ANG\": [
            \"ANG\",
            \"fiorino delle Antille olandesi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolano (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"nuovo kwanza angolano (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza reajustado angolano (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentino\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentino (vecchio Cod.)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentino\"
        ],
        \"ATS\": [
            \"ATS\",
            \"scellino austriaco\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollaro australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"fiorino di Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azero (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azero\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia-Herzegovina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertibile della Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollaro di Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladese\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franco belga (convertibile)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franco belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franco belga (finanziario)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev bulgaro (1962–1999)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinaro del Bahrein\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco del Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollaro delle Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dollaro del Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso boliviano\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol boliviano\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasiliano (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasiliano\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasiliano (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brasiliano\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasiliano\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasiliano\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollaro delle Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum bhutanese\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birmano\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula del Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nuovo rublo bielorusso (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorusso\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rublo bielorusso (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollaro del Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollaro canadese\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolese\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco svizzero\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidades de fomento chilene\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso cileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"renminbi cinese\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón costaricano\"
        ],
        \"CSD\": [
            \"CSD\",
            \"antico dinaro serbo\"
        ],
        \"CSK\": [
            \"CSK\",
            \"corona forte cecoslovacca\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano convertibile\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo capoverdiano\"
        ],
        \"CYP\": [
            \"CYP\",
            \"sterlina cipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona ceca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"ostmark della Germania Orientale\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marco tedesco\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco di Gibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danese\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinaro algerino\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre dell’Ecuador\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unidad de valor constante (UVC) dell’Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"corona dell’Estonia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"sterlina egiziana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreo\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spagnola account\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spagnola account convertibile\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta spagnola\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"markka finlandese\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollaro delle Figi\"
        ],
        \"FKP\": [
            \"FKP\",
            \"sterlina delle Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franco francese\"
        ],
        \"GBP\": [
            \"£\",
            \"sterlina britannica\"
        ],
        \"GEK\": [
            \"GEK\",
            \"kupon larit georgiano\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiano\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi del Ghana\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanese\"
        ],
        \"GIP\": [
            \"GIP\",
            \"sterlina di Gibilterra\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco della Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli della Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele della Guinea Equatoriale\"
        ],
        \"GRD\": [
            \"GRD\",
            \"dracma greca\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalteco\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escudo della Guinea portoghese\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso della Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollaro della Guyana\"
        ],
        \"HKD\": [
            \"HKD\",
            \"dollaro di Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira honduregna\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinaro croato\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"fiorino ungherese\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonesiana\"
        ],
        \"IEP\": [
            \"IEP\",
            \"sterlina irlandese\"
        ],
        \"ILP\": [
            \"ILP\",
            \"sterlina israeliana\"
        ],
        \"ILS\": [
            \"₪\",
            \"nuovo siclo israeliano\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indiana\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinaro iracheno\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandese\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira italiana\",
            {}
        ],
        \"JMD\": [
            \"JMD\",
            \"dollaro giamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinaro giordano\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen giapponese\"
        ],
        \"KES\": [
            \"KES\",
            \"scellino keniota\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirghiso\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambogiano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nordcoreano\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sudcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinaro kuwaitiano\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollaro delle Isole Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazako\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laotiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lira libanese\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia di Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollaro liberiano\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti del Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituano\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituani\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franco convertibile del Lussemburgo\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franco del Lussemburgo\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franco finanziario del Lussemburgo\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats lettone\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rublo lettone\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinaro libico\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocchino\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franco marocchino\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgascio\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franco malgascio\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedone\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franco di Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat di Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongolo\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca di Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya della Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya della Mauritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltese\"
        ],
        \"MTP\": [
            \"MTP\",
            \"sterlina maltese\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriziana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa delle Maldive\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiano\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso messicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso messicano d’argento (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversion (UDI) messicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malese\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo del Mozambico\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollaro namibiano\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguense\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguense\"
        ],
        \"NLG\": [
            \"NLG\",
            \"fiorino olandese\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona norvegese\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalese\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollaro neozelandese\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanita\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamense\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruviano\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruviano\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruviano (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuana\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filippino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistana\"
        ],
        \"PLN\": [
            \"PLN\",
            \"złoty polacco\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"złoty Polacco (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo portoghese\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguayano\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatariano\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollaro della Rhodesia\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu della Romania\"
        ],
        \"RON\": [
            \"RON\",
            \"leu rumeno\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinaro serbo\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo russo\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rublo della CSI\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandese\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollaro delle Isole Salomone\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia delle Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinaro sudanese\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sterlina sudanese\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona svedese\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollaro di Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"sterlina di Sant’Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tallero sloveno\"
        ],
        \"SKK\": [
            \"SKK\",
            \"corona slovacca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone della Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"scellino somalo\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollaro del Suriname\"
        ],
        \"SRG\": [
            \"SRG\",
            \"fiorino del Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sterlina sud-sudanese\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra di Sao Tomé e Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra di Sao Tomé e Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rublo sovietico\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colón salvadoregno\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lira siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni dello Swaziland\"
        ],
        \"THB\": [
            \"฿\",
            \"baht thailandese\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rublo del Tajikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tagiko\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmeno (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinaro tunisino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongano\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo di Timor\"
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
            \"dollaro di Trinidad e Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"nuovo dollaro taiwanese\"
        ],
        \"TZS\": [
            \"TZS\",
            \"scellino della Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"grivnia ucraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbovanetz ucraino\"
        ],
        \"UGS\": [
            \"UGS\",
            \"scellino ugandese (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"scellino ugandese\"
        ],
        \"USD\": [
            \"USD\",
            \"dollaro statunitense\"
        ],
        \"USN\": [
            \"USN\",
            \"dollaro statunitense (next day)\"
        ],
        \"USS\": [
            \"USS\",
            \"dollaro statunitense (same day)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso uruguaiano in unità indicizzate\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso uruguaiano (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayano\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum uzbeco\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar venezuelano (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar venezuelano (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar venezuelano\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu di Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollaro dei Caraibi orientali\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franco oro francese\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franco UIC francese\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"fondi RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinaro dello Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"riyal yemenita\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinaro forte yugoslavo\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinaro noviy yugoslavo\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinaro convertibile yugoslavo\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sudafricano (finanziario)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sudafricano\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha dello Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha dello Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nuovo zaire dello Zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire dello Zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollaro dello Zimbabwe\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dollaro zimbabwiano (2009)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/it.json";
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
            \"peseta andorrana\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham degli Emirati Arabi Uniti\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanese\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armeno\"
        ],
        \"ANG\": [
            \"ANG\",
            \"fiorino delle Antille olandesi\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolano (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"nuovo kwanza angolano (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza reajustado angolano (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentino\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentino (vecchio Cod.)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentino\"
        ],
        \"ATS\": [
            \"ATS\",
            \"scellino austriaco\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollaro australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"fiorino di Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat azero (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azero\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia-Herzegovina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertibile della Bosnia-Herzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollaro di Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladese\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franco belga (convertibile)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franco belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franco belga (finanziario)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev bulgaro (1962–1999)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev bulgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinaro del Bahrein\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco del Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollaro delle Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dollaro del Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso boliviano\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol boliviano\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasiliano (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasiliano\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasiliano (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real brasiliano\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasiliano\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasiliano\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollaro delle Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum bhutanese\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat birmano\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula del Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nuovo rublo bielorusso (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorusso\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rublo bielorusso (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollaro del Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollaro canadese\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolese\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco svizzero\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidades de fomento chilene\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso cileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"CNH\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"renminbi cinese\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón costaricano\"
        ],
        \"CSD\": [
            \"CSD\",
            \"antico dinaro serbo\"
        ],
        \"CSK\": [
            \"CSK\",
            \"corona forte cecoslovacca\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano convertibile\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo capoverdiano\"
        ],
        \"CYP\": [
            \"CYP\",
            \"sterlina cipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"corona ceca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"ostmark della Germania Orientale\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marco tedesco\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco di Gibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"corona danese\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinaro algerino\"
        ],
        \"ECS\": [
            \"ECS\",
            \"sucre dell’Ecuador\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unidad de valor constante (UVC) dell’Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"corona dell’Estonia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"sterlina egiziana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreo\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spagnola account\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spagnola account convertibile\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta spagnola\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"markka finlandese\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollaro delle Figi\"
        ],
        \"FKP\": [
            \"FKP\",
            \"sterlina delle Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franco francese\"
        ],
        \"GBP\": [
            \"£\",
            \"sterlina britannica\"
        ],
        \"GEK\": [
            \"GEK\",
            \"kupon larit georgiano\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiano\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi del Ghana\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanese\"
        ],
        \"GIP\": [
            \"GIP\",
            \"sterlina di Gibilterra\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco della Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli della Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele della Guinea Equatoriale\"
        ],
        \"GRD\": [
            \"GRD\",
            \"dracma greca\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalteco\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escudo della Guinea portoghese\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso della Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollaro della Guyana\"
        ],
        \"HKD\": [
            \"HKD\",
            \"dollaro di Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira honduregna\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinaro croato\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"fiorino ungherese\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonesiana\"
        ],
        \"IEP\": [
            \"IEP\",
            \"sterlina irlandese\"
        ],
        \"ILP\": [
            \"ILP\",
            \"sterlina israeliana\"
        ],
        \"ILS\": [
            \"₪\",
            \"nuovo siclo israeliano\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indiana\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinaro iracheno\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"corona islandese\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira italiana\",
            {}
        ],
        \"JMD\": [
            \"JMD\",
            \"dollaro giamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinaro giordano\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen giapponese\"
        ],
        \"KES\": [
            \"KES\",
            \"scellino keniota\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirghiso\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambogiano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won nordcoreano\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won sudcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinaro kuwaitiano\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollaro delle Isole Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazako\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laotiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lira libanese\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia di Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollaro liberiano\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti del Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituano\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituani\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franco convertibile del Lussemburgo\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franco del Lussemburgo\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franco finanziario del Lussemburgo\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats lettone\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rublo lettone\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinaro libico\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocchino\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franco marocchino\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgascio\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franco malgascio\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar macedone\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franco di Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat di Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongolo\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca di Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya della Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya della Mauritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltese\"
        ],
        \"MTP\": [
            \"MTP\",
            \"sterlina maltese\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriziana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa delle Maldive\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha malawiano\"
        ],
        \"MXN\": [
            \"MXN\",
            \"peso messicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso messicano d’argento (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversion (UDI) messicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malese\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo del Mozambico\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollaro namibiano\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguense\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguense\"
        ],
        \"NLG\": [
            \"NLG\",
            \"fiorino olandese\"
        ],
        \"NOK\": [
            \"NOK\",
            \"corona norvegese\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalese\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollaro neozelandese\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanita\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panamense\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruviano\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruviano\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruviano (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuana\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filippino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistana\"
        ],
        \"PLN\": [
            \"PLN\",
            \"złoty polacco\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"złoty Polacco (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo portoghese\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguayano\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatariano\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollaro della Rhodesia\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu della Romania\"
        ],
        \"RON\": [
            \"RON\",
            \"leu rumeno\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinaro serbo\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo russo\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rublo della CSI\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandese\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollaro delle Isole Salomone\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia delle Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinaro sudanese\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sterlina sudanese\"
        ],
        \"SEK\": [
            \"SEK\",
            \"corona svedese\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollaro di Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"sterlina di Sant’Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tallero sloveno\"
        ],
        \"SKK\": [
            \"SKK\",
            \"corona slovacca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone della Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"scellino somalo\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollaro del Suriname\"
        ],
        \"SRG\": [
            \"SRG\",
            \"fiorino del Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sterlina sud-sudanese\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra di Sao Tomé e Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra di Sao Tomé e Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rublo sovietico\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colón salvadoregno\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lira siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni dello Swaziland\"
        ],
        \"THB\": [
            \"฿\",
            \"baht thailandese\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rublo del Tajikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tagiko\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmeno (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinaro tunisino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongano\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo di Timor\"
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
            \"dollaro di Trinidad e Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"nuovo dollaro taiwanese\"
        ],
        \"TZS\": [
            \"TZS\",
            \"scellino della Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"grivnia ucraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbovanetz ucraino\"
        ],
        \"UGS\": [
            \"UGS\",
            \"scellino ugandese (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"scellino ugandese\"
        ],
        \"USD\": [
            \"USD\",
            \"dollaro statunitense\"
        ],
        \"USN\": [
            \"USN\",
            \"dollaro statunitense (next day)\"
        ],
        \"USS\": [
            \"USS\",
            \"dollaro statunitense (same day)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso uruguaiano in unità indicizzate\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso uruguaiano (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguayano\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum uzbeco\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar venezuelano (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar venezuelano (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar venezuelano\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu di Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollaro dei Caraibi orientali\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franco oro francese\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franco UIC francese\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"fondi RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinaro dello Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"riyal yemenita\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinaro forte yugoslavo\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinaro noviy yugoslavo\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinaro convertibile yugoslavo\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sudafricano (finanziario)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sudafricano\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha dello Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha dello Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nuovo zaire dello Zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire dello Zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollaro dello Zimbabwe\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dollaro zimbabwiano (2009)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/it.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/it.json");
    }
}
