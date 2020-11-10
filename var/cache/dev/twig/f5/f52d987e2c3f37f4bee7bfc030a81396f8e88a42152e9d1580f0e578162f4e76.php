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

/* vendor/symfony/intl/Resources/data/currencies/ee.json */
class __TwigTemplate_c4c611218e5939a6624d89ea98dfc4fd87a062039c044412c7c5aea7b84cdcfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ee.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/ee.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"andorraga peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"united arab emiratesga dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghanistanga afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghanistanga afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"albaniaga lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albaniaga lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armeniaga dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"netherlands antilleaga guilder\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolaga kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolaga kwanza (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolaga kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolaga kwanza xoxotɔ (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinaga austral\"
        ],
        \"ARL\": [
            \"ARL\",
            \"argentinaga peso ley (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"argentinaga peso (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinaga peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinaga peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"ɔstriaga schilling\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"Australiaga dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubaga lorin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"azerbaidzanga manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbaidzanga manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnia-herzegovinaga dinar (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnia-herzegovinaga convertible mark\"
        ],
        \"BAN\": [
            \"BAN\",
            \"bosnia kple herzegovinaga dinar yeyètɔ (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadosga dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshga taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"beldziumga franc (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"beldziumga franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"beldziumga franc (financial)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bɔlgariaga hard lev\"
        ],
        \"BGM\": [
            \"BGM\",
            \"bɔlgariaga socialist lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgariaga lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"bulgariaga lev (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainga dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundiga franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudaga dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneiga dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviaga boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviaga boliviano (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviaga peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviaga mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"braziliaga cruzeiro xoxotɔ (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brazilia cruzado (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"braziliaga cruzeiro xoxotɔ gbãtɔ (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"braziliaga real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brazilia cruzado xoxotɔ (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"braziliaga cruzeiro (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"braziliaga cruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamasga dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanga ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmaga kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswanaga pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"belarusiaga ruble yeytɔ (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"belarusiaga ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"belarusiaga ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"belizega dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"canadaga dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongoga franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR euro CHE\"
        ],
        \"CHF\": [
            \"CHF\",
            \"switzerlandga franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR euro CHW\"
        ],
        \"CLE\": [
            \"CLE\",
            \"tsilega escudo\"
        ],
        \"CLF\": [
            \"CLF\",
            \"tsilegakɔnta dzidzenu UF\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilega peso\"
        ],
        \"CNX\": [
            \"CNX\",
            \"tsainatɔwo ƒe gadzraɖoƒe dollar\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinesega yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"colombiaga peso\"
        ],
        \"COU\": [
            \"COU\",
            \"kolombiaga vavãtɔ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"costa ricaga colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"serbiaga dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tsɛkoslovakiaga hard koruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"cubaga convertible peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"cubaga peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kape verdega escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"saipriɔtga pound\"
        ],
        \"CZK\": [
            \"CZK\",
            \"czechga koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"ɣedzeƒe germaniaga mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"germaniaga mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"dziboutiga franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"denmarkga krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominicaga peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"aldzeriaga dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ekuadɔga sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ekuadɔ dzidzenu matrɔmatrɔ\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estoniaga kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egyptega pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreaga nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spaniaga peseta (A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spaniaga peseta (Convertible)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spaniaga peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ethiopiaga birr\"
        ],
        \"EUR\": [
            \"€\",
            \"EUR\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finlandga markka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fidziga dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falkland islands pound\"
        ],
        \"FRF\": [
            \"FRF\",
            \"frentsiga franc\"
        ],
        \"GBP\": [
            \"£\",
            \"britainga pound\"
        ],
        \"GEK\": [
            \"GEK\",
            \"dzɔdziaga kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"dzɔdziaga lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghana siɖi (1979–2007)\"
        ],
        \"GHS\": [
            \"GH₵\",
            \"ghana siɖi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gilbratarga pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambiaga dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"giniga franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"giniga syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekuatorial giniga ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grisiga drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalaga quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"pɔtugaltɔwo ƒe giniga escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"gini-bisau peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"guyanaga dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hong Kongga dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduraga lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatiaga dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"croatiaga kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitiga gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"hungariaga forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesiaga rupiah\"
        ],
        \"IEP\": [
            \"IEP\",
            \"ireland pound\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israelga pound\"
        ],
        \"ILR\": [
            \"ILR\",
            \"israelga sheqel (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"israelga yeyetɔ sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indiaga rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakga dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranga rial\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"aiselandga króna (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"icelandga króna\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italiaga lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamaicaga dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"yɔdanga dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japanesega yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyaga shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgistanga som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodiaga riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komoroga franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"dziehe koreaga won\"
        ],
        \"KRH\": [
            \"KRH\",
            \"anyiehe koreaga hwan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"anyiehe koreaga won (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"South Koreaga won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitga dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"cayman islandsga dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazakhstanga tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laosga kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lebanonga pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"sri lankaga rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiaga dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesotoga loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"lithuaniaga litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"lithuaniaga talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"lazembɔgga convertible franc\"
        ],
        \"LUF\": [
            \"LUF\",
            \"lazembɔgga franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"lazembɔgga gadzikpɔ franc\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latviaga lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latviaga ruble\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libyaga dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"morokoga dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"morokoga franc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"monegaskga franc\"
        ],
        \"MDC\": [
            \"MDC\",
            \"moldovaga cupon\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldovaga leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"malagasega ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"malagasega franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"marcedoniaga denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"makedoniaga denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"maliga franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmaga kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongoliaga tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makanesega pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mɔritaniaga ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mɔritaniaga ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltaga lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltaga pound\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mɔritiusga rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldiviaga rufiyaa\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"mexicoga peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysiaga ringit\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naidzeriaga naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nikaraguaga córdoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguaga córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"hollandga guilder\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norwayga krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalga rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"new zealanɖga dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanga rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamaga balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruga inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruga sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruga sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papua new guineaga kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filipiniga peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistaniga rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polandga zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polanɖga zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"pɔtugalga escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayga guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"katarga rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesiaga dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"romaniaga leu (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"romaniaga leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbiaga dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"russiaga ruble\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rɔtsiaga ruble (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandaga franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Arabiaga riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"solomon ƒudomekpo dukɔwo ƒe ga dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sɛtselsga rupee\"
        ],
        \"SDD\": [
            \"SDD\",
            \"sudanga dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanga pound\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudanga pound (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"swedenga krone\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singapɔga dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"saint helenaga pound\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovaniaga tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakga koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierra leonega leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somaliaga shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamga dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamega guilder\"
        ],
        \"STD\": [
            \"STD\",
            \"são tomé kple príncipega dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"são tomé kple príncipega dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovietga rouble\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadɔga colón\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriaga pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swaziga lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thailandga baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tajikistanga ruble\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tajikistanga somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenistanga manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistanga manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisiaga dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tonagaga pa’anga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timɔga escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"tɛkiiga lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkishga lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"trinidad & tobagoga dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Taiwanga dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniatɔwofɛgadudu\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainega hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainega karbovanet\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandaga shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandaga shilling\"
        ],
        \"USD\": [
            \"US\$\",
            \"us ga dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"us ga dollar (ŋkeke si gbɔna tɔ)\"
        ],
        \"USS\": [
            \"USS\",
            \"us ga dollar (ŋkeke ma ke tɔ)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayga peso UYI\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayga peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayga peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbekistanga som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelaga bolívar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelaga bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelaga bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"vietnamga dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vietnamga dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatuga vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samaoga tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"ɣetoɖofe afrikaga CFA franc BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"east caribbeanga dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europa gaɖuɖu\"
        ],
        \"XFO\": [
            \"XFO\",
            \"fransemega sika franc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"frentsi UIC-franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"ɣetoɖofe afrikaga CFA franc BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP ga franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET gadodo XRE\"
        ],
        \"YDD\": [
            \"YDD\",
            \"yemeniga dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"yemeniga rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"yugoslaviaga hard dinar (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"yugoslaviaga yeyetɔ dinar (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"yugoslaviaga convertible dinar (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"yugoslaviaga dinar (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"anyiehe afrikaga rand (gadzikpɔtɔ)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"South Africaga rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambiaga kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambiaga kwacha\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairega yeyetɔ zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairega zaire (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabwega dollar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"zimbabwega dollar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"zimbabwega dollar (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/ee.json";
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
            \"andorraga peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"united arab emiratesga dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghanistanga afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghanistanga afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"albaniaga lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albaniaga lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armeniaga dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"netherlands antilleaga guilder\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolaga kwanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"angolaga kwanza (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolaga kwanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"angolaga kwanza xoxotɔ (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinaga austral\"
        ],
        \"ARL\": [
            \"ARL\",
            \"argentinaga peso ley (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"argentinaga peso (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinaga peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinaga peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"ɔstriaga schilling\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"Australiaga dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubaga lorin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"azerbaidzanga manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbaidzanga manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosnia-herzegovinaga dinar (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosnia-herzegovinaga convertible mark\"
        ],
        \"BAN\": [
            \"BAN\",
            \"bosnia kple herzegovinaga dinar yeyètɔ (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadosga dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeshga taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"beldziumga franc (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"beldziumga franc\"
        ],
        \"BEL\": [
            \"BEL\",
            \"beldziumga franc (financial)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"bɔlgariaga hard lev\"
        ],
        \"BGM\": [
            \"BGM\",
            \"bɔlgariaga socialist lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bulgariaga lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"bulgariaga lev (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahrainga dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundiga franc\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudaga dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"bruneiga dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviaga boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviaga boliviano (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"boliviaga peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"boliviaga mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"braziliaga cruzeiro xoxotɔ (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brazilia cruzado (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"braziliaga cruzeiro xoxotɔ gbãtɔ (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"braziliaga real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"brazilia cruzado xoxotɔ (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"braziliaga cruzeiro (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"braziliaga cruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamasga dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"bhutanga ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmaga kyat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"botswanaga pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"belarusiaga ruble yeytɔ (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"belarusiaga ruble\"
        ],
        \"BYR\": [
            \"BYR\",
            \"belarusiaga ruble (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"belizega dollar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"canadaga dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongoga franc\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR euro CHE\"
        ],
        \"CHF\": [
            \"CHF\",
            \"switzerlandga franc\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR euro CHW\"
        ],
        \"CLE\": [
            \"CLE\",
            \"tsilega escudo\"
        ],
        \"CLF\": [
            \"CLF\",
            \"tsilegakɔnta dzidzenu UF\"
        ],
        \"CLP\": [
            \"CLP\",
            \"chilega peso\"
        ],
        \"CNX\": [
            \"CNX\",
            \"tsainatɔwo ƒe gadzraɖoƒe dollar\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinesega yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"colombiaga peso\"
        ],
        \"COU\": [
            \"COU\",
            \"kolombiaga vavãtɔ\"
        ],
        \"CRC\": [
            \"CRC\",
            \"costa ricaga colón\"
        ],
        \"CSD\": [
            \"CSD\",
            \"serbiaga dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"tsɛkoslovakiaga hard koruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"cubaga convertible peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"cubaga peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"kape verdega escudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"saipriɔtga pound\"
        ],
        \"CZK\": [
            \"CZK\",
            \"czechga koruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"ɣedzeƒe germaniaga mark\"
        ],
        \"DEM\": [
            \"DEM\",
            \"germaniaga mark\"
        ],
        \"DJF\": [
            \"DJF\",
            \"dziboutiga franc\"
        ],
        \"DKK\": [
            \"DKK\",
            \"denmarkga krone\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominicaga peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"aldzeriaga dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ekuadɔga sucre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ekuadɔ dzidzenu matrɔmatrɔ\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estoniaga kroon\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egyptega pound\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritreaga nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"spaniaga peseta (A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"spaniaga peseta (Convertible)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"spaniaga peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ethiopiaga birr\"
        ],
        \"EUR\": [
            \"€\",
            \"EUR\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finlandga markka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fidziga dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falkland islands pound\"
        ],
        \"FRF\": [
            \"FRF\",
            \"frentsiga franc\"
        ],
        \"GBP\": [
            \"£\",
            \"britainga pound\"
        ],
        \"GEK\": [
            \"GEK\",
            \"dzɔdziaga kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"dzɔdziaga lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"ghana siɖi (1979–2007)\"
        ],
        \"GHS\": [
            \"GH₵\",
            \"ghana siɖi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gilbratarga pound\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambiaga dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"giniga franc\"
        ],
        \"GNS\": [
            \"GNS\",
            \"giniga syli\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekuatorial giniga ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grisiga drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"guatemalaga quetzal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"pɔtugaltɔwo ƒe giniga escudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"gini-bisau peso\"
        ],
        \"GYD\": [
            \"GYD\",
            \"guyanaga dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hong Kongga dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduraga lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"kroatiaga dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"croatiaga kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitiga gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"hungariaga forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesiaga rupiah\"
        ],
        \"IEP\": [
            \"IEP\",
            \"ireland pound\"
        ],
        \"ILP\": [
            \"ILP\",
            \"israelga pound\"
        ],
        \"ILR\": [
            \"ILR\",
            \"israelga sheqel (1980–1985)\"
        ],
        \"ILS\": [
            \"₪\",
            \"israelga yeyetɔ sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indiaga rupee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"irakga dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranga rial\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"aiselandga króna (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"icelandga króna\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italiaga lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamaicaga dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"yɔdanga dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japanesega yen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenyaga shilling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgistanga som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kambodiaga riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komoroga franc\"
        ],
        \"KPW\": [
            \"KPW\",
            \"dziehe koreaga won\"
        ],
        \"KRH\": [
            \"KRH\",
            \"anyiehe koreaga hwan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"anyiehe koreaga won (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"South Koreaga won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuwaitga dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"cayman islandsga dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazakhstanga tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laosga kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lebanonga pound\"
        ],
        \"LKR\": [
            \"LKR\",
            \"sri lankaga rupee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberiaga dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesotoga loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"lithuaniaga litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"lithuaniaga talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"lazembɔgga convertible franc\"
        ],
        \"LUF\": [
            \"LUF\",
            \"lazembɔgga franc\"
        ],
        \"LUL\": [
            \"LUL\",
            \"lazembɔgga gadzikpɔ franc\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latviaga lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latviaga ruble\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libyaga dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"morokoga dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"morokoga franc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"monegaskga franc\"
        ],
        \"MDC\": [
            \"MDC\",
            \"moldovaga cupon\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldovaga leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"malagasega ariary\"
        ],
        \"MGF\": [
            \"MGF\",
            \"malagasega franc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"marcedoniaga denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"makedoniaga denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"maliga franc\"
        ],
        \"MMK\": [
            \"MMK\",
            \"myanmaga kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongoliaga tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makanesega pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mɔritaniaga ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mɔritaniaga ouguiya\"
        ],
        \"MTL\": [
            \"MTL\",
            \"maltaga lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"maltaga pound\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mɔritiusga rupee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldiviaga rufiyaa\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"mexicoga peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malaysiaga ringit\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naidzeriaga naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nikaraguaga córdoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nicaraguaga córdoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"hollandga guilder\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norwayga krone\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalga rupee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"new zealanɖga dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanga rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamaga balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"peruga inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"peruga sol\"
        ],
        \"PES\": [
            \"PES\",
            \"peruga sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"papua new guineaga kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filipiniga peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistaniga rupee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"polandga zloty\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"polanɖga zloty (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"pɔtugalga escudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paraguayga guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"katarga rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rhodesiaga dollar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"romaniaga leu (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"romaniaga leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"serbiaga dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"russiaga ruble\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rɔtsiaga ruble (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"rwandaga franc\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudi Arabiaga riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"solomon ƒudomekpo dukɔwo ƒe ga dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sɛtselsga rupee\"
        ],
        \"SDD\": [
            \"SDD\",
            \"sudanga dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanga pound\"
        ],
        \"SDP\": [
            \"SDP\",
            \"sudanga pound (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"swedenga krone\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singapɔga dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"saint helenaga pound\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovaniaga tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovakga koruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sierra leonega leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somaliaga shilling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamga dollar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamega guilder\"
        ],
        \"STD\": [
            \"STD\",
            \"são tomé kple príncipega dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"são tomé kple príncipega dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovietga rouble\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadɔga colón\"
        ],
        \"SYP\": [
            \"SYP\",
            \"syriaga pound\"
        ],
        \"SZL\": [
            \"SZL\",
            \"swaziga lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thailandga baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tajikistanga ruble\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tajikistanga somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenistanga manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistanga manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunisiaga dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tonagaga pa’anga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timɔga escudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"tɛkiiga lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkishga lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"trinidad & tobagoga dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Taiwanga dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniatɔwofɛgadudu\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrainega hryvnia\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrainega karbovanet\"
        ],
        \"UGS\": [
            \"UGS\",
            \"ugandaga shilling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandaga shilling\"
        ],
        \"USD\": [
            \"US\$\",
            \"us ga dollar\"
        ],
        \"USN\": [
            \"USN\",
            \"us ga dollar (ŋkeke si gbɔna tɔ)\"
        ],
        \"USS\": [
            \"USS\",
            \"us ga dollar (ŋkeke ma ke tɔ)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"uruguayga peso UYI\"
        ],
        \"UYP\": [
            \"UYP\",
            \"uruguayga peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"uruguayga peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbekistanga som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelaga bolívar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelaga bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelaga bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"vietnamga dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vietnamga dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatuga vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samaoga tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"ɣetoɖofe afrikaga CFA franc BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"east caribbeanga dollar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"europa gaɖuɖu\"
        ],
        \"XFO\": [
            \"XFO\",
            \"fransemega sika franc\"
        ],
        \"XFU\": [
            \"XFU\",
            \"frentsi UIC-franc\"
        ],
        \"XOF\": [
            \"CFA\",
            \"ɣetoɖofe afrikaga CFA franc BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP ga franc\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET gadodo XRE\"
        ],
        \"YDD\": [
            \"YDD\",
            \"yemeniga dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"yemeniga rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"yugoslaviaga hard dinar (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"yugoslaviaga yeyetɔ dinar (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"yugoslaviaga convertible dinar (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"yugoslaviaga dinar (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"anyiehe afrikaga rand (gadzikpɔtɔ)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"South Africaga rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambiaga kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambiaga kwacha\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairega yeyetɔ zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairega zaire (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabwega dollar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"zimbabwega dollar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"zimbabwega dollar (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/ee.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/ee.json");
    }
}
