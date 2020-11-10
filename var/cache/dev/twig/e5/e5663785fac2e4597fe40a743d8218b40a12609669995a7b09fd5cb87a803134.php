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

/* vendor/symfony/intl/Resources/data/currencies/sq.json */
class __TwigTemplate_6a46d8948e63c6d2350fc14eabcfcd0d6668b9eb41a706753c7c379048ea7160 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sq.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sq.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Dirhami i Emirateve të Bashkuara Arabe\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgani afgan\"
        ],
        \"ALL\": [
            \"Lekë\",
            \"Leku shqiptar\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dramia armene\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Gilderi antilian holandez\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kuanza e Angolës\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Pesoja argjentinase\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dollari australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florini aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manata azerbajxhanase\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Marka e Bosnjë-Hercegovinës [e shkëmbyeshme]\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dollari barbadian\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka e Bangladeshit\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Leva bullgare\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari i Bahreinit\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franga burundiane\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dollari i Bermudeve\"
        ],
        \"BND\": [
            \"BND\",
            \"Dollari i Bruneit\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviani i Bolivisë\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Reali brazilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dollari i Bahamasit\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrumi butanez\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula botsuane\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rubla bjelloruse\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rubla bjelloruse (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dollari i Ishujve Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dollari kanadez\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franga kongole\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franga zvicerane\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Pesoja kiliane\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Juani kinez (për treg të jashtëm)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Juani kinez\"
        ],
        \"COP\": [
            \"COP\",
            \"Pesoja kolumbiane\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Koloni kostarikan\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Pesoja kubaneze e shkëmbyeshme\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Pesoja kubaneze\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudoja e Kepit të Gjelbër\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna e Çekisë\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franga xhibutiane\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Korona daneze\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Pesoja dominikane\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari algjerian\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Sterlina egjiptiane\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa e Eritresë\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bira etiopiane\"
        ],
        \"EUR\": [
            \"€\",
            \"Euroja\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dollari i Fixhit\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Stërlina e Ishujve Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Sterlina britanike\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Laria gjeorgjiane\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sejda ganeze\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Sterlina e Gjibraltarit\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi gambian\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franga guinease\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Kuecali i Guatemalës\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dollari guajanez\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dollari i Hong-Kongut\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira hondurase\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna kroate\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gurdi haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forinta hungareze\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia indoneziane\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekeli izrealit\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia indiane\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinari irakian\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riali iranian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Korona islandeze\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dollari xhamajkan\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinari jordanez\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Jeni japonez\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilinga keniane\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Soma kirgize\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riali kamboxhian\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franga komore\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Uoni koreano-verior\"
        ],
        \"KRW\": [
            \"₩\",
            \"Uoni koreano-jugor\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinari kuvajtian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dollari i Ishujve Kajman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenga kazake\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kipa e Laosit\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Sterlina libaneze\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia e Sri-Lankës\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dollari liberian\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lita lituaneze\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lata letoneze\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari libian\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirhami maroken\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leuja moldave\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Arieri malagez\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denari maqedonas\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kiata e Mianmarit\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrika mongole\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataka e Makaos\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugija mauritane (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugija mauritane\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia mauritiane\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiu i Maldivit\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuaça malaviane\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Pesoja meksikane\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringiti malajzian\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikali i Mozambikut\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dollari i Namibisë\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira nigeriane\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Kordoba nikaraguane\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Korona norvegjeze\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia nepaleze\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dollari i Zelandës së Re\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riali i Omanit\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa panameze\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sola peruane\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina e Guinesë së Re-Papua\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Pesoja filipinase\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia pakistaneze\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zllota polake\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani paraguaian\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riali i Katarit\"
        ],
        \"RON\": [
            \"RON\",
            \"Leuja rumune\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinari serb\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubla ruse\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franga ruandeze\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riali saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dollari i Ishujve Solomonë\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia e Ishujve Sishelë\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sterlina sudaneze\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Korona suedeze\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dollari i Singaporit\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Sterlina e Ishullit të Shën-Helenës\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni i Sierra-Leones\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilinga somaleze\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dollari surinamez\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Sterlina sudanezo-jugore\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra e Sao-Tomes dhe Prinsipes (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra e Sao-Tomes dhe Prinsipes\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sterlina siriane\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni i Suazilandës\"
        ],
        \"THB\": [
            \"฿\",
            \"Bata tajlandeze\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somona taxhike\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manata turkmene\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari tunizian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Panga tongane\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira turke\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dollari i Trinidadit dhe Tobagos\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dollari tajvanez\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilinga e Tanzanisë\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Rivnia ukrainase\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilinga ugandeze\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dollari amerikan\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Pesoja uruguaiane\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Soma uzbeke\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivari venezuelian (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivari venezuelas\"
        ],
        \"VND\": [
            \"₫\",
            \"Donga vietnameze\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatuja e Vanuatusë\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala samoane\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franga kamerunase\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dollari i Karaibeve Lindore\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franga e Bregut të Fildishtë\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franga franceze e Polinezisë\"
        ],
        \"YER\": [
            \"YER\",
            \"Riali i Jemenit\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi afrikano-jugor\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuaça e Zambikut\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sq.json";
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
            \"Dirhami i Emirateve të Bashkuara Arabe\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afgani afgan\"
        ],
        \"ALL\": [
            \"Lekë\",
            \"Leku shqiptar\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dramia armene\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Gilderi antilian holandez\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kuanza e Angolës\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Pesoja argjentinase\"
        ],
        \"AUD\": [
            \"A\$\",
            \"Dollari australian\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florini aruban\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manata azerbajxhanase\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Marka e Bosnjë-Hercegovinës [e shkëmbyeshme]\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dollari barbadian\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka e Bangladeshit\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Leva bullgare\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari i Bahreinit\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franga burundiane\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dollari i Bermudeve\"
        ],
        \"BND\": [
            \"BND\",
            \"Dollari i Bruneit\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviani i Bolivisë\"
        ],
        \"BRL\": [
            \"BRL\",
            \"Reali brazilian\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dollari i Bahamasit\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrumi butanez\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula botsuane\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rubla bjelloruse\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rubla bjelloruse (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Dollari i Ishujve Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dollari kanadez\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franga kongole\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franga zvicerane\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Pesoja kiliane\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Juani kinez (për treg të jashtëm)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Juani kinez\"
        ],
        \"COP\": [
            \"COP\",
            \"Pesoja kolumbiane\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Koloni kostarikan\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Pesoja kubaneze e shkëmbyeshme\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Pesoja kubaneze\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudoja e Kepit të Gjelbër\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna e Çekisë\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franga xhibutiane\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Korona daneze\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Pesoja dominikane\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari algjerian\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Sterlina egjiptiane\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa e Eritresë\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Bira etiopiane\"
        ],
        \"EUR\": [
            \"€\",
            \"Euroja\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Dollari i Fixhit\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Stërlina e Ishujve Falkland\"
        ],
        \"GBP\": [
            \"£\",
            \"Sterlina britanike\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Laria gjeorgjiane\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sejda ganeze\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Sterlina e Gjibraltarit\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi gambian\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franga guinease\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Kuecali i Guatemalës\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Dollari guajanez\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Dollari i Hong-Kongut\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira hondurase\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna kroate\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gurdi haitian\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forinta hungareze\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia indoneziane\"
        ],
        \"ILS\": [
            \"₪\",
            \"Shekeli izrealit\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupia indiane\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinari irakian\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riali iranian\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Korona islandeze\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dollari xhamajkan\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinari jordanez\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Jeni japonez\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilinga keniane\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Soma kirgize\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riali kamboxhian\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franga komore\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Uoni koreano-verior\"
        ],
        \"KRW\": [
            \"₩\",
            \"Uoni koreano-jugor\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinari kuvajtian\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Dollari i Ishujve Kajman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenga kazake\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kipa e Laosit\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Sterlina libaneze\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupia e Sri-Lankës\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Dollari liberian\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Lita lituaneze\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lata letoneze\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinari libian\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirhami maroken\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leuja moldave\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Arieri malagez\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denari maqedonas\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kiata e Mianmarit\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrika mongole\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataka e Makaos\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ugija mauritane (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ugija mauritane\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupia mauritiane\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiu i Maldivit\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kuaça malaviane\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Pesoja meksikane\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringiti malajzian\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metikali i Mozambikut\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Dollari i Namibisë\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira nigeriane\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Kordoba nikaraguane\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Korona norvegjeze\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia nepaleze\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dollari i Zelandës së Re\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riali i Omanit\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa panameze\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sola peruane\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina e Guinesë së Re-Papua\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Pesoja filipinase\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia pakistaneze\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zllota polake\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani paraguaian\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riali i Katarit\"
        ],
        \"RON\": [
            \"RON\",
            \"Leuja rumune\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinari serb\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rubla ruse\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franga ruandeze\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riali saudit\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dollari i Ishujve Solomonë\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupia e Ishujve Sishelë\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Sterlina sudaneze\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Korona suedeze\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dollari i Singaporit\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Sterlina e Ishullit të Shën-Helenës\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni i Sierra-Leones\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Shilinga somaleze\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Dollari surinamez\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Sterlina sudanezo-jugore\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra e Sao-Tomes dhe Prinsipes (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra e Sao-Tomes dhe Prinsipes\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Sterlina siriane\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni i Suazilandës\"
        ],
        \"THB\": [
            \"฿\",
            \"Bata tajlandeze\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somona taxhike\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manata turkmene\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinari tunizian\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Panga tongane\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lira turke\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dollari i Trinidadit dhe Tobagos\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dollari tajvanez\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilinga e Tanzanisë\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Rivnia ukrainase\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilinga ugandeze\"
        ],
        \"USD\": [
            \"US\$\",
            \"Dollari amerikan\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Pesoja uruguaiane\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Soma uzbeke\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolivari venezuelian (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolivari venezuelas\"
        ],
        \"VND\": [
            \"₫\",
            \"Donga vietnameze\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatuja e Vanuatusë\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala samoane\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franga kamerunase\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dollari i Karaibeve Lindore\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franga e Bregut të Fildishtë\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franga franceze e Polinezisë\"
        ],
        \"YER\": [
            \"YER\",
            \"Riali i Jemenit\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Randi afrikano-jugor\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kuaça e Zambikut\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sq.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sq.json");
    }
}
