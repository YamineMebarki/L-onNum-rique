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

/* vendor/symfony/intl/Resources/data/currencies/lt.json */
class __TwigTemplate_74a2cb7682062b24b490022e7ec754d97dfcfa45215fb14cbf4c92f666efbefa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/lt.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"Andoros peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"Jungtinių Arabų Emyratų dirhamas\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Afganistano afganis (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistano afganis\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albanijos lekas (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanijos lekas\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armėnijos dramas\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Olandijos Antilų guldenas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolos kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Angolos kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolos naujoji kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolos patikslinta kvanza (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentinos australs\"
        ],
        \"ARL\": [
            \"ARL\",
            \"Argentinos pesos ley (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"Argentinos pesai (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentinos pesas (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentinos pesas\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Austrijos šilingas\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Australijos doleris\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubos guldenas\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azerbaidžano manatas (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaidžano manatas\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosnijos ir Hercegovinos dinaras (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnijos ir Hercegovinos konvertuojamoji markė\"
        ],
        \"BAN\": [
            \"BAN\",
            \"Bosnijos ir Hercegovinos naujasis dinaras (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoso doleris\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladešo taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijos frankas (konvertuojamas)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijos frankas\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijos frankas (finansinis)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bulgarijos levas (1962–1999)\"
        ],
        \"BGM\": [
            \"BGM\",
            \"Bulgarų socialistų leva\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgarijos levas\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Bulgarijos levas (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreino dinaras\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundžio frankas\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermudos doleris\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunėjaus doleris\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivijos bolivijanas\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Bolivijos bolivijanas (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Bolivijos pesas\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Bolivijos mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Brazilijos naujieji kruzeirai (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilijos kruzadai (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilijos kruzeiras (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilijos realas\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilijos naujiejis kruzadai (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilijos kruzeiras (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Brazilijos kruzeirai (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamų doleris\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butano ngultrumas\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Birmos kijatas\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvanos pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Baltarusijos naujasis rublis (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Baltarusijos rublis\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Baltarusijos rublis (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belizo doleris\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanados doleris\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo frankas\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR eurai\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Šveicarijos frankas\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR frankas\"
        ],
        \"CLE\": [
            \"CLE\",
            \"Čilės eskudai\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čiliečių unidades de fomentos\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čilės pesas\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kinijos Užsienio juanis\"
        ],
        \"CNX\": [
            \"CNX\",
            \"Kinijos \\\"People\\\" banko doleris\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Kinijos ženminbi juanis\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijos pesas\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor realai\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rikos kolonas\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Serbijos dinaras (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čekoslovakų sunkusis korunas\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubos konvertuojamasis pesas\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubos pesas\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Žaliojo Kyšulio eskudas\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipro svaras\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Čekijos krona\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Rytų Vokietijos markė\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Vokietijos markė\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Džibučio frankas\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danijos krona\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikos pesas\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžyro dinaras\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvadoro sukrė\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadoro constante (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estijos krona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egipto svaras\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrėjos nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Ispanų pesetai (A sąskaita)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Ispanų pesetai (konvertuojama sąskaita)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Ispanijos peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopijos biras\"
        ],
        \"EUR\": [
            \"€\",
            \"Euras\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Suomijos markė\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidžio doleris\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklando salų svaras\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Prancūzijos frankas\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Didžiosios Britanijos svaras\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gruzinų kupon larits\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzijos laris\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ganos sedis (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganos sedis\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltaro svaras\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambijos dalasis\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvinėjos frankas\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Guinean sylis\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Pusiaujo Guinean ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Graikijos drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalos ketcalis\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalų Gvinėjos eskudas\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvinėjos-Bisau pesas\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gajanos doleris\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Honkongo doleris\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Hondūro lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Kroatijos dinaras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatijos kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haičio gurdas\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Vengrijos forintas\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonezijos rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Airijos svaras\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Izraelio svaras\"
        ],
        \"ILR\": [
            \"ILR\",
            \"Izraelio šekelis (1980–1985)\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Izraelio naujasis šekelis\"
        ],
        \"INR\": [
            \"INR\",
            \"Indijos rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irako dinaras\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Irano rialas\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"Islandijos krona (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandijos krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italijos lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikos doleris\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanijos dinaras\"
        ],
        \"JPY\": [
            \"JPY\",
            \"Japonijos jena\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenijos šilingas\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgizijos somas\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodžos rielis\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoro frankas\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Šiaurės Korėjos vonas\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Pietų Korėjos hwanas (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Pietų Korėjos vonas (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"Pietų Korėjos vonas\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuveito dinaras\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kaimanų salų doleris\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazachstano tengė\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laoso kipas\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libano svaras\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Šri Lankos rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberijos doleris\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto lotis\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lietuvos litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Lietuvos talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Liuksemburgo konvertuojamas frankas\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Liuksemburgo frankas\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Liuksemburgo finansinis frankas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latvijos latas\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvijos rublis\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libijos dinaras\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Maroko dirhamas\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Maroko frankas\"
        ],
        \"MCF\": [
            \"MCF\",
            \"Monegasque frankas\"
        ],
        \"MDC\": [
            \"MDC\",
            \"Moldovų cupon\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldovos lėja\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagaskaro ariaris\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Madagaskaro frankas\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonijos denaras\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedonijos denaras (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malio frankas\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mianmaro kijatas\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolijos tugrikas\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijos ugija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanijos ugija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Maltos lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Maltos svaras\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauricijaus rupija\"
        ],
        \"MVP\": [
            \"MVP\",
            \"Maldyvų rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldyvų rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavio kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksikos pesas\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksikos sidabrinis pesas (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksikos United de Inversion (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaizijos ringitas\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambiko eskudas\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambiko metikalis (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambiko metikalis\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibijos doleris\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerijos naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaragvos kardoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvos kordoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Nyderlandų guldenas\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norvegijos krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalo rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Naujosios Zelandijos doleris\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omano rialas\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamos balboja\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peru intis\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru solis\"
        ],
        \"PES\": [
            \"PES\",
            \"Peru solis (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Naujosios Gvinėjos kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipinų pesas\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistano rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Lenkijos zlotas\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Lenkijos zlotas (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portugalijos eskudas\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvajaus guaranis\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Kataro rialas\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodezijos doleris\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunijos lėja (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunijos lėja\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbijos dinaras\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rusijos rublis\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rusijos rublis (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruandos frankas\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudo Arabijos rijalas\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Saliamono salų doleris\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seišelių rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Sudano dinaras (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudano svaras\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudano svaras (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Švedijos krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapūro doleris\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Šv. Elenos salų svaras\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovėnijos tolaras\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovakijos krona\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Siera Leonės leonė\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalio šilingas\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surimano doleris\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Surimano guldenas\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pietų Sudano svaras\"
        ],
        \"STD\": [
            \"STD\",
            \"San Tomės ir Principės dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San Tomės ir Principės dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovietų rublis\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Salvadoro kolonas\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sirijos svaras\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilando lilangenis\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailando batas\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžikistano rublis\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistano somonis\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Turkmėnistano manatas (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmėnistano manatas\"
        ],
        \"TND\": [
            \"TND\",
            \"Tuniso dinaras\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongo paanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timoro eskudas\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turkijos lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkijos lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidado ir Tobago doleris\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Taivano naujasis doleris\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanijos šilingas\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainos grivina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrainos karbovanecas\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Ugandos šilingas (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandos šilingas\"
        ],
        \"USD\": [
            \"USD\",
            \"JAV doleris\"
        ],
        \"USN\": [
            \"USN\",
            \"JAV doleris (kitos dienos)\"
        ],
        \"USS\": [
            \"USS\",
            \"JAV doleris (šios dienos)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Urugvajaus pesai en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Urugvajaus pesas (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvajaus pesas\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistano sumas\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venesuelos bolivaras (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuelos bolivaras (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuelos bolivaras\"
        ],
        \"VND\": [
            \"VND\",
            \"Vietnamo dongas\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vietnamo dongas (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatas\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"CFA BEAC frankas\"
        ],
        \"XCD\": [
            \"XCD\",
            \"Rytų Karibų doleris\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Europos piniginis vienetas (1993–1999)\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Aukso frankas\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Prancūzijos UIC - frankas\"
        ],
        \"XOF\": [
            \"XOF\",
            \"CFA BCEAO frankas\"
        ],
        \"XPF\": [
            \"XPF\",
            \"CFP frankas\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fondai\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Jemeno dinaras\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemeno rialas\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Jugoslavijos kietasis dinaras (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Jugoslavijos naujasis dinaras (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Jugoslavijos konvertuojamas dinaras (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"Jugoslavijos reformuotas dinaras (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Pietų Afrikos finansinis randas\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Pietų Afrikos Respublikos randas\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambijos kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambijos kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zairo naujasis zairas (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairo zairas (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabvės doleris (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabvės doleris (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabvės doleris (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/lt.json";
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
            \"Andoros peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"Jungtinių Arabų Emyratų dirhamas\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Afganistano afganis (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afganistano afganis\"
        ],
        \"ALK\": [
            \"ALK\",
            \"Albanijos lekas (1946–1965)\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanijos lekas\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armėnijos dramas\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Olandijos Antilų guldenas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolos kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Angolos kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"Angolos naujoji kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Angolos patikslinta kvanza (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Argentinos australs\"
        ],
        \"ARL\": [
            \"ARL\",
            \"Argentinos pesos ley (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"Argentinos pesai (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Argentinos pesas (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentinos pesas\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Austrijos šilingas\"
        ],
        \"AUD\": [
            \"AUD\",
            \"Australijos doleris\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubos guldenas\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Azerbaidžano manatas (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbaidžano manatas\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Bosnijos ir Hercegovinos dinaras (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnijos ir Hercegovinos konvertuojamoji markė\"
        ],
        \"BAN\": [
            \"BAN\",
            \"Bosnijos ir Hercegovinos naujasis dinaras (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbadoso doleris\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladešo taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Belgijos frankas (konvertuojamas)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Belgijos frankas\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Belgijos frankas (finansinis)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Bulgarijos levas (1962–1999)\"
        ],
        \"BGM\": [
            \"BGM\",
            \"Bulgarų socialistų leva\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgarijos levas\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Bulgarijos levas (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreino dinaras\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundžio frankas\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermudos doleris\"
        ],
        \"BND\": [
            \"BND\",
            \"Brunėjaus doleris\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolivijos bolivijanas\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Bolivijos bolivijanas (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Bolivijos pesas\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Bolivijos mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Brazilijos naujieji kruzeirai (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Brazilijos kruzadai (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Brazilijos kruzeiras (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Brazilijos realas\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Brazilijos naujiejis kruzadai (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Brazilijos kruzeiras (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Brazilijos kruzeirai (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamų doleris\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Butano ngultrumas\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Birmos kijatas\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botsvanos pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Baltarusijos naujasis rublis (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Baltarusijos rublis\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Baltarusijos rublis (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Belizo doleris\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanados doleris\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongo frankas\"
        ],
        \"CHE\": [
            \"CHE\",
            \"WIR eurai\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Šveicarijos frankas\"
        ],
        \"CHW\": [
            \"CHW\",
            \"WIR frankas\"
        ],
        \"CLE\": [
            \"CLE\",
            \"Čilės eskudai\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Čiliečių unidades de fomentos\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Čilės pesas\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Kinijos Užsienio juanis\"
        ],
        \"CNX\": [
            \"CNX\",
            \"Kinijos \\\"People\\\" banko doleris\"
        ],
        \"CNY\": [
            \"CNY\",
            \"Kinijos ženminbi juanis\"
        ],
        \"COP\": [
            \"COP\",
            \"Kolumbijos pesas\"
        ],
        \"COU\": [
            \"COU\",
            \"unidad de valor realai\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kosta Rikos kolonas\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Serbijos dinaras (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Čekoslovakų sunkusis korunas\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubos konvertuojamasis pesas\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubos pesas\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Žaliojo Kyšulio eskudas\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Kipro svaras\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Čekijos krona\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Rytų Vokietijos markė\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Vokietijos markė\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Džibučio frankas\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Danijos krona\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikos pesas\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Alžyro dinaras\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Ekvadoro sukrė\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Ekvadoro constante (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Estijos krona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egipto svaras\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrėjos nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Ispanų pesetai (A sąskaita)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Ispanų pesetai (konvertuojama sąskaita)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Ispanijos peseta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopijos biras\"
        ],
        \"EUR\": [
            \"€\",
            \"Euras\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Suomijos markė\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidžio doleris\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falklando salų svaras\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Prancūzijos frankas\"
        ],
        \"GBP\": [
            \"GBP\",
            \"Didžiosios Britanijos svaras\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Gruzinų kupon larits\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Gruzijos laris\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ganos sedis (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ganos sedis\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltaro svaras\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambijos dalasis\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Gvinėjos frankas\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Guinean sylis\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Pusiaujo Guinean ekwele\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Graikijos drachma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Gvatemalos ketcalis\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Portugalų Gvinėjos eskudas\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Gvinėjos-Bisau pesas\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Gajanos doleris\"
        ],
        \"HKD\": [
            \"HKD\",
            \"Honkongo doleris\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Hondūro lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Kroatijos dinaras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatijos kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haičio gurdas\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Vengrijos forintas\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonezijos rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Airijos svaras\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Izraelio svaras\"
        ],
        \"ILR\": [
            \"ILR\",
            \"Izraelio šekelis (1980–1985)\"
        ],
        \"ILS\": [
            \"ILS\",
            \"Izraelio naujasis šekelis\"
        ],
        \"INR\": [
            \"INR\",
            \"Indijos rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irako dinaras\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Irano rialas\"
        ],
        \"ISJ\": [
            \"ISJ\",
            \"Islandijos krona (1918–1981)\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Islandijos krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italijos lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikos doleris\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordanijos dinaras\"
        ],
        \"JPY\": [
            \"JPY\",
            \"Japonijos jena\"
        ],
        \"KES\": [
            \"KES\",
            \"Kenijos šilingas\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgizijos somas\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodžos rielis\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Komoro frankas\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Šiaurės Korėjos vonas\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Pietų Korėjos hwanas (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Pietų Korėjos vonas (1945–1953)\"
        ],
        \"KRW\": [
            \"KRW\",
            \"Pietų Korėjos vonas\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Kuveito dinaras\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Kaimanų salų doleris\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazachstano tengė\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laoso kipas\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libano svaras\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Šri Lankos rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberijos doleris\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesoto lotis\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lietuvos litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Lietuvos talonas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Liuksemburgo konvertuojamas frankas\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Liuksemburgo frankas\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Liuksemburgo finansinis frankas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Latvijos latas\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Latvijos rublis\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libijos dinaras\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Maroko dirhamas\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Maroko frankas\"
        ],
        \"MCF\": [
            \"MCF\",
            \"Monegasque frankas\"
        ],
        \"MDC\": [
            \"MDC\",
            \"Moldovų cupon\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldovos lėja\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Madagaskaro ariaris\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Madagaskaro frankas\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Makedonijos denaras\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Makedonijos denaras (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Malio frankas\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mianmaro kijatas\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongolijos tugrikas\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Makao pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritanijos ugija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritanijos ugija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Maltos lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Maltos svaras\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauricijaus rupija\"
        ],
        \"MVP\": [
            \"MVP\",
            \"Maldyvų rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Maldyvų rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malavio kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksikos pesas\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Meksikos sidabrinis pesas (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Meksikos United de Inversion (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Malaizijos ringitas\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Mozambiko eskudas\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mozambiko metikalis (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mozambiko metikalis\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibijos doleris\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigerijos naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Nikaragvos kardoba (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nikaragvos kordoba\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Nyderlandų guldenas\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Norvegijos krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalo rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"Naujosios Zelandijos doleris\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omano rialas\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamos balboja\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Peru intis\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peru solis\"
        ],
        \"PES\": [
            \"PES\",
            \"Peru solis (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papua Naujosios Gvinėjos kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filipinų pesas\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistano rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Lenkijos zlotas\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Lenkijos zlotas (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Portugalijos eskudas\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paragvajaus guaranis\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Kataro rialas\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Rodezijos doleris\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Rumunijos lėja (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Rumunijos lėja\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serbijos dinaras\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rusijos rublis\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rusijos rublis (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Ruandos frankas\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saudo Arabijos rijalas\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Saliamono salų doleris\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seišelių rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Sudano dinaras (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sudano svaras\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Sudano svaras (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Švedijos krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapūro doleris\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Šv. Elenos salų svaras\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Slovėnijos tolaras\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Slovakijos krona\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Siera Leonės leonė\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somalio šilingas\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surimano doleris\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Surimano guldenas\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pietų Sudano svaras\"
        ],
        \"STD\": [
            \"STD\",
            \"San Tomės ir Principės dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"San Tomės ir Principės dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Sovietų rublis\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Salvadoro kolonas\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sirijos svaras\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Svazilando lilangenis\"
        ],
        \"THB\": [
            \"THB\",
            \"Tailando batas\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Tadžikistano rublis\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadžikistano somonis\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Turkmėnistano manatas (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmėnistano manatas\"
        ],
        \"TND\": [
            \"TND\",
            \"Tuniso dinaras\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongo paanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Timoro eskudas\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turkijos lira (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkijos lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidado ir Tobago doleris\"
        ],
        \"TWD\": [
            \"TWD\",
            \"Taivano naujasis doleris\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzanijos šilingas\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Ukrainos grivina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Ukrainos karbovanecas\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Ugandos šilingas (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandos šilingas\"
        ],
        \"USD\": [
            \"USD\",
            \"JAV doleris\"
        ],
        \"USN\": [
            \"USN\",
            \"JAV doleris (kitos dienos)\"
        ],
        \"USS\": [
            \"USS\",
            \"JAV doleris (šios dienos)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Urugvajaus pesai en unidades indexadas\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Urugvajaus pesas (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Urugvajaus pesas\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Uzbekistano sumas\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Venesuelos bolivaras (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venesuelos bolivaras (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Venesuelos bolivaras\"
        ],
        \"VND\": [
            \"VND\",
            \"Vietnamo dongas\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Vietnamo dongas (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatu vatas\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoa tala\"
        ],
        \"XAF\": [
            \"XAF\",
            \"CFA BEAC frankas\"
        ],
        \"XCD\": [
            \"XCD\",
            \"Rytų Karibų doleris\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Europos piniginis vienetas (1993–1999)\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Aukso frankas\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Prancūzijos UIC - frankas\"
        ],
        \"XOF\": [
            \"XOF\",
            \"CFA BCEAO frankas\"
        ],
        \"XPF\": [
            \"XPF\",
            \"CFP frankas\"
        ],
        \"XRE\": [
            \"XRE\",
            \"RINET fondai\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Jemeno dinaras\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemeno rialas\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Jugoslavijos kietasis dinaras (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Jugoslavijos naujasis dinaras (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Jugoslavijos konvertuojamas dinaras (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"Jugoslavijos reformuotas dinaras (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Pietų Afrikos finansinis randas\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Pietų Afrikos Respublikos randas\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambijos kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambijos kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Zairo naujasis zairas (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Zairo zairas (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabvės doleris (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Zimbabvės doleris (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Zimbabvės doleris (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/lt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/lt.json");
    }
}
