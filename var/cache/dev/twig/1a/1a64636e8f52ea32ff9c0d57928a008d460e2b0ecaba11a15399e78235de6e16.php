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

/* vendor/symfony/intl/Resources/data/currencies/pt_PT.json */
class __TwigTemplate_4b87a069a4c45fc1ab3f7ddcb826e0b897f492f585bd304e316c2a3e8a5550bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/pt_PT.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/pt_PT.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"dirham dos Emirados Árabes Unidos\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Afeghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afegâni afegão\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanês\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram arménio\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florim das Antilhas Holandesas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentino\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"dólar australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florim de Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azeri\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Dinar da Bósnia-Herzegóvina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco bósnio-herzegóvino conversível\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dólar barbadense\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bengali\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Franco belga (convertível)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar baremita\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundiano\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dólar bermudense\"
        ],
        \"BND\": [
            \"BND\",
            \"dólar bruneano\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasileiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dólar das Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanês\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula de Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Rublo novo bielorusso (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorrusso\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dólar belizense\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dólar canadiano\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolês\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suíço\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan offshore\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costa-riquenho\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano conversível\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo cabo-verdiano\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Libra de Chipre\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroa checa\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco jibutiano\"
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
            \"dinar argelino\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Unidad de Valor Constante (UVC) do Equador\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra egípcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreia\"
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
            \"dólar fijiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra das Ilhas Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"libra esterlina britânica\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ganês\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guineense\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal da Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dólar da Guiana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira das Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonésia\"
        ],
        \"ILS\": [
            \"₪\",
            \"sheqel novo israelita\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indiana\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquiano\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroa islandesa\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dólar jamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordaniano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"iene japonês\"
        ],
        \"KES\": [
            \"KES\",
            \"xelim queniano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som quirguiz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambojano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won norte-coreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"won sul-coreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitiano\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dólar das Ilhas Caimão\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge cazaque\"
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
            \"rupia do Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dólar liberiano\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas da Lituânia\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats da Letónia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar líbio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marroquino\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariari malgaxe\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedónio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat de Mianmar\"
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
            \"ouguiya mauritana (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritana\"
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
            \"kwacha malauiano\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Peso Plata mexicano (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Unidad de Inversion (UDI) mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaio\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical moçambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dólar namibiano\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Córdoba nicaraguano (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguano\"
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
            \"dólar neozelandês\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanense\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa do Panamá\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruano\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuásia\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia paquistanesa\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloti polaco\"
        ],
        \"PTE\": [
            \"​\",
            \"escudo português\",
            {}
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaio\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial catarense\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romeno\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar sérvio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo russo\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandês\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dólar das Ilhas Salomão\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia seichelense\"
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
            \"dólar singapuriano\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra santa-helenense\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Serra Leoa\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xelim somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dólar do Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sul-sudanesa\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé e Príncipe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libra síria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni suázi\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandês\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tajique\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turcomeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tonganesa\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dólar de Trindade e Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"novo dólar taiwanês\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xelim tanzaniano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ucraniano\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xelim ugandense\"
        ],
        \"USD\": [
            \"US\$\",
            \"dólar dos Estados Unidos\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaio\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeque\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu de Vanuatu\"
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
            \"EC\$\",
            \"dólar das Caraíbas Orientais\"
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
            \"rial iemenita\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sul-africano\"
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
        return "vendor/symfony/intl/Resources/data/currencies/pt_PT.json";
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
        \"AED\": [
            \"AED\",
            \"dirham dos Emirados Árabes Unidos\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Afeghani (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"afegâni afegão\"
        ],
        \"ALL\": [
            \"ALL\",
            \"lek albanês\"
        ],
        \"AMD\": [
            \"AMD\",
            \"dram arménio\"
        ],
        \"ANG\": [
            \"ANG\",
            \"florim das Antilhas Holandesas\"
        ],
        \"AOA\": [
            \"AOA\",
            \"kwanza angolano\"
        ],
        \"ARS\": [
            \"ARS\",
            \"peso argentino\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"dólar australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"florim de Aruba\"
        ],
        \"AZN\": [
            \"AZN\",
            \"manat azeri\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Dinar da Bósnia-Herzegóvina\"
        ],
        \"BAM\": [
            \"BAM\",
            \"marco bósnio-herzegóvino conversível\"
        ],
        \"BBD\": [
            \"BBD\",
            \"dólar barbadense\"
        ],
        \"BDT\": [
            \"BDT\",
            \"taka bengali\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Franco belga (convertível)\"
        ],
        \"BGN\": [
            \"BGN\",
            \"lev búlgaro\"
        ],
        \"BHD\": [
            \"BHD\",
            \"dinar baremita\"
        ],
        \"BIF\": [
            \"BIF\",
            \"franco burundiano\"
        ],
        \"BMD\": [
            \"BMD\",
            \"dólar bermudense\"
        ],
        \"BND\": [
            \"BND\",
            \"dólar bruneano\"
        ],
        \"BOB\": [
            \"BOB\",
            \"boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"real brasileiro\"
        ],
        \"BSD\": [
            \"BSD\",
            \"dólar das Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"ngultrum butanês\"
        ],
        \"BWP\": [
            \"BWP\",
            \"pula de Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Rublo novo bielorusso (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"rublo bielorrusso\"
        ],
        \"BZD\": [
            \"BZD\",
            \"dólar belizense\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"dólar canadiano\"
        ],
        \"CDF\": [
            \"CDF\",
            \"franco congolês\"
        ],
        \"CHF\": [
            \"CHF\",
            \"franco suíço\"
        ],
        \"CLP\": [
            \"CLP\",
            \"peso chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"yuan offshore\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"yuan\"
        ],
        \"COP\": [
            \"COP\",
            \"peso colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"colon costa-riquenho\"
        ],
        \"CUC\": [
            \"CUC\",
            \"peso cubano conversível\"
        ],
        \"CUP\": [
            \"CUP\",
            \"peso cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"escudo cabo-verdiano\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Libra de Chipre\"
        ],
        \"CZK\": [
            \"CZK\",
            \"coroa checa\"
        ],
        \"DJF\": [
            \"DJF\",
            \"franco jibutiano\"
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
            \"dinar argelino\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Unidad de Valor Constante (UVC) do Equador\"
        ],
        \"EGP\": [
            \"EGP\",
            \"libra egípcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"nakfa eritreia\"
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
            \"dólar fijiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"libra das Ilhas Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"libra esterlina britânica\"
        ],
        \"GEL\": [
            \"GEL\",
            \"lari georgiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"cedi ganês\"
        ],
        \"GIP\": [
            \"GIP\",
            \"libra de Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"dalasi gambiano\"
        ],
        \"GNF\": [
            \"GNF\",
            \"franco guineense\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"quetzal da Guatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"dólar da Guiana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"lempira das Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"kuna croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"gourde haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"forint húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"rupia indonésia\"
        ],
        \"ILS\": [
            \"₪\",
            \"sheqel novo israelita\"
        ],
        \"INR\": [
            \"₹\",
            \"rupia indiana\"
        ],
        \"IQD\": [
            \"IQD\",
            \"dinar iraquiano\"
        ],
        \"IRR\": [
            \"IRR\",
            \"rial iraniano\"
        ],
        \"ISK\": [
            \"ISK\",
            \"coroa islandesa\"
        ],
        \"JMD\": [
            \"JMD\",
            \"dólar jamaicano\"
        ],
        \"JOD\": [
            \"JOD\",
            \"dinar jordaniano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"iene japonês\"
        ],
        \"KES\": [
            \"KES\",
            \"xelim queniano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"som quirguiz\"
        ],
        \"KHR\": [
            \"KHR\",
            \"riel cambojano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"franco comoriano\"
        ],
        \"KPW\": [
            \"KPW\",
            \"won norte-coreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"won sul-coreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"dinar kuwaitiano\"
        ],
        \"KYD\": [
            \"KYD\",
            \"dólar das Ilhas Caimão\"
        ],
        \"KZT\": [
            \"KZT\",
            \"tenge cazaque\"
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
            \"rupia do Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"dólar liberiano\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas da Lituânia\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats da Letónia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"dinar líbio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"dirham marroquino\"
        ],
        \"MDL\": [
            \"MDL\",
            \"leu moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"ariari malgaxe\"
        ],
        \"MKD\": [
            \"MKD\",
            \"dinar macedónio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"kyat de Mianmar\"
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
            \"ouguiya mauritana (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"ouguiya mauritana\"
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
            \"kwacha malauiano\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"peso mexicano\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Peso Plata mexicano (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Unidad de Inversion (UDI) mexicana\"
        ],
        \"MYR\": [
            \"MYR\",
            \"ringgit malaio\"
        ],
        \"MZN\": [
            \"MZN\",
            \"metical moçambicano\"
        ],
        \"NAD\": [
            \"NAD\",
            \"dólar namibiano\"
        ],
        \"NGN\": [
            \"NGN\",
            \"naira nigeriana\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Córdoba nicaraguano (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"córdoba nicaraguano\"
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
            \"dólar neozelandês\"
        ],
        \"OMR\": [
            \"OMR\",
            \"rial omanense\"
        ],
        \"PAB\": [
            \"PAB\",
            \"balboa do Panamá\"
        ],
        \"PEN\": [
            \"PEN\",
            \"sol peruano\"
        ],
        \"PGK\": [
            \"PGK\",
            \"kina papuásia\"
        ],
        \"PHP\": [
            \"PHP\",
            \"peso filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"rupia paquistanesa\"
        ],
        \"PLN\": [
            \"PLN\",
            \"zloti polaco\"
        ],
        \"PTE\": [
            \"​\",
            \"escudo português\",
            {}
        ],
        \"PYG\": [
            \"PYG\",
            \"guarani paraguaio\"
        ],
        \"QAR\": [
            \"QAR\",
            \"rial catarense\"
        ],
        \"RON\": [
            \"RON\",
            \"leu romeno\"
        ],
        \"RSD\": [
            \"RSD\",
            \"dinar sérvio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"rublo russo\"
        ],
        \"RWF\": [
            \"RWF\",
            \"franco ruandês\"
        ],
        \"SAR\": [
            \"SAR\",
            \"rial saudita\"
        ],
        \"SBD\": [
            \"SBD\",
            \"dólar das Ilhas Salomão\"
        ],
        \"SCR\": [
            \"SCR\",
            \"rupia seichelense\"
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
            \"dólar singapuriano\"
        ],
        \"SHP\": [
            \"SHP\",
            \"libra santa-helenense\"
        ],
        \"SLL\": [
            \"SLL\",
            \"leone de Serra Leoa\"
        ],
        \"SOS\": [
            \"SOS\",
            \"xelim somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"dólar do Suriname\"
        ],
        \"SSP\": [
            \"SSP\",
            \"libra sul-sudanesa\"
        ],
        \"STN\": [
            \"STN\",
            \"dobra de São Tomé e Príncipe\"
        ],
        \"SYP\": [
            \"SYP\",
            \"libra síria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"lilangeni suázi\"
        ],
        \"THB\": [
            \"฿\",
            \"baht tailandês\"
        ],
        \"TJS\": [
            \"TJS\",
            \"somoni tajique\"
        ],
        \"TMT\": [
            \"TMT\",
            \"manat turcomeno\"
        ],
        \"TND\": [
            \"TND\",
            \"dinar tunisino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"paʻanga tonganesa\"
        ],
        \"TRY\": [
            \"TRY\",
            \"lira turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"dólar de Trindade e Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"novo dólar taiwanês\"
        ],
        \"TZS\": [
            \"TZS\",
            \"xelim tanzaniano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"hryvnia ucraniano\"
        ],
        \"UGX\": [
            \"UGX\",
            \"xelim ugandense\"
        ],
        \"USD\": [
            \"US\$\",
            \"dólar dos Estados Unidos\"
        ],
        \"UYU\": [
            \"UYU\",
            \"peso uruguaio\"
        ],
        \"UZS\": [
            \"UZS\",
            \"som uzbeque\"
        ],
        \"VEF\": [
            \"VEF\",
            \"bolívar (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"dong vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"vatu de Vanuatu\"
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
            \"EC\$\",
            \"dólar das Caraíbas Orientais\"
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
            \"rial iemenita\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"rand sul-africano\"
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
", "vendor/symfony/intl/Resources/data/currencies/pt_PT.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/pt_PT.json");
    }
}
