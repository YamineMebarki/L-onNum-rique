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

/* vendor/symfony/intl/Resources/data/currencies/br.json */
class __TwigTemplate_d106862bae03201b6afa32374fbdb60edd6ac1983e6e1372caf6005e3c8952bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/br.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/br.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"peseta Andorra\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham EAU\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani Afghanistan (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani Afghanistan\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek Albania (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florin Antilhez nederlandat\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza Angola\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza Angola (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"kwanza nevez Angola (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"AOR\"
        ],
        \"ARA\": [
            \"ARA\",
            \"ARA\"
        ],
        \"ARL\": [
            \"ARL\",
            \"ARL\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso Arcʼhantina (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso Arcʼhantina (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso Arcʼhantina\"
        ],
        \"ATS\": [
            \"ATS\",
            \"schilling Aostria\"
        ],
        \"AUD\": [
            \"\$A\",
            \"dollar Aostralia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat Azerbaidjan (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat Azerbaidjan\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia ha Herzegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"mark kemmadus Bosnia ha Herzegovina\"
        ],
        \"BAN\": [
            \"BAN\",
            \"dinar nevez Bosnia ha Herzegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"lur Belgia (kemmadus)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"lur Belgia\"
        ],
        \"BGL\": [
            \"BGL\",
            \"BGL\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev sokialour Bulgaria\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev Bulgaria\"
        ],
        \"BGO\": [
            \"BGO\",
            \"lev Bulgaria (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar Bahrein\"
        ],
        \"BIF\": [
            \"BIF\",
            \"lur Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano Bolivia\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviano Bolivia (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso Bolivia\"
        ],
        \"BOV\": [
            \"BOV\",
            \"BOV\"
        ],
        \"BRB\": [
            \"BRB\",
            \"BRB\"
        ],
        \"BRC\": [
            \"BRC\",
            \"BRC\"
        ],
        \"BRE\": [
            \"BRE\",
            \"BRE\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real Brazil\"
        ],
        \"BRN\": [
            \"BRN\",
            \"BRN\"
        ],
        \"BRR\": [
            \"BRR\",
            \"BRR\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"BRZ\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum Bhoutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat Birmania\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"roubl nevez Belarus (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"roubl Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"roubl Belarus (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar Belize\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"dollar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"lur Kongo\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"lur Suis\"
        ],
        \"CHW\": [
            \"CHW\",
            \"lur WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escudo Chile\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unanenn jediñ Chile\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso Chile\"
        ],
        \"CNX\": [
            \"CNX\",
            \"dollar Bank poblel Sina\"
        ],
        \"CNY\": [
            \"CNY\",
            \"yuan Sina\"
        ],
        \"COP\": [
            \"COP\",
            \"peso Kolombia\"
        ],
        \"COU\": [
            \"COU\",
            \"COU\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar Serbia (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"CSK\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso kemmadus Kuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo Kab Glas\"
        ],
        \"CYP\": [
            \"CYP\",
            \"lur Kiprenez\"
        ],
        \"CZK\": [
            \"CZK\",
            \"kurunenn Tchek\"
        ],
        \"DDM\": [
            \"DDM\",
            \"mark Alamagn ar Reter\"
        ],
        \"DEM\": [
            \"DEM\",
            \"mark Alamagn\"
        ],
        \"DJF\": [
            \"DJF\",
            \"lur Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"kurunenn Danmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso Dominikan\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar Aljeria\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ECS\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ECV\"
        ],
        \"EEK\": [
            \"EEK\",
            \"kurunenn Estonia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"lur Egipt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa Eritrea\"
        ],
        \"ESA\": [
            \"ESA\",
            \"ESA\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta gemmadus Spagn\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta Spagn\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr Etiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"mark Finland\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar Fidji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"lur Inizi Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"lur gall\"
        ],
        \"GBP\": [
            \"£ RU\",
            \"lur Breizh-Veur\"
        ],
        \"GEK\": [
            \"GEK\",
            \"GEK\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari Jorjia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"GHC\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"lur Jibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"lur Ginea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli Ginea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele Ginea ar Cʼheheder\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drakm Gres\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"GWE\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Ginea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar Guyana\"
        ],
        \"HKD\": [
            \"\$ HK\",
            \"dollar Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira Honduras\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar Kroatia\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna Kroatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"roupi Indonezia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"lur Iwerzhon\"
        ],
        \"ILP\": [
            \"ILP\",
            \"lur Israel\"
        ],
        \"ILR\": [
            \"ILR\",
            \"shekel Israel (1980–1985)\"
        ],
        \"ILS\": [
            \"ILS\",
            \"shekel nevez Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"roupi India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial Iran\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"kurunenn Island (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"kurunenn Island\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lur Italia\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar Jordania\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen Japan\"
        ],
        \"KES\": [
            \"KES\",
            \"shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som Kyrgyzstan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel Kambodja\"
        ],
        \"KMF\": [
            \"KMF\",
            \"lur Komorez\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won Korea an Norzh\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan Korea ar Su (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"won Korea ar Su (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won Korea ar Su\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar Koweit\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar Inizi Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge Kazakstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip Laos\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lur Liban\"
        ],
        \"LKR\": [
            \"LKR\",
            \"roupi Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas Lituania\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas Lituania\"
        ],
        \"LUC\": [
            \"LUC\",
            \"lur kemmadus Luksembourg\"
        ],
        \"LUF\": [
            \"LUF\",
            \"lur Luksembourg\"
        ],
        \"LUL\": [
            \"LUL\",
            \"LUL\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats Latvia\"
        ],
        \"LVR\": [
            \"LVR\",
            \"roubl Latvia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar Libia\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham Maroko\"
        ],
        \"MAF\": [
            \"MAF\",
            \"lur Maroko\"
        ],
        \"MCF\": [
            \"MCF\",
            \"lur Monaco\"
        ],
        \"MDC\": [
            \"MDC\",
            \"MDC\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary Madagaskar\"
        ],
        \"MGF\": [
            \"MGF\",
            \"lur Madagaskar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar Makedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"denar Makedonia (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"lur Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik Mongolia\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya Maouritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya Maouritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira Malta\"
        ],
        \"MTP\": [
            \"MTP\",
            \"lur Malta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"roupi Moris\"
        ],
        \"MVP\": [
            \"MVP\",
            \"roupi Maldivez\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa Maldivez\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso Mecʼhiko\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso arcʼhant Mecʼhiko (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"MXV\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit Malaysia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo Mozambik\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metical Mozambik (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical Mozambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira Nigeria\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba Nicaragua (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba Nicaragua\"
        ],
        \"NLG\": [
            \"NLG\",
            \"florin an Izelvroioù\"
        ],
        \"NOK\": [
            \"NOK\",
            \"kurunenn Norvegia\"
        ],
        \"NPR\": [
            \"NPR\",
            \"roupi Nepal\"
        ],
        \"NZD\": [
            \"\$ ZN\",
            \"dollar Zeland-Nevez\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa Panamá\"
        ],
        \"PEI\": [
            \"PEI\",
            \"PEI\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol Perou\"
        ],
        \"PES\": [
            \"PES\",
            \"sol Perou (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina Papoua Ginea-Nevez\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso Filipinez\"
        ],
        \"PKR\": [
            \"PKR\",
            \"roupi Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty Polonia\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty Polonia (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo Portugal\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollar Rodezia\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu Roumania (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"leu Roumania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"roubl Rusia\"
        ],
        \"RUR\": [
            \"RUR\",
            \"roubl Rusia (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"lur Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal Arabia Saoudat\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar Inizi Salomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"roupi Sechelez\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar Soudan (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"lur Soudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"lur Soudan (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"kurunenn Sveden\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollar Singapour\"
        ],
        \"SHP\": [
            \"SHP\",
            \"lur Saint-Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar Slovenia\"
        ],
        \"SKK\": [
            \"SKK\",
            \"kurunenn Slovakia\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilling Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar Surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"florin Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"lur Susoudan\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra São Tomé ha Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra São Tomé ha Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"roubl soviedel\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colón Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lur Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht Thailand\"
        ],
        \"TJR\": [
            \"TJR\",
            \"roubl Tadjikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni Tadjikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat Turkmenistan (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar Tunizia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lur Turkia (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lur Turkia\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar Trinidad ha Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"dollar nevez Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilling Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia Ukraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"UAK\"
        ],
        \"UGS\": [
            \"UGS\",
            \"shilling Ouganda (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilling Ouganda\"
        ],
        \"USD\": [
            \"\$ SU\",
            \"dollar SU\"
        ],
        \"USN\": [
            \"USN\",
            \"USN\"
        ],
        \"USS\": [
            \"USS\",
            \"USS\"
        ],
        \"UYI\": [
            \"UYI\",
            \"UYI\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som Ouzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar Venezuela\"
        ],
        \"VND\": [
            \"VND\",
            \"dong Viêt Nam\"
        ],
        \"VNN\": [
            \"VNN\",
            \"dong Viêt Nam (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"lur CFA Kreizafrika\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dollar Karib ar reter\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unanenn jediñ europat\"
        ],
        \"XFO\": [
            \"XFO\",
            \"lur aour Frañs\"
        ],
        \"XFU\": [
            \"XFU\",
            \"lur Unaniezh etrebroadel an hentoù-houarn\"
        ],
        \"XOF\": [
            \"CFA\",
            \"lur CFA Afrika ar Cʼhornôg\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"lur CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"XRE\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial Yemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"YUD\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinar nevez Yougoslavia (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar kemmadus Yougoslavia (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar adreizhet Yougoslavia (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"ZAL\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand Suafrika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"ZRN\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"ZRZ\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollar Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dollar Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dollar Zimbabwe (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/br.json";
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
            \"peseta Andorra\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham EAU\"
        ],
        \"AFA\": [
            \"AFA\",
            \"afghani Afghanistan (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afghani Afghanistan\"
        ],
        \"ALK\": [
            \"ALK\",
            \"lek Albania (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florin Antilhez nederlandat\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza Angola\"
        ],
        \"AOK\": [
            \"AOK\",
            \"kwanza Angola (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"kwanza nevez Angola (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"AOR\"
        ],
        \"ARA\": [
            \"ARA\",
            \"ARA\"
        ],
        \"ARL\": [
            \"ARL\",
            \"ARL\"
        ],
        \"ARM\": [
            \"ARM\",
            \"peso Arcʼhantina (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"peso Arcʼhantina (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso Arcʼhantina\"
        ],
        \"ATS\": [
            \"ATS\",
            \"schilling Aostria\"
        ],
        \"AUD\": [
            \"\$A\",
            \"dollar Aostralia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florin Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"manat Azerbaidjan (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat Azerbaidjan\"
        ],
        \"BAD\": [
            \"BAD\",
            \"dinar Bosnia ha Herzegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"mark kemmadus Bosnia ha Herzegovina\"
        ],
        \"BAN\": [
            \"BAN\",
            \"dinar nevez Bosnia ha Herzegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dollar Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"lur Belgia (kemmadus)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"lur Belgia\"
        ],
        \"BGL\": [
            \"BGL\",
            \"BGL\"
        ],
        \"BGM\": [
            \"BGM\",
            \"lev sokialour Bulgaria\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev Bulgaria\"
        ],
        \"BGO\": [
            \"BGO\",
            \"lev Bulgaria (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar Bahrein\"
        ],
        \"BIF\": [
            \"BIF\",
            \"lur Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dollar Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"dollar Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano Bolivia\"
        ],
        \"BOL\": [
            \"BOL\",
            \"boliviano Bolivia (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"peso Bolivia\"
        ],
        \"BOV\": [
            \"BOV\",
            \"BOV\"
        ],
        \"BRB\": [
            \"BRB\",
            \"BRB\"
        ],
        \"BRC\": [
            \"BRC\",
            \"BRC\"
        ],
        \"BRE\": [
            \"BRE\",
            \"BRE\"
        ],
        \"BRL\": [
            \"BRL\",
            \"real Brazil\"
        ],
        \"BRN\": [
            \"BRN\",
            \"BRN\"
        ],
        \"BRR\": [
            \"BRR\",
            \"BRR\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"BRZ\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dollar Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum Bhoutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"kyat Birmania\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"roubl nevez Belarus (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"roubl Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"roubl Belarus (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dollar Belize\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"dollar Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"lur Kongo\"
        ],
        \"CHE\": [
            \"CHE\",
            \"euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"lur Suis\"
        ],
        \"CHW\": [
            \"CHW\",
            \"lur WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"escudo Chile\"
        ],
        \"CLF\": [
            \"CLF\",
            \"unanenn jediñ Chile\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso Chile\"
        ],
        \"CNX\": [
            \"CNX\",
            \"dollar Bank poblel Sina\"
        ],
        \"CNY\": [
            \"CNY\",
            \"yuan Sina\"
        ],
        \"COP\": [
            \"COP\",
            \"peso Kolombia\"
        ],
        \"COU\": [
            \"COU\",
            \"COU\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"dinar Serbia (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"CSK\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso kemmadus Kuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo Kab Glas\"
        ],
        \"CYP\": [
            \"CYP\",
            \"lur Kiprenez\"
        ],
        \"CZK\": [
            \"CZK\",
            \"kurunenn Tchek\"
        ],
        \"DDM\": [
            \"DDM\",
            \"mark Alamagn ar Reter\"
        ],
        \"DEM\": [
            \"DEM\",
            \"mark Alamagn\"
        ],
        \"DJF\": [
            \"DJF\",
            \"lur Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"kurunenn Danmark\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso Dominikan\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar Aljeria\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ECS\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ECV\"
        ],
        \"EEK\": [
            \"EEK\",
            \"kurunenn Estonia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"lur Egipt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa Eritrea\"
        ],
        \"ESA\": [
            \"ESA\",
            \"ESA\"
        ],
        \"ESB\": [
            \"ESB\",
            \"peseta gemmadus Spagn\"
        ],
        \"ESP\": [
            \"ESP\",
            \"peseta Spagn\"
        ],
        \"ETB\": [
            \"ETB\",
            \"birr Etiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"mark Finland\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dollar Fidji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"lur Inizi Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"lur gall\"
        ],
        \"GBP\": [
            \"£ RU\",
            \"lur Breizh-Veur\"
        ],
        \"GEK\": [
            \"GEK\",
            \"GEK\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari Jorjia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"GHC\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"lur Jibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"lur Ginea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"syli Ginea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele Ginea ar Cʼheheder\"
        ],
        \"GRD\": [
            \"GRD\",
            \"drakm Gres\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"GWE\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Ginea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dollar Guyana\"
        ],
        \"HKD\": [
            \"\$ HK\",
            \"dollar Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira Honduras\"
        ],
        \"HRD\": [
            \"HRD\",
            \"dinar Kroatia\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna Kroatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"roupi Indonezia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"lur Iwerzhon\"
        ],
        \"ILP\": [
            \"ILP\",
            \"lur Israel\"
        ],
        \"ILR\": [
            \"ILR\",
            \"shekel Israel (1980–1985)\"
        ],
        \"ILS\": [
            \"ILS\",
            \"shekel nevez Israel\"
        ],
        \"INR\": [
            \"₹\",
            \"roupi India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial Iran\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"kurunenn Island (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"kurunenn Island\"
        ],
        \"ITL\": [
            \"ITL\",
            \"lur Italia\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dollar Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar Jordania\"
        ],
        \"JPY\": [
            \"JPY\",
            \"yen Japan\"
        ],
        \"KES\": [
            \"KES\",
            \"shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som Kyrgyzstan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel Kambodja\"
        ],
        \"KMF\": [
            \"KMF\",
            \"lur Komorez\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won Korea an Norzh\"
        ],
        \"KRH\": [
            \"KRH\",
            \"hwan Korea ar Su (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"won Korea ar Su (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"won Korea ar Su\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar Koweit\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dollar Inizi Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge Kazakstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip Laos\"
        ],
        \"LBP\": [
            \"LBP\",
            \"lur Liban\"
        ],
        \"LKR\": [
            \"LKR\",
            \"roupi Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dollar Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"loti Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litas Lituania\"
        ],
        \"LTT\": [
            \"LTT\",
            \"talonas Lituania\"
        ],
        \"LUC\": [
            \"LUC\",
            \"lur kemmadus Luksembourg\"
        ],
        \"LUF\": [
            \"LUF\",
            \"lur Luksembourg\"
        ],
        \"LUL\": [
            \"LUL\",
            \"LUL\"
        ],
        \"LVL\": [
            \"LVL\",
            \"lats Latvia\"
        ],
        \"LVR\": [
            \"LVR\",
            \"roubl Latvia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar Libia\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham Maroko\"
        ],
        \"MAF\": [
            \"MAF\",
            \"lur Maroko\"
        ],
        \"MCF\": [
            \"MCF\",
            \"lur Monaco\"
        ],
        \"MDC\": [
            \"MDC\",
            \"MDC\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary Madagaskar\"
        ],
        \"MGF\": [
            \"MGF\",
            \"lur Madagaskar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"denar Makedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"denar Makedonia (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"lur Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat Myanmar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik Mongolia\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca Macau\"
        ],
        \"MRO\": [
            \"MRO\",
            \"ouguiya Maouritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya Maouritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"lira Malta\"
        ],
        \"MTP\": [
            \"MTP\",
            \"lur Malta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"roupi Moris\"
        ],
        \"MVP\": [
            \"MVP\",
            \"roupi Maldivez\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rufiyaa Maldivez\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso Mecʼhiko\"
        ],
        \"MXP\": [
            \"MXP\",
            \"peso arcʼhant Mecʼhiko (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"MXV\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit Malaysia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"escudo Mozambik\"
        ],
        \"MZM\": [
            \"MZM\",
            \"metical Mozambik (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical Mozambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dollar Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira Nigeria\"
        ],
        \"NIC\": [
            \"NIC\",
            \"cordoba Nicaragua (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"cordoba Nicaragua\"
        ],
        \"NLG\": [
            \"NLG\",
            \"florin an Izelvroioù\"
        ],
        \"NOK\": [
            \"NOK\",
            \"kurunenn Norvegia\"
        ],
        \"NPR\": [
            \"NPR\",
            \"roupi Nepal\"
        ],
        \"NZD\": [
            \"\$ ZN\",
            \"dollar Zeland-Nevez\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa Panamá\"
        ],
        \"PEI\": [
            \"PEI\",
            \"PEI\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol Perou\"
        ],
        \"PES\": [
            \"PES\",
            \"sol Perou (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina Papoua Ginea-Nevez\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso Filipinez\"
        ],
        \"PKR\": [
            \"PKR\",
            \"roupi Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty Polonia\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"zloty Polonia (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"escudo Portugal\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"dollar Rodezia\"
        ],
        \"ROL\": [
            \"ROL\",
            \"leu Roumania (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"leu Roumania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"roubl Rusia\"
        ],
        \"RUR\": [
            \"RUR\",
            \"roubl Rusia (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"lur Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"riyal Arabia Saoudat\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dollar Inizi Salomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"roupi Sechelez\"
        ],
        \"SDD\": [
            \"SDD\",
            \"dinar Soudan (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"lur Soudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"lur Soudan (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"kurunenn Sveden\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dollar Singapour\"
        ],
        \"SHP\": [
            \"SHP\",
            \"lur Saint-Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"tolar Slovenia\"
        ],
        \"SKK\": [
            \"SKK\",
            \"kurunenn Slovakia\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"shilling Somalia\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dollar Surinam\"
        ],
        \"SRG\": [
            \"SRG\",
            \"florin Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"lur Susoudan\"
        ],
        \"STD\": [
            \"STD\",
            \"dobra São Tomé ha Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra São Tomé ha Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"roubl soviedel\"
        ],
        \"SVC\": [
            \"SVC\",
            \"colón Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"lur Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni Swaziland\"
        ],
        \"THB\": [
            \"THB\",
            \"baht Thailand\"
        ],
        \"TJR\": [
            \"TJR\",
            \"roubl Tadjikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni Tadjikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"manat Turkmenistan (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar Tunizia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"escudo Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"lur Turkia (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lur Turkia\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dollar Trinidad ha Tobago\"
        ],
        \"TWD\": [
            \"TWD\",
            \"dollar nevez Taiwan\"
        ],
        \"TZS\": [
            \"TZS\",
            \"shilling Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia Ukraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"UAK\"
        ],
        \"UGS\": [
            \"UGS\",
            \"shilling Ouganda (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"shilling Ouganda\"
        ],
        \"USD\": [
            \"\$ SU\",
            \"dollar SU\"
        ],
        \"USN\": [
            \"USN\",
            \"USN\"
        ],
        \"USS\": [
            \"USS\",
            \"USS\"
        ],
        \"UYI\": [
            \"UYI\",
            \"UYI\"
        ],
        \"UYP\": [
            \"UYP\",
            \"peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som Ouzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"bolivar Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolivar Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolivar Venezuela\"
        ],
        \"VND\": [
            \"VND\",
            \"dong Viêt Nam\"
        ],
        \"VNN\": [
            \"VNN\",
            \"dong Viêt Nam (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"lur CFA Kreizafrika\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dollar Karib ar reter\"
        ],
        \"XEU\": [
            \"XEU\",
            \"unanenn jediñ europat\"
        ],
        \"XFO\": [
            \"XFO\",
            \"lur aour Frañs\"
        ],
        \"XFU\": [
            \"XFU\",
            \"lur Unaniezh etrebroadel an hentoù-houarn\"
        ],
        \"XOF\": [
            \"CFA\",
            \"lur CFA Afrika ar Cʼhornôg\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"lur CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"XRE\"
        ],
        \"YDD\": [
            \"YDD\",
            \"dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"rial Yemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"YUD\"
        ],
        \"YUM\": [
            \"YUM\",
            \"dinar nevez Yougoslavia (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"dinar kemmadus Yougoslavia (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"dinar adreizhet Yougoslavia (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"ZAL\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand Suafrika\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"kwacha Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"ZRN\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"ZRZ\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"dollar Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"dollar Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"dollar Zimbabwe (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/br.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/br.json");
    }
}
