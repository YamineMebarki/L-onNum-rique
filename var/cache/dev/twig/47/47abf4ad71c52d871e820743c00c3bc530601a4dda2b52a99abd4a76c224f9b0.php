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

/* vendor/symfony/intl/Resources/data/currencies/so.json */
class __TwigTemplate_f304c43524b820d3035a5b4ffba659588807b28686f95dc0c7807dbc2f118f6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/so.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/so.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirhamka Isutaga Imaaraatka Carabta\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgan Afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lekta Albaniya\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Daraamka Armeniya\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Galdarka Nadarlaan Antiliyaan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kawansada Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Beesada Arjentiin\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Doolarka Astaraaliya\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Foloorinta Aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manaata Asarbeyjan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Konfatibal Maakta Bosnia-Hersogofina\"
        ],
        \"BBD\": [
            \"DBB\",
            \"Doolarka Barbaadiyaan\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangledesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lefta Bulgariya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaarka Baxreyn\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranka Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Doolarka Barmuuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Doolarka Buruney\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolifiyanada Bolifiya\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Realka Barasil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Doolarka Bahamaas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Nugultaramta Butan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Buulada Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rubalka Belarus\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Doolarka Beelisa\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Doolarka Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranka Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranka Iswiska\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Beesada Jili\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuwanta Shiinaha (Ofshoor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwanta Shiinaha\"
        ],
        \"COP\": [
            \"COP\",
            \"Beesada Kolombiya\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kolonka Kosta Riika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Beesada Konfatibal ee Kuuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Beesada Kuuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo Keyb Farde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Korunada Jeek\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faran Jabuuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Koronka Danishka\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Beesada Dominiika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaarka Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Bowndka Masar\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfada Eritriya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birta Itoobbiya\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuuroo\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Doolarka Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Bowndka Faalklaan Aylaanis\"
        ],
        \"GBP\": [
            \"£\",
            \"Bowndka Biritishka\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Laariga Joorjiya\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sedida Gana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Bowndka Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasida Gambiya\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Faranka Gini\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Kuwestalka Guwatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Doolarka Guyanes\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Doolarka Hoon Koon\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lembirada Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kunada Korooshiya\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Goordada Hiyati\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forintiska Hangari\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rubiah Indonesiya\"
        ],
        \"ILS\": [
            \"₪\",
            \"Niyuu Shekelka Israaiil\"
        ],
        \"INR\": [
            \"₹\",
            \"Rubiga Hindiya\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinaarka Ciraaq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riyaalka Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Koronada Eysland\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Doolarka Jamayka\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinaarka Urdun\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yenta Jabaan\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingka Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Somta Kiyrgiystan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riyf kambodiya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranka Komoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Wonka Waqooyiga Kuuriya\"
        ],
        \"KRW\": [
            \"₩\",
            \"Wonka Koonfur Kuuriya\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinaarka Kuweyt\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Doolarka Kayman Aylaanis\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tengeda Kasakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kib Laoti\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Bowndka Lubnaan\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rubiga Siri lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Doolarka Liberiya\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaarka Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirhamka Moroko\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leeyuuda Moldofa\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Arayrida Madagaskar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denaarka Masedoniya\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kayatda Mayanmaar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrikta Mongoliya\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Bataka Makana\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Oogiya Mawritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Oogiyada Mawritaaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rubiga Mowrishiya\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyada Maldifiya\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kawajada Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Beesada Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringitda Malayshiya\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikalka Mosambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Doolarka Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nairada Neyjeeriya\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Kordobada Nikargow\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Koronka Norway\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rubiga Nebal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Doolarka Niyuu Siyalaan\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riyaalka Cumaan\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balbow Banama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Solsha Beeru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kinada Babua Niyuu Gini\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Biso Filibin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rubiga Bakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Solotida Bolaan\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guranida Baraguway\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riyaalka Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Liyuuda Romaniya\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinaarka Serbiya\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubalka Ruushka\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranka Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaalka Sacuudiga\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Doolarka Solomon Aylaanis\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rubiga Siisalis\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Bowndka Suudaan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Koronka Isweden\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Doolarka Singabuur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Bowndka St Helen\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leonka Sira Leon\"
        ],
        \"SOS\": [
            \"S\",
            \"Shilingka Soomaaliya\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Doolarka Surinamees\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Bowndka Koonfurta Suudaan\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Tome & Birinsibi\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Bowndka Suuriya\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeenida iswaasi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baatka Taylaan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoonida Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manaata Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaarka Tunisiya\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Ba’angada Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Liirada Turkiga\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Doolarka Tirinidad iyo Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Doolarka Taywaanta Cusub\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingka Tansaaniya\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hirfiniyada Yukreeyn\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingka Yugandha\"
        ],
        \"USD\": [
            \"US\$\",
            \"Doolarka Mareeykanka\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Beesada Urugway\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Somta Usbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolifar Fenesuala (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolifarada Fenesuwela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dongta Fitnaam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Fatu Fanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samao\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranka CFA ee Bartamaha Afrika\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Doolarka Iist Kaaribyan\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranka CFA Galbeedka Afrika\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Faranka CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Riyaalka Yemen\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randka Koonfur Afrika\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawajada Sambiya\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/so.json";
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
            \"Dirhamka Isutaga Imaaraatka Carabta\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgan Afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lekta Albaniya\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Daraamka Armeniya\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Galdarka Nadarlaan Antiliyaan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kawansada Angola\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Beesada Arjentiin\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Doolarka Astaraaliya\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Foloorinta Aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manaata Asarbeyjan\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Konfatibal Maakta Bosnia-Hersogofina\"
        ],
        \"BBD\": [
            \"DBB\",
            \"Doolarka Barbaadiyaan\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangledesh\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lefta Bulgariya\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinaarka Baxreyn\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Faranka Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Doolarka Barmuuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Doolarka Buruney\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Bolifiyanada Bolifiya\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Realka Barasil\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Doolarka Bahamaas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Nugultaramta Butan\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Buulada Botswana\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rubalka Belarus\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Doolarka Beelisa\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Doolarka Kanada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Faranka Kongo\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Faranka Iswiska\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Beesada Jili\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuwanta Shiinaha (Ofshoor)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuwanta Shiinaha\"
        ],
        \"COP\": [
            \"COP\",
            \"Beesada Kolombiya\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Kolonka Kosta Riika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Beesada Konfatibal ee Kuuba\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Beesada Kuuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo Keyb Farde\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Korunada Jeek\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faran Jabuuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Koronka Danishka\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Beesada Dominiika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinaarka Aljeriya\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Bowndka Masar\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfada Eritriya\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birta Itoobbiya\"
        ],
        \"EUR\": [
            \"€\",
            \"Yuuroo\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Doolarka Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Bowndka Faalklaan Aylaanis\"
        ],
        \"GBP\": [
            \"£\",
            \"Bowndka Biritishka\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Laariga Joorjiya\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sedida Gana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Bowndka Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasida Gambiya\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Faranka Gini\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Kuwestalka Guwatemala\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Doolarka Guyanes\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Doolarka Hoon Koon\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lembirada Honduras\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kunada Korooshiya\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Goordada Hiyati\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forintiska Hangari\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rubiah Indonesiya\"
        ],
        \"ILS\": [
            \"₪\",
            \"Niyuu Shekelka Israaiil\"
        ],
        \"INR\": [
            \"₹\",
            \"Rubiga Hindiya\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinaarka Ciraaq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riyaalka Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Koronada Eysland\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Doolarka Jamayka\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinaarka Urdun\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yenta Jabaan\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilingka Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Somta Kiyrgiystan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riyf kambodiya\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranka Komoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Wonka Waqooyiga Kuuriya\"
        ],
        \"KRW\": [
            \"₩\",
            \"Wonka Koonfur Kuuriya\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinaarka Kuweyt\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Doolarka Kayman Aylaanis\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tengeda Kasakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kib Laoti\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Bowndka Lubnaan\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rubiga Siri lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Doolarka Liberiya\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinaarka Libya\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirhamka Moroko\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leeyuuda Moldofa\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Arayrida Madagaskar\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denaarka Masedoniya\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kayatda Mayanmaar\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrikta Mongoliya\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Bataka Makana\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Oogiya Mawritaniya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Oogiyada Mawritaaniya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rubiga Mowrishiya\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyada Maldifiya\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kawajada Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Beesada Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringitda Malayshiya\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikalka Mosambik\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Doolarka Namibiya\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nairada Neyjeeriya\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Kordobada Nikargow\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Koronka Norway\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rubiga Nebal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Doolarka Niyuu Siyalaan\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riyaalka Cumaan\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balbow Banama\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Solsha Beeru\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kinada Babua Niyuu Gini\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Biso Filibin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rubiga Bakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Solotida Bolaan\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guranida Baraguway\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riyaalka Qatar\"
        ],
        \"RON\": [
            \"RON\",
            \"Liyuuda Romaniya\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinaarka Serbiya\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubalka Ruushka\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Faranka Ruwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyaalka Sacuudiga\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Doolarka Solomon Aylaanis\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rubiga Siisalis\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Bowndka Suudaan\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Koronka Isweden\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Doolarka Singabuur\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Bowndka St Helen\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leonka Sira Leon\"
        ],
        \"SOS\": [
            \"S\",
            \"Shilingka Soomaaliya\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Doolarka Surinamees\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Bowndka Koonfurta Suudaan\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra Sao Tome & Birinsibi\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Bowndka Suuriya\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeenida iswaasi\"
        ],
        \"THB\": [
            \"THB\",
            \"Baatka Taylaan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoonida Tajikistan\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manaata Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinaarka Tunisiya\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Ba’angada Tonga\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Liirada Turkiga\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Doolarka Tirinidad iyo Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Doolarka Taywaanta Cusub\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilingka Tansaaniya\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hirfiniyada Yukreeyn\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilingka Yugandha\"
        ],
        \"USD\": [
            \"US\$\",
            \"Doolarka Mareeykanka\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Beesada Urugway\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Somta Usbekistan\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolifar Fenesuala (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolifarada Fenesuwela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dongta Fitnaam\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Fatu Fanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samao\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranka CFA ee Bartamaha Afrika\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Doolarka Iist Kaaribyan\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranka CFA Galbeedka Afrika\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Faranka CFP\"
        ],
        \"YER\": [
            \"YER\",
            \"Riyaalka Yemen\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randka Koonfur Afrika\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kawajada Sambiya\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/so.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/so.json");
    }
}
