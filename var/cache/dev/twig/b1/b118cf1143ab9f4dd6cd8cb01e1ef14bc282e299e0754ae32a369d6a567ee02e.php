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

/* vendor/symfony/intl/Resources/data/currencies/nn.json */
class __TwigTemplate_e5a4b51abeccb9aa8dda7390a77aed9f90ebe426f84ff72a9fb9b72b4d78b620 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/nn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/nn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"andorranske peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"emiratarabiske dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghanske afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albanske lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenske dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"nederlandske antillegylden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolanske kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolske kwanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolske nye kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolske kwanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentiske austral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinske peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinske pesos\"
        ],
        \"ATS\": [
            \"ATS\",
            \"austerrikske schilling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"australske dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubiske floriner\"
        ],
        \"AZM\": [
            \"AZM\",
            \"aserbaijanske manat\"
        ],
        \"AZN\": [
            \"AZN\",
            \"aserbajdsjanske manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnisk-hercegovinske dinarar\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnisk-hercegovinske konvertible mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadiske dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshiske taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgiske franc (konvertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgiske franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgiske franc (finansiell)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bulgarsk hard lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgarske lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainske dinarar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundiske franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudiske dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneiske dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivianske boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviske peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviske mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brasiliansk cruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brasilianske cruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"brasilianske cruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"brasilianske real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brasilianske cruzado novo\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brasilianske cruzeiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamanske dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanske ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmesisk kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswanske pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"kviterussiske nye rublar (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"kviterussiske rublar\"
        ],
        \"BYR\": [
            \"BYR\",
            \"kviterussiske rublar (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"beliziske dollar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"kanadiske dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongolesiske franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR euro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"sveitsiske franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franc\"
        ],
        \"CLF\": [
            \"CLF\",
            \"chilenske unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilenske pesos\"
        ],
        \"CNY\": [
            \"CNY\",
            \"kinesiske yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"kolombianske pesos\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"kostarikanske colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"gamle serbiske dinarer\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tsjekkoslovakiske koruna (hard)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubanske konvertible pesos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanske pesos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kappverdiske escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"kypriotiske pund\"
        ],
        \"CZK\": [
            \"CZK\",
            \"tsjekkiske koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"austtyske mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"tyske mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"djiboutiske franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"danske kroner\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominikanske pesos\"
        ],
        \"DZD\": [
            \"DZD\",
            \"algeriske dinarar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ecuadorianske sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ecuadorianske unidad de valor constante (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estiske kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egyptiske pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreiske nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spanske peseta (A–konto)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spanske peseta (konvertibel konto)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spanske peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopiske birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finske mark\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fijianske dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falklandspund\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franske franc\"
        ],
        \"GBP\": [
            \"GBP\",
            \"britiske pund\"
        ],
        \"GEK\": [
            \"GEK\",
            \"georgiske kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"georgiske lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghanesiske cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ghanesiske cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltarske pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambiske dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"guineanske franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"guineanske syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekvatorialguineanske ekwele guineana\"
        ],
        \"GRD\": [
            \"GRD\",
            \"greske drakme\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalanske quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"portugisiske guinea escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Guinea-Bissau-peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"guyanske dollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hongkong-dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduranske lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatiske dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kroatiske kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitiske gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ungarske forintar\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonesiske rupiar\"
        ],
        \"IEP\": [
            \"IEP\",
            \"irske pund\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israelske pund\"
        ],
        \"ILS\": [
            \"ILS\",
            \"israelske nye sheklar\"
        ],
        \"INR\": [
            \"INR\",
            \"indiske rupiar\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakiske dinarar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranske rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"islandske kroner\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italienske lire\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamaikanske dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordanske dinarar\"
        ],
        \"JPY\": [
            \"JPY\",
            \"japanske yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyanske shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgisiske som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodsjanske riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komoriske franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"nordkoreanske won\"
        ],
        \"KRW\": [
            \"KRW\",
            \"sørkoreanske won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitiske dinarar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"caymanske dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kasakhstanske tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laotiske kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanesiske pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"srilankiske rupiar\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiske dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesothiske loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litauiske lita\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litauiske talona\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luxemburgske konvertibel franc\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luxemburgske franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luxemburgske finansielle franc\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latviske lat\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latviske rublar\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libyske dinarar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marokkanske dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"marokkanske franc\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldovske leuar\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagassiske ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"madagassiske franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonske denarar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"maliske franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmarske kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolske tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makaoiske pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mauritanske ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mauritanske ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltesiske lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltesiske pund\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mauritanske rupiar\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldiviske rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawiske kwacha\"
        ],
        \"MXN\": [
            \"MXN\",
            \"meksikanske pesos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"meksikanske sølvpeso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"meksikanske unidad de inversion (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysiske ringgit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"mosambikiske escudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"gamle mosambikiske metical\"
        ],
        \"MZN\": [
            \"MZN\",
            \"mosambikiske metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibiske dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigerianske naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nicaraguanske cordoba\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguanske córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nederlandske gylden\"
        ],
        \"NOK\": [
            \"kr\",
            \"norske kroner\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalske rupiar\"
        ],
        \"NZD\": [
            \"NZD\",
            \"nyzealandske dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanske rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamanske balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruanske inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruanske sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruanske sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papuanske kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filippinske pesos\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistanske rupiar\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polske zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polske zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugisiske escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayanske guaraní\"
        ],
        \"QAR\": [
            \"QAR\",
            \"qatarske rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesiske dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"gamle rumenske leu\"
        ],
        \"RON\": [
            \"RON\",
            \"rumenske leuar\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbiske dinarar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"russiske rublar\"
        ],
        \"RUR\": [
            \"RUR\",
            \"russiske rublar (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandiske franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudiarabiske rial\"
        ],
        \"SBD\": [
            \"SBD\",
            \"salomonske dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"seychelliske rupiar\"
        ],
        \"SDD\": [
            \"SDD\",
            \"gamle sudanske dinarer\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanske pund\"
        ],
        \"SDP\": [
            \"SDP\",
            \"gamle sudanske pund\"
        ],
        \"SEK\": [
            \"SEK\",
            \"svenske kroner\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singaporske dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"sankthelenske pund\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovenske tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakiske koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierraleonske leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somaliske shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamske dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamske gylden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sørsudanske pund\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomesiske dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomesiske dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetiske rublar\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadoranske colon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriske pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swazilandske lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"thailandske baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadsjikiske rublar\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadsjikiske somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmensk manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenske manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisiske dinarar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tonganske paʻanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timoresiske escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"gamle tyrkiske lire\"
        ],
        \"TRY\": [
            \"TRY\",
            \"tyrkiske lire\"
        ],
        \"TTD\": [
            \"TTD\",
            \"trinidadiske dollar\"
        ],
        \"TWD\": [
            \"TWD\",
            \"nye taiwanske dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanianske shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainske hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainske karbovanetz\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandiske shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandiske shilling\"
        ],
        \"USD\": [
            \"USD\",
            \"amerikanske dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"amerikanske dollar (neste dag)\"
        ],
        \"USS\": [
            \"USS\",
            \"amerikanske dollar (same dag)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayanske peso en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayanske peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayanske pesos\"
        ],
        \"UZS\": [
            \"UZS\",
            \"usbekiske sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelanske bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelanske bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelanske bolivar\"
        ],
        \"VND\": [
            \"VND\",
            \"vietnamesiske dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatuiske vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samoanske tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"sentralafrikanske CFA-franc\"
        ],
        \"XCD\": [
            \"XCD\",
            \"austkaribiske dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europeiske valutaeiningar\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franske gullfranc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franske UIC-franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"vestafrikanske CFA-franc\"
        ],
        \"XPF\": [
            \"XPF\",
            \"CFP-franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET-fond\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenittiske dinarar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenittiske rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"jugoslaviske dinarar (hard)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"jugoslaviske noviy-dinarar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslaviske konvertibel dinarar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"sørafrikanske rand (finansiell)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sørafrikanske rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambiske kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambiske kwacha\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairisk ny zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairisk zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabwisk dollar\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/nn.json";
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
            \"andorranske peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"emiratarabiske dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghanske afghani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albanske lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenske dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"nederlandske antillegylden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolanske kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolske kwanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolske nye kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolske kwanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentiske austral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinske peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinske pesos\"
        ],
        \"ATS\": [
            \"ATS\",
            \"austerrikske schilling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"australske dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubiske floriner\"
        ],
        \"AZM\": [
            \"AZM\",
            \"aserbaijanske manat\"
        ],
        \"AZN\": [
            \"AZN\",
            \"aserbajdsjanske manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnisk-hercegovinske dinarar\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnisk-hercegovinske konvertible mark\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadiske dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshiske taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgiske franc (konvertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgiske franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgiske franc (finansiell)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bulgarsk hard lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgarske lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainske dinarar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundiske franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudiske dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneiske dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivianske boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviske peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviske mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brasiliansk cruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brasilianske cruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"brasilianske cruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"brasilianske real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brasilianske cruzado novo\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brasilianske cruzeiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamanske dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanske ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmesisk kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswanske pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"kviterussiske nye rublar (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"kviterussiske rublar\"
        ],
        \"BYR\": [
            \"BYR\",
            \"kviterussiske rublar (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"beliziske dollar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"kanadiske dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongolesiske franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR euro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"sveitsiske franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franc\"
        ],
        \"CLF\": [
            \"CLF\",
            \"chilenske unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilenske pesos\"
        ],
        \"CNY\": [
            \"CNY\",
            \"kinesiske yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"kolombianske pesos\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"kostarikanske colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"gamle serbiske dinarer\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tsjekkoslovakiske koruna (hard)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubanske konvertible pesos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanske pesos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kappverdiske escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"kypriotiske pund\"
        ],
        \"CZK\": [
            \"CZK\",
            \"tsjekkiske koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"austtyske mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"tyske mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"djiboutiske franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"danske kroner\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominikanske pesos\"
        ],
        \"DZD\": [
            \"DZD\",
            \"algeriske dinarar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ecuadorianske sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ecuadorianske unidad de valor constante (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estiske kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egyptiske pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreiske nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spanske peseta (A–konto)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spanske peseta (konvertibel konto)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spanske peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopiske birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finske mark\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fijianske dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falklandspund\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franske franc\"
        ],
        \"GBP\": [
            \"GBP\",
            \"britiske pund\"
        ],
        \"GEK\": [
            \"GEK\",
            \"georgiske kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"georgiske lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghanesiske cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ghanesiske cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltarske pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambiske dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"guineanske franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"guineanske syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekvatorialguineanske ekwele guineana\"
        ],
        \"GRD\": [
            \"GRD\",
            \"greske drakme\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalanske quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"portugisiske guinea escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Guinea-Bissau-peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"guyanske dollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hongkong-dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduranske lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatiske dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kroatiske kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitiske gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ungarske forintar\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonesiske rupiar\"
        ],
        \"IEP\": [
            \"IEP\",
            \"irske pund\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israelske pund\"
        ],
        \"ILS\": [
            \"ILS\",
            \"israelske nye sheklar\"
        ],
        \"INR\": [
            \"INR\",
            \"indiske rupiar\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakiske dinarar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranske rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"islandske kroner\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italienske lire\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamaikanske dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordanske dinarar\"
        ],
        \"JPY\": [
            \"JPY\",
            \"japanske yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyanske shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgisiske som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodsjanske riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komoriske franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"nordkoreanske won\"
        ],
        \"KRW\": [
            \"KRW\",
            \"sørkoreanske won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitiske dinarar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"caymanske dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kasakhstanske tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laotiske kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanesiske pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"srilankiske rupiar\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiske dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesothiske loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litauiske lita\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litauiske talona\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luxemburgske konvertibel franc\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luxemburgske franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luxemburgske finansielle franc\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latviske lat\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latviske rublar\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libyske dinarar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marokkanske dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"marokkanske franc\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldovske leuar\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagassiske ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"madagassiske franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonske denarar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"maliske franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmarske kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolske tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makaoiske pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mauritanske ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mauritanske ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltesiske lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltesiske pund\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mauritanske rupiar\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldiviske rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawiske kwacha\"
        ],
        \"MXN\": [
            \"MXN\",
            \"meksikanske pesos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"meksikanske sølvpeso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"meksikanske unidad de inversion (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysiske ringgit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"mosambikiske escudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"gamle mosambikiske metical\"
        ],
        \"MZN\": [
            \"MZN\",
            \"mosambikiske metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibiske dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigerianske naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nicaraguanske cordoba\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguanske córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nederlandske gylden\"
        ],
        \"NOK\": [
            \"kr\",
            \"norske kroner\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalske rupiar\"
        ],
        \"NZD\": [
            \"NZD\",
            \"nyzealandske dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanske rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamanske balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruanske inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruanske sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruanske sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papuanske kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filippinske pesos\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistanske rupiar\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polske zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polske zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugisiske escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayanske guaraní\"
        ],
        \"QAR\": [
            \"QAR\",
            \"qatarske rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesiske dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"gamle rumenske leu\"
        ],
        \"RON\": [
            \"RON\",
            \"rumenske leuar\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbiske dinarar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"russiske rublar\"
        ],
        \"RUR\": [
            \"RUR\",
            \"russiske rublar (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandiske franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudiarabiske rial\"
        ],
        \"SBD\": [
            \"SBD\",
            \"salomonske dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"seychelliske rupiar\"
        ],
        \"SDD\": [
            \"SDD\",
            \"gamle sudanske dinarer\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanske pund\"
        ],
        \"SDP\": [
            \"SDP\",
            \"gamle sudanske pund\"
        ],
        \"SEK\": [
            \"SEK\",
            \"svenske kroner\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singaporske dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"sankthelenske pund\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovenske tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakiske koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierraleonske leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somaliske shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamske dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamske gylden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sørsudanske pund\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomesiske dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomesiske dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetiske rublar\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadoranske colon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriske pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swazilandske lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"thailandske baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadsjikiske rublar\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadsjikiske somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmensk manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenske manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisiske dinarar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tonganske paʻanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timoresiske escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"gamle tyrkiske lire\"
        ],
        \"TRY\": [
            \"TRY\",
            \"tyrkiske lire\"
        ],
        \"TTD\": [
            \"TTD\",
            \"trinidadiske dollar\"
        ],
        \"TWD\": [
            \"TWD\",
            \"nye taiwanske dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanianske shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainske hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainske karbovanetz\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandiske shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandiske shilling\"
        ],
        \"USD\": [
            \"USD\",
            \"amerikanske dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"amerikanske dollar (neste dag)\"
        ],
        \"USS\": [
            \"USS\",
            \"amerikanske dollar (same dag)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayanske peso en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayanske peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayanske pesos\"
        ],
        \"UZS\": [
            \"UZS\",
            \"usbekiske sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelanske bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelanske bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelanske bolivar\"
        ],
        \"VND\": [
            \"VND\",
            \"vietnamesiske dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatuiske vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samoanske tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"sentralafrikanske CFA-franc\"
        ],
        \"XCD\": [
            \"XCD\",
            \"austkaribiske dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europeiske valutaeiningar\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franske gullfranc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franske UIC-franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"vestafrikanske CFA-franc\"
        ],
        \"XPF\": [
            \"XPF\",
            \"CFP-franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET-fond\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenittiske dinarar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenittiske rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"jugoslaviske dinarar (hard)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"jugoslaviske noviy-dinarar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslaviske konvertibel dinarar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"sørafrikanske rand (finansiell)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sørafrikanske rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambiske kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambiske kwacha\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairisk ny zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairisk zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabwisk dollar\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/nn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/nn.json");
    }
}
