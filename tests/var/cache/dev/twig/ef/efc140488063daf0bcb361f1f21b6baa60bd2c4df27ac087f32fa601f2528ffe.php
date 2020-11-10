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

/* vendor/symfony/intl/Resources/data/currencies/meta.json */
class __TwigTemplate_5e8e2e0ae5ac137c198bcb0c3e7450805dd33291114412b9811ae085f5a2790e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/meta.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/meta.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Currencies\": [
        \"ADP\",
        \"AED\",
        \"AFA\",
        \"AFN\",
        \"ALK\",
        \"ALL\",
        \"AMD\",
        \"ANG\",
        \"AOA\",
        \"AOK\",
        \"AON\",
        \"AOR\",
        \"ARA\",
        \"ARL\",
        \"ARM\",
        \"ARP\",
        \"ARS\",
        \"ATS\",
        \"AUD\",
        \"AWG\",
        \"AZM\",
        \"AZN\",
        \"BAD\",
        \"BAM\",
        \"BAN\",
        \"BBD\",
        \"BDT\",
        \"BEC\",
        \"BEF\",
        \"BEL\",
        \"BGL\",
        \"BGM\",
        \"BGN\",
        \"BGO\",
        \"BHD\",
        \"BIF\",
        \"BMD\",
        \"BND\",
        \"BOB\",
        \"BOL\",
        \"BOP\",
        \"BOV\",
        \"BRB\",
        \"BRC\",
        \"BRE\",
        \"BRL\",
        \"BRN\",
        \"BRR\",
        \"BRZ\",
        \"BSD\",
        \"BTN\",
        \"BUK\",
        \"BWP\",
        \"BYB\",
        \"BYN\",
        \"BYR\",
        \"BZD\",
        \"CAD\",
        \"CDF\",
        \"CHE\",
        \"CHF\",
        \"CHW\",
        \"CLE\",
        \"CLF\",
        \"CLP\",
        \"CNH\",
        \"CNX\",
        \"CNY\",
        \"COP\",
        \"COU\",
        \"CRC\",
        \"CSD\",
        \"CSK\",
        \"CUC\",
        \"CUP\",
        \"CVE\",
        \"CYP\",
        \"CZK\",
        \"DDM\",
        \"DEM\",
        \"DJF\",
        \"DKK\",
        \"DOP\",
        \"DZD\",
        \"ECS\",
        \"ECV\",
        \"EEK\",
        \"EGP\",
        \"ERN\",
        \"ESA\",
        \"ESB\",
        \"ESP\",
        \"ETB\",
        \"EUR\",
        \"FIM\",
        \"FJD\",
        \"FKP\",
        \"FRF\",
        \"GBP\",
        \"GEK\",
        \"GEL\",
        \"GHC\",
        \"GHS\",
        \"GIP\",
        \"GMD\",
        \"GNF\",
        \"GNS\",
        \"GQE\",
        \"GRD\",
        \"GTQ\",
        \"GWE\",
        \"GWP\",
        \"GYD\",
        \"HKD\",
        \"HNL\",
        \"HRD\",
        \"HRK\",
        \"HTG\",
        \"HUF\",
        \"IDR\",
        \"IEP\",
        \"ILP\",
        \"ILR\",
        \"ILS\",
        \"INR\",
        \"IQD\",
        \"IRR\",
        \"ISJ\",
        \"ISK\",
        \"ITL\",
        \"JMD\",
        \"JOD\",
        \"JPY\",
        \"KES\",
        \"KGS\",
        \"KHR\",
        \"KMF\",
        \"KPW\",
        \"KRH\",
        \"KRO\",
        \"KRW\",
        \"KWD\",
        \"KYD\",
        \"KZT\",
        \"LAK\",
        \"LBP\",
        \"LKR\",
        \"LRD\",
        \"LSL\",
        \"LTL\",
        \"LTT\",
        \"LUC\",
        \"LUF\",
        \"LUL\",
        \"LVL\",
        \"LVR\",
        \"LYD\",
        \"MAD\",
        \"MAF\",
        \"MCF\",
        \"MDC\",
        \"MDL\",
        \"MGA\",
        \"MGF\",
        \"MKD\",
        \"MKN\",
        \"MLF\",
        \"MMK\",
        \"MNT\",
        \"MOP\",
        \"MRO\",
        \"MRU\",
        \"MTL\",
        \"MTP\",
        \"MUR\",
        \"MVP\",
        \"MVR\",
        \"MWK\",
        \"MXN\",
        \"MXP\",
        \"MXV\",
        \"MYR\",
        \"MZE\",
        \"MZM\",
        \"MZN\",
        \"NAD\",
        \"NGN\",
        \"NIC\",
        \"NIO\",
        \"NLG\",
        \"NOK\",
        \"NPR\",
        \"NZD\",
        \"OMR\",
        \"PAB\",
        \"PEI\",
        \"PEN\",
        \"PES\",
        \"PGK\",
        \"PHP\",
        \"PKR\",
        \"PLN\",
        \"PLZ\",
        \"PTE\",
        \"PYG\",
        \"QAR\",
        \"RHD\",
        \"ROL\",
        \"RON\",
        \"RSD\",
        \"RUB\",
        \"RUR\",
        \"RWF\",
        \"SAR\",
        \"SBD\",
        \"SCR\",
        \"SDD\",
        \"SDG\",
        \"SDP\",
        \"SEK\",
        \"SGD\",
        \"SHP\",
        \"SIT\",
        \"SKK\",
        \"SLL\",
        \"SOS\",
        \"SRD\",
        \"SRG\",
        \"SSP\",
        \"STD\",
        \"STN\",
        \"SUR\",
        \"SVC\",
        \"SYP\",
        \"SZL\",
        \"THB\",
        \"TJR\",
        \"TJS\",
        \"TMM\",
        \"TMT\",
        \"TND\",
        \"TOP\",
        \"TPE\",
        \"TRL\",
        \"TRY\",
        \"TTD\",
        \"TWD\",
        \"TZS\",
        \"UAH\",
        \"UAK\",
        \"UGS\",
        \"UGX\",
        \"USD\",
        \"USN\",
        \"USS\",
        \"UYI\",
        \"UYP\",
        \"UYU\",
        \"UYW\",
        \"UZS\",
        \"VEB\",
        \"VEF\",
        \"VES\",
        \"VND\",
        \"VNN\",
        \"VUV\",
        \"WST\",
        \"XAF\",
        \"XCD\",
        \"XEU\",
        \"XFO\",
        \"XFU\",
        \"XOF\",
        \"XPF\",
        \"XRE\",
        \"YDD\",
        \"YER\",
        \"YUD\",
        \"YUM\",
        \"YUN\",
        \"YUR\",
        \"ZAL\",
        \"ZAR\",
        \"ZMK\",
        \"ZMW\",
        \"ZRN\",
        \"ZRZ\",
        \"ZWD\",
        \"ZWL\",
        \"ZWR\"
    ],
    \"Meta\": {
        \"ADP\": [
            0,
            0,
            0,
            0
        ],
        \"AFN\": [
            0,
            0,
            0,
            0
        ],
        \"ALL\": [
            0,
            0,
            0,
            0
        ],
        \"AMD\": [
            2,
            0,
            0,
            0
        ],
        \"BHD\": [
            3,
            0,
            3,
            0
        ],
        \"BIF\": [
            0,
            0,
            0,
            0
        ],
        \"BYN\": [
            2,
            0,
            2,
            0
        ],
        \"BYR\": [
            0,
            0,
            0,
            0
        ],
        \"CAD\": [
            2,
            0,
            2,
            5
        ],
        \"CHF\": [
            2,
            0,
            2,
            5
        ],
        \"CLF\": [
            4,
            0,
            4,
            0
        ],
        \"CLP\": [
            0,
            0,
            0,
            0
        ],
        \"COP\": [
            2,
            0,
            0,
            0
        ],
        \"CRC\": [
            2,
            0,
            0,
            0
        ],
        \"CZK\": [
            2,
            0,
            0,
            0
        ],
        \"DEFAULT\": [
            2,
            0,
            2,
            0
        ],
        \"DJF\": [
            0,
            0,
            0,
            0
        ],
        \"DKK\": [
            2,
            0,
            2,
            50
        ],
        \"ESP\": [
            0,
            0,
            0,
            0
        ],
        \"GNF\": [
            0,
            0,
            0,
            0
        ],
        \"GYD\": [
            2,
            0,
            0,
            0
        ],
        \"HUF\": [
            2,
            0,
            0,
            0
        ],
        \"IDR\": [
            2,
            0,
            0,
            0
        ],
        \"IQD\": [
            0,
            0,
            0,
            0
        ],
        \"IRR\": [
            0,
            0,
            0,
            0
        ],
        \"ISK\": [
            0,
            0,
            0,
            0
        ],
        \"ITL\": [
            0,
            0,
            0,
            0
        ],
        \"JOD\": [
            3,
            0,
            3,
            0
        ],
        \"JPY\": [
            0,
            0,
            0,
            0
        ],
        \"KMF\": [
            0,
            0,
            0,
            0
        ],
        \"KPW\": [
            0,
            0,
            0,
            0
        ],
        \"KRW\": [
            0,
            0,
            0,
            0
        ],
        \"KWD\": [
            3,
            0,
            3,
            0
        ],
        \"LAK\": [
            0,
            0,
            0,
            0
        ],
        \"LBP\": [
            0,
            0,
            0,
            0
        ],
        \"LUF\": [
            0,
            0,
            0,
            0
        ],
        \"LYD\": [
            3,
            0,
            3,
            0
        ],
        \"MGA\": [
            0,
            0,
            0,
            0
        ],
        \"MGF\": [
            0,
            0,
            0,
            0
        ],
        \"MMK\": [
            0,
            0,
            0,
            0
        ],
        \"MNT\": [
            2,
            0,
            0,
            0
        ],
        \"MRO\": [
            0,
            0,
            0,
            0
        ],
        \"MUR\": [
            2,
            0,
            0,
            0
        ],
        \"NOK\": [
            2,
            0,
            0,
            0
        ],
        \"OMR\": [
            3,
            0,
            3,
            0
        ],
        \"PKR\": [
            2,
            0,
            0,
            0
        ],
        \"PYG\": [
            0,
            0,
            0,
            0
        ],
        \"RSD\": [
            0,
            0,
            0,
            0
        ],
        \"RWF\": [
            0,
            0,
            0,
            0
        ],
        \"SEK\": [
            2,
            0,
            0,
            0
        ],
        \"SLL\": [
            0,
            0,
            0,
            0
        ],
        \"SOS\": [
            0,
            0,
            0,
            0
        ],
        \"STD\": [
            0,
            0,
            0,
            0
        ],
        \"SYP\": [
            0,
            0,
            0,
            0
        ],
        \"TMM\": [
            0,
            0,
            0,
            0
        ],
        \"TND\": [
            3,
            0,
            3,
            0
        ],
        \"TRL\": [
            0,
            0,
            0,
            0
        ],
        \"TWD\": [
            2,
            0,
            0,
            0
        ],
        \"TZS\": [
            2,
            0,
            0,
            0
        ],
        \"UGX\": [
            0,
            0,
            0,
            0
        ],
        \"UYI\": [
            0,
            0,
            0,
            0
        ],
        \"UYW\": [
            4,
            0,
            4,
            0
        ],
        \"UZS\": [
            2,
            0,
            0,
            0
        ],
        \"VEF\": [
            2,
            0,
            0,
            0
        ],
        \"VND\": [
            0,
            0,
            0,
            0
        ],
        \"VUV\": [
            0,
            0,
            0,
            0
        ],
        \"XAF\": [
            0,
            0,
            0,
            0
        ],
        \"XOF\": [
            0,
            0,
            0,
            0
        ],
        \"XPF\": [
            0,
            0,
            0,
            0
        ],
        \"YER\": [
            0,
            0,
            0,
            0
        ],
        \"ZMK\": [
            0,
            0,
            0,
            0
        ],
        \"ZWD\": [
            0,
            0,
            0,
            0
        ]
    },
    \"Alpha3ToNumeric\": {
        \"AFA\": 4,
        \"ALK\": 8,
        \"ALL\": 8,
        \"DZD\": 12,
        \"ADP\": 20,
        \"AON\": 24,
        \"AOK\": 24,
        \"AZM\": 31,
        \"ARA\": 32,
        \"ARP\": 32,
        \"ARS\": 32,
        \"AUD\": 36,
        \"ATS\": 40,
        \"BSD\": 44,
        \"BHD\": 48,
        \"BDT\": 50,
        \"AMD\": 51,
        \"BBD\": 52,
        \"BEF\": 56,
        \"BMD\": 60,
        \"BTN\": 64,
        \"BOB\": 68,
        \"BOP\": 68,
        \"BAD\": 70,
        \"BWP\": 72,
        \"BRN\": 76,
        \"BRE\": 76,
        \"BRC\": 76,
        \"BRB\": 76,
        \"BZD\": 84,
        \"SBD\": 90,
        \"BND\": 96,
        \"BGL\": 100,
        \"MMK\": 104,
        \"BUK\": 104,
        \"BIF\": 108,
        \"BYB\": 112,
        \"KHR\": 116,
        \"CAD\": 124,
        \"CVE\": 132,
        \"KYD\": 136,
        \"LKR\": 144,
        \"CLP\": 152,
        \"CNY\": 156,
        \"COP\": 170,
        \"KMF\": 174,
        \"ZRZ\": 180,
        \"ZRN\": 180,
        \"CRC\": 188,
        \"HRK\": 191,
        \"HRD\": 191,
        \"CUP\": 192,
        \"CYP\": 196,
        \"CSK\": 200,
        \"CZK\": 203,
        \"DKK\": 208,
        \"DOP\": 214,
        \"ECS\": 218,
        \"SVC\": 222,
        \"GQE\": 226,
        \"ETB\": 230,
        \"ERN\": 232,
        \"EEK\": 233,
        \"FKP\": 238,
        \"FJD\": 242,
        \"FIM\": 246,
        \"FRF\": 250,
        \"DJF\": 262,
        \"GEK\": 268,
        \"GMD\": 270,
        \"DEM\": 276,
        \"DDM\": 278,
        \"GHC\": 288,
        \"GIP\": 292,
        \"GRD\": 300,
        \"GTQ\": 320,
        \"GNS\": 324,
        \"GNF\": 324,
        \"GYD\": 328,
        \"HTG\": 332,
        \"HNL\": 340,
        \"HKD\": 344,
        \"HUF\": 348,
        \"ISJ\": 352,
        \"ISK\": 352,
        \"INR\": 356,
        \"IDR\": 360,
        \"IRR\": 364,
        \"IQD\": 368,
        \"IEP\": 372,
        \"ILP\": 376,
        \"ILR\": 376,
        \"ILS\": 376,
        \"ITL\": 380,
        \"JMD\": 388,
        \"JPY\": 392,
        \"KZT\": 398,
        \"JOD\": 400,
        \"KES\": 404,
        \"KPW\": 408,
        \"KRW\": 410,
        \"KWD\": 414,
        \"KGS\": 417,
        \"LAK\": 418,
        \"LBP\": 422,
        \"LSL\": 426,
        \"LVR\": 428,
        \"LVL\": 428,
        \"LRD\": 430,
        \"LYD\": 434,
        \"LTL\": 440,
        \"LTT\": 440,
        \"LUF\": 442,
        \"MOP\": 446,
        \"MGF\": 450,
        \"MWK\": 454,
        \"MYR\": 458,
        \"MVR\": 462,
        \"MLF\": 466,
        \"MTL\": 470,
        \"MTP\": 470,
        \"MRO\": 478,
        \"MUR\": 480,
        \"MXP\": 484,
        \"MXN\": 484,
        \"MNT\": 496,
        \"MDL\": 498,
        \"MAD\": 504,
        \"MZE\": 508,
        \"MZM\": 508,
        \"OMR\": 512,
        \"NAD\": 516,
        \"NPR\": 524,
        \"NLG\": 528,
        \"ANG\": 532,
        \"AWG\": 533,
        \"VUV\": 548,
        \"NZD\": 554,
        \"NIC\": 558,
        \"NIO\": 558,
        \"NGN\": 566,
        \"NOK\": 578,
        \"PKR\": 586,
        \"PAB\": 590,
        \"PGK\": 598,
        \"PYG\": 600,
        \"PEI\": 604,
        \"PES\": 604,
        \"PEN\": 604,
        \"PHP\": 608,
        \"PLZ\": 616,
        \"PTE\": 620,
        \"GWP\": 624,
        \"GWE\": 624,
        \"TPE\": 626,
        \"QAR\": 634,
        \"ROL\": 642,
        \"RUB\": 643,
        \"RWF\": 646,
        \"SHP\": 654,
        \"STD\": 678,
        \"SAR\": 682,
        \"SCR\": 690,
        \"SLL\": 694,
        \"SGD\": 702,
        \"SKK\": 703,
        \"VND\": 704,
        \"SIT\": 705,
        \"SOS\": 706,
        \"ZAR\": 710,
        \"ZWD\": 716,
        \"RHD\": 716,
        \"YDD\": 720,
        \"ESP\": 724,
        \"SSP\": 728,
        \"SDD\": 736,
        \"SDP\": 736,
        \"SRG\": 740,
        \"SZL\": 748,
        \"SEK\": 752,
        \"CHF\": 756,
        \"SYP\": 760,
        \"TJR\": 762,
        \"THB\": 764,
        \"TOP\": 776,
        \"TTD\": 780,
        \"AED\": 784,
        \"TND\": 788,
        \"TRL\": 792,
        \"TMM\": 795,
        \"UGX\": 800,
        \"UGS\": 800,
        \"UAK\": 804,
        \"MKD\": 807,
        \"RUR\": 810,
        \"SUR\": 810,
        \"EGP\": 818,
        \"GBP\": 826,
        \"TZS\": 834,
        \"USD\": 840,
        \"UYP\": 858,
        \"UYU\": 858,
        \"UZS\": 860,
        \"VEB\": 862,
        \"WST\": 882,
        \"YER\": 886,
        \"YUN\": 890,
        \"YUD\": 890,
        \"YUM\": 891,
        \"CSD\": 891,
        \"ZMK\": 894,
        \"TWD\": 901,
        \"UYW\": 927,
        \"VES\": 928,
        \"MRU\": 929,
        \"STN\": 930,
        \"CUC\": 931,
        \"ZWL\": 932,
        \"BYN\": 933,
        \"TMT\": 934,
        \"ZWR\": 935,
        \"GHS\": 936,
        \"VEF\": 937,
        \"SDG\": 938,
        \"UYI\": 940,
        \"RSD\": 941,
        \"MZN\": 943,
        \"AZN\": 944,
        \"RON\": 946,
        \"CHE\": 947,
        \"CHW\": 948,
        \"TRY\": 949,
        \"XAF\": 950,
        \"XCD\": 951,
        \"XOF\": 952,
        \"XPF\": 953,
        \"XEU\": 954,
        \"ZMW\": 967,
        \"SRD\": 968,
        \"MGA\": 969,
        \"COU\": 970,
        \"AFN\": 971,
        \"TJS\": 972,
        \"AOA\": 973,
        \"BYR\": 974,
        \"BGN\": 975,
        \"CDF\": 976,
        \"BAM\": 977,
        \"EUR\": 978,
        \"MXV\": 979,
        \"UAH\": 980,
        \"GEL\": 981,
        \"AOR\": 982,
        \"ECV\": 983,
        \"BOV\": 984,
        \"PLN\": 985,
        \"BRL\": 986,
        \"BRR\": 987,
        \"LUL\": 988,
        \"LUC\": 989,
        \"CLF\": 990,
        \"ZAL\": 991,
        \"BEL\": 992,
        \"BEC\": 993,
        \"ESB\": 995,
        \"ESA\": 996,
        \"USN\": 997,
        \"USS\": 998
    },
    \"NumericToAlpha3\": {
        \"4\": [
            \"AFA\"
        ],
        \"8\": [
            \"ALK\",
            \"ALL\"
        ],
        \"12\": [
            \"DZD\"
        ],
        \"20\": [
            \"ADP\"
        ],
        \"24\": [
            \"AON\",
            \"AOK\"
        ],
        \"31\": [
            \"AZM\"
        ],
        \"32\": [
            \"ARA\",
            \"ARP\",
            \"ARS\"
        ],
        \"36\": [
            \"AUD\"
        ],
        \"40\": [
            \"ATS\"
        ],
        \"44\": [
            \"BSD\"
        ],
        \"48\": [
            \"BHD\"
        ],
        \"50\": [
            \"BDT\"
        ],
        \"51\": [
            \"AMD\"
        ],
        \"52\": [
            \"BBD\"
        ],
        \"56\": [
            \"BEF\"
        ],
        \"60\": [
            \"BMD\"
        ],
        \"64\": [
            \"BTN\"
        ],
        \"68\": [
            \"BOB\",
            \"BOP\"
        ],
        \"70\": [
            \"BAD\"
        ],
        \"72\": [
            \"BWP\"
        ],
        \"76\": [
            \"BRN\",
            \"BRE\",
            \"BRC\",
            \"BRB\"
        ],
        \"84\": [
            \"BZD\"
        ],
        \"90\": [
            \"SBD\"
        ],
        \"96\": [
            \"BND\"
        ],
        \"100\": [
            \"BGL\"
        ],
        \"104\": [
            \"MMK\",
            \"BUK\"
        ],
        \"108\": [
            \"BIF\"
        ],
        \"112\": [
            \"BYB\"
        ],
        \"116\": [
            \"KHR\"
        ],
        \"124\": [
            \"CAD\"
        ],
        \"132\": [
            \"CVE\"
        ],
        \"136\": [
            \"KYD\"
        ],
        \"144\": [
            \"LKR\"
        ],
        \"152\": [
            \"CLP\"
        ],
        \"156\": [
            \"CNY\"
        ],
        \"170\": [
            \"COP\"
        ],
        \"174\": [
            \"KMF\"
        ],
        \"180\": [
            \"ZRZ\",
            \"ZRN\"
        ],
        \"188\": [
            \"CRC\"
        ],
        \"191\": [
            \"HRK\",
            \"HRD\"
        ],
        \"192\": [
            \"CUP\"
        ],
        \"196\": [
            \"CYP\"
        ],
        \"200\": [
            \"CSK\"
        ],
        \"203\": [
            \"CZK\"
        ],
        \"208\": [
            \"DKK\"
        ],
        \"214\": [
            \"DOP\"
        ],
        \"218\": [
            \"ECS\"
        ],
        \"222\": [
            \"SVC\"
        ],
        \"226\": [
            \"GQE\"
        ],
        \"230\": [
            \"ETB\"
        ],
        \"232\": [
            \"ERN\"
        ],
        \"233\": [
            \"EEK\"
        ],
        \"238\": [
            \"FKP\"
        ],
        \"242\": [
            \"FJD\"
        ],
        \"246\": [
            \"FIM\"
        ],
        \"250\": [
            \"FRF\"
        ],
        \"262\": [
            \"DJF\"
        ],
        \"268\": [
            \"GEK\"
        ],
        \"270\": [
            \"GMD\"
        ],
        \"276\": [
            \"DEM\"
        ],
        \"278\": [
            \"DDM\"
        ],
        \"288\": [
            \"GHC\"
        ],
        \"292\": [
            \"GIP\"
        ],
        \"300\": [
            \"GRD\"
        ],
        \"320\": [
            \"GTQ\"
        ],
        \"324\": [
            \"GNS\",
            \"GNF\"
        ],
        \"328\": [
            \"GYD\"
        ],
        \"332\": [
            \"HTG\"
        ],
        \"340\": [
            \"HNL\"
        ],
        \"344\": [
            \"HKD\"
        ],
        \"348\": [
            \"HUF\"
        ],
        \"352\": [
            \"ISJ\",
            \"ISK\"
        ],
        \"356\": [
            \"INR\"
        ],
        \"360\": [
            \"IDR\"
        ],
        \"364\": [
            \"IRR\"
        ],
        \"368\": [
            \"IQD\"
        ],
        \"372\": [
            \"IEP\"
        ],
        \"376\": [
            \"ILP\",
            \"ILR\",
            \"ILS\"
        ],
        \"380\": [
            \"ITL\"
        ],
        \"388\": [
            \"JMD\"
        ],
        \"392\": [
            \"JPY\"
        ],
        \"398\": [
            \"KZT\"
        ],
        \"400\": [
            \"JOD\"
        ],
        \"404\": [
            \"KES\"
        ],
        \"408\": [
            \"KPW\"
        ],
        \"410\": [
            \"KRW\"
        ],
        \"414\": [
            \"KWD\"
        ],
        \"417\": [
            \"KGS\"
        ],
        \"418\": [
            \"LAK\"
        ],
        \"422\": [
            \"LBP\"
        ],
        \"426\": [
            \"LSL\"
        ],
        \"428\": [
            \"LVR\",
            \"LVL\"
        ],
        \"430\": [
            \"LRD\"
        ],
        \"434\": [
            \"LYD\"
        ],
        \"440\": [
            \"LTL\",
            \"LTT\"
        ],
        \"442\": [
            \"LUF\"
        ],
        \"446\": [
            \"MOP\"
        ],
        \"450\": [
            \"MGF\"
        ],
        \"454\": [
            \"MWK\"
        ],
        \"458\": [
            \"MYR\"
        ],
        \"462\": [
            \"MVR\"
        ],
        \"466\": [
            \"MLF\"
        ],
        \"470\": [
            \"MTL\",
            \"MTP\"
        ],
        \"478\": [
            \"MRO\"
        ],
        \"480\": [
            \"MUR\"
        ],
        \"484\": [
            \"MXP\",
            \"MXN\"
        ],
        \"496\": [
            \"MNT\"
        ],
        \"498\": [
            \"MDL\"
        ],
        \"504\": [
            \"MAD\"
        ],
        \"508\": [
            \"MZE\",
            \"MZM\"
        ],
        \"512\": [
            \"OMR\"
        ],
        \"516\": [
            \"NAD\"
        ],
        \"524\": [
            \"NPR\"
        ],
        \"528\": [
            \"NLG\"
        ],
        \"532\": [
            \"ANG\"
        ],
        \"533\": [
            \"AWG\"
        ],
        \"548\": [
            \"VUV\"
        ],
        \"554\": [
            \"NZD\"
        ],
        \"558\": [
            \"NIC\",
            \"NIO\"
        ],
        \"566\": [
            \"NGN\"
        ],
        \"578\": [
            \"NOK\"
        ],
        \"586\": [
            \"PKR\"
        ],
        \"590\": [
            \"PAB\"
        ],
        \"598\": [
            \"PGK\"
        ],
        \"600\": [
            \"PYG\"
        ],
        \"604\": [
            \"PEI\",
            \"PES\",
            \"PEN\"
        ],
        \"608\": [
            \"PHP\"
        ],
        \"616\": [
            \"PLZ\"
        ],
        \"620\": [
            \"PTE\"
        ],
        \"624\": [
            \"GWP\",
            \"GWE\"
        ],
        \"626\": [
            \"TPE\"
        ],
        \"634\": [
            \"QAR\"
        ],
        \"642\": [
            \"ROL\"
        ],
        \"643\": [
            \"RUB\"
        ],
        \"646\": [
            \"RWF\"
        ],
        \"654\": [
            \"SHP\"
        ],
        \"678\": [
            \"STD\"
        ],
        \"682\": [
            \"SAR\"
        ],
        \"690\": [
            \"SCR\"
        ],
        \"694\": [
            \"SLL\"
        ],
        \"702\": [
            \"SGD\"
        ],
        \"703\": [
            \"SKK\"
        ],
        \"704\": [
            \"VND\"
        ],
        \"705\": [
            \"SIT\"
        ],
        \"706\": [
            \"SOS\"
        ],
        \"710\": [
            \"ZAR\"
        ],
        \"716\": [
            \"ZWD\",
            \"RHD\"
        ],
        \"720\": [
            \"YDD\"
        ],
        \"724\": [
            \"ESP\"
        ],
        \"728\": [
            \"SSP\"
        ],
        \"736\": [
            \"SDD\",
            \"SDP\"
        ],
        \"740\": [
            \"SRG\"
        ],
        \"748\": [
            \"SZL\"
        ],
        \"752\": [
            \"SEK\"
        ],
        \"756\": [
            \"CHF\"
        ],
        \"760\": [
            \"SYP\"
        ],
        \"762\": [
            \"TJR\"
        ],
        \"764\": [
            \"THB\"
        ],
        \"776\": [
            \"TOP\"
        ],
        \"780\": [
            \"TTD\"
        ],
        \"784\": [
            \"AED\"
        ],
        \"788\": [
            \"TND\"
        ],
        \"792\": [
            \"TRL\"
        ],
        \"795\": [
            \"TMM\"
        ],
        \"800\": [
            \"UGX\",
            \"UGS\"
        ],
        \"804\": [
            \"UAK\"
        ],
        \"807\": [
            \"MKD\"
        ],
        \"810\": [
            \"RUR\",
            \"SUR\"
        ],
        \"818\": [
            \"EGP\"
        ],
        \"826\": [
            \"GBP\"
        ],
        \"834\": [
            \"TZS\"
        ],
        \"840\": [
            \"USD\"
        ],
        \"858\": [
            \"UYP\",
            \"UYU\"
        ],
        \"860\": [
            \"UZS\"
        ],
        \"862\": [
            \"VEB\"
        ],
        \"882\": [
            \"WST\"
        ],
        \"886\": [
            \"YER\"
        ],
        \"890\": [
            \"YUN\",
            \"YUD\"
        ],
        \"891\": [
            \"YUM\",
            \"CSD\"
        ],
        \"894\": [
            \"ZMK\"
        ],
        \"901\": [
            \"TWD\"
        ],
        \"927\": [
            \"UYW\"
        ],
        \"928\": [
            \"VES\"
        ],
        \"929\": [
            \"MRU\"
        ],
        \"930\": [
            \"STN\"
        ],
        \"931\": [
            \"CUC\"
        ],
        \"932\": [
            \"ZWL\"
        ],
        \"933\": [
            \"BYN\"
        ],
        \"934\": [
            \"TMT\"
        ],
        \"935\": [
            \"ZWR\"
        ],
        \"936\": [
            \"GHS\"
        ],
        \"937\": [
            \"VEF\"
        ],
        \"938\": [
            \"SDG\"
        ],
        \"940\": [
            \"UYI\"
        ],
        \"941\": [
            \"RSD\"
        ],
        \"943\": [
            \"MZN\"
        ],
        \"944\": [
            \"AZN\"
        ],
        \"946\": [
            \"RON\"
        ],
        \"947\": [
            \"CHE\"
        ],
        \"948\": [
            \"CHW\"
        ],
        \"949\": [
            \"TRY\"
        ],
        \"950\": [
            \"XAF\"
        ],
        \"951\": [
            \"XCD\"
        ],
        \"952\": [
            \"XOF\"
        ],
        \"953\": [
            \"XPF\"
        ],
        \"954\": [
            \"XEU\"
        ],
        \"967\": [
            \"ZMW\"
        ],
        \"968\": [
            \"SRD\"
        ],
        \"969\": [
            \"MGA\"
        ],
        \"970\": [
            \"COU\"
        ],
        \"971\": [
            \"AFN\"
        ],
        \"972\": [
            \"TJS\"
        ],
        \"973\": [
            \"AOA\"
        ],
        \"974\": [
            \"BYR\"
        ],
        \"975\": [
            \"BGN\"
        ],
        \"976\": [
            \"CDF\"
        ],
        \"977\": [
            \"BAM\"
        ],
        \"978\": [
            \"EUR\"
        ],
        \"979\": [
            \"MXV\"
        ],
        \"980\": [
            \"UAH\"
        ],
        \"981\": [
            \"GEL\"
        ],
        \"982\": [
            \"AOR\"
        ],
        \"983\": [
            \"ECV\"
        ],
        \"984\": [
            \"BOV\"
        ],
        \"985\": [
            \"PLN\"
        ],
        \"986\": [
            \"BRL\"
        ],
        \"987\": [
            \"BRR\"
        ],
        \"988\": [
            \"LUL\"
        ],
        \"989\": [
            \"LUC\"
        ],
        \"990\": [
            \"CLF\"
        ],
        \"991\": [
            \"ZAL\"
        ],
        \"992\": [
            \"BEL\"
        ],
        \"993\": [
            \"BEC\"
        ],
        \"995\": [
            \"ESB\"
        ],
        \"996\": [
            \"ESA\"
        ],
        \"997\": [
            \"USN\"
        ],
        \"998\": [
            \"USS\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/meta.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Currencies\": [
        \"ADP\",
        \"AED\",
        \"AFA\",
        \"AFN\",
        \"ALK\",
        \"ALL\",
        \"AMD\",
        \"ANG\",
        \"AOA\",
        \"AOK\",
        \"AON\",
        \"AOR\",
        \"ARA\",
        \"ARL\",
        \"ARM\",
        \"ARP\",
        \"ARS\",
        \"ATS\",
        \"AUD\",
        \"AWG\",
        \"AZM\",
        \"AZN\",
        \"BAD\",
        \"BAM\",
        \"BAN\",
        \"BBD\",
        \"BDT\",
        \"BEC\",
        \"BEF\",
        \"BEL\",
        \"BGL\",
        \"BGM\",
        \"BGN\",
        \"BGO\",
        \"BHD\",
        \"BIF\",
        \"BMD\",
        \"BND\",
        \"BOB\",
        \"BOL\",
        \"BOP\",
        \"BOV\",
        \"BRB\",
        \"BRC\",
        \"BRE\",
        \"BRL\",
        \"BRN\",
        \"BRR\",
        \"BRZ\",
        \"BSD\",
        \"BTN\",
        \"BUK\",
        \"BWP\",
        \"BYB\",
        \"BYN\",
        \"BYR\",
        \"BZD\",
        \"CAD\",
        \"CDF\",
        \"CHE\",
        \"CHF\",
        \"CHW\",
        \"CLE\",
        \"CLF\",
        \"CLP\",
        \"CNH\",
        \"CNX\",
        \"CNY\",
        \"COP\",
        \"COU\",
        \"CRC\",
        \"CSD\",
        \"CSK\",
        \"CUC\",
        \"CUP\",
        \"CVE\",
        \"CYP\",
        \"CZK\",
        \"DDM\",
        \"DEM\",
        \"DJF\",
        \"DKK\",
        \"DOP\",
        \"DZD\",
        \"ECS\",
        \"ECV\",
        \"EEK\",
        \"EGP\",
        \"ERN\",
        \"ESA\",
        \"ESB\",
        \"ESP\",
        \"ETB\",
        \"EUR\",
        \"FIM\",
        \"FJD\",
        \"FKP\",
        \"FRF\",
        \"GBP\",
        \"GEK\",
        \"GEL\",
        \"GHC\",
        \"GHS\",
        \"GIP\",
        \"GMD\",
        \"GNF\",
        \"GNS\",
        \"GQE\",
        \"GRD\",
        \"GTQ\",
        \"GWE\",
        \"GWP\",
        \"GYD\",
        \"HKD\",
        \"HNL\",
        \"HRD\",
        \"HRK\",
        \"HTG\",
        \"HUF\",
        \"IDR\",
        \"IEP\",
        \"ILP\",
        \"ILR\",
        \"ILS\",
        \"INR\",
        \"IQD\",
        \"IRR\",
        \"ISJ\",
        \"ISK\",
        \"ITL\",
        \"JMD\",
        \"JOD\",
        \"JPY\",
        \"KES\",
        \"KGS\",
        \"KHR\",
        \"KMF\",
        \"KPW\",
        \"KRH\",
        \"KRO\",
        \"KRW\",
        \"KWD\",
        \"KYD\",
        \"KZT\",
        \"LAK\",
        \"LBP\",
        \"LKR\",
        \"LRD\",
        \"LSL\",
        \"LTL\",
        \"LTT\",
        \"LUC\",
        \"LUF\",
        \"LUL\",
        \"LVL\",
        \"LVR\",
        \"LYD\",
        \"MAD\",
        \"MAF\",
        \"MCF\",
        \"MDC\",
        \"MDL\",
        \"MGA\",
        \"MGF\",
        \"MKD\",
        \"MKN\",
        \"MLF\",
        \"MMK\",
        \"MNT\",
        \"MOP\",
        \"MRO\",
        \"MRU\",
        \"MTL\",
        \"MTP\",
        \"MUR\",
        \"MVP\",
        \"MVR\",
        \"MWK\",
        \"MXN\",
        \"MXP\",
        \"MXV\",
        \"MYR\",
        \"MZE\",
        \"MZM\",
        \"MZN\",
        \"NAD\",
        \"NGN\",
        \"NIC\",
        \"NIO\",
        \"NLG\",
        \"NOK\",
        \"NPR\",
        \"NZD\",
        \"OMR\",
        \"PAB\",
        \"PEI\",
        \"PEN\",
        \"PES\",
        \"PGK\",
        \"PHP\",
        \"PKR\",
        \"PLN\",
        \"PLZ\",
        \"PTE\",
        \"PYG\",
        \"QAR\",
        \"RHD\",
        \"ROL\",
        \"RON\",
        \"RSD\",
        \"RUB\",
        \"RUR\",
        \"RWF\",
        \"SAR\",
        \"SBD\",
        \"SCR\",
        \"SDD\",
        \"SDG\",
        \"SDP\",
        \"SEK\",
        \"SGD\",
        \"SHP\",
        \"SIT\",
        \"SKK\",
        \"SLL\",
        \"SOS\",
        \"SRD\",
        \"SRG\",
        \"SSP\",
        \"STD\",
        \"STN\",
        \"SUR\",
        \"SVC\",
        \"SYP\",
        \"SZL\",
        \"THB\",
        \"TJR\",
        \"TJS\",
        \"TMM\",
        \"TMT\",
        \"TND\",
        \"TOP\",
        \"TPE\",
        \"TRL\",
        \"TRY\",
        \"TTD\",
        \"TWD\",
        \"TZS\",
        \"UAH\",
        \"UAK\",
        \"UGS\",
        \"UGX\",
        \"USD\",
        \"USN\",
        \"USS\",
        \"UYI\",
        \"UYP\",
        \"UYU\",
        \"UYW\",
        \"UZS\",
        \"VEB\",
        \"VEF\",
        \"VES\",
        \"VND\",
        \"VNN\",
        \"VUV\",
        \"WST\",
        \"XAF\",
        \"XCD\",
        \"XEU\",
        \"XFO\",
        \"XFU\",
        \"XOF\",
        \"XPF\",
        \"XRE\",
        \"YDD\",
        \"YER\",
        \"YUD\",
        \"YUM\",
        \"YUN\",
        \"YUR\",
        \"ZAL\",
        \"ZAR\",
        \"ZMK\",
        \"ZMW\",
        \"ZRN\",
        \"ZRZ\",
        \"ZWD\",
        \"ZWL\",
        \"ZWR\"
    ],
    \"Meta\": {
        \"ADP\": [
            0,
            0,
            0,
            0
        ],
        \"AFN\": [
            0,
            0,
            0,
            0
        ],
        \"ALL\": [
            0,
            0,
            0,
            0
        ],
        \"AMD\": [
            2,
            0,
            0,
            0
        ],
        \"BHD\": [
            3,
            0,
            3,
            0
        ],
        \"BIF\": [
            0,
            0,
            0,
            0
        ],
        \"BYN\": [
            2,
            0,
            2,
            0
        ],
        \"BYR\": [
            0,
            0,
            0,
            0
        ],
        \"CAD\": [
            2,
            0,
            2,
            5
        ],
        \"CHF\": [
            2,
            0,
            2,
            5
        ],
        \"CLF\": [
            4,
            0,
            4,
            0
        ],
        \"CLP\": [
            0,
            0,
            0,
            0
        ],
        \"COP\": [
            2,
            0,
            0,
            0
        ],
        \"CRC\": [
            2,
            0,
            0,
            0
        ],
        \"CZK\": [
            2,
            0,
            0,
            0
        ],
        \"DEFAULT\": [
            2,
            0,
            2,
            0
        ],
        \"DJF\": [
            0,
            0,
            0,
            0
        ],
        \"DKK\": [
            2,
            0,
            2,
            50
        ],
        \"ESP\": [
            0,
            0,
            0,
            0
        ],
        \"GNF\": [
            0,
            0,
            0,
            0
        ],
        \"GYD\": [
            2,
            0,
            0,
            0
        ],
        \"HUF\": [
            2,
            0,
            0,
            0
        ],
        \"IDR\": [
            2,
            0,
            0,
            0
        ],
        \"IQD\": [
            0,
            0,
            0,
            0
        ],
        \"IRR\": [
            0,
            0,
            0,
            0
        ],
        \"ISK\": [
            0,
            0,
            0,
            0
        ],
        \"ITL\": [
            0,
            0,
            0,
            0
        ],
        \"JOD\": [
            3,
            0,
            3,
            0
        ],
        \"JPY\": [
            0,
            0,
            0,
            0
        ],
        \"KMF\": [
            0,
            0,
            0,
            0
        ],
        \"KPW\": [
            0,
            0,
            0,
            0
        ],
        \"KRW\": [
            0,
            0,
            0,
            0
        ],
        \"KWD\": [
            3,
            0,
            3,
            0
        ],
        \"LAK\": [
            0,
            0,
            0,
            0
        ],
        \"LBP\": [
            0,
            0,
            0,
            0
        ],
        \"LUF\": [
            0,
            0,
            0,
            0
        ],
        \"LYD\": [
            3,
            0,
            3,
            0
        ],
        \"MGA\": [
            0,
            0,
            0,
            0
        ],
        \"MGF\": [
            0,
            0,
            0,
            0
        ],
        \"MMK\": [
            0,
            0,
            0,
            0
        ],
        \"MNT\": [
            2,
            0,
            0,
            0
        ],
        \"MRO\": [
            0,
            0,
            0,
            0
        ],
        \"MUR\": [
            2,
            0,
            0,
            0
        ],
        \"NOK\": [
            2,
            0,
            0,
            0
        ],
        \"OMR\": [
            3,
            0,
            3,
            0
        ],
        \"PKR\": [
            2,
            0,
            0,
            0
        ],
        \"PYG\": [
            0,
            0,
            0,
            0
        ],
        \"RSD\": [
            0,
            0,
            0,
            0
        ],
        \"RWF\": [
            0,
            0,
            0,
            0
        ],
        \"SEK\": [
            2,
            0,
            0,
            0
        ],
        \"SLL\": [
            0,
            0,
            0,
            0
        ],
        \"SOS\": [
            0,
            0,
            0,
            0
        ],
        \"STD\": [
            0,
            0,
            0,
            0
        ],
        \"SYP\": [
            0,
            0,
            0,
            0
        ],
        \"TMM\": [
            0,
            0,
            0,
            0
        ],
        \"TND\": [
            3,
            0,
            3,
            0
        ],
        \"TRL\": [
            0,
            0,
            0,
            0
        ],
        \"TWD\": [
            2,
            0,
            0,
            0
        ],
        \"TZS\": [
            2,
            0,
            0,
            0
        ],
        \"UGX\": [
            0,
            0,
            0,
            0
        ],
        \"UYI\": [
            0,
            0,
            0,
            0
        ],
        \"UYW\": [
            4,
            0,
            4,
            0
        ],
        \"UZS\": [
            2,
            0,
            0,
            0
        ],
        \"VEF\": [
            2,
            0,
            0,
            0
        ],
        \"VND\": [
            0,
            0,
            0,
            0
        ],
        \"VUV\": [
            0,
            0,
            0,
            0
        ],
        \"XAF\": [
            0,
            0,
            0,
            0
        ],
        \"XOF\": [
            0,
            0,
            0,
            0
        ],
        \"XPF\": [
            0,
            0,
            0,
            0
        ],
        \"YER\": [
            0,
            0,
            0,
            0
        ],
        \"ZMK\": [
            0,
            0,
            0,
            0
        ],
        \"ZWD\": [
            0,
            0,
            0,
            0
        ]
    },
    \"Alpha3ToNumeric\": {
        \"AFA\": 4,
        \"ALK\": 8,
        \"ALL\": 8,
        \"DZD\": 12,
        \"ADP\": 20,
        \"AON\": 24,
        \"AOK\": 24,
        \"AZM\": 31,
        \"ARA\": 32,
        \"ARP\": 32,
        \"ARS\": 32,
        \"AUD\": 36,
        \"ATS\": 40,
        \"BSD\": 44,
        \"BHD\": 48,
        \"BDT\": 50,
        \"AMD\": 51,
        \"BBD\": 52,
        \"BEF\": 56,
        \"BMD\": 60,
        \"BTN\": 64,
        \"BOB\": 68,
        \"BOP\": 68,
        \"BAD\": 70,
        \"BWP\": 72,
        \"BRN\": 76,
        \"BRE\": 76,
        \"BRC\": 76,
        \"BRB\": 76,
        \"BZD\": 84,
        \"SBD\": 90,
        \"BND\": 96,
        \"BGL\": 100,
        \"MMK\": 104,
        \"BUK\": 104,
        \"BIF\": 108,
        \"BYB\": 112,
        \"KHR\": 116,
        \"CAD\": 124,
        \"CVE\": 132,
        \"KYD\": 136,
        \"LKR\": 144,
        \"CLP\": 152,
        \"CNY\": 156,
        \"COP\": 170,
        \"KMF\": 174,
        \"ZRZ\": 180,
        \"ZRN\": 180,
        \"CRC\": 188,
        \"HRK\": 191,
        \"HRD\": 191,
        \"CUP\": 192,
        \"CYP\": 196,
        \"CSK\": 200,
        \"CZK\": 203,
        \"DKK\": 208,
        \"DOP\": 214,
        \"ECS\": 218,
        \"SVC\": 222,
        \"GQE\": 226,
        \"ETB\": 230,
        \"ERN\": 232,
        \"EEK\": 233,
        \"FKP\": 238,
        \"FJD\": 242,
        \"FIM\": 246,
        \"FRF\": 250,
        \"DJF\": 262,
        \"GEK\": 268,
        \"GMD\": 270,
        \"DEM\": 276,
        \"DDM\": 278,
        \"GHC\": 288,
        \"GIP\": 292,
        \"GRD\": 300,
        \"GTQ\": 320,
        \"GNS\": 324,
        \"GNF\": 324,
        \"GYD\": 328,
        \"HTG\": 332,
        \"HNL\": 340,
        \"HKD\": 344,
        \"HUF\": 348,
        \"ISJ\": 352,
        \"ISK\": 352,
        \"INR\": 356,
        \"IDR\": 360,
        \"IRR\": 364,
        \"IQD\": 368,
        \"IEP\": 372,
        \"ILP\": 376,
        \"ILR\": 376,
        \"ILS\": 376,
        \"ITL\": 380,
        \"JMD\": 388,
        \"JPY\": 392,
        \"KZT\": 398,
        \"JOD\": 400,
        \"KES\": 404,
        \"KPW\": 408,
        \"KRW\": 410,
        \"KWD\": 414,
        \"KGS\": 417,
        \"LAK\": 418,
        \"LBP\": 422,
        \"LSL\": 426,
        \"LVR\": 428,
        \"LVL\": 428,
        \"LRD\": 430,
        \"LYD\": 434,
        \"LTL\": 440,
        \"LTT\": 440,
        \"LUF\": 442,
        \"MOP\": 446,
        \"MGF\": 450,
        \"MWK\": 454,
        \"MYR\": 458,
        \"MVR\": 462,
        \"MLF\": 466,
        \"MTL\": 470,
        \"MTP\": 470,
        \"MRO\": 478,
        \"MUR\": 480,
        \"MXP\": 484,
        \"MXN\": 484,
        \"MNT\": 496,
        \"MDL\": 498,
        \"MAD\": 504,
        \"MZE\": 508,
        \"MZM\": 508,
        \"OMR\": 512,
        \"NAD\": 516,
        \"NPR\": 524,
        \"NLG\": 528,
        \"ANG\": 532,
        \"AWG\": 533,
        \"VUV\": 548,
        \"NZD\": 554,
        \"NIC\": 558,
        \"NIO\": 558,
        \"NGN\": 566,
        \"NOK\": 578,
        \"PKR\": 586,
        \"PAB\": 590,
        \"PGK\": 598,
        \"PYG\": 600,
        \"PEI\": 604,
        \"PES\": 604,
        \"PEN\": 604,
        \"PHP\": 608,
        \"PLZ\": 616,
        \"PTE\": 620,
        \"GWP\": 624,
        \"GWE\": 624,
        \"TPE\": 626,
        \"QAR\": 634,
        \"ROL\": 642,
        \"RUB\": 643,
        \"RWF\": 646,
        \"SHP\": 654,
        \"STD\": 678,
        \"SAR\": 682,
        \"SCR\": 690,
        \"SLL\": 694,
        \"SGD\": 702,
        \"SKK\": 703,
        \"VND\": 704,
        \"SIT\": 705,
        \"SOS\": 706,
        \"ZAR\": 710,
        \"ZWD\": 716,
        \"RHD\": 716,
        \"YDD\": 720,
        \"ESP\": 724,
        \"SSP\": 728,
        \"SDD\": 736,
        \"SDP\": 736,
        \"SRG\": 740,
        \"SZL\": 748,
        \"SEK\": 752,
        \"CHF\": 756,
        \"SYP\": 760,
        \"TJR\": 762,
        \"THB\": 764,
        \"TOP\": 776,
        \"TTD\": 780,
        \"AED\": 784,
        \"TND\": 788,
        \"TRL\": 792,
        \"TMM\": 795,
        \"UGX\": 800,
        \"UGS\": 800,
        \"UAK\": 804,
        \"MKD\": 807,
        \"RUR\": 810,
        \"SUR\": 810,
        \"EGP\": 818,
        \"GBP\": 826,
        \"TZS\": 834,
        \"USD\": 840,
        \"UYP\": 858,
        \"UYU\": 858,
        \"UZS\": 860,
        \"VEB\": 862,
        \"WST\": 882,
        \"YER\": 886,
        \"YUN\": 890,
        \"YUD\": 890,
        \"YUM\": 891,
        \"CSD\": 891,
        \"ZMK\": 894,
        \"TWD\": 901,
        \"UYW\": 927,
        \"VES\": 928,
        \"MRU\": 929,
        \"STN\": 930,
        \"CUC\": 931,
        \"ZWL\": 932,
        \"BYN\": 933,
        \"TMT\": 934,
        \"ZWR\": 935,
        \"GHS\": 936,
        \"VEF\": 937,
        \"SDG\": 938,
        \"UYI\": 940,
        \"RSD\": 941,
        \"MZN\": 943,
        \"AZN\": 944,
        \"RON\": 946,
        \"CHE\": 947,
        \"CHW\": 948,
        \"TRY\": 949,
        \"XAF\": 950,
        \"XCD\": 951,
        \"XOF\": 952,
        \"XPF\": 953,
        \"XEU\": 954,
        \"ZMW\": 967,
        \"SRD\": 968,
        \"MGA\": 969,
        \"COU\": 970,
        \"AFN\": 971,
        \"TJS\": 972,
        \"AOA\": 973,
        \"BYR\": 974,
        \"BGN\": 975,
        \"CDF\": 976,
        \"BAM\": 977,
        \"EUR\": 978,
        \"MXV\": 979,
        \"UAH\": 980,
        \"GEL\": 981,
        \"AOR\": 982,
        \"ECV\": 983,
        \"BOV\": 984,
        \"PLN\": 985,
        \"BRL\": 986,
        \"BRR\": 987,
        \"LUL\": 988,
        \"LUC\": 989,
        \"CLF\": 990,
        \"ZAL\": 991,
        \"BEL\": 992,
        \"BEC\": 993,
        \"ESB\": 995,
        \"ESA\": 996,
        \"USN\": 997,
        \"USS\": 998
    },
    \"NumericToAlpha3\": {
        \"4\": [
            \"AFA\"
        ],
        \"8\": [
            \"ALK\",
            \"ALL\"
        ],
        \"12\": [
            \"DZD\"
        ],
        \"20\": [
            \"ADP\"
        ],
        \"24\": [
            \"AON\",
            \"AOK\"
        ],
        \"31\": [
            \"AZM\"
        ],
        \"32\": [
            \"ARA\",
            \"ARP\",
            \"ARS\"
        ],
        \"36\": [
            \"AUD\"
        ],
        \"40\": [
            \"ATS\"
        ],
        \"44\": [
            \"BSD\"
        ],
        \"48\": [
            \"BHD\"
        ],
        \"50\": [
            \"BDT\"
        ],
        \"51\": [
            \"AMD\"
        ],
        \"52\": [
            \"BBD\"
        ],
        \"56\": [
            \"BEF\"
        ],
        \"60\": [
            \"BMD\"
        ],
        \"64\": [
            \"BTN\"
        ],
        \"68\": [
            \"BOB\",
            \"BOP\"
        ],
        \"70\": [
            \"BAD\"
        ],
        \"72\": [
            \"BWP\"
        ],
        \"76\": [
            \"BRN\",
            \"BRE\",
            \"BRC\",
            \"BRB\"
        ],
        \"84\": [
            \"BZD\"
        ],
        \"90\": [
            \"SBD\"
        ],
        \"96\": [
            \"BND\"
        ],
        \"100\": [
            \"BGL\"
        ],
        \"104\": [
            \"MMK\",
            \"BUK\"
        ],
        \"108\": [
            \"BIF\"
        ],
        \"112\": [
            \"BYB\"
        ],
        \"116\": [
            \"KHR\"
        ],
        \"124\": [
            \"CAD\"
        ],
        \"132\": [
            \"CVE\"
        ],
        \"136\": [
            \"KYD\"
        ],
        \"144\": [
            \"LKR\"
        ],
        \"152\": [
            \"CLP\"
        ],
        \"156\": [
            \"CNY\"
        ],
        \"170\": [
            \"COP\"
        ],
        \"174\": [
            \"KMF\"
        ],
        \"180\": [
            \"ZRZ\",
            \"ZRN\"
        ],
        \"188\": [
            \"CRC\"
        ],
        \"191\": [
            \"HRK\",
            \"HRD\"
        ],
        \"192\": [
            \"CUP\"
        ],
        \"196\": [
            \"CYP\"
        ],
        \"200\": [
            \"CSK\"
        ],
        \"203\": [
            \"CZK\"
        ],
        \"208\": [
            \"DKK\"
        ],
        \"214\": [
            \"DOP\"
        ],
        \"218\": [
            \"ECS\"
        ],
        \"222\": [
            \"SVC\"
        ],
        \"226\": [
            \"GQE\"
        ],
        \"230\": [
            \"ETB\"
        ],
        \"232\": [
            \"ERN\"
        ],
        \"233\": [
            \"EEK\"
        ],
        \"238\": [
            \"FKP\"
        ],
        \"242\": [
            \"FJD\"
        ],
        \"246\": [
            \"FIM\"
        ],
        \"250\": [
            \"FRF\"
        ],
        \"262\": [
            \"DJF\"
        ],
        \"268\": [
            \"GEK\"
        ],
        \"270\": [
            \"GMD\"
        ],
        \"276\": [
            \"DEM\"
        ],
        \"278\": [
            \"DDM\"
        ],
        \"288\": [
            \"GHC\"
        ],
        \"292\": [
            \"GIP\"
        ],
        \"300\": [
            \"GRD\"
        ],
        \"320\": [
            \"GTQ\"
        ],
        \"324\": [
            \"GNS\",
            \"GNF\"
        ],
        \"328\": [
            \"GYD\"
        ],
        \"332\": [
            \"HTG\"
        ],
        \"340\": [
            \"HNL\"
        ],
        \"344\": [
            \"HKD\"
        ],
        \"348\": [
            \"HUF\"
        ],
        \"352\": [
            \"ISJ\",
            \"ISK\"
        ],
        \"356\": [
            \"INR\"
        ],
        \"360\": [
            \"IDR\"
        ],
        \"364\": [
            \"IRR\"
        ],
        \"368\": [
            \"IQD\"
        ],
        \"372\": [
            \"IEP\"
        ],
        \"376\": [
            \"ILP\",
            \"ILR\",
            \"ILS\"
        ],
        \"380\": [
            \"ITL\"
        ],
        \"388\": [
            \"JMD\"
        ],
        \"392\": [
            \"JPY\"
        ],
        \"398\": [
            \"KZT\"
        ],
        \"400\": [
            \"JOD\"
        ],
        \"404\": [
            \"KES\"
        ],
        \"408\": [
            \"KPW\"
        ],
        \"410\": [
            \"KRW\"
        ],
        \"414\": [
            \"KWD\"
        ],
        \"417\": [
            \"KGS\"
        ],
        \"418\": [
            \"LAK\"
        ],
        \"422\": [
            \"LBP\"
        ],
        \"426\": [
            \"LSL\"
        ],
        \"428\": [
            \"LVR\",
            \"LVL\"
        ],
        \"430\": [
            \"LRD\"
        ],
        \"434\": [
            \"LYD\"
        ],
        \"440\": [
            \"LTL\",
            \"LTT\"
        ],
        \"442\": [
            \"LUF\"
        ],
        \"446\": [
            \"MOP\"
        ],
        \"450\": [
            \"MGF\"
        ],
        \"454\": [
            \"MWK\"
        ],
        \"458\": [
            \"MYR\"
        ],
        \"462\": [
            \"MVR\"
        ],
        \"466\": [
            \"MLF\"
        ],
        \"470\": [
            \"MTL\",
            \"MTP\"
        ],
        \"478\": [
            \"MRO\"
        ],
        \"480\": [
            \"MUR\"
        ],
        \"484\": [
            \"MXP\",
            \"MXN\"
        ],
        \"496\": [
            \"MNT\"
        ],
        \"498\": [
            \"MDL\"
        ],
        \"504\": [
            \"MAD\"
        ],
        \"508\": [
            \"MZE\",
            \"MZM\"
        ],
        \"512\": [
            \"OMR\"
        ],
        \"516\": [
            \"NAD\"
        ],
        \"524\": [
            \"NPR\"
        ],
        \"528\": [
            \"NLG\"
        ],
        \"532\": [
            \"ANG\"
        ],
        \"533\": [
            \"AWG\"
        ],
        \"548\": [
            \"VUV\"
        ],
        \"554\": [
            \"NZD\"
        ],
        \"558\": [
            \"NIC\",
            \"NIO\"
        ],
        \"566\": [
            \"NGN\"
        ],
        \"578\": [
            \"NOK\"
        ],
        \"586\": [
            \"PKR\"
        ],
        \"590\": [
            \"PAB\"
        ],
        \"598\": [
            \"PGK\"
        ],
        \"600\": [
            \"PYG\"
        ],
        \"604\": [
            \"PEI\",
            \"PES\",
            \"PEN\"
        ],
        \"608\": [
            \"PHP\"
        ],
        \"616\": [
            \"PLZ\"
        ],
        \"620\": [
            \"PTE\"
        ],
        \"624\": [
            \"GWP\",
            \"GWE\"
        ],
        \"626\": [
            \"TPE\"
        ],
        \"634\": [
            \"QAR\"
        ],
        \"642\": [
            \"ROL\"
        ],
        \"643\": [
            \"RUB\"
        ],
        \"646\": [
            \"RWF\"
        ],
        \"654\": [
            \"SHP\"
        ],
        \"678\": [
            \"STD\"
        ],
        \"682\": [
            \"SAR\"
        ],
        \"690\": [
            \"SCR\"
        ],
        \"694\": [
            \"SLL\"
        ],
        \"702\": [
            \"SGD\"
        ],
        \"703\": [
            \"SKK\"
        ],
        \"704\": [
            \"VND\"
        ],
        \"705\": [
            \"SIT\"
        ],
        \"706\": [
            \"SOS\"
        ],
        \"710\": [
            \"ZAR\"
        ],
        \"716\": [
            \"ZWD\",
            \"RHD\"
        ],
        \"720\": [
            \"YDD\"
        ],
        \"724\": [
            \"ESP\"
        ],
        \"728\": [
            \"SSP\"
        ],
        \"736\": [
            \"SDD\",
            \"SDP\"
        ],
        \"740\": [
            \"SRG\"
        ],
        \"748\": [
            \"SZL\"
        ],
        \"752\": [
            \"SEK\"
        ],
        \"756\": [
            \"CHF\"
        ],
        \"760\": [
            \"SYP\"
        ],
        \"762\": [
            \"TJR\"
        ],
        \"764\": [
            \"THB\"
        ],
        \"776\": [
            \"TOP\"
        ],
        \"780\": [
            \"TTD\"
        ],
        \"784\": [
            \"AED\"
        ],
        \"788\": [
            \"TND\"
        ],
        \"792\": [
            \"TRL\"
        ],
        \"795\": [
            \"TMM\"
        ],
        \"800\": [
            \"UGX\",
            \"UGS\"
        ],
        \"804\": [
            \"UAK\"
        ],
        \"807\": [
            \"MKD\"
        ],
        \"810\": [
            \"RUR\",
            \"SUR\"
        ],
        \"818\": [
            \"EGP\"
        ],
        \"826\": [
            \"GBP\"
        ],
        \"834\": [
            \"TZS\"
        ],
        \"840\": [
            \"USD\"
        ],
        \"858\": [
            \"UYP\",
            \"UYU\"
        ],
        \"860\": [
            \"UZS\"
        ],
        \"862\": [
            \"VEB\"
        ],
        \"882\": [
            \"WST\"
        ],
        \"886\": [
            \"YER\"
        ],
        \"890\": [
            \"YUN\",
            \"YUD\"
        ],
        \"891\": [
            \"YUM\",
            \"CSD\"
        ],
        \"894\": [
            \"ZMK\"
        ],
        \"901\": [
            \"TWD\"
        ],
        \"927\": [
            \"UYW\"
        ],
        \"928\": [
            \"VES\"
        ],
        \"929\": [
            \"MRU\"
        ],
        \"930\": [
            \"STN\"
        ],
        \"931\": [
            \"CUC\"
        ],
        \"932\": [
            \"ZWL\"
        ],
        \"933\": [
            \"BYN\"
        ],
        \"934\": [
            \"TMT\"
        ],
        \"935\": [
            \"ZWR\"
        ],
        \"936\": [
            \"GHS\"
        ],
        \"937\": [
            \"VEF\"
        ],
        \"938\": [
            \"SDG\"
        ],
        \"940\": [
            \"UYI\"
        ],
        \"941\": [
            \"RSD\"
        ],
        \"943\": [
            \"MZN\"
        ],
        \"944\": [
            \"AZN\"
        ],
        \"946\": [
            \"RON\"
        ],
        \"947\": [
            \"CHE\"
        ],
        \"948\": [
            \"CHW\"
        ],
        \"949\": [
            \"TRY\"
        ],
        \"950\": [
            \"XAF\"
        ],
        \"951\": [
            \"XCD\"
        ],
        \"952\": [
            \"XOF\"
        ],
        \"953\": [
            \"XPF\"
        ],
        \"954\": [
            \"XEU\"
        ],
        \"967\": [
            \"ZMW\"
        ],
        \"968\": [
            \"SRD\"
        ],
        \"969\": [
            \"MGA\"
        ],
        \"970\": [
            \"COU\"
        ],
        \"971\": [
            \"AFN\"
        ],
        \"972\": [
            \"TJS\"
        ],
        \"973\": [
            \"AOA\"
        ],
        \"974\": [
            \"BYR\"
        ],
        \"975\": [
            \"BGN\"
        ],
        \"976\": [
            \"CDF\"
        ],
        \"977\": [
            \"BAM\"
        ],
        \"978\": [
            \"EUR\"
        ],
        \"979\": [
            \"MXV\"
        ],
        \"980\": [
            \"UAH\"
        ],
        \"981\": [
            \"GEL\"
        ],
        \"982\": [
            \"AOR\"
        ],
        \"983\": [
            \"ECV\"
        ],
        \"984\": [
            \"BOV\"
        ],
        \"985\": [
            \"PLN\"
        ],
        \"986\": [
            \"BRL\"
        ],
        \"987\": [
            \"BRR\"
        ],
        \"988\": [
            \"LUL\"
        ],
        \"989\": [
            \"LUC\"
        ],
        \"990\": [
            \"CLF\"
        ],
        \"991\": [
            \"ZAL\"
        ],
        \"992\": [
            \"BEL\"
        ],
        \"993\": [
            \"BEC\"
        ],
        \"995\": [
            \"ESB\"
        ],
        \"996\": [
            \"ESA\"
        ],
        \"997\": [
            \"USN\"
        ],
        \"998\": [
            \"USS\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/meta.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/meta.json");
    }
}
