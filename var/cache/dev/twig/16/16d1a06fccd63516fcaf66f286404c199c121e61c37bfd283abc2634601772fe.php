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

/* vendor/symfony/intl/Resources/data/currencies/qu.json */
class __TwigTemplate_308bc3e26f78be35221fb0f589f9ed10d8fba7a3e17e194208bcf81770f2cfc2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/qu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/qu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"AED\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgani Afgano\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek albanés\"
        ],
        \"AMD\": [
            \"AMD\",
            \"AMD\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Florín Antillano Neerlandés\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angoleño\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentino\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dólar Australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florín Arubeño\"
        ],
        \"AZN\": [
            \"AZN\",
            \"AZN\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Marco Bosnioherzegovino\"
        ],
        \"BBD\": [
            \"BBG\",
            \"Dólar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesí\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar Bareiní\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franco Burundés\"
        ],
        \"BMD\": [
            \"DBM\",
            \"Dólar Bermudeño\"
        ],
        \"BND\": [
            \"BND\",
            \"Dólar de Brunéi\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Brasileño\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dólar Bahameño\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Butanés\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswano\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Nuevo Rublo Bielorruso\"
        ],
        \"BZD\": [
            \"DBZ\",
            \"Dólar Beliceño\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"Dólar Canadiense\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franco Congoleño\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franco Suizo\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan Chino (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Chino\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón Costarricense\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Cubano Convertible\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Caboverdiano\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Corona Checa\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franco Yibutiano\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Corona Danesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Argelino\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Libra Egipcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritreano\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Etíope\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dólar Fiyiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Libra Malvinense\"
        ],
        \"GBP\": [
            \"£\",
            \"Libra Esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ganés\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Libra Gibraltareña\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franco Guineano\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemalteco\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dólar Guyanés\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Hondureño\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Florín Húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Nuevo Séquel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Iraquí\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iraní\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Corona Islandesa\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dólar Jamaiquino\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Jordano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Japonés\"
        ],
        \"KES\": [
            \"KES\",
            \"Chelín Keniano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Camboyano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franco Comorense\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Norcoreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Surcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwaití\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dólar de las Islas Caimán\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kazajo\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Laosiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libra Libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia de Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dólar Liberiano\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dírham Marroquí\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malgache\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Dinar Macedonio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Birmano\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Macaense\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Uguiya Mauritano\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia de Mauricio\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rupia de Maldivas\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malauí\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Mexicano\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malayo\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mozambiqueño\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dólar Namibio\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeriano\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdova Nicaragüense\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Corona Noruega\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia Nepalí\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dólar Neozelandés\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Omaní\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panameño\"
        ],
        \"PEN\": [
            \"S\\/\",
            \"Sol Peruano\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papuano\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso Filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia Pakistaní\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guaraní Paraguayo\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riyal Catarí\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Rumano\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rublo Ruso\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franco Ruandés\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Saudí\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dólar de las Islas Salomón\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia de Seychelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Libra Sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Corona Sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dólar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Libra de Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone de Sierra Leona\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Chelín Somalí\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dólar Surinamés\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Libra Sursudanesa\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Santotomense\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Libra Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swazi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baht Tailandés\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tayiko\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turcomano\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunecino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tongano\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira Turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dólar de Trinidad y Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Nuevo Dólar Taiwanés\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Chelín Tanzano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Grivna\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Chelín Ugandés\"
        ],
        \"USD\": [
            \"\$US\",
            \"Dólar Americano\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguayo\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Ubzeko\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar Venezolano\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong Vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franco CFA de África Central\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dólar del Caribe Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franco CFA de África Occidental\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franco CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yemení\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Sudafricano\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Zambiano\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/qu.json";
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
            \"AED\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgani Afgano\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek albanés\"
        ],
        \"AMD\": [
            \"AMD\",
            \"AMD\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Florín Antillano Neerlandés\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angoleño\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentino\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dólar Australiano\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florín Arubeño\"
        ],
        \"AZN\": [
            \"AZN\",
            \"AZN\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Marco Bosnioherzegovino\"
        ],
        \"BBD\": [
            \"BBG\",
            \"Dólar de Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesí\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar Bareiní\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franco Burundés\"
        ],
        \"BMD\": [
            \"DBM\",
            \"Dólar Bermudeño\"
        ],
        \"BND\": [
            \"BND\",
            \"Dólar de Brunéi\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Brasileño\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dólar Bahameño\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Butanés\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswano\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Nuevo Rublo Bielorruso\"
        ],
        \"BZD\": [
            \"DBZ\",
            \"Dólar Beliceño\"
        ],
        \"CAD\": [
            \"\$CA\",
            \"Dólar Canadiense\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franco Congoleño\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franco Suizo\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chileno\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan Chino (offshore)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Chino\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Colombiano\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón Costarricense\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Cubano Convertible\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Cubano\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Caboverdiano\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Corona Checa\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franco Yibutiano\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Corona Danesa\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominicano\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Argelino\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Libra Egipcia\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritreano\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Etíope\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dólar Fiyiano\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Libra Malvinense\"
        ],
        \"GBP\": [
            \"£\",
            \"Libra Esterlina\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgiano\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ganés\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Libra Gibraltareña\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franco Guineano\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemalteco\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dólar Guyanés\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dólar de Hong Kong\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Hondureño\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Croata\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haitiano\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Florín Húngaro\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia Indonesia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Nuevo Séquel\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia India\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Iraquí\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iraní\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Corona Islandesa\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dólar Jamaiquino\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Jordano\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yen Japonés\"
        ],
        \"KES\": [
            \"KES\",
            \"Chelín Keniano\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kirguís\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Camboyano\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franco Comorense\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Norcoreano\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Surcoreano\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwaití\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dólar de las Islas Caimán\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kazajo\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Laosiano\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libra Libanesa\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia de Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dólar Liberiano\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libio\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dírham Marroquí\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldavo\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malgache\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Dinar Macedonio\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Birmano\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mongol\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Macaense\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Uguiya Mauritano\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia de Mauricio\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rupia de Maldivas\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malauí\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Mexicano\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malayo\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mozambiqueño\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dólar Namibio\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeriano\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdova Nicaragüense\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Corona Noruega\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia Nepalí\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dólar Neozelandés\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Omaní\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panameño\"
        ],
        \"PEN\": [
            \"S\\/\",
            \"Sol Peruano\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papuano\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso Filipino\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia Pakistaní\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guaraní Paraguayo\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riyal Catarí\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Rumano\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbio\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rublo Ruso\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franco Ruandés\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Saudí\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dólar de las Islas Salomón\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia de Seychelles\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Libra Sudanesa\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Corona Sueca\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dólar de Singapur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Libra de Santa Helena\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone de Sierra Leona\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Chelín Somalí\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dólar Surinamés\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Libra Sursudanesa\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Santotomense\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Libra Siria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swazi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baht Tailandés\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tayiko\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turcomano\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunecino\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tongano\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira Turca\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dólar de Trinidad y Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Nuevo Dólar Taiwanés\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Chelín Tanzano\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Grivna\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Chelín Ugandés\"
        ],
        \"USD\": [
            \"\$US\",
            \"Dólar Americano\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguayo\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Ubzeko\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar Venezolano\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong Vietnamita\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoano\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franco CFA de África Central\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dólar del Caribe Oriental\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franco CFA de África Occidental\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franco CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yemení\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Sudafricano\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Zambiano\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/qu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/qu.json");
    }
}
