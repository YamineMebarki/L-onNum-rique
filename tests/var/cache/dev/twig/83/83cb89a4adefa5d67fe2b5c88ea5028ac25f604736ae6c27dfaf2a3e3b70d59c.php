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

/* vendor/symfony/intl/Resources/data/currencies/rm.json */
class __TwigTemplate_d6b4cbb3d4f6340dea298d5e828f33a5dffeb32bde524e9ae4ed7d0d2681b9b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/rm.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/rm.json"));

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
            \"dirham dals Emirats Arabs Unids\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek albanais (1947–1961)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armen\"
        ],
        \"ANG\": [
            \"ANG\",
            \"flurin da las Antillas Olandaisas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolan\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolan (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"nov kwanza angolan\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza angolan reajustado\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentin\"
        ],
        \"ARL\": [
            \"ARL\",
            \"peso argentin ley\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso argentin moneda nacional\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentin (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"ATS\": [
            \"ATS\",
            \"schilling austriac\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"flurin da l’Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat aserbaidschanic (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat aserbaidschanic\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar da la Bosnia ed Erzegovina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marc convertibel bosniac\"
        ],
        \"BAN\": [
            \"BAN\",
            \"nov dinar da la Bosnia ed Erzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar da Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladais\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc beltg (convertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc beltg\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc beltg (finanzial)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev bulgar\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev bulgar socialistic\"
        ],
        \"BGN\": [
            \"BGN\",
            \"nov lev bulgar\"
        ],
        \"BGO\": [
            \"BGO\",
            \"vegl lev bulgar\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar dal Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc dal Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar da las Bermudas\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar dal Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"vegl boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivian\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol bolivian\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasilian (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasilian\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasilian (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasilian\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasilian\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasilian\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"vegl cruzeiro brasilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar da las Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanais\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Kyat burmais\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula da la Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nov rubel bieloruss (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rubel bieloruss\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rubel bieloruss (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar dal Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollar canadais\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolais\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc svizzer\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escudo chilen\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidades de fomento chilenas\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilen\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi chinais\"
        ],
        \"COP\": [
            \"COP\",
            \"peso columbian\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon da la Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"vegl dinar serb\"
        ],
        \"CSK\": [
            \"CSK\",
            \"cruna tschecoslovaca\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cuban\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo dal Cap Verd\"
        ],
        \"CYP\": [
            \"CYP\",
            \"glivra cipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"cruna tscheca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marc da la Germania da l’Ost\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marc tudestg\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc dal Dschibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"cruna danaisa\"
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
            \"sucre equadorian\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unitad da scuntrada da l’Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"cruna estona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"glivra egipziana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreic\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spagnola (conto A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spagnola (conto convertibel)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta spagnola\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopic\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marc finlandais\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar dal Fidschi\"
        ],
        \"FKP\": [
            \"FKP\",
            \"glivra dal Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc franzos\"
        ],
        \"GBP\": [
            \"£\",
            \"glivra sterlina\"
        ],
        \"GEK\": [
            \"GEK\",
            \"kupon larit georgian\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgian\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi ghanais (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanais\"
        ],
        \"GIP\": [
            \"GIP\",
            \"glivra da Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambic\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc da la Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli da la Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele da la Guinea Equatoriala\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drachma greca\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal da la Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escudo da la Guinea Portugaisa\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso da la Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar da la Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dollar da Hongkong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurian\"
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
            \"gourde haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint ungarais\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonaisa\"
        ],
        \"IEP\": [
            \"IEP\",
            \"glivra indonaisa\"
        ],
        \"ILP\": [
            \"ILP\",
            \"glivra israeliana\"
        ],
        \"ILR\": [
            \"ILR\",
            \"vegl sheqel israelian\"
        ],
        \"ILS\": [
            \"₪\",
            \"sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indica\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iracais\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranais\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"veglia cruna islandaisa\"
        ],
        \"ISK\": [
            \"ISK\",
            \"cruna islandaisa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira taliana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar giamaican\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordanic\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen giapunais\"
        ],
        \"KES\": [
            \"KES\",
            \"schilling kenian\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirghis\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodschan\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc comorian\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won da la Corea dal Nord\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan da la Corea dal Sid\"
        ],
        \"KRO\": [
            \"KRO\",
            \"vegl won da la Corea dal Sid\"
        ],
        \"KRW\": [
            \"₩\",
            \"won da la Corea dal Sid\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar dal Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar da las Inslas Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge casac\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laot\"
        ],
        \"LBP\": [
            \"LBP\",
            \"glivra libanaisa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia da la Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar liberian\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti dal Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituan\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituan\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertibel luxemburgais\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburgais\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc finanzial luxemburgais\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letton\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rubel letton\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libic\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocan\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marocan\"
        ],
        \"MCF\": [
            \"MCF\",
            \"franc monegas\"
        ],
        \"MDC\": [
            \"MDC\",
            \"cupon moldav\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldav\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary madagasc\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc madagasc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar da la Macedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"vegl dinar macedon\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc dal Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat dal Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongolic\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca dal Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya da la Mauretania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya da la Mauretania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltaisa\"
        ],
        \"MTP\": [
            \"MTP\",
            \"glivra maltaisa\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia dal Mauritius\"
        ],
        \"MVP\": [
            \"MVP\",
            \"rupia da las Maledivas\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa da las Maledivas\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha dal Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexican\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso d’argient mexican (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversion mexicana (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit da la Malaisia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo dal mozambican\"
        ],
        \"MZM\": [
            \"MZM\",
            \"vegl metical mozambican\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical dal mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguan\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba oro nicaraguan\"
        ],
        \"NLG\": [
            \"NLG\",
            \"flurin ollandais\"
        ],
        \"NOK\": [
            \"NOK\",
            \"cruna norvegiaisa\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalaisa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollar da la Nova Zelanda\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial da l’Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa dal Panama\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruan\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruan\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruan (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina da la Papua Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filippin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistana\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polac\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty polac (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo portugais\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaian\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal da Katar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollar rodesian\"
        ],
        \"ROL\": [
            \"ROL\",
            \"vegl leu rumen\"
        ],
        \"RON\": [
            \"RON\",
            \"leu rumen\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serb\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rubel russ (nov)\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rubel russ (vegl)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc ruandais\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar da las Salomonas\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia da las Seychellas\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanais\"
        ],
        \"SDG\": [
            \"SDG\",
            \"glivra sudanaisa\"
        ],
        \"SDP\": [
            \"SDP\",
            \"glivra sudanaisa (1956–2007)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"cruna svedaisa\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollar dal Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"glivra da Sontg’Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar sloven\"
        ],
        \"SKK\": [
            \"SKK\",
            \"cruna slovaca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone da la Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"schilling somalian\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"flurin surinam\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra da São Tomé e Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra da São Tomé e Principe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rubel sovietic\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon da l’El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"glivra siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni dal Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandais\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rubel dal Tadschikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni dal Tadschikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmen\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunesian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga da Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo da Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lira tirca\"
        ],
        \"TRY\": [
            \"TRY\",
            \"nova lira tirca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar da Trinidad e Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"nov dollar taiwanais\"
        ],
        \"TZS\": [
            \"TZS\",
            \"schilling tansanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ucranais\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbovanetz ucranais\"
        ],
        \"UGS\": [
            \"UGS\",
            \"schilling ucranais\"
        ],
        \"UGX\": [
            \"UGX\",
            \"schilling ugandais\"
        ],
        \"USD\": [
            \"US\$\",
            \"dollar dals Stadis Unids da l’America\"
        ],
        \"USN\": [
            \"USN\",
            \"dollar dals Stadis Unids da l’America (proxim di)\"
        ],
        \"USS\": [
            \"USS\",
            \"dollar dals Stadis Unids da l’America (medem di)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso da l’Uruguay (unidades indexadas)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"nov peso da l’Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso da l’Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum usbec\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar venezuelan (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelan (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelan\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamais\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vegl dong vietnamais\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu dal Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala da la Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollar da la Caribica Orientala\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc d’aur franzos\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC franzos\"
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
            \"fonds RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar dal Jemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial dal Jemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar jugoslav (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"nov dinar jugoslav\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar jugoslav convertibel\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar jugoslav refurmà\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sidafrican (finanzial)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sidafrican\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha da la sambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha da la sambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nov zaire dal Zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire dal Zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollar dal Simbabwe\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/rm.json";
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
            \"dirham dals Emirats Arabs Unids\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek albanais (1947–1961)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armen\"
        ],
        \"ANG\": [
            \"ANG\",
            \"flurin da las Antillas Olandaisas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolan\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza angolan (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"nov kwanza angolan\"
        ],
        \"AOR\": [
            \"AOR\",
            \"kwanza angolan reajustado\"
        ],
        \"ARA\": [
            \"ARA\",
            \"austral argentin\"
        ],
        \"ARL\": [
            \"ARL\",
            \"peso argentin ley\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso argentin moneda nacional\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso argentin (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentin\"
        ],
        \"ATS\": [
            \"ATS\",
            \"schilling austriac\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dollar australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"flurin da l’Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat aserbaidschanic (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat aserbaidschanic\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar da la Bosnia ed Erzegovina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marc convertibel bosniac\"
        ],
        \"BAN\": [
            \"BAN\",
            \"nov dinar da la Bosnia ed Erzegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar da Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bangladais\"
        ],
        \"BEC\": [
            \"BEC\",
            \"franc beltg (convertibel)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"franc beltg\"
        ],
        \"BEL\": [
            \"BEL\",
            \"franc beltg (finanzial)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"lev bulgar\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev bulgar socialistic\"
        ],
        \"BGN\": [
            \"BGN\",
            \"nov lev bulgar\"
        ],
        \"BGO\": [
            \"BGO\",
            \"vegl lev bulgar\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar dal Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franc dal Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar da las Bermudas\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar dal Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOL\": [
            \"BOL\",
            \"vegl boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso bolivian\"
        ],
        \"BOV\": [
            \"BOV\",
            \"mvdol bolivian\"
        ],
        \"BRB\": [
            \"BRB\",
            \"cruzeiro novo brasilian (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"cruzado brasilian\"
        ],
        \"BRE\": [
            \"BRE\",
            \"cruzeiro brasilian (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasilian\"
        ],
        \"BRN\": [
            \"BRN\",
            \"cruzado novo brasilian\"
        ],
        \"BRR\": [
            \"BRR\",
            \"cruzeiro brasilian\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"vegl cruzeiro brasilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar da las Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanais\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Kyat burmais\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula da la Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"nov rubel bieloruss (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rubel bieloruss\"
        ],
        \"BYR\": [
            \"BYR\",
            \"rubel bieloruss (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar dal Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dollar canadais\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franc congolais\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franc svizzer\"
        ],
        \"CHW\": [
            \"CHW\",
            \"franc WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escudo chilen\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unidades de fomento chilenas\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chilen\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan renminbi chinais\"
        ],
        \"COP\": [
            \"COP\",
            \"peso columbian\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor real\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon da la Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"vegl dinar serb\"
        ],
        \"CSK\": [
            \"CSK\",
            \"cruna tschecoslovaca\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cuban\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo dal Cap Verd\"
        ],
        \"CYP\": [
            \"CYP\",
            \"glivra cipriota\"
        ],
        \"CZK\": [
            \"CZK\",
            \"cruna tscheca\"
        ],
        \"DDM\": [
            \"DDM\",
            \"marc da la Germania da l’Ost\"
        ],
        \"DEM\": [
            \"DEM\",
            \"marc tudestg\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franc dal Dschibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"cruna danaisa\"
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
            \"sucre equadorian\"
        ],
        \"ECV\": [
            \"ECV\",
            \"unitad da scuntrada da l’Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"cruna estona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"glivra egipziana\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreic\"
        ],
        \"ESA\": [
            \"ESA\",
            \"peseta spagnola (conto A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta spagnola (conto convertibel)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta spagnola\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etiopic\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"marc finlandais\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar dal Fidschi\"
        ],
        \"FKP\": [
            \"FKP\",
            \"glivra dal Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"franc franzos\"
        ],
        \"GBP\": [
            \"£\",
            \"glivra sterlina\"
        ],
        \"GEK\": [
            \"GEK\",
            \"kupon larit georgian\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgian\"
        ],
        \"GHC\": [
            \"GHC\",
            \"cedi ghanais (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanais\"
        ],
        \"GIP\": [
            \"GIP\",
            \"glivra da Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambic\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franc da la Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli da la Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele da la Guinea Equatoriala\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drachma greca\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal da la Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"escudo da la Guinea Portugaisa\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso da la Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar da la Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dollar da Hongkong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondurian\"
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
            \"gourde haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint ungarais\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonaisa\"
        ],
        \"IEP\": [
            \"IEP\",
            \"glivra indonaisa\"
        ],
        \"ILP\": [
            \"ILP\",
            \"glivra israeliana\"
        ],
        \"ILR\": [
            \"ILR\",
            \"vegl sheqel israelian\"
        ],
        \"ILS\": [
            \"₪\",
            \"sheqel\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indica\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iracais\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iranais\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"veglia cruna islandaisa\"
        ],
        \"ISK\": [
            \"ISK\",
            \"cruna islandaisa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lira taliana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar giamaican\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordanic\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"yen giapunais\"
        ],
        \"KES\": [
            \"KES\",
            \"schilling kenian\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirghis\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambodschan\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franc comorian\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won da la Corea dal Nord\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan da la Corea dal Sid\"
        ],
        \"KRO\": [
            \"KRO\",
            \"vegl won da la Corea dal Sid\"
        ],
        \"KRW\": [
            \"₩\",
            \"won da la Corea dal Sid\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar dal Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar da las Inslas Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge casac\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laot\"
        ],
        \"LBP\": [
            \"LBP\",
            \"glivra libanaisa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia da la Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar liberian\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti dal Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas lituan\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas lituan\"
        ],
        \"LUC\": [
            \"LUC\",
            \"franc convertibel luxemburgais\"
        ],
        \"LUF\": [
            \"LUF\",
            \"franc luxemburgais\"
        ],
        \"LUL\": [
            \"LUL\",
            \"franc finanzial luxemburgais\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats letton\"
        ],
        \"LVR\": [
            \"LVR\",
            \"rubel letton\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libic\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marocan\"
        ],
        \"MAF\": [
            \"MAF\",
            \"franc marocan\"
        ],
        \"MCF\": [
            \"MCF\",
            \"franc monegas\"
        ],
        \"MDC\": [
            \"MDC\",
            \"cupon moldav\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldav\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary madagasc\"
        ],
        \"MGF\": [
            \"MGF\",
            \"franc madagasc\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar da la Macedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"vegl dinar macedon\"
        ],
        \"MLF\": [
            \"MLF\",
            \"franc dal Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat dal Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongolic\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca dal Macao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya da la Mauretania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya da la Mauretania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira maltaisa\"
        ],
        \"MTP\": [
            \"MTP\",
            \"glivra maltaisa\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia dal Mauritius\"
        ],
        \"MVP\": [
            \"MVP\",
            \"rupia da las Maledivas\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa da las Maledivas\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha dal Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexican\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso d’argient mexican (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"unidad de inversion mexicana (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit da la Malaisia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo dal mozambican\"
        ],
        \"MZM\": [
            \"MZM\",
            \"vegl metical mozambican\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical dal mozambican\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar namibian\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba nicaraguan\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba oro nicaraguan\"
        ],
        \"NLG\": [
            \"NLG\",
            \"flurin ollandais\"
        ],
        \"NOK\": [
            \"NOK\",
            \"cruna norvegiaisa\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalaisa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dollar da la Nova Zelanda\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial da l’Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa dal Panama\"
        ],
        \"PEI\": [
            \"PEI\",
            \"inti peruan\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruan\"
        ],
        \"PES\": [
            \"PES\",
            \"sol peruan (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina da la Papua Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filippin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia pakistana\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polac\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty polac (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo portugais\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaian\"
        ],
        \"QAR\": [
            \"QAR\",
            \"riyal da Katar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollar rodesian\"
        ],
        \"ROL\": [
            \"ROL\",
            \"vegl leu rumen\"
        ],
        \"RON\": [
            \"RON\",
            \"leu rumen\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serb\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rubel russ (nov)\"
        ],
        \"RUR\": [
            \"RUR\",
            \"rubel russ (vegl)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franc ruandais\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar da las Salomonas\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia da las Seychellas\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar sudanais\"
        ],
        \"SDG\": [
            \"SDG\",
            \"glivra sudanaisa\"
        ],
        \"SDP\": [
            \"SDP\",
            \"glivra sudanaisa (1956–2007)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"cruna svedaisa\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollar dal Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"glivra da Sontg’Elena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar sloven\"
        ],
        \"SKK\": [
            \"SKK\",
            \"cruna slovaca\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone da la Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"schilling somalian\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"flurin surinam\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra da São Tomé e Principe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra da São Tomé e Principe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"rubel sovietic\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colon da l’El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"glivra siriana\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni dal Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht tailandais\"
        ],
        \"TJR\": [
            \"TJR\",
            \"rubel dal Tadschikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni dal Tadschikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat turkmen\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunesian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"pa’anga da Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo da Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lira tirca\"
        ],
        \"TRY\": [
            \"TRY\",
            \"nova lira tirca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar da Trinidad e Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"nov dollar taiwanais\"
        ],
        \"TZS\": [
            \"TZS\",
            \"schilling tansanian\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ucranais\"
        ],
        \"UAK\": [
            \"UAK\",
            \"karbovanetz ucranais\"
        ],
        \"UGS\": [
            \"UGS\",
            \"schilling ucranais\"
        ],
        \"UGX\": [
            \"UGX\",
            \"schilling ugandais\"
        ],
        \"USD\": [
            \"US\$\",
            \"dollar dals Stadis Unids da l’America\"
        ],
        \"USN\": [
            \"USN\",
            \"dollar dals Stadis Unids da l’America (proxim di)\"
        ],
        \"USS\": [
            \"USS\",
            \"dollar dals Stadis Unids da l’America (medem di)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"peso da l’Uruguay (unidades indexadas)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"nov peso da l’Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso da l’Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"sum usbec\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar venezuelan (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar venezuelan (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar venezuelan\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamais\"
        ],
        \"VNN\": [
            \"VNN\",
            \"vegl dong vietnamais\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu dal Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala da la Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franc CFA BEAC\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"dollar da la Caribica Orientala\"
        ],
        \"XFO\": [
            \"XFO\",
            \"franc d’aur franzos\"
        ],
        \"XFU\": [
            \"XFU\",
            \"franc UIC franzos\"
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
            \"fonds RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar dal Jemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial dal Jemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"dinar jugoslav (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"nov dinar jugoslav\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar jugoslav convertibel\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar jugoslav refurmà\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"rand sidafrican (finanzial)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sidafrican\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha da la sambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha da la sambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"nov zaire dal Zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zaire dal Zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollar dal Simbabwe\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/rm.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/rm.json");
    }
}
