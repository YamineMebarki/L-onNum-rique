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

/* vendor/symfony/intl/Resources/data/currencies/bs.json */
class __TwigTemplate_0f685590aba62c3b300f92ceabdf5e1a80dbfa09366f5300440e2f66496966fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/bs.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/bs.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"Andorska pezeta\"
        ],
        \"AED\": [
            \"AED\",
            \"Dirham Ujedinjenih Arapskih Emirata\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Avganistanski avgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistanski afgan\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albanski lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenski dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Holandskoantilski gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolska kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Angolijska kvanza (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolijska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolijska kvanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentinski austral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentinski pezo (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentinski pezos\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Austrijski šiling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Australijski dolar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubanski florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azerbejdžanski manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbejdžanski manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosansko-Hercegovački dinar\"
        ],
        \"BAM\": [
            \"KM\",
            \"Bosanskohercegovačka konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoski dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijski frank (konvertibilni)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijski franak\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijski frank (finansijski)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bugarski tvrdi lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bugarski lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Bugarski lev (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreinski dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundski franak\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermudski dolar\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunejski dolar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivijski boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Bolivijski boliviano (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Bolivijski pezo\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Bolivijski mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Brazilski kruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilski kruzado (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilski kruzado novo (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilski kruzeiro (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Brazilski kruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamski dolar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butanski ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Burmanski kjat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Bocvanska pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Beloruska nova rublja (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Bjeloruska rublja\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Bjeloruska rublja (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belizeanski dolar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongoanski franak\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR Evro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Švicarski franak\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franak\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čileanski unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čileanski pezos\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kineski juan (izvanteritorijalni)\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Kineski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijski pezos\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kostarikanski kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Srpski dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čehoslovačka tvrda koruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubanski konvertibilni pezos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanski pezos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipratska funta\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Češka kruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Istočnoevropska marka\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Nemačka marka\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Džibutski franak\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danska kruna\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikanski pezos\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžirski dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvadorijski sukr\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadorski unidad de valor konstantin (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonska kruna\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egipatska funta\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrejska nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Španska pezeta (račun) ESA\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Španska pezeta (konvertibilni račun)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Španska pezeta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopski bir\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Finska marka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidžijski dolar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklandska funta\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Francuski franak\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Britanska funta\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gruzijski kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzijski lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ganijski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganski cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltarska funta\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambijski dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvinejski franak\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Gvinejski sili\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Evatorijalna gvineja ekvele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalska Gvineja eskudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvineja bisao pezo\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gvajanski dolar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Honkonški dolar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduraška lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Hrvatski dinar\"
        ],
        \"HRK\": [
            \"kn\",
            \"Hrvatska kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haićanski gurd\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Mađarska forinta\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonežanska rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Irska funta\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Izraelska funta\"
        ],
        \"ILR\": [
            \"ILR\",
            \"stari izraelski šekeli\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Izraelski novi šekel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indijska rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irački dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranski rijal\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"stara islandska kruna\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandska kruna\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italijanska lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamajčanski dolar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanski dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"Japanski jen\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenijski šiling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgistanski som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodžanski rijel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komorski franak\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Sjevernokorejski von\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Južno-korejski hvan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Južno-korejski Von (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"Južnokorejski von\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvajtski dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kajmanski dolar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazahstanski tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laoski kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanska funta\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Šrilankanska rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberijski dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotski loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litvanski litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Litvanski talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Luksemburški konvertibilni franak\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Luksemburški franak\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Luksemburški finansijski franak\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Letonski lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvijska rublja\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libijski dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokanski dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Marokanski franak\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldavski lej\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagaški arijari\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Malagasijski franak\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonski denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedonski denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malijanski franak\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mijanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makaonska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijska ugvija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanijska ugvija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Malteška lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Malteška funta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauricijska rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivska rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavijska kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksički pezos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksijski srebrno pezo (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksijski unidad de inverzion\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malezijski ringit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambijski eskudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambijski metikal (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambijski metikal\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibijski dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerijska naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaragvanška kordoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvanska kordoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Holandski gulden\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norveška kruna\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalska rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Novozelandski dolar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omanski rijal\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamska balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peruvijski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruanski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"Peruvijski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papue Nove Gvineje\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipinski pezos\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistanska rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Poljski zlot\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Poljski zloti (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portugalski eskudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvajski gvarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katarski rijal\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodizijski dolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunski leu (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunski lej\"
        ],
        \"RSD\": [
            \"din.\",
            \"Srpski dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruska rublja\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Ruska rublja (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruandski franak\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudijski rijal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomonski dolar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Sejšelska rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Sudanski dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanska funta\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudanska funta (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Švedska kruna\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapurski dolar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Svetohelenska funta\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenski tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovačka kruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sijeraleonski leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalski šiling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinamski dolar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Surinamski gilder\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Južnosudanska funta\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra Sao Toma i Principa (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Toma i Principa\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovjetska rublja\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Salvadorski kolon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sirijska funta\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilendski lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Tajlandski baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžakistanska rublja\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistanski somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Turkmenistanski manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistanski manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tuniški dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonganska panga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timorški eskudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turska lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turska lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidadtobaški dolar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Novi tajvanski dolar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanijski šiling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrajinska hrivnja\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrajinski karbovaneti\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Ugandijski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandski šiling\"
        ],
        \"USD\": [
            \"USD\",
            \"Američki dolar\"
        ],
        \"USN\": [
            \"USN\",
            \"SAD dolar (sledeći dan)\"
        ],
        \"USS\": [
            \"USS\",
            \"SAD dolar (isti dan)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Urugvajski pezo en unidades indeksades\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Urugvajski pezo (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvajski pezos\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistanski som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venecuelanski bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venecuelanski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venecuelanski bolivar\"
        ],
        \"VND\": [
            \"₫\",
            \"Vijetnamski dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vijetnamski dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatski vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoanska tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Centralnoafrički franak (CFA)\"
        ],
        \"XCD\": [
            \"XCD\",
            \"Istočnokaripski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Evropska valutna jedinica\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Francuski zlatni frank\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Francuski UIC-frank\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Zapadnoafrički franak (CFA)\"
        ],
        \"XPF\": [
            \"XPF\",
            \"Franak (CFP)\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fondovi\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Jemenski dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemenski rijal\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Jugoslovenski tvrdi dinar\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Jugoslovenski novi dinar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Jugoslovenski konvertibilni dinar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Južnoafrički rand (finansijski)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Južnoafrički rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambijska kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambijska kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zairski novi zair (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairski zair (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabvejski dolar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabvejski dolar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabvejski dolar (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/bs.json";
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
            \"Andorska pezeta\"
        ],
        \"AED\": [
            \"AED\",
            \"Dirham Ujedinjenih Arapskih Emirata\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Avganistanski avgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistanski afgan\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albanski lek (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armenski dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Holandskoantilski gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolska kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Angolijska kvanza (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolijska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolijska kvanza reajustado (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentinski austral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentinski pezo (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentinski pezos\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Austrijski šiling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Australijski dolar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubanski florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azerbejdžanski manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbejdžanski manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosansko-Hercegovački dinar\"
        ],
        \"BAM\": [
            \"KM\",
            \"Bosanskohercegovačka konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoski dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijski frank (konvertibilni)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijski franak\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijski frank (finansijski)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bugarski tvrdi lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bugarski lev\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Bugarski lev (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreinski dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundski franak\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermudski dolar\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunejski dolar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivijski boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Bolivijski boliviano (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Bolivijski pezo\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Bolivijski mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Brazilski kruzeiro novo (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilski kruzado (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilski kruzado novo (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilski kruzeiro (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Brazilski kruzeiro (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamski dolar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butanski ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Burmanski kjat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Bocvanska pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Beloruska nova rublja (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Bjeloruska rublja\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Bjeloruska rublja (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belizeanski dolar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongoanski franak\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR Evro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Švicarski franak\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franak\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čileanski unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čileanski pezos\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kineski juan (izvanteritorijalni)\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Kineski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijski pezos\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kostarikanski kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Srpski dinar (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čehoslovačka tvrda koruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubanski konvertibilni pezos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanski pezos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipratska funta\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Češka kruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Istočnoevropska marka\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Nemačka marka\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Džibutski franak\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danska kruna\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikanski pezos\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžirski dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvadorijski sukr\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadorski unidad de valor konstantin (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonska kruna\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egipatska funta\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrejska nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Španska pezeta (račun) ESA\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Španska pezeta (konvertibilni račun)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Španska pezeta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopski bir\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Finska marka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidžijski dolar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Folklandska funta\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Francuski franak\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Britanska funta\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gruzijski kupon larit\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzijski lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ganijski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganski cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltarska funta\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambijski dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvinejski franak\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Gvinejski sili\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Evatorijalna gvineja ekvele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalska Gvineja eskudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvineja bisao pezo\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gvajanski dolar\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Honkonški dolar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Honduraška lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Hrvatski dinar\"
        ],
        \"HRK\": [
            \"kn\",
            \"Hrvatska kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haićanski gurd\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Mađarska forinta\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonežanska rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Irska funta\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Izraelska funta\"
        ],
        \"ILR\": [
            \"ILR\",
            \"stari izraelski šekeli\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Izraelski novi šekel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indijska rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irački dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranski rijal\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"stara islandska kruna\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandska kruna\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italijanska lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamajčanski dolar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanski dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"Japanski jen\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenijski šiling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgistanski som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodžanski rijel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komorski franak\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Sjevernokorejski von\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Južno-korejski hvan (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Južno-korejski Von (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"Južnokorejski von\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuvajtski dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kajmanski dolar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazahstanski tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laoski kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanska funta\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Šrilankanska rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberijski dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotski loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litvanski litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Litvanski talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Luksemburški konvertibilni franak\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Luksemburški franak\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Luksemburški finansijski franak\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Letonski lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvijska rublja\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libijski dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokanski dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Marokanski franak\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldavski lej\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malagaški arijari\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Malagasijski franak\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonski denar\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedonski denar (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malijanski franak\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mijanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makaonska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijska ugvija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanijska ugvija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Malteška lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Malteška funta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauricijska rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldivska rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavijska kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksički pezos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksijski srebrno pezo (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksijski unidad de inverzion\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malezijski ringit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambijski eskudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambijski metikal (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambijski metikal\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibijski dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerijska naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaragvanška kordoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvanska kordoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Holandski gulden\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norveška kruna\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalska rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Novozelandski dolar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omanski rijal\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamska balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peruvijski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruanski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"Peruvijski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papue Nove Gvineje\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipinski pezos\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistanska rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Poljski zlot\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Poljski zloti (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portugalski eskudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvajski gvarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katarski rijal\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodizijski dolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunski leu (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunski lej\"
        ],
        \"RSD\": [
            \"din.\",
            \"Srpski dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Ruska rublja\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Ruska rublja (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruandski franak\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudijski rijal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Solomonski dolar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Sejšelska rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Sudanski dinar (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanska funta\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudanska funta (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Švedska kruna\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapurski dolar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Svetohelenska funta\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenski tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovačka kruna\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sijeraleonski leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalski šiling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinamski dolar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Surinamski gilder\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Južnosudanska funta\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra Sao Toma i Principa (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Toma i Principa\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovjetska rublja\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Salvadorski kolon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sirijska funta\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilendski lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Tajlandski baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžakistanska rublja\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistanski somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Turkmenistanski manat (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmenistanski manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tuniški dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tonganska panga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timorški eskudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turska lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turska lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidadtobaški dolar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Novi tajvanski dolar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanijski šiling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrajinska hrivnja\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrajinski karbovaneti\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Ugandijski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandski šiling\"
        ],
        \"USD\": [
            \"USD\",
            \"Američki dolar\"
        ],
        \"USN\": [
            \"USN\",
            \"SAD dolar (sledeći dan)\"
        ],
        \"USS\": [
            \"USS\",
            \"SAD dolar (isti dan)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Urugvajski pezo en unidades indeksades\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Urugvajski pezo (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvajski pezos\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistanski som\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venecuelanski bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venecuelanski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venecuelanski bolivar\"
        ],
        \"VND\": [
            \"₫\",
            \"Vijetnamski dong\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vijetnamski dong (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatski vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoanska tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Centralnoafrički franak (CFA)\"
        ],
        \"XCD\": [
            \"XCD\",
            \"Istočnokaripski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Evropska valutna jedinica\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Francuski zlatni frank\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Francuski UIC-frank\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Zapadnoafrički franak (CFA)\"
        ],
        \"XPF\": [
            \"XPF\",
            \"Franak (CFP)\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fondovi\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Jemenski dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemenski rijal\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Jugoslovenski tvrdi dinar\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Jugoslovenski novi dinar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Jugoslovenski konvertibilni dinar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Južnoafrički rand (finansijski)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Južnoafrički rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambijska kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambijska kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zairski novi zair (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairski zair (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabvejski dolar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabvejski dolar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabvejski dolar (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/bs.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/bs.json");
    }
}
