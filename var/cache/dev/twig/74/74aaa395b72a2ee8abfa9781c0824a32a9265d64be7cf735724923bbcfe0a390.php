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

/* vendor/symfony/intl/Resources/data/currencies/sl.json */
class __TwigTemplate_d1294debfebd8b0817feaadf5bdb3bd4041bde1bf6e5b1d9082f98eab19b638d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"andorska peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham Združenih arabskih emiratov\"
        ],
        \"AFA\": [
            \"AFA\",
            \"stari afganistanski afgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenski dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"nizozemsko-antilski gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolska kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"stara angolska kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"konvertibilna angolska kvanza (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinski avstral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinski peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinski peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"avstrijski šiling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"avstralski dolar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubski florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"stari azerbajdžanski manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbajdžanski manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosansko-hercegovski dinar\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosansko-hercegovska konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadoški dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgijski konvertibilni frank\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgijski frank\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgijski finančni frank\"
        ],
        \"BGL\": [
            \"BGL\",
            \"stari bolgarski lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bolgarski lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahranski dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundski frank\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudski dolar\"
        ],
        \"BND\": [
            \"BND\",
            \"brunejski dolar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivijski boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"bolivijski peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"bolivijski mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brazilski novi kruzeiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brazilski kruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"stari brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"novi brazilski kruzado\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brazilski kruzeiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamski dolar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"butanski ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmanski kjat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"bocvanska pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"beloruski novi rubelj (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"beloruski rubelj\"
        ],
        \"BYR\": [
            \"BYR\",
            \"beloruski rubelj (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"belizejski dolar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongoški frank\"
        ],
        \"CHE\": [
            \"CHE\",
            \"evro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"švicarski frank\"
        ],
        \"CHW\": [
            \"CHW\",
            \"frank WIR\"
        ],
        \"CLF\": [
            \"CLF\",
            \"čilski unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"čilski peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kitajski juan (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"kitajski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"kolumbijski peso\"
        ],
        \"COU\": [
            \"COU\",
            \"kolumbijska enota realne vrednosti\"
        ],
        \"CRC\": [
            \"CRC\",
            \"kostariški kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"stari srbski dinar\"
        ],
        \"CSK\": [
            \"CSK\",
            \"češkoslovaška krona\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubanski konvertibilni peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanski peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"ciprski funt\"
        ],
        \"CZK\": [
            \"CZK\",
            \"češka krona\"
        ],
        \"DDM\": [
            \"DDM\",
            \"vzhodnonemška marka\"
        ],
        \"DEM\": [
            \"DEM\",
            \"nemška marka\"
        ],
        \"DJF\": [
            \"DJF\",
            \"džibutski frank\"
        ],
        \"DKK\": [
            \"DKK\",
            \"danska krona\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominikanski peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"alžirski dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ekvadorski sukre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ekvadorska enota realne vrednosti (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estonska krona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egiptovski funt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritrejska nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"španska pezeta (račun A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"španska pezeta (račun B)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"španska pezeta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopski bir\"
        ],
        \"EUR\": [
            \"€\",
            \"evro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finska marka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fidžijski dolar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falklandski funt\"
        ],
        \"FRF\": [
            \"FRF\",
            \"francoski frank\"
        ],
        \"GBP\": [
            \"GBP\",
            \"britanski funt\"
        ],
        \"GEK\": [
            \"GEK\",
            \"gruzijski bon lari\"
        ],
        \"GEL\": [
            \"GEL\",
            \"gruzijski lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"stari ganski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ganski cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltarski funt\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambijski dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"gvinejski frank\"
        ],
        \"GNS\": [
            \"GNS\",
            \"gvinejski sili\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele Ekvatorialne Gvineje\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grška drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"eskudo Portugalske Gvineje\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Gvineje Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"gvajanski dolar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"hongkonški dolar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduraška lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"hrvaški dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"hrvaška kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitski gurd\"
        ],
        \"HUF\": [
            \"HUF\",
            \"madžarski forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonezijska rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"irski funt\"
        ],
        \"ILP\": [
            \"ILP\",
            \"izraelski funt\"
        ],
        \"ILS\": [
            \"₪\",
            \"izraelski šekel\"
        ],
        \"INR\": [
            \"₹\",
            \"indijska rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"iraški dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranski rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"islandska krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italijanska lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamajški dolar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordanski dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"japonski jen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenijski šiling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgiški som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kamboški riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komorski frank\"
        ],
        \"KPW\": [
            \"KPW\",
            \"severnokorejski von\"
        ],
        \"KRW\": [
            \"₩\",
            \"južnokorejski von\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuvajtski dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"kajmanski dolar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazahstanski tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laoški kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanonski funt\"
        ],
        \"LKR\": [
            \"LKR\",
            \"šrilanška rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberijski dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesoški loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litovski litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litvanski litas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luksemburški konvertibilni frank\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luksemburški frank\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luksemburški finančni frank\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latvijski lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latvijski rubelj\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libijski dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"maroški dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"maroški frank\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldavijski leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"malgaški ariarij\"
        ],
        \"MGF\": [
            \"MGF\",
            \"malgaški frank\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonski denar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"malijski frank\"
        ],
        \"MMK\": [
            \"MMK\",
            \"mjanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makavska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mavretanska uguija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mavretanska uguija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"malteška lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"malteški funt\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mavricijska rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldivska rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malavijska kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"mehiški peso\"
        ],
        \"MXP\": [
            \"MXP\",
            \"mehiški srebrni peso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"mehiška inverzna enota (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malezijski ringit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"mozambiški eskudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"stari mozambiški metikal\"
        ],
        \"MZN\": [
            \"MZN\",
            \"mozambiški metikal\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibijski dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigerijska naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nikaraška kordova\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nikaraška zlata kordova\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nizozemski gulden\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norveška krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalska rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"novozelandski dolar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanski rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamska balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"perujski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"perujski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"perujski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina Papue Nove Gvineje\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filipinski peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistanska rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"poljski novi zlot\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"stari poljski zlot (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugalski eskudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paragvajski gvarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"katarski rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rodezijski dolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"stari romunski leu\"
        ],
        \"RON\": [
            \"RON\",
            \"romunski leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"srbski dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ruski rubelj\"
        ],
        \"RUR\": [
            \"RUR\",
            \"ruski rubelj (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ruandski frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudski rial\"
        ],
        \"SBD\": [
            \"SBD\",
            \"solomonski dolar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sejšelska rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"stari sudanski dinar\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanski funt\"
        ],
        \"SDP\": [
            \"SDP\",
            \"stari sudanski funt\"
        ],
        \"SEK\": [
            \"SEK\",
            \"švedska krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singapurski dolar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"funt Sv. Helene\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovenski tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovaška krona\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sieraleonski leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somalski šiling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamski dolar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamski gulden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"južnosudanski funt\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomejska dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomejska dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetski rubelj\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadorski kolon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"sirijski funt\"
        ],
        \"SZL\": [
            \"SZL\",
            \"svazijski lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"tajski baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadžikistanski rubelj\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadžikistanski somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenski manat\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistanski novi manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunizijski dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tongovska paanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timorski eskudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"stara turška lira\"
        ],
        \"TRY\": [
            \"TRY\",
            \"nova turška lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dolar Trinidada in Tobaga\"
        ],
        \"TWD\": [
            \"TWD\",
            \"novi tajvanski dolar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanijski šiling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrajinska grivna\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrajinski karbovanci\"
        ],
        \"UGS\": [
            \"UGS\",
            \"stari ugandski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandski šiling\"
        ],
        \"USD\": [
            \"\$\",
            \"ameriški dolar\"
        ],
        \"USN\": [
            \"USN\",
            \"ameriški dolar, naslednji dan\"
        ],
        \"USS\": [
            \"USS\",
            \"ameriški dolar, isti dan\"
        ],
        \"UYP\": [
            \"UYP\",
            \"stari urugvajski peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"urugvajski peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbeški sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelski bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelski bolivar\"
        ],
        \"VND\": [
            \"₫\",
            \"vientnamski dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatujski vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samoanska tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA frank BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"vzhodnokaribski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"evropska denarna enota\"
        ],
        \"XFO\": [
            \"XFO\",
            \"zlati frank\"
        ],
        \"XFU\": [
            \"XFU\",
            \"frank UIC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"zahodnoafriški frank CFA\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frank\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenski dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenski rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"stari jugoslovanski dinar\"
        ],
        \"YUM\": [
            \"YUM\",
            \"novi jugoslovanski dinar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslovanski konvertibilni dinar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"južnoafriški finančni rand\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"južnoafriški rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambijska kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambijska kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairski novi zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairski zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabvejski dolar\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"zimbabvejski dolar (2009)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sl.json";
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
            \"andorska peseta\"
        ],
        \"AED\": [
            \"AED\",
            \"dirham Združenih arabskih emiratov\"
        ],
        \"AFA\": [
            \"AFA\",
            \"stari afganistanski afgani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"albanski lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"armenski dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"nizozemsko-antilski gulden\"
        ],
        \"AOA\": [
            \"AOA\",
            \"angolska kvanza\"
        ],
        \"AOK\": [
            \"AOK\",
            \"stara angolska kvanza (1977–1990)\"
        ],
        \"AON\": [
            \"AON\",
            \"angolska nova kvanza (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"konvertibilna angolska kvanza (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"argentinski avstral\"
        ],
        \"ARP\": [
            \"ARP\",
            \"argentinski peso (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"argentinski peso\"
        ],
        \"ATS\": [
            \"ATS\",
            \"avstrijski šiling\"
        ],
        \"AUD\": [
            \"AUD\",
            \"avstralski dolar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"arubski florin\"
        ],
        \"AZM\": [
            \"AZM\",
            \"stari azerbajdžanski manat (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"azerbajdžanski manat\"
        ],
        \"BAD\": [
            \"BAD\",
            \"bosansko-hercegovski dinar\"
        ],
        \"BAM\": [
            \"BAM\",
            \"bosansko-hercegovska konvertibilna marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"barbadoški dolar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"bangladeška taka\"
        ],
        \"BEC\": [
            \"BEC\",
            \"belgijski konvertibilni frank\"
        ],
        \"BEF\": [
            \"BEF\",
            \"belgijski frank\"
        ],
        \"BEL\": [
            \"BEL\",
            \"belgijski finančni frank\"
        ],
        \"BGL\": [
            \"BGL\",
            \"stari bolgarski lev\"
        ],
        \"BGN\": [
            \"BGN\",
            \"bolgarski lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"bahranski dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"burundski frank\"
        ],
        \"BMD\": [
            \"BMD\",
            \"bermudski dolar\"
        ],
        \"BND\": [
            \"BND\",
            \"brunejski dolar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"bolivijski boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"bolivijski peso\"
        ],
        \"BOV\": [
            \"BOV\",
            \"bolivijski mvdol\"
        ],
        \"BRB\": [
            \"BRB\",
            \"brazilski novi kruzeiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"brazilski kruzado\"
        ],
        \"BRE\": [
            \"BRE\",
            \"stari brazilski kruzeiro (1990–1993)\"
        ],
        \"BRL\": [
            \"BRL\",
            \"brazilski real\"
        ],
        \"BRN\": [
            \"BRN\",
            \"novi brazilski kruzado\"
        ],
        \"BRR\": [
            \"BRR\",
            \"brazilski kruzeiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"bahamski dolar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"butanski ngultrum\"
        ],
        \"BUK\": [
            \"BUK\",
            \"burmanski kjat\"
        ],
        \"BWP\": [
            \"BWP\",
            \"bocvanska pula\"
        ],
        \"BYB\": [
            \"BYB\",
            \"beloruski novi rubelj (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"beloruski rubelj\"
        ],
        \"BYR\": [
            \"BYR\",
            \"beloruski rubelj (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"belizejski dolar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"kanadski dolar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"kongoški frank\"
        ],
        \"CHE\": [
            \"CHE\",
            \"evro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"švicarski frank\"
        ],
        \"CHW\": [
            \"CHW\",
            \"frank WIR\"
        ],
        \"CLF\": [
            \"CLF\",
            \"čilski unidades de fomento\"
        ],
        \"CLP\": [
            \"CLP\",
            \"čilski peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"kitajski juan (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"kitajski juan\"
        ],
        \"COP\": [
            \"COP\",
            \"kolumbijski peso\"
        ],
        \"COU\": [
            \"COU\",
            \"kolumbijska enota realne vrednosti\"
        ],
        \"CRC\": [
            \"CRC\",
            \"kostariški kolon\"
        ],
        \"CSD\": [
            \"CSD\",
            \"stari srbski dinar\"
        ],
        \"CSK\": [
            \"CSK\",
            \"češkoslovaška krona\"
        ],
        \"CUC\": [
            \"CUC\",
            \"kubanski konvertibilni peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"kubanski peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"zelenortski eskudo\"
        ],
        \"CYP\": [
            \"CYP\",
            \"ciprski funt\"
        ],
        \"CZK\": [
            \"CZK\",
            \"češka krona\"
        ],
        \"DDM\": [
            \"DDM\",
            \"vzhodnonemška marka\"
        ],
        \"DEM\": [
            \"DEM\",
            \"nemška marka\"
        ],
        \"DJF\": [
            \"DJF\",
            \"džibutski frank\"
        ],
        \"DKK\": [
            \"DKK\",
            \"danska krona\"
        ],
        \"DOP\": [
            \"DOP\",
            \"dominikanski peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"alžirski dinar\"
        ],
        \"ECS\": [
            \"ECS\",
            \"ekvadorski sukre\"
        ],
        \"ECV\": [
            \"ECV\",
            \"ekvadorska enota realne vrednosti (UVC)\"
        ],
        \"EEK\": [
            \"EEK\",
            \"estonska krona\"
        ],
        \"EGP\": [
            \"EGP\",
            \"egiptovski funt\"
        ],
        \"ERN\": [
            \"ERN\",
            \"eritrejska nakfa\"
        ],
        \"ESA\": [
            \"ESA\",
            \"španska pezeta (račun A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"španska pezeta (račun B)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"španska pezeta\"
        ],
        \"ETB\": [
            \"ETB\",
            \"etiopski bir\"
        ],
        \"EUR\": [
            \"€\",
            \"evro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"finska marka\"
        ],
        \"FJD\": [
            \"FJD\",
            \"fidžijski dolar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"falklandski funt\"
        ],
        \"FRF\": [
            \"FRF\",
            \"francoski frank\"
        ],
        \"GBP\": [
            \"GBP\",
            \"britanski funt\"
        ],
        \"GEK\": [
            \"GEK\",
            \"gruzijski bon lari\"
        ],
        \"GEL\": [
            \"GEL\",
            \"gruzijski lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"stari ganski cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"ganski cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"gibraltarski funt\"
        ],
        \"GMD\": [
            \"GMD\",
            \"gambijski dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"gvinejski frank\"
        ],
        \"GNS\": [
            \"GNS\",
            \"gvinejski sili\"
        ],
        \"GQE\": [
            \"GQE\",
            \"ekwele Ekvatorialne Gvineje\"
        ],
        \"GRD\": [
            \"GRD\",
            \"grška drahma\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"gvatemalski kecal\"
        ],
        \"GWE\": [
            \"GWE\",
            \"eskudo Portugalske Gvineje\"
        ],
        \"GWP\": [
            \"GWP\",
            \"peso Gvineje Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"gvajanski dolar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"hongkonški dolar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"honduraška lempira\"
        ],
        \"HRD\": [
            \"HRD\",
            \"hrvaški dinar\"
        ],
        \"HRK\": [
            \"HRK\",
            \"hrvaška kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"haitski gurd\"
        ],
        \"HUF\": [
            \"HUF\",
            \"madžarski forint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"indonezijska rupija\"
        ],
        \"IEP\": [
            \"IEP\",
            \"irski funt\"
        ],
        \"ILP\": [
            \"ILP\",
            \"izraelski funt\"
        ],
        \"ILS\": [
            \"₪\",
            \"izraelski šekel\"
        ],
        \"INR\": [
            \"₹\",
            \"indijska rupija\"
        ],
        \"IQD\": [
            \"IQD\",
            \"iraški dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"iranski rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"islandska krona\"
        ],
        \"ITL\": [
            \"ITL\",
            \"italijanska lira\"
        ],
        \"JMD\": [
            \"JMD\",
            \"jamajški dolar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"jordanski dinar\"
        ],
        \"JPY\": [
            \"¥\",
            \"japonski jen\"
        ],
        \"KES\": [
            \"KES\",
            \"kenijski šiling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"kirgiški som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"kamboški riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"komorski frank\"
        ],
        \"KPW\": [
            \"KPW\",
            \"severnokorejski von\"
        ],
        \"KRW\": [
            \"₩\",
            \"južnokorejski von\"
        ],
        \"KWD\": [
            \"KWD\",
            \"kuvajtski dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"kajmanski dolar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"kazahstanski tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"laoški kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libanonski funt\"
        ],
        \"LKR\": [
            \"LKR\",
            \"šrilanška rupija\"
        ],
        \"LRD\": [
            \"LRD\",
            \"liberijski dolar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"lesoški loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"litovski litas\"
        ],
        \"LTT\": [
            \"LTT\",
            \"litvanski litas\"
        ],
        \"LUC\": [
            \"LUC\",
            \"luksemburški konvertibilni frank\"
        ],
        \"LUF\": [
            \"LUF\",
            \"luksemburški frank\"
        ],
        \"LUL\": [
            \"LUL\",
            \"luksemburški finančni frank\"
        ],
        \"LVL\": [
            \"LVL\",
            \"latvijski lats\"
        ],
        \"LVR\": [
            \"LVR\",
            \"latvijski rubelj\"
        ],
        \"LYD\": [
            \"LYD\",
            \"libijski dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"maroški dirham\"
        ],
        \"MAF\": [
            \"MAF\",
            \"maroški frank\"
        ],
        \"MDL\": [
            \"MDL\",
            \"moldavijski leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"malgaški ariarij\"
        ],
        \"MGF\": [
            \"MGF\",
            \"malgaški frank\"
        ],
        \"MKD\": [
            \"MKD\",
            \"makedonski denar\"
        ],
        \"MLF\": [
            \"MLF\",
            \"malijski frank\"
        ],
        \"MMK\": [
            \"MMK\",
            \"mjanmarski kjat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"mongolski tugrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"makavska pataka\"
        ],
        \"MRO\": [
            \"MRO\",
            \"mavretanska uguija (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"mavretanska uguija\"
        ],
        \"MTL\": [
            \"MTL\",
            \"malteška lira\"
        ],
        \"MTP\": [
            \"MTP\",
            \"malteški funt\"
        ],
        \"MUR\": [
            \"MUR\",
            \"mavricijska rupija\"
        ],
        \"MVR\": [
            \"MVR\",
            \"maldivska rufija\"
        ],
        \"MWK\": [
            \"MWK\",
            \"malavijska kvača\"
        ],
        \"MXN\": [
            \"MXN\",
            \"mehiški peso\"
        ],
        \"MXP\": [
            \"MXP\",
            \"mehiški srebrni peso (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"mehiška inverzna enota (UDI)\"
        ],
        \"MYR\": [
            \"MYR\",
            \"malezijski ringit\"
        ],
        \"MZE\": [
            \"MZE\",
            \"mozambiški eskudo\"
        ],
        \"MZM\": [
            \"MZM\",
            \"stari mozambiški metikal\"
        ],
        \"MZN\": [
            \"MZN\",
            \"mozambiški metikal\"
        ],
        \"NAD\": [
            \"NAD\",
            \"namibijski dolar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"nigerijska naira\"
        ],
        \"NIC\": [
            \"NIC\",
            \"nikaraška kordova\"
        ],
        \"NIO\": [
            \"NIO\",
            \"nikaraška zlata kordova\"
        ],
        \"NLG\": [
            \"NLG\",
            \"nizozemski gulden\"
        ],
        \"NOK\": [
            \"NOK\",
            \"norveška krona\"
        ],
        \"NPR\": [
            \"NPR\",
            \"nepalska rupija\"
        ],
        \"NZD\": [
            \"NZD\",
            \"novozelandski dolar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"omanski rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"panamska balboa\"
        ],
        \"PEI\": [
            \"PEI\",
            \"perujski inti\"
        ],
        \"PEN\": [
            \"PEN\",
            \"perujski sol\"
        ],
        \"PES\": [
            \"PES\",
            \"perujski sol (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina Papue Nove Gvineje\"
        ],
        \"PHP\": [
            \"PHP\",
            \"filipinski peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"pakistanska rupija\"
        ],
        \"PLN\": [
            \"PLN\",
            \"poljski novi zlot\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"stari poljski zlot (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"portugalski eskudo\"
        ],
        \"PYG\": [
            \"PYG\",
            \"paragvajski gvarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"katarski rial\"
        ],
        \"RHD\": [
            \"RHD\",
            \"rodezijski dolar\"
        ],
        \"ROL\": [
            \"ROL\",
            \"stari romunski leu\"
        ],
        \"RON\": [
            \"RON\",
            \"romunski leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"srbski dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"ruski rubelj\"
        ],
        \"RUR\": [
            \"RUR\",
            \"ruski rubelj (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"ruandski frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"saudski rial\"
        ],
        \"SBD\": [
            \"SBD\",
            \"solomonski dolar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"sejšelska rupija\"
        ],
        \"SDD\": [
            \"SDD\",
            \"stari sudanski dinar\"
        ],
        \"SDG\": [
            \"SDG\",
            \"sudanski funt\"
        ],
        \"SDP\": [
            \"SDP\",
            \"stari sudanski funt\"
        ],
        \"SEK\": [
            \"SEK\",
            \"švedska krona\"
        ],
        \"SGD\": [
            \"SGD\",
            \"singapurski dolar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"funt Sv. Helene\"
        ],
        \"SIT\": [
            \"SIT\",
            \"slovenski tolar\"
        ],
        \"SKK\": [
            \"SKK\",
            \"slovaška krona\"
        ],
        \"SLL\": [
            \"SLL\",
            \"sieraleonski leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"somalski šiling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"surinamski dolar\"
        ],
        \"SRG\": [
            \"SRG\",
            \"surinamski gulden\"
        ],
        \"SSP\": [
            \"SSP\",
            \"južnosudanski funt\"
        ],
        \"STD\": [
            \"STD\",
            \"saotomejska dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"saotomejska dobra\"
        ],
        \"SUR\": [
            \"SUR\",
            \"sovjetski rubelj\"
        ],
        \"SVC\": [
            \"SVC\",
            \"salvadorski kolon\"
        ],
        \"SYP\": [
            \"SYP\",
            \"sirijski funt\"
        ],
        \"SZL\": [
            \"SZL\",
            \"svazijski lilangeni\"
        ],
        \"THB\": [
            \"THB\",
            \"tajski baht\"
        ],
        \"TJR\": [
            \"TJR\",
            \"tadžikistanski rubelj\"
        ],
        \"TJS\": [
            \"TJS\",
            \"tadžikistanski somoni\"
        ],
        \"TMM\": [
            \"TMM\",
            \"turkmenski manat\"
        ],
        \"TMT\": [
            \"TMT\",
            \"turkmenistanski novi manat\"
        ],
        \"TND\": [
            \"TND\",
            \"tunizijski dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"tongovska paanga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"timorski eskudo\"
        ],
        \"TRL\": [
            \"TRL\",
            \"stara turška lira\"
        ],
        \"TRY\": [
            \"TRY\",
            \"nova turška lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dolar Trinidada in Tobaga\"
        ],
        \"TWD\": [
            \"TWD\",
            \"novi tajvanski dolar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"tanzanijski šiling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"ukrajinska grivna\"
        ],
        \"UAK\": [
            \"UAK\",
            \"ukrajinski karbovanci\"
        ],
        \"UGS\": [
            \"UGS\",
            \"stari ugandski šiling (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"ugandski šiling\"
        ],
        \"USD\": [
            \"\$\",
            \"ameriški dolar\"
        ],
        \"USN\": [
            \"USN\",
            \"ameriški dolar, naslednji dan\"
        ],
        \"USS\": [
            \"USS\",
            \"ameriški dolar, isti dan\"
        ],
        \"UYP\": [
            \"UYP\",
            \"stari urugvajski peso (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"urugvajski peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"uzbeški sum\"
        ],
        \"VEB\": [
            \"VEB\",
            \"venezuelski bolivar (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"venezuelski bolivar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"venezuelski bolivar\"
        ],
        \"VND\": [
            \"₫\",
            \"vientnamski dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vanuatujski vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"samoanska tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"CFA frank BEAC\"
        ],
        \"XCD\": [
            \"XCD\",
            \"vzhodnokaribski dolar\"
        ],
        \"XEU\": [
            \"XEU\",
            \"evropska denarna enota\"
        ],
        \"XFO\": [
            \"XFO\",
            \"zlati frank\"
        ],
        \"XFU\": [
            \"XFU\",
            \"frank UIC\"
        ],
        \"XOF\": [
            \"CFA\",
            \"zahodnoafriški frank CFA\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP frank\"
        ],
        \"YDD\": [
            \"YDD\",
            \"jemenski dinar\"
        ],
        \"YER\": [
            \"YER\",
            \"jemenski rial\"
        ],
        \"YUD\": [
            \"YUD\",
            \"stari jugoslovanski dinar\"
        ],
        \"YUM\": [
            \"YUM\",
            \"novi jugoslovanski dinar\"
        ],
        \"YUN\": [
            \"YUN\",
            \"jugoslovanski konvertibilni dinar\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"južnoafriški finančni rand\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"južnoafriški rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"zambijska kvača (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"zambijska kvača\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"zairski novi zaire\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"zairski zaire\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"zimbabvejski dolar\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"zimbabvejski dolar (2009)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sl.json");
    }
}
