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

/* vendor/symfony/intl/Resources/data/currencies/mt.json */
class __TwigTemplate_1a924674e7a4f0630fbf96861eb1faaca8df7f8b0cd0416c4e08ea065605bae0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mt.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mt.json"));

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
            \"AFN\"
        ],
        \"ALL\": [
            \"ALL\",
            \"ALL\"
        ],
        \"AMD\": [
            \"AMD\",
            \"AMD\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ANG\"
        ],
        \"AOA\": [
            \"AOA\",
            \"AOA\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ARS\"
        ],
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"AWG\": [
            \"AWG\",
            \"AWG\"
        ],
        \"AZN\": [
            \"AZN\",
            \"AZN\"
        ],
        \"BAM\": [
            \"BAM\",
            \"BAM\"
        ],
        \"BBD\": [
            \"BBD\",
            \"BBD\"
        ],
        \"BDT\": [
            \"BDT\",
            \"BDT\"
        ],
        \"BGN\": [
            \"BGN\",
            \"BGN\"
        ],
        \"BHD\": [
            \"BHD\",
            \"BHD\"
        ],
        \"BIF\": [
            \"BIF\",
            \"BIF\"
        ],
        \"BMD\": [
            \"BMD\",
            \"BMD\"
        ],
        \"BND\": [
            \"BND\",
            \"BND\"
        ],
        \"BOB\": [
            \"BOB\",
            \"BOB\"
        ],
        \"BRL\": [
            \"R\$\",
            \"BRL\"
        ],
        \"BSD\": [
            \"BSD\",
            \"BSD\"
        ],
        \"BTN\": [
            \"BTN\",
            \"BTN\"
        ],
        \"BWP\": [
            \"BWP\",
            \"BWP\"
        ],
        \"BYN\": [
            \"BYN\",
            \"BYN\"
        ],
        \"BYR\": [
            \"BYR\",
            \"BYR\"
        ],
        \"BZD\": [
            \"BZD\",
            \"BZD\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CDF\": [
            \"CDF\",
            \"CDF\"
        ],
        \"CHF\": [
            \"CHF\",
            \"CHF\"
        ],
        \"CLP\": [
            \"CLP\",
            \"CLP\"
        ],
        \"COP\": [
            \"COP\",
            \"COP\"
        ],
        \"CRC\": [
            \"CRC\",
            \"CRC\"
        ],
        \"CUC\": [
            \"CUC\",
            \"CUC\"
        ],
        \"CUP\": [
            \"CUP\",
            \"CUP\"
        ],
        \"CVE\": [
            \"CVE\",
            \"CVE\"
        ],
        \"CZK\": [
            \"CZK\",
            \"CZK\"
        ],
        \"DJF\": [
            \"DJF\",
            \"DJF\"
        ],
        \"DOP\": [
            \"DOP\",
            \"DOP\"
        ],
        \"DZD\": [
            \"DZD\",
            \"DZD\"
        ],
        \"EGP\": [
            \"EGP\",
            \"EGP\"
        ],
        \"ERN\": [
            \"ERN\",
            \"ERN\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ETB\"
        ],
        \"EUR\": [
            \"€\",
            \"ewro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"FJD\"
        ],
        \"FKP\": [
            \"FKP\",
            \"FKP\"
        ],
        \"GEL\": [
            \"GEL\",
            \"GEL\"
        ],
        \"GHS\": [
            \"GHS\",
            \"GHS\"
        ],
        \"GIP\": [
            \"GIP\",
            \"GIP\"
        ],
        \"GMD\": [
            \"GMD\",
            \"GMD\"
        ],
        \"GNF\": [
            \"GNF\",
            \"GNF\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"GTQ\"
        ],
        \"GYD\": [
            \"GYD\",
            \"GYD\"
        ],
        \"HNL\": [
            \"HNL\",
            \"HNL\"
        ],
        \"HRK\": [
            \"HRK\",
            \"HRK\"
        ],
        \"HTG\": [
            \"HTG\",
            \"HTG\"
        ],
        \"HUF\": [
            \"HUF\",
            \"HUF\"
        ],
        \"IDR\": [
            \"IDR\",
            \"IDR\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"INR\"
        ],
        \"IQD\": [
            \"IQD\",
            \"IQD\"
        ],
        \"IRR\": [
            \"IRR\",
            \"IRR\"
        ],
        \"JMD\": [
            \"JMD\",
            \"JMD\"
        ],
        \"JOD\": [
            \"JOD\",
            \"JOD\"
        ],
        \"KES\": [
            \"KES\",
            \"KES\"
        ],
        \"KGS\": [
            \"KGS\",
            \"KGS\"
        ],
        \"KHR\": [
            \"KHR\",
            \"KHR\"
        ],
        \"KMF\": [
            \"KMF\",
            \"KMF\"
        ],
        \"KPW\": [
            \"KPW\",
            \"KPW\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"KWD\": [
            \"KWD\",
            \"KWD\"
        ],
        \"KYD\": [
            \"KYD\",
            \"KYD\"
        ],
        \"KZT\": [
            \"KZT\",
            \"KZT\"
        ],
        \"LAK\": [
            \"LAK\",
            \"LAK\"
        ],
        \"LBP\": [
            \"LBP\",
            \"LBP\"
        ],
        \"LKR\": [
            \"LKR\",
            \"LKR\"
        ],
        \"LRD\": [
            \"LRD\",
            \"LRD\"
        ],
        \"LYD\": [
            \"LYD\",
            \"LYD\"
        ],
        \"MAD\": [
            \"MAD\",
            \"MAD\"
        ],
        \"MDL\": [
            \"MDL\",
            \"MDL\"
        ],
        \"MGA\": [
            \"MGA\",
            \"MGA\"
        ],
        \"MKD\": [
            \"MKD\",
            \"MKD\"
        ],
        \"MMK\": [
            \"MMK\",
            \"MMK\"
        ],
        \"MNT\": [
            \"MNT\",
            \"MNT\"
        ],
        \"MOP\": [
            \"MOP\",
            \"MOP\"
        ],
        \"MRO\": [
            \"MRO\",
            \"MRO\"
        ],
        \"MRU\": [
            \"MRU\",
            \"MRU\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Lira Maltija\"
        ],
        \"MUR\": [
            \"MUR\",
            \"MUR\"
        ],
        \"MVR\": [
            \"MVR\",
            \"MVR\"
        ],
        \"MWK\": [
            \"MWK\",
            \"MWK\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"MYR\": [
            \"MYR\",
            \"MYR\"
        ],
        \"MZN\": [
            \"MZN\",
            \"MZN\"
        ],
        \"NAD\": [
            \"NAD\",
            \"NAD\"
        ],
        \"NGN\": [
            \"NGN\",
            \"NGN\"
        ],
        \"NIO\": [
            \"NIO\",
            \"NIO\"
        ],
        \"NPR\": [
            \"NPR\",
            \"NPR\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"OMR\": [
            \"OMR\",
            \"OMR\"
        ],
        \"PAB\": [
            \"PAB\",
            \"PAB\"
        ],
        \"PEN\": [
            \"PEN\",
            \"PEN\"
        ],
        \"PGK\": [
            \"PGK\",
            \"PGK\"
        ],
        \"PHP\": [
            \"PHP\",
            \"PHP\"
        ],
        \"PKR\": [
            \"PKR\",
            \"PKR\"
        ],
        \"PLN\": [
            \"PLN\",
            \"PLN\"
        ],
        \"PYG\": [
            \"PYG\",
            \"PYG\"
        ],
        \"QAR\": [
            \"QAR\",
            \"QAR\"
        ],
        \"RON\": [
            \"RON\",
            \"RON\"
        ],
        \"RSD\": [
            \"RSD\",
            \"RSD\"
        ],
        \"RUB\": [
            \"RUB\",
            \"RUB\"
        ],
        \"RWF\": [
            \"RWF\",
            \"RWF\"
        ],
        \"SAR\": [
            \"SAR\",
            \"SAR\"
        ],
        \"SBD\": [
            \"SBD\",
            \"SBD\"
        ],
        \"SCR\": [
            \"SCR\",
            \"SCR\"
        ],
        \"SDG\": [
            \"SDG\",
            \"SDG\"
        ],
        \"SEK\": [
            \"SEK\",
            \"SEK\"
        ],
        \"SGD\": [
            \"SGD\",
            \"SGD\"
        ],
        \"SHP\": [
            \"SHP\",
            \"SHP\"
        ],
        \"SLL\": [
            \"SLL\",
            \"SLL\"
        ],
        \"SOS\": [
            \"SOS\",
            \"SOS\"
        ],
        \"SRD\": [
            \"SRD\",
            \"SRD\"
        ],
        \"SSP\": [
            \"SSP\",
            \"SSP\"
        ],
        \"STD\": [
            \"STD\",
            \"STD\"
        ],
        \"STN\": [
            \"STN\",
            \"STN\"
        ],
        \"SYP\": [
            \"SYP\",
            \"SYP\"
        ],
        \"SZL\": [
            \"SZL\",
            \"SZL\"
        ],
        \"THB\": [
            \"THB\",
            \"THB\"
        ],
        \"TJS\": [
            \"TJS\",
            \"TJS\"
        ],
        \"TMT\": [
            \"TMT\",
            \"TMT\"
        ],
        \"TND\": [
            \"TND\",
            \"TND\"
        ],
        \"TOP\": [
            \"TOP\",
            \"TOP\"
        ],
        \"TRY\": [
            \"TRY\",
            \"TRY\"
        ],
        \"TTD\": [
            \"TTD\",
            \"TTD\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"TZS\": [
            \"TZS\",
            \"TZS\"
        ],
        \"UAH\": [
            \"UAH\",
            \"UAH\"
        ],
        \"UGX\": [
            \"UGX\",
            \"UGX\"
        ],
        \"USD\": [
            \"US\$\",
            \"USD\"
        ],
        \"UYU\": [
            \"UYU\",
            \"UYU\"
        ],
        \"UZS\": [
            \"UZS\",
            \"UZS\"
        ],
        \"VEF\": [
            \"VEF\",
            \"VEF\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"VUV\": [
            \"VUV\",
            \"VUV\"
        ],
        \"WST\": [
            \"WST\",
            \"WST\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ],
        \"YER\": [
            \"YER\",
            \"YER\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"ZAR\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"ZMW\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/mt.json";
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
            \"AFN\"
        ],
        \"ALL\": [
            \"ALL\",
            \"ALL\"
        ],
        \"AMD\": [
            \"AMD\",
            \"AMD\"
        ],
        \"ANG\": [
            \"ANG\",
            \"ANG\"
        ],
        \"AOA\": [
            \"AOA\",
            \"AOA\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ARS\"
        ],
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"AWG\": [
            \"AWG\",
            \"AWG\"
        ],
        \"AZN\": [
            \"AZN\",
            \"AZN\"
        ],
        \"BAM\": [
            \"BAM\",
            \"BAM\"
        ],
        \"BBD\": [
            \"BBD\",
            \"BBD\"
        ],
        \"BDT\": [
            \"BDT\",
            \"BDT\"
        ],
        \"BGN\": [
            \"BGN\",
            \"BGN\"
        ],
        \"BHD\": [
            \"BHD\",
            \"BHD\"
        ],
        \"BIF\": [
            \"BIF\",
            \"BIF\"
        ],
        \"BMD\": [
            \"BMD\",
            \"BMD\"
        ],
        \"BND\": [
            \"BND\",
            \"BND\"
        ],
        \"BOB\": [
            \"BOB\",
            \"BOB\"
        ],
        \"BRL\": [
            \"R\$\",
            \"BRL\"
        ],
        \"BSD\": [
            \"BSD\",
            \"BSD\"
        ],
        \"BTN\": [
            \"BTN\",
            \"BTN\"
        ],
        \"BWP\": [
            \"BWP\",
            \"BWP\"
        ],
        \"BYN\": [
            \"BYN\",
            \"BYN\"
        ],
        \"BYR\": [
            \"BYR\",
            \"BYR\"
        ],
        \"BZD\": [
            \"BZD\",
            \"BZD\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CDF\": [
            \"CDF\",
            \"CDF\"
        ],
        \"CHF\": [
            \"CHF\",
            \"CHF\"
        ],
        \"CLP\": [
            \"CLP\",
            \"CLP\"
        ],
        \"COP\": [
            \"COP\",
            \"COP\"
        ],
        \"CRC\": [
            \"CRC\",
            \"CRC\"
        ],
        \"CUC\": [
            \"CUC\",
            \"CUC\"
        ],
        \"CUP\": [
            \"CUP\",
            \"CUP\"
        ],
        \"CVE\": [
            \"CVE\",
            \"CVE\"
        ],
        \"CZK\": [
            \"CZK\",
            \"CZK\"
        ],
        \"DJF\": [
            \"DJF\",
            \"DJF\"
        ],
        \"DOP\": [
            \"DOP\",
            \"DOP\"
        ],
        \"DZD\": [
            \"DZD\",
            \"DZD\"
        ],
        \"EGP\": [
            \"EGP\",
            \"EGP\"
        ],
        \"ERN\": [
            \"ERN\",
            \"ERN\"
        ],
        \"ETB\": [
            \"ETB\",
            \"ETB\"
        ],
        \"EUR\": [
            \"€\",
            \"ewro\"
        ],
        \"FJD\": [
            \"FJD\",
            \"FJD\"
        ],
        \"FKP\": [
            \"FKP\",
            \"FKP\"
        ],
        \"GEL\": [
            \"GEL\",
            \"GEL\"
        ],
        \"GHS\": [
            \"GHS\",
            \"GHS\"
        ],
        \"GIP\": [
            \"GIP\",
            \"GIP\"
        ],
        \"GMD\": [
            \"GMD\",
            \"GMD\"
        ],
        \"GNF\": [
            \"GNF\",
            \"GNF\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"GTQ\"
        ],
        \"GYD\": [
            \"GYD\",
            \"GYD\"
        ],
        \"HNL\": [
            \"HNL\",
            \"HNL\"
        ],
        \"HRK\": [
            \"HRK\",
            \"HRK\"
        ],
        \"HTG\": [
            \"HTG\",
            \"HTG\"
        ],
        \"HUF\": [
            \"HUF\",
            \"HUF\"
        ],
        \"IDR\": [
            \"IDR\",
            \"IDR\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"INR\"
        ],
        \"IQD\": [
            \"IQD\",
            \"IQD\"
        ],
        \"IRR\": [
            \"IRR\",
            \"IRR\"
        ],
        \"JMD\": [
            \"JMD\",
            \"JMD\"
        ],
        \"JOD\": [
            \"JOD\",
            \"JOD\"
        ],
        \"KES\": [
            \"KES\",
            \"KES\"
        ],
        \"KGS\": [
            \"KGS\",
            \"KGS\"
        ],
        \"KHR\": [
            \"KHR\",
            \"KHR\"
        ],
        \"KMF\": [
            \"KMF\",
            \"KMF\"
        ],
        \"KPW\": [
            \"KPW\",
            \"KPW\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"KWD\": [
            \"KWD\",
            \"KWD\"
        ],
        \"KYD\": [
            \"KYD\",
            \"KYD\"
        ],
        \"KZT\": [
            \"KZT\",
            \"KZT\"
        ],
        \"LAK\": [
            \"LAK\",
            \"LAK\"
        ],
        \"LBP\": [
            \"LBP\",
            \"LBP\"
        ],
        \"LKR\": [
            \"LKR\",
            \"LKR\"
        ],
        \"LRD\": [
            \"LRD\",
            \"LRD\"
        ],
        \"LYD\": [
            \"LYD\",
            \"LYD\"
        ],
        \"MAD\": [
            \"MAD\",
            \"MAD\"
        ],
        \"MDL\": [
            \"MDL\",
            \"MDL\"
        ],
        \"MGA\": [
            \"MGA\",
            \"MGA\"
        ],
        \"MKD\": [
            \"MKD\",
            \"MKD\"
        ],
        \"MMK\": [
            \"MMK\",
            \"MMK\"
        ],
        \"MNT\": [
            \"MNT\",
            \"MNT\"
        ],
        \"MOP\": [
            \"MOP\",
            \"MOP\"
        ],
        \"MRO\": [
            \"MRO\",
            \"MRO\"
        ],
        \"MRU\": [
            \"MRU\",
            \"MRU\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Lira Maltija\"
        ],
        \"MUR\": [
            \"MUR\",
            \"MUR\"
        ],
        \"MVR\": [
            \"MVR\",
            \"MVR\"
        ],
        \"MWK\": [
            \"MWK\",
            \"MWK\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"MYR\": [
            \"MYR\",
            \"MYR\"
        ],
        \"MZN\": [
            \"MZN\",
            \"MZN\"
        ],
        \"NAD\": [
            \"NAD\",
            \"NAD\"
        ],
        \"NGN\": [
            \"NGN\",
            \"NGN\"
        ],
        \"NIO\": [
            \"NIO\",
            \"NIO\"
        ],
        \"NPR\": [
            \"NPR\",
            \"NPR\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"OMR\": [
            \"OMR\",
            \"OMR\"
        ],
        \"PAB\": [
            \"PAB\",
            \"PAB\"
        ],
        \"PEN\": [
            \"PEN\",
            \"PEN\"
        ],
        \"PGK\": [
            \"PGK\",
            \"PGK\"
        ],
        \"PHP\": [
            \"PHP\",
            \"PHP\"
        ],
        \"PKR\": [
            \"PKR\",
            \"PKR\"
        ],
        \"PLN\": [
            \"PLN\",
            \"PLN\"
        ],
        \"PYG\": [
            \"PYG\",
            \"PYG\"
        ],
        \"QAR\": [
            \"QAR\",
            \"QAR\"
        ],
        \"RON\": [
            \"RON\",
            \"RON\"
        ],
        \"RSD\": [
            \"RSD\",
            \"RSD\"
        ],
        \"RUB\": [
            \"RUB\",
            \"RUB\"
        ],
        \"RWF\": [
            \"RWF\",
            \"RWF\"
        ],
        \"SAR\": [
            \"SAR\",
            \"SAR\"
        ],
        \"SBD\": [
            \"SBD\",
            \"SBD\"
        ],
        \"SCR\": [
            \"SCR\",
            \"SCR\"
        ],
        \"SDG\": [
            \"SDG\",
            \"SDG\"
        ],
        \"SEK\": [
            \"SEK\",
            \"SEK\"
        ],
        \"SGD\": [
            \"SGD\",
            \"SGD\"
        ],
        \"SHP\": [
            \"SHP\",
            \"SHP\"
        ],
        \"SLL\": [
            \"SLL\",
            \"SLL\"
        ],
        \"SOS\": [
            \"SOS\",
            \"SOS\"
        ],
        \"SRD\": [
            \"SRD\",
            \"SRD\"
        ],
        \"SSP\": [
            \"SSP\",
            \"SSP\"
        ],
        \"STD\": [
            \"STD\",
            \"STD\"
        ],
        \"STN\": [
            \"STN\",
            \"STN\"
        ],
        \"SYP\": [
            \"SYP\",
            \"SYP\"
        ],
        \"SZL\": [
            \"SZL\",
            \"SZL\"
        ],
        \"THB\": [
            \"THB\",
            \"THB\"
        ],
        \"TJS\": [
            \"TJS\",
            \"TJS\"
        ],
        \"TMT\": [
            \"TMT\",
            \"TMT\"
        ],
        \"TND\": [
            \"TND\",
            \"TND\"
        ],
        \"TOP\": [
            \"TOP\",
            \"TOP\"
        ],
        \"TRY\": [
            \"TRY\",
            \"TRY\"
        ],
        \"TTD\": [
            \"TTD\",
            \"TTD\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"TZS\": [
            \"TZS\",
            \"TZS\"
        ],
        \"UAH\": [
            \"UAH\",
            \"UAH\"
        ],
        \"UGX\": [
            \"UGX\",
            \"UGX\"
        ],
        \"USD\": [
            \"US\$\",
            \"USD\"
        ],
        \"UYU\": [
            \"UYU\",
            \"UYU\"
        ],
        \"UZS\": [
            \"UZS\",
            \"UZS\"
        ],
        \"VEF\": [
            \"VEF\",
            \"VEF\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"VUV\": [
            \"VUV\",
            \"VUV\"
        ],
        \"WST\": [
            \"WST\",
            \"WST\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ],
        \"YER\": [
            \"YER\",
            \"YER\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"ZAR\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"ZMW\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/mt.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/mt.json");
    }
}
