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

/* vendor/symfony/intl/Resources/data/currencies/sv.json */
class __TwigTemplate_238e3d5d154a1397e627f7be94bd7994c52acc18235d8f6f2c3b00f3d04d196f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sv.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sv.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"andorransk peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"Förenade Arabemiratens dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghansk afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"albansk lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albansk lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenisk dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Nederländska Antillernas gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolansk kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolansk kwanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolansk ny kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolansk kwanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinsk austral\"
        ],
        \"ARL\": [
            \"ARL\",
            \"argentisk peso (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"argentisk peso (1881–1969)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinsk peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinsk peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"österrikisk schilling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"australisk dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubansk florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"azerbajdzjansk manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbajdzjansk manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnisk-hercegovinsk dinar (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnisk-hercegovinsk mark (konvertibel)\"
        ],
        \"BAN\": [
            \"BAN\",
            \"bosnisk-hercegovinsk dinar (1994–1998)\"
        ],
        \"BBD\": [
            \"Bds\$\",
            \"Barbados-dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshisk taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgisk franc (konvertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgisk franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgisk franc (finansiell)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bulgarisk hård lev (1962–1999)\"
        ],
        \"BGM\": [
            \"BGM\",
            \"bulgarisk lev (1952–1962)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgarisk lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"bulgarisk lev (1881–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainsk dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundisk franc\"
        ],
        \"BMD\": [
            \"BM\$\",
            \"Bermuda-dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneisk dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviansk boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviansk boliviano (1864–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviansk peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviansk mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brasiliansk cruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brasiliansk cruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"brasiliansk cruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BR\$\",
            \"brasiliansk real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brasiliansk cruzado novo\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brasiliansk cruzeiro\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"brasiliansk cruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BS\$\",
            \"bahamansk dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanesisk ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmesisk kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswansk pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"vitrysk ny rubel (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"vitrysk rubel\"
        ],
        \"BYR\": [
            \"BYR\",
            \"vitrysk rubel (2000–2016)\"
        ],
        \"BZD\": [
            \"BZ\$\",
            \"belizisk dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"kanadensisk dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongolesisk franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro (konvertibelt konto, WIR Bank, Schweiz)\"
        ],
        \"CHF\": [
            \"CHF\",
            \"schweizisk franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc (konvertibelt konto, WIR Bank, Schweiz)\"
        ],
        \"CLE\": [
            \"CLE\",
            \"chilensk escudo (1960–1975)\"
        ],
        \"CLF\": [
            \"CLF\",
            \"chilensk unidad de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilensk peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kinesisk yuan (offshore)\"
        ],
        \"CNX\": [
            \"CNX\",
            \"kinesisk dollar\"
        ],
        \"CNY\": [
            \"CNY\",
            \"kinesisk yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"colombiansk peso\"
        ],
        \"COU\": [
            \"COU\",
            \"colombiansk unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"costarikansk colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"serbisk dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tjeckoslovakisk krona (–1993)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubansk peso (konvertibel)\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubansk peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kapverdisk escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"cypriotiskt pund\"
        ],
        \"CZK\": [
            \"CZK\",
            \"tjeckisk koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"östtysk mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"tysk mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"djiboutisk franc\"
        ],
        \"DKK\": [
            \"Dkr\",
            \"dansk krona\"
        ],
        \"DOP\": [
            \"RD\$\",
            \"dominikansk peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"algerisk dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ecuadoriansk sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ecuadoriansk unidad de valor constante\"
        ],
        \"EEK\": [
            \"Ekr\",
            \"estnisk krona\"
        ],
        \"EGP\": [
            \"EG£\",
            \"egyptiskt pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreansk nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spansk peseta (konto)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spansk peseta (konvertibelt konto)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spansk peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopisk birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finsk mark\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fijidollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklandspund\"
        ],
        \"FRF\": [
            \"FRF\",
            \"fransk franc\"
        ],
        \"GBP\": [
            \"GBP\",
            \"brittiskt pund\"
        ],
        \"GEK\": [
            \"GEK\",
            \"georgisk kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"georgisk lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghanansk cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ghanansk cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltiskt pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambisk dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"guineansk franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"guineansk syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekvatorialguineansk ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grekisk drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalansk quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugisiska Guinea-escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Guinea-Bissau-peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Guyanadollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hongkongdollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduransk lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatisk dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kroatisk kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitisk gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ungersk forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonesisk rupie\"
        ],
        \"IEP\": [
            \"IE£\",
            \"irländskt pund\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israeliskt pund\"
        ],
        \"ILR\": [
            \"ILR\",
            \"israelisk shekel (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"israelisk ny shekel\"
        ],
        \"INR\": [
            \"INR\",
            \"indisk rupie\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakisk dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iransk rial\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"isländsk gammal krona\"
        ],
        \"ISK\": [
            \"Ikr\",
            \"isländsk krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italiensk lire\"
        ],
        \"JMD\": [
            \"JM\$\",
            \"Jamaica-dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordansk dinar\"
        ],
        \"JPY\": [
            \"JPY\",
            \"japansk yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyansk shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgizisk som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodjansk riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komorisk franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"nordkoreansk won\"
        ],
        \"KRH\": [
            \"KRH\",
            \"sydkoreansk hwan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"sydkoreansk won (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"sydkoreansk won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitisk dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Cayman-dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazakisk tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laotisk kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanesiskt pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"srilankesisk rupie\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiansk dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesothisk loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litauisk litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litauisk talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luxemburgsk franc (konvertibel)\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luxemburgsk franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luxemburgsk franc (finansiell)\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lettisk lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"lettisk rubel\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libysk dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marockansk dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"marockansk franc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"monegaskisk franc (–2001)\"
        ],
        \"MDC\": [
            \"MDC\",
            \"moldavisk cupon (1992–1993)\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldavisk leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagaskisk ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"madagaskisk franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonisk denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"makedonisk denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"malisk franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmarisk kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolisk tögrög\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makanesisk pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mauretansk ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mauretansk ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltesisk lire\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltesiskt pund\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mauritisk rupie\"
        ],
        \"MVP\": [
            \"MVP\",
            \"maldivisk rupie\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldivisk rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawisk kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"mexikansk peso\"
        ],
        \"MXP\": [
            \"MXP\",
            \"mexikansk silverpeso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"mexikansk unidad de inversion\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysisk ringgit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"moçambikisk escudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"gammal moçambikisk metical\"
        ],
        \"MZN\": [
            \"MZN\",
            \"moçambikisk metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibisk dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigeriansk naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nicaraguansk córdoba (1998–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguansk córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nederländsk gulden\"
        ],
        \"NOK\": [
            \"Nkr\",
            \"norsk krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalesisk rupie\"
        ],
        \"NZD\": [
            \"NZD\",
            \"nyzeeländsk dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omansk rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamansk balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruansk inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruansk sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruansk sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papuansk kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filippinsk peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistansk rupie\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polsk zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polsk zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugisisk escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayansk guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"qatarisk rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesisk dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"rumänsk leu (1952–2005)\"
        ],
        \"RON\": [
            \"RON\",
            \"rumänsk leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbisk dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rysk rubel\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rysk rubel (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandisk franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudisk riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomondollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"seychellisk rupie\"
        ],
        \"SDD\": [
            \"SDD\",
            \"sudansk dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanesiskt pund\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudanskt pund (1916–1992)\"
        ],
        \"SEK\": [
            \"kr\",
            \"svensk krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singaporiansk dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"S:t Helena-pund\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovensk tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakisk koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierraleonsk leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somalisk shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamesisk dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamesisk gulden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sydsudanesiskt pund\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomeansk dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomeansk dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetisk rubel\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadoransk colón\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriskt pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swaziländsk lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"thailändsk baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadzjikisk rubel\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadzjikisk somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenistansk manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistansk manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisisk dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tongansk paʻanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"östtimoresisk escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"turkisk lire (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"turkisk lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad och Tobago-dollar\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Taiwandollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanisk shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainsk hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainsk karbovanetz\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandisk shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandisk shilling\"
        ],
        \"USD\": [
            \"US\$\",
            \"US-dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"US-dollar (nästa dag)\"
        ],
        \"USS\": [
            \"USS\",
            \"US-dollar (samma dag)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayansk peso en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayansk peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayansk peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbekisk sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelansk bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelansk bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelansk bolívar\"
        ],
        \"VND\": [
            \"VND\",
            \"vietnamesisk dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vietnamesisk dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatisk vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"västsamoansk tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"centralafrikansk franc\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"östkaribisk dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europeisk valutaenhet\"
        ],
        \"XFO\": [
            \"XFO\",
            \"fransk guldfranc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"internationella järnvägsunionens franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"västafrikansk franc\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP-franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET-fond\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenitisk dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenitisk rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"jugoslavisk dinar (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"jugoslavisk dinar (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslavisk dinar (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"jugoslavisk dinar (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"sydafrikansk rand (finansiell)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sydafrikansk rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambisk kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambisk kwacha\"
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
            \"Zimbabwe-dollar\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabwe-dollar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabwe-dollar (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sv.json";
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
            \"andorransk peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"Förenade Arabemiratens dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghansk afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"albansk lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albansk lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenisk dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Nederländska Antillernas gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolansk kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolansk kwanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolansk ny kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolansk kwanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinsk austral\"
        ],
        \"ARL\": [
            \"ARL\",
            \"argentisk peso (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"argentisk peso (1881–1969)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinsk peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinsk peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"österrikisk schilling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"australisk dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubansk florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"azerbajdzjansk manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbajdzjansk manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnisk-hercegovinsk dinar (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnisk-hercegovinsk mark (konvertibel)\"
        ],
        \"BAN\": [
            \"BAN\",
            \"bosnisk-hercegovinsk dinar (1994–1998)\"
        ],
        \"BBD\": [
            \"Bds\$\",
            \"Barbados-dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshisk taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgisk franc (konvertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgisk franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgisk franc (finansiell)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bulgarisk hård lev (1962–1999)\"
        ],
        \"BGM\": [
            \"BGM\",
            \"bulgarisk lev (1952–1962)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgarisk lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"bulgarisk lev (1881–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainsk dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundisk franc\"
        ],
        \"BMD\": [
            \"BM\$\",
            \"Bermuda-dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneisk dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviansk boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviansk boliviano (1864–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviansk peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviansk mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brasiliansk cruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brasiliansk cruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"brasiliansk cruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BR\$\",
            \"brasiliansk real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brasiliansk cruzado novo\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brasiliansk cruzeiro\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"brasiliansk cruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BS\$\",
            \"bahamansk dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanesisk ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmesisk kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswansk pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"vitrysk ny rubel (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"vitrysk rubel\"
        ],
        \"BYR\": [
            \"BYR\",
            \"vitrysk rubel (2000–2016)\"
        ],
        \"BZD\": [
            \"BZ\$\",
            \"belizisk dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"kanadensisk dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongolesisk franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro (konvertibelt konto, WIR Bank, Schweiz)\"
        ],
        \"CHF\": [
            \"CHF\",
            \"schweizisk franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc (konvertibelt konto, WIR Bank, Schweiz)\"
        ],
        \"CLE\": [
            \"CLE\",
            \"chilensk escudo (1960–1975)\"
        ],
        \"CLF\": [
            \"CLF\",
            \"chilensk unidad de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilensk peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kinesisk yuan (offshore)\"
        ],
        \"CNX\": [
            \"CNX\",
            \"kinesisk dollar\"
        ],
        \"CNY\": [
            \"CNY\",
            \"kinesisk yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"colombiansk peso\"
        ],
        \"COU\": [
            \"COU\",
            \"colombiansk unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"costarikansk colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"serbisk dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tjeckoslovakisk krona (–1993)\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubansk peso (konvertibel)\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubansk peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kapverdisk escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"cypriotiskt pund\"
        ],
        \"CZK\": [
            \"CZK\",
            \"tjeckisk koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"östtysk mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"tysk mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"djiboutisk franc\"
        ],
        \"DKK\": [
            \"Dkr\",
            \"dansk krona\"
        ],
        \"DOP\": [
            \"RD\$\",
            \"dominikansk peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"algerisk dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ecuadoriansk sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ecuadoriansk unidad de valor constante\"
        ],
        \"EEK\": [
            \"Ekr\",
            \"estnisk krona\"
        ],
        \"EGP\": [
            \"EG£\",
            \"egyptiskt pund\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreansk nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spansk peseta (konto)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spansk peseta (konvertibelt konto)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spansk peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopisk birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finsk mark\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fijidollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklandspund\"
        ],
        \"FRF\": [
            \"FRF\",
            \"fransk franc\"
        ],
        \"GBP\": [
            \"GBP\",
            \"brittiskt pund\"
        ],
        \"GEK\": [
            \"GEK\",
            \"georgisk kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"georgisk lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghanansk cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ghanansk cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltiskt pund\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambisk dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"guineansk franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"guineansk syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekvatorialguineansk ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grekisk drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalansk quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugisiska Guinea-escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Guinea-Bissau-peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Guyanadollar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Hongkongdollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduransk lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatisk dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kroatisk kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitisk gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"ungersk forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonesisk rupie\"
        ],
        \"IEP\": [
            \"IE£\",
            \"irländskt pund\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israeliskt pund\"
        ],
        \"ILR\": [
            \"ILR\",
            \"israelisk shekel (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"israelisk ny shekel\"
        ],
        \"INR\": [
            \"INR\",
            \"indisk rupie\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakisk dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iransk rial\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"isländsk gammal krona\"
        ],
        \"ISK\": [
            \"Ikr\",
            \"isländsk krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italiensk lire\"
        ],
        \"JMD\": [
            \"JM\$\",
            \"Jamaica-dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordansk dinar\"
        ],
        \"JPY\": [
            \"JPY\",
            \"japansk yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyansk shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgizisk som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodjansk riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komorisk franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"nordkoreansk won\"
        ],
        \"KRH\": [
            \"KRH\",
            \"sydkoreansk hwan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"sydkoreansk won (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"sydkoreansk won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitisk dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Cayman-dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazakisk tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laotisk kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanesiskt pund\"
        ],
        \"LKR\": [
            \"LKR\",
            \"srilankesisk rupie\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiansk dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesothisk loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litauisk litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litauisk talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luxemburgsk franc (konvertibel)\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luxemburgsk franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luxemburgsk franc (finansiell)\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lettisk lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"lettisk rubel\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libysk dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"marockansk dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"marockansk franc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"monegaskisk franc (–2001)\"
        ],
        \"MDC\": [
            \"MDC\",
            \"moldavisk cupon (1992–1993)\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldavisk leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"madagaskisk ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"madagaskisk franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonisk denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"makedonisk denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"malisk franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmarisk kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolisk tögrög\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makanesisk pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mauretansk ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mauretansk ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltesisk lire\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltesiskt pund\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mauritisk rupie\"
        ],
        \"MVP\": [
            \"MVP\",
            \"maldivisk rupie\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldivisk rufiyaa\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malawisk kwacha\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"mexikansk peso\"
        ],
        \"MXP\": [
            \"MXP\",
            \"mexikansk silverpeso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"mexikansk unidad de inversion\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysisk ringgit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"moçambikisk escudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"gammal moçambikisk metical\"
        ],
        \"MZN\": [
            \"MZN\",
            \"moçambikisk metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibisk dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigeriansk naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nicaraguansk córdoba (1998–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguansk córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nederländsk gulden\"
        ],
        \"NOK\": [
            \"Nkr\",
            \"norsk krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalesisk rupie\"
        ],
        \"NZD\": [
            \"NZD\",
            \"nyzeeländsk dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omansk rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamansk balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruansk inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruansk sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruansk sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papuansk kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filippinsk peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistansk rupie\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polsk zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polsk zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugisisk escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayansk guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"qatarisk rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesisk dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"rumänsk leu (1952–2005)\"
        ],
        \"RON\": [
            \"RON\",
            \"rumänsk leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbisk dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rysk rubel\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rysk rubel (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandisk franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudisk riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomondollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"seychellisk rupie\"
        ],
        \"SDD\": [
            \"SDD\",
            \"sudansk dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanesiskt pund\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudanskt pund (1916–1992)\"
        ],
        \"SEK\": [
            \"kr\",
            \"svensk krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singaporiansk dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"S:t Helena-pund\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovensk tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakisk koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierraleonsk leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somalisk shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamesisk dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamesisk gulden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"sydsudanesiskt pund\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomeansk dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomeansk dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetisk rubel\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadoransk colón\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriskt pund\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swaziländsk lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"thailändsk baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadzjikisk rubel\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadzjikisk somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenistansk manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistansk manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisisk dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tongansk paʻanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"östtimoresisk escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"turkisk lire (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"turkisk lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad och Tobago-dollar\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Taiwandollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanisk shilling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainsk hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainsk karbovanetz\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandisk shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandisk shilling\"
        ],
        \"USD\": [
            \"US\$\",
            \"US-dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"US-dollar (nästa dag)\"
        ],
        \"USS\": [
            \"USS\",
            \"US-dollar (samma dag)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayansk peso en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayansk peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayansk peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbekisk sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelansk bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelansk bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelansk bolívar\"
        ],
        \"VND\": [
            \"VND\",
            \"vietnamesisk dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vietnamesisk dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatisk vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"västsamoansk tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"centralafrikansk franc\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"östkaribisk dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europeisk valutaenhet\"
        ],
        \"XFO\": [
            \"XFO\",
            \"fransk guldfranc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"internationella järnvägsunionens franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"västafrikansk franc\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP-franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET-fond\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenitisk dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenitisk rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"jugoslavisk dinar (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"jugoslavisk dinar (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslavisk dinar (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"jugoslavisk dinar (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"sydafrikansk rand (finansiell)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"sydafrikansk rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambisk kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambisk kwacha\"
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
            \"Zimbabwe-dollar\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabwe-dollar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabwe-dollar (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sv.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sv.json");
    }
}
