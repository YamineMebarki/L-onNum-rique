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

/* vendor/symfony/intl/Resources/data/currencies/sh.json */
class __TwigTemplate_7f0f812c8a075ec006b64b088ea4b3f36ee1f3782707b4d2212569b17e8d36c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sh.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sh.json"));

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
            \"UAE dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Avganistanski avgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Avganistanski avgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Jermenski dram\"
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
            \"Angolijska kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolijska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolijska kvanza reađustado (1995–1999)\"
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
            \"Bosansko-hercegovačka konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoški dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijski franak (konvertibilni)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijski franak\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijski franak (finansijski)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bugarski tvrdi lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bugarski lev\"
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
            \"Bolivijski bolivijano\"
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
            \"Brazilski novi kruzeiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilijski kruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilijski novi kruzado\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilski kruzeiro\"
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
            \"Beloruska rublja\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Beloruska rublja (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliski dolar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongoanski franak\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR evro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Švajcarski franak\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franak\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čileovski unidades se fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čileanski pezos\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kineski juan (ostrvski)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Kineski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijski pezos\"
        ],
        \"COU\": [
            \"COU\",
            \"Unidad de valorški real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kostarikanski kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Stari srpski dinar\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čehoslovačka tvrda kruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubanski konvertibilni pezos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubanski pezos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kiparska funta\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Češka kruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Istočno-nemačka marka\"
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
            \"Ekvadorski sakr\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadorski unidad de valor konstante\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonska kroon\"
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
            \"Španska pezeta (račun)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Španska pezeta (konvertibilniračun)\"
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
            \"Evro\"
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
            \"Foklandska funta\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Francuski franak\"
        ],
        \"GBP\": [
            \"£\",
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
            \"Ganski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganski sedi\"
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
            \"Ekvatorijalno-gvinejski ekvele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Grčka drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalska gvineja eskudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvineja Bisao Pezo\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gvajanski dolar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hongkonški dolar\"
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
            \"HRK\",
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
            \"Stari izraelski šekeli\"
        ],
        \"ILS\": [
            \"₪\",
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
            \"Stara islandska kruna\"
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
            \"Severnokorejski von\"
        ],
        \"KRW\": [
            \"KRW\",
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
            \"Laoški kip\"
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
            \"Lesoto loti\"
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
            \"Latvijski lati\"
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
            \"Madagaskarski ariari\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Malagasijski franak\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonski denar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malijanski franak\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mjanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makaoska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijska ogija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanska ogija\"
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
            \"MX\$\",
            \"Meksički pezos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksički srebrni pezo (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksički unidad de inversion (UDI)\"
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
            \"Stari mozambijski metikal\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambički metikal\"
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
            \"Nikaragvanska kordoba\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvanska zlatna kordoba\"
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
            \"Peruanski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruanski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"Peruanski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papuanska kina\"
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
            \"Rodejskidolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunski lej (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunski lej\"
        ],
        \"RSD\": [
            \"RSD\",
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
            \"Stari sudanski dinar\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanska funta\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Stara sudanska funta\"
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
            \"Svete Jelene funta\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenački tolar\"
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
            \"Somalijski šiling\"
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
            \"Saotomska dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Saotomska dobra\"
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
            \"THB\",
            \"Tajlandski bat\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžihistanska rublja\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistanski somon\"
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
            \"Tuniski dinar\"
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
            \"Trinidad-tobagoški dolar\"
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
            \"Ugandski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandski šiling\"
        ],
        \"USD\": [
            \"US\$\",
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
            \"Urugvajski pezo en unidades indeksadas\"
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
            \"Venecuelanski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venecuelanski bolivar\"
        ],
        \"VND\": [
            \"VND\",
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
            \"CFA franak BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Istočnokaripski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Evropska valutna jedinica\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Francuski zlatni franak\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Francuski UIC-franak\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA franak BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP franak\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fond\"
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
            \"Južno-afrički rand (finansijski)\"
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
            \"Zairski novi zair\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairski zair\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabveanski dolar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabveanski dolar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabveanski dolar (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sh.json";
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
            \"UAE dirham\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Avganistanski avgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Avganistanski avgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Jermenski dram\"
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
            \"Angolijska kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolijska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolijska kvanza reađustado (1995–1999)\"
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
            \"Bosansko-hercegovačka konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoški dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijski franak (konvertibilni)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijski franak\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijski franak (finansijski)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bugarski tvrdi lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bugarski lev\"
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
            \"Bolivijski bolivijano\"
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
            \"Brazilski novi kruzeiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilijski kruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilijski novi kruzado\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilski kruzeiro\"
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
            \"Beloruska rublja\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Beloruska rublja (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliski dolar\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongoanski franak\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR evro\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Švajcarski franak\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR franak\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čileovski unidades se fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čileanski pezos\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kineski juan (ostrvski)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Kineski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijski pezos\"
        ],
        \"COU\": [
            \"COU\",
            \"Unidad de valorški real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kostarikanski kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Stari srpski dinar\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čehoslovačka tvrda kruna\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubanski konvertibilni pezos\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubanski pezos\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kiparska funta\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Češka kruna\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Istočno-nemačka marka\"
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
            \"Ekvadorski sakr\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadorski unidad de valor konstante\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estonska kroon\"
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
            \"Španska pezeta (račun)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Španska pezeta (konvertibilniračun)\"
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
            \"Evro\"
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
            \"Foklandska funta\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Francuski franak\"
        ],
        \"GBP\": [
            \"£\",
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
            \"Ganski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganski sedi\"
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
            \"Ekvatorijalno-gvinejski ekvele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Grčka drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalska gvineja eskudo\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvineja Bisao Pezo\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gvajanski dolar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hongkonški dolar\"
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
            \"HRK\",
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
            \"Stari izraelski šekeli\"
        ],
        \"ILS\": [
            \"₪\",
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
            \"Stara islandska kruna\"
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
            \"Severnokorejski von\"
        ],
        \"KRW\": [
            \"KRW\",
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
            \"Laoški kip\"
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
            \"Lesoto loti\"
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
            \"Latvijski lati\"
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
            \"Madagaskarski ariari\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Malagasijski franak\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonski denar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malijanski franak\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mjanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makaoska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijska ogija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanska ogija\"
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
            \"MX\$\",
            \"Meksički pezos\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksički srebrni pezo (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksički unidad de inversion (UDI)\"
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
            \"Stari mozambijski metikal\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambički metikal\"
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
            \"Nikaragvanska kordoba\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvanska zlatna kordoba\"
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
            \"Peruanski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruanski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"Peruanski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papuanska kina\"
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
            \"Rodejskidolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunski lej (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunski lej\"
        ],
        \"RSD\": [
            \"RSD\",
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
            \"Stari sudanski dinar\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudanska funta\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Stara sudanska funta\"
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
            \"Svete Jelene funta\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovenački tolar\"
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
            \"Somalijski šiling\"
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
            \"Saotomska dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Saotomska dobra\"
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
            \"THB\",
            \"Tajlandski bat\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžihistanska rublja\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistanski somon\"
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
            \"Tuniski dinar\"
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
            \"Trinidad-tobagoški dolar\"
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
            \"Ugandski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandski šiling\"
        ],
        \"USD\": [
            \"US\$\",
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
            \"Urugvajski pezo en unidades indeksadas\"
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
            \"Venecuelanski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venecuelanski bolivar\"
        ],
        \"VND\": [
            \"VND\",
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
            \"CFA franak BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Istočnokaripski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Evropska valutna jedinica\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Francuski zlatni franak\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Francuski UIC-franak\"
        ],
        \"XOF\": [
            \"CFA\",
            \"CFA franak BCEAO\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP franak\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fond\"
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
            \"Južno-afrički rand (finansijski)\"
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
            \"Zairski novi zair\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairski zair\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabveanski dolar (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabveanski dolar (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabveanski dolar (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sh.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sh.json");
    }
}
