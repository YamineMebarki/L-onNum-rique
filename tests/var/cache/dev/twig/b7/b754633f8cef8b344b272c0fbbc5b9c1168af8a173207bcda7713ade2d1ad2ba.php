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

/* vendor/symfony/intl/Resources/data/currencies/af.json */
class __TwigTemplate_a0a3f597a4cdc7b5010261d200dc20f1654dd354637db19c021f9a0028bbe3b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/af.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/af.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Verenigde Arabiese Emirate-dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgaanse afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanese lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armeense dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Nederlands-Antilliaanse gulde\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolese kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentynse peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Australiese dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubaanse floryn\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbeidjaanse manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnies-Herzegowiniese omskakelbare marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados-dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesjiese taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgaarse lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreinse dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundiese frank\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda-dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"Broeneise dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviaanse boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brasilliaanse reaal\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamiaanse dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhoetanese ngoeltroem\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana-pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusiese roebel\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belo-Russiese roebel (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliziese dollar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanadese dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongolese frank\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Switserse frank\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Chileense peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Chinese joean (buiteland)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinese joean\"
        ],
        \"COP\": [
            \"COP\",
            \"Colombiaanse peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Costa Ricaanse colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubaanse omskakelbare peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubaanse peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kaap Verdiese escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Tsjeggiese kroon\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboeti-frank\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Deense kroon\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikaanse peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algeriese dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egiptiese pond\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrese nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopiese birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidjiaanse dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falkland-eilandse pond\"
        ],
        \"GBP\": [
            \"£\",
            \"Britse pond\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgiese lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ghanese cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ghanese cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltarese pond\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiese dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinese frank\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Guinese syli\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Guatemalaanse quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Guyanese dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hongkongse dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Hondurese lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatiese kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haïtiaanse gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Hongaarse florint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesiese roepia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Israeliese nuwe sikkel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indiese roepee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irakse dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranse rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Yslandse kroon\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italiaanse lier\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikaanse dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordaniese dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japannese jen\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniaanse sjieling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgisiese som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodjaanse riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Comoraanse frank\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Noord-Koreaanse won\"
        ],
        \"KRW\": [
            \"₩\",
            \"Suid-Koreaanse won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Koeweitse dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Cayman-eilandse dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazakse tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laosiaanse kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanese pond\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankaanse roepee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiese dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litause litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lettiese lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libiese dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokkaanse dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldowiese leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malgassiese ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Macedoniese denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mianmese kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongoolse toegrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Macaose pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritaniese ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritaniese ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauritiaanse roepee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Malediviese rufia\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawiese kwacha\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksikaanse peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Maleisiese ringgit\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mosambiekse metical (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mosambiekse metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiese dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriese naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nicaraguaanse córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Noorse kroon\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalese roepee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Nieu-Seelandse dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omaanse rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamese balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruaanse sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papoea-Nieu-Guinese kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippynse peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistanse roepee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Poolse zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguaanse guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katarrese rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Roemeense leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serwiese dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russiese roebel\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rwandese frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saoedi-Arabiese riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomonseilandse dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seychellese roepee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Soedannese pond\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Soedannese pond (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Sweedse kroon\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapoer-dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Sint Helena-pond\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leoniese leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somaliese sjieling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinaamse dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Suid-Soedanese pond\"
        ],
        \"STD\": [
            \"STD\",
            \"São Tomé en Príncipe dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"São Tomé en Príncipe-dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Siriese pond\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazilandse lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thaise baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadjikse somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmeense manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisiese dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongaanse pa’anga\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turkse lier (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkse lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad en Tobago-dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Nuwe Taiwanese dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniese sjieling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Oekraïnse hriwna\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandese sjieling\"
        ],
        \"USD\": [
            \"USD\",
            \"VSA-dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruguaanse peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Oezbekiese som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezolaanse bolivar\"
        ],
        \"VES\": [
            \"VES\",
            \"Venezolaanse bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"Viëtnamese dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatuse vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoaanse tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Sentraal Afrikaanse CFA-frank\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Oos-Karibiese dollar\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Wes-Afrikaanse CFA-frank\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP-frank\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemenitiese rial\"
        ],
        \"ZAR\": [
            \"R\",
            \"Suid-Afrikaanse rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiese kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiese kwacha\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabwiese dollar\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/af.json";
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
            \"Verenigde Arabiese Emirate-dirham\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgaanse afgani\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Albanese lek\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Armeense dram\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Nederlands-Antilliaanse gulde\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Angolese kwanza\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Argentynse peso\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Australiese dollar\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Arubaanse floryn\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Azerbeidjaanse manat\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Bosnies-Herzegowiniese omskakelbare marka\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Barbados-dollar\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Bangladesjiese taka\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Bulgaarse lev\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Bahreinse dinar\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Burundiese frank\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Bermuda-dollar\"
        ],
        \"BND\": [
            \"BND\",
            \"Broeneise dollar\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviaanse boliviano\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Brasilliaanse reaal\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Bahamiaanse dollar\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Bhoetanese ngoeltroem\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Botswana-pula\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Belarusiese roebel\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Belo-Russiese roebel (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Beliziese dollar\"
        ],
        \"CAD\": [
            \"CAD\",
            \"Kanadese dollar\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Kongolese frank\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Switserse frank\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Chileense peso\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Chinese joean (buiteland)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Chinese joean\"
        ],
        \"COP\": [
            \"COP\",
            \"Colombiaanse peso\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Costa Ricaanse colón\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Kubaanse omskakelbare peso\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Kubaanse peso\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Kaap Verdiese escudo\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Tsjeggiese kroon\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Djiboeti-frank\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Deense kroon\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Dominikaanse peso\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Algeriese dinar\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Egiptiese pond\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Eritrese nakfa\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Etiopiese birr\"
        ],
        \"EUR\": [
            \"€\",
            \"euro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Fidjiaanse dollar\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Falkland-eilandse pond\"
        ],
        \"GBP\": [
            \"£\",
            \"Britse pond\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Georgiese lari\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Ghanese cedi (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Ghanese cedi\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Gibraltarese pond\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Gambiese dalasi\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Guinese frank\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Guinese syli\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Guatemalaanse quetzal\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Guyanese dollar\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Hongkongse dollar\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Hondurese lempira\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kroatiese kuna\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Haïtiaanse gourde\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Hongaarse florint\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Indonesiese roepia\"
        ],
        \"ILS\": [
            \"₪\",
            \"Israeliese nuwe sikkel\"
        ],
        \"INR\": [
            \"₹\",
            \"Indiese roepee\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Irakse dinar\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Iranse rial\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Yslandse kroon\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Italiaanse lier\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Jamaikaanse dollar\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Jordaniese dinar\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Japannese jen\"
        ],
        \"KES\": [
            \"KES\",
            \"Keniaanse sjieling\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Kirgisiese som\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Kambodjaanse riel\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Comoraanse frank\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Noord-Koreaanse won\"
        ],
        \"KRW\": [
            \"₩\",
            \"Suid-Koreaanse won\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Koeweitse dinar\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Cayman-eilandse dollar\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Kazakse tenge\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Laosiaanse kip\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Libanese pond\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Sri Lankaanse roepee\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Liberiese dollar\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Lesotho loti\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litause litas\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lettiese lats\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Libiese dinar\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Marokkaanse dirham\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Moldowiese leu\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Malgassiese ariary\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Macedoniese denar\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Mianmese kyat\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Mongoolse toegrik\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Macaose pataca\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Mauritaniese ouguiya (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Mauritaniese ouguiya\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Mauritiaanse roepee\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Malediviese rufia\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Malawiese kwacha\"
        ],
        \"MXN\": [
            \"MXN\",
            \"Meksikaanse peso\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Maleisiese ringgit\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Mosambiekse metical (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Mosambiekse metical\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Namibiese dollar\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Nigeriese naira\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Nicaraguaanse córdoba\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Noorse kroon\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Nepalese roepee\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Nieu-Seelandse dollar\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Omaanse rial\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Panamese balboa\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Peruaanse sol\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Papoea-Nieu-Guinese kina\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Filippynse peso\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Pakistanse roepee\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Poolse zloty\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Paraguaanse guarani\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Katarrese rial\"
        ],
        \"RON\": [
            \"RON\",
            \"Roemeense leu\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Serwiese dinar\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Russiese roebel\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Rwandese frank\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Saoedi-Arabiese riyal\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Salomonseilandse dollar\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Seychellese roepee\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Soedannese pond\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Soedannese pond (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Sweedse kroon\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Singapoer-dollar\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Sint Helena-pond\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Sierra Leoniese leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Somaliese sjieling\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Surinaamse dollar\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Suid-Soedanese pond\"
        ],
        \"STD\": [
            \"STD\",
            \"São Tomé en Príncipe dobra (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"São Tomé en Príncipe-dobra\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Siriese pond\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Swazilandse lilangeni\"
        ],
        \"THB\": [
            \"฿\",
            \"Thaise baht\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Tadjikse somoni\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Turkmeense manat\"
        ],
        \"TND\": [
            \"TND\",
            \"Tunisiese dinar\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Tongaanse pa’anga\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Turkse lier (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Turkse lira\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Trinidad en Tobago-dollar\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Nuwe Taiwanese dollar\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Tanzaniese sjieling\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Oekraïnse hriwna\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Ugandese sjieling\"
        ],
        \"USD\": [
            \"USD\",
            \"VSA-dollar\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Uruguaanse peso\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Oezbekiese som\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Venezolaanse bolivar\"
        ],
        \"VES\": [
            \"VES\",
            \"Venezolaanse bolívar\"
        ],
        \"VND\": [
            \"₫\",
            \"Viëtnamese dong\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vanuatuse vatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Samoaanse tala\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Sentraal Afrikaanse CFA-frank\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Oos-Karibiese dollar\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Wes-Afrikaanse CFA-frank\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"CFP-frank\"
        ],
        \"YER\": [
            \"YER\",
            \"Jemenitiese rial\"
        ],
        \"ZAR\": [
            \"R\",
            \"Suid-Afrikaanse rand\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Zambiese kwacha (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Zambiese kwacha\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Zimbabwiese dollar\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/af.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/af.json");
    }
}