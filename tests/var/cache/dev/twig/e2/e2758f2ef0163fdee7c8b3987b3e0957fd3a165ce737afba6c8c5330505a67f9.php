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

/* vendor/symfony/intl/Resources/data/currencies/gl.json */
class __TwigTemplate_588de0bc402679cbe3e6d64a0a135c7c8519a92d73ad3af656df4859755228a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/gl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/gl.json"));

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
            \"dirham dos Emiratos Árabes Unidos\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afgán\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanés\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armenio\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florín das Antillas Neerlandesas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Peso arxentino (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso arxentino\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dólar australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florín de Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat acerbaixano\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertible de Bosnia e Hercegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dólar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka de Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Franco belga (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Franco belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Franco belga (financeiro)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar de Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundiano\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dólar bermudano\"
        ],
        \"BND\": [
            \"BND\",
            \"dólar de Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Peso boliviano\"
        ],
        \"BOV\": [
            \"BOV\",
            \"MVDOL boliviano\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Cruzeiro novo brasileiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Cruzado brasileiro\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Cruzeiro brasileiro (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasileiro\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Cruzado novo brasileiro\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Cruzeiro brasileiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dólar bahamés\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanés\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswaniano\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo belaruso\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rublo bielorruso (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dólar belizense\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dólar canadense\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolés\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suízo\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Unidades de fomento chilenas\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"iuán chinés (extracontinental)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"iuán chinés\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón costarriqueño\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano convertible\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo caboverdiano\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroa checa\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Marco alemán\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco djibutiano\"
        ],
        \"DKK\": [
            \"DKK\",
            \"coroa dinamarquesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar alxeriano\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Sucre ecuatoriano\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Unidade de valor constante ecuatoriana\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra exipcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreo\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Peseta española (conta A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Peseta española (conta convertible)\"
        ],
        \"ESP\": [
            \"₧\",
            \"Peseta española\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etíope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dólar fixiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra das Illas Malvinas\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franco francés\"
        ],
        \"GBP\": [
            \"£\",
            \"libra esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari xeorxiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanés\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra xibraltareña\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guineano\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Syli guineano\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Ekwele guineana\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Dracma grego\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalteco\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dólar güianés\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondureño\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiana\"
        ],
        \"HUF\": [
            \"HUF\",
            \"florín húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonesia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Libra irlandesa\"
        ],
        \"ILS\": [
            \"₪\",
            \"novo shequel israelí\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia india\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquí\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroa islandesa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Lira italiana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dólar xamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar xordano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"ien xaponés\"
        ],
        \"KES\": [
            \"KES\",
            \"xilin kenyano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguiz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel camboxano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won norcoreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"won surcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaití\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dólar das Illas Caimán\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazako\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libra libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia srilankesa\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dólar liberiano\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti de Lesoto\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas lituana\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Franco convertible luxemburgués\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Franco luxemburgués\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Franco financeiro luxemburgués\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats letón\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marroquí\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Franco marroquí\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaxe\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedonio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat birmano\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca macaense\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya mauritano (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritano\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriciana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia maldivana\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha de Malawi\"
        ],
        \"MXN\": [
            \"\$MX\",
            \"peso mexicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Peso de prata mexicano (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Unidade de inversión mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaio\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dólar namibio\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nixeriano\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Córdoba nicaragüense\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguano\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Florín holandés\"
        ],
        \"NOK\": [
            \"NOK\",
            \"coroa norueguesa\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalesa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dólar neozelandés\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omaní\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameño\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Inti peruano\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruano\"
        ],
        \"PES\": [
            \"PES\",
            \"Sol peruano (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina de Papúa-Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia paquistaní\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polaco\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Escudo portugués\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguaio\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatarí\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanés\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo ruso\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rublo ruso (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandés\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dólar das Illas Salomón\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia de Seychelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libra sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"coroa sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dólar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra de Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Serra Leoa\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xilin somalí\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dólar surinamés\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sursudanesa\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra de São Tomé e Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de San Tomé e Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Rublo soviético\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Colón salvadoreño\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libra siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni de Eswatini\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandés\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni taxiquistano\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisiano\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongano\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dólar trinitense\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"novo dólar taiwanés\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xilin tanzano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hrivna ucraína\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xilin ugandés\"
        ],
        \"USD\": [
            \"\$\",
            \"dólar estadounidense\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Peso en unidades indexadas uruguaio\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Peso uruguaio (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaio\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeko\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Bolívar venezolano (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar venezolano (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar venezolano\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatiano\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA (BEAC)\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dólar do Caribe Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA (BCEAO)\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"rial iemení\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand surafricano\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha zambiano (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiano\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/gl.json";
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
            \"dirham dos Emiratos Árabes Unidos\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afgani afgán\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanés\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram armenio\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florín das Antillas Neerlandesas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Peso arxentino (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso arxentino\"
        ],
        \"AUD\": [
            \"A\$\",
            \"dólar australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florín de Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat acerbaixano\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco convertible de Bosnia e Hercegovina\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dólar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka de Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Franco belga (convertible)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Franco belga\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Franco belga (financeiro)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar de Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundiano\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dólar bermudano\"
        ],
        \"BND\": [
            \"BND\",
            \"dólar de Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Peso boliviano\"
        ],
        \"BOV\": [
            \"BOV\",
            \"MVDOL boliviano\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Cruzeiro novo brasileiro (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Cruzado brasileiro\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Cruzeiro brasileiro (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasileiro\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Cruzado novo brasileiro\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Cruzeiro brasileiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dólar bahamés\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanés\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula botswaniano\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo belaruso\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rublo bielorruso (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dólar belizense\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dólar canadense\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolés\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suízo\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Unidades de fomento chilenas\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"iuán chinés (extracontinental)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"iuán chinés\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colón costarriqueño\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano convertible\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo caboverdiano\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroa checa\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Marco alemán\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco djibutiano\"
        ],
        \"DKK\": [
            \"DKK\",
            \"coroa dinamarquesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"peso dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"dinar alxeriano\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Sucre ecuatoriano\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Unidade de valor constante ecuatoriana\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra exipcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreo\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Peseta española (conta A)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Peseta española (conta convertible)\"
        ],
        \"ESP\": [
            \"₧\",
            \"Peseta española\",
            {}
        ],
        \"ETB\": [
            \"ETB\",
            \"birr etíope\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"dólar fixiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra das Illas Malvinas\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franco francés\"
        ],
        \"GBP\": [
            \"£\",
            \"libra esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari xeorxiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ghanés\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra xibraltareña\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guineano\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Syli guineano\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Ekwele guineana\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Dracma grego\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal guatemalteco\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dólar güianés\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira hondureño\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiana\"
        ],
        \"HUF\": [
            \"HUF\",
            \"florín húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonesia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Libra irlandesa\"
        ],
        \"ILS\": [
            \"₪\",
            \"novo shequel israelí\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia india\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquí\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroa islandesa\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Lira italiana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dólar xamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar xordano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"ien xaponés\"
        ],
        \"KES\": [
            \"KES\",
            \"xilin kenyano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som kirguiz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel camboxano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won norcoreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"won surcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaití\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dólar das Illas Caimán\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge kazako\"
        ],
        \"LAK\": [
            \"LAK\",
            \"kip laosiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"libra libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"rupia srilankesa\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dólar liberiano\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Loti de Lesoto\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas lituana\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Franco convertible luxemburgués\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Franco luxemburgués\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Franco financeiro luxemburgués\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats letón\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar libio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marroquí\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Franco marroquí\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariary malgaxe\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedonio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat birmano\"
        ],
        \"MNT\": [
            \"MNT\",
            \"tugrik mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"pataca macaense\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya mauritano (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritano\"
        ],
        \"MUR\": [
            \"MUR\",
            \"rupia mauriciana\"
        ],
        \"MVR\": [
            \"MVR\",
            \"rupia maldivana\"
        ],
        \"MWK\": [
            \"MWK\",
            \"kwacha de Malawi\"
        ],
        \"MXN\": [
            \"\$MX\",
            \"peso mexicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Peso de prata mexicano (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Unidade de inversión mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaio\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical mozambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dólar namibio\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nixeriano\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Córdoba nicaragüense\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguano\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Florín holandés\"
        ],
        \"NOK\": [
            \"NOK\",
            \"coroa norueguesa\"
        ],
        \"NPR\": [
            \"NPR\",
            \"rupia nepalesa\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"dólar neozelandés\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omaní\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa panameño\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Inti peruano\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruano\"
        ],
        \"PES\": [
            \"PES\",
            \"Sol peruano (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina de Papúa-Nova Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia paquistaní\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloty polaco\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Escudo portugués\"
        ],
        \"PYG\": [
            \"PYG\",
            \"guaraní paraguaio\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial qatarí\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romanés\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar serbio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo ruso\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Rublo ruso (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandés\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dólar das Illas Salomón\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia de Seychelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"libra sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"coroa sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"dólar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra de Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Serra Leoa\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xilin somalí\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dólar surinamés\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sursudanesa\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra de São Tomé e Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de San Tomé e Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Rublo soviético\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Colón salvadoreño\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libra siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni de Eswatini\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandés\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni taxiquistano\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turkmeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisiano\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tongano\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dólar trinitense\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"novo dólar taiwanés\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xilin tanzano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hrivna ucraína\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xilin ugandés\"
        ],
        \"USD\": [
            \"\$\",
            \"dólar estadounidense\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Peso en unidades indexadas uruguaio\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Peso uruguaio (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaio\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeko\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Bolívar venezolano (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar venezolano (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar venezolano\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu vanuatiano\"
        ],
        \"WST\": [
            \"WST\",
            \"tala samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"franco CFA (BEAC)\"
        ],
        \"XCD\": [
            \"XCD\",
            \"dólar do Caribe Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"franco CFA (BCEAO)\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"franco CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"rial iemení\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand surafricano\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Kwacha zambiano (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"kwacha zambiano\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/gl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/gl.json");
    }
}
