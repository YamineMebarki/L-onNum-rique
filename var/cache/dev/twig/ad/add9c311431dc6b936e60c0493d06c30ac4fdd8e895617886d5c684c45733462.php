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

/* vendor/symfony/intl/Resources/data/currencies/sw_KE.json */
class __TwigTemplate_7ec47f9f079e8513d5e54b88d92dd3352644082ab01508efaa61f6887b894102 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw_KE.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/sw_KE.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"Diramu ya Falme za Kiarabu\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani ya Afghanistani\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Gilda ya Antili ya Uholanzi\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso ya Ajentina\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manati ya Azabajani\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Maki ya Bosnia na Hezegovina Inayoweza Kubadilishwa\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dola ya Babadosi\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka ya Bangladeshi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari ya Bahareni\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dola ya Bamuda\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Reale ya Brazili\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dola ya Bahama\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrumi ya Bhutani\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble ya Belarusi\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola ya Kanada\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan ya China (huru)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan ya China\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso ya Kolombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon ya Kostarika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso ya Kuba Inayoweza Kubadilishwa\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso ya Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Kepuvede\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna ya Cheki\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Jibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Kroni ya Denmaki\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso ya Dominika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari ya Aljeria\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari ya Jiojia\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sidi ya Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pauni ya Jibrata\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna ya Kroeshia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Godi ya Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forinti ya Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia ya Indonesia\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinari ya Iraki\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riali ya Irani\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dola ya Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinari ya Yordani\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ya Japani\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Rieli ya Kambodia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Komoro\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinari ya Kuwait\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge ya Kazakistani\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pauni ya Lebanoni\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diramu ya Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariari ya Madagaska\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Dinari ya Masedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kiati ya Myama\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataka ya Macau\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa ya Maldivi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso ya Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgiti ya Malesia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Naijeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba ya Nikaragwa\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Kroni ya Norwe\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia ya Nepali\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dola ya Nyuzilandi\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riali ya Omani\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia ya Pakistani\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloti ya Polandi\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani ya Paragwai\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riali ya Katari\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinari ya Serbia\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyali ya Saudia\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dola ya Visiwa vya Solomoni\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudani\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dola ya Singapoo\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni ya Siera Leoni\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pauni ya Sudani Kusini\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni ya Uswazi\"
        ],
        \"THB\": [
            \"฿\",
            \"Bahti ya Tailandi\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni ya Tajikistani\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manati ya Turkmenistani\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dola ya Trinidadi na Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dola ya Taiwani\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia ya Ukraini\"
        ],
        \"USD\": [
            \"\$\",
            \"Dola ya Marekani\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso ya Urugwai\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som ya Uzbekistani\"
        ],
        \"VES\": [
            \"VES\",
            \"Boliva ya Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong ya Vietnamu\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ya CFA ya Afrika ya Kati\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dola ya Karibi Mashariki\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ya CFA ya Afrika Magharibi\"
        ],
        \"YER\": [
            \"YER\",
            \"Riali ya Yemeni\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/sw_KE.json";
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
            \"Diramu ya Falme za Kiarabu\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani ya Afghanistani\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Gilda ya Antili ya Uholanzi\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso ya Ajentina\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manati ya Azabajani\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Maki ya Bosnia na Hezegovina Inayoweza Kubadilishwa\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Dola ya Babadosi\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka ya Bangladeshi\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinari ya Bahareni\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Dola ya Bamuda\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Reale ya Brazili\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Dola ya Bahama\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrumi ya Bhutani\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Ruble ya Belarusi\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Dola ya Kanada\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Yuan ya China (huru)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan ya China\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso ya Kolombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colon ya Kostarika\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso ya Kuba Inayoweza Kubadilishwa\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso ya Kuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Eskudo ya Kepuvede\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna ya Cheki\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Faranga ya Jibuti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Kroni ya Denmaki\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso ya Dominika\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinari ya Aljeria\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari ya Jiojia\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Sidi ya Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Pauni ya Jibrata\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna ya Kroeshia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Godi ya Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forinti ya Hungaria\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupia ya Indonesia\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinari ya Iraki\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Riali ya Irani\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Dola ya Jamaika\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinari ya Yordani\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yeni ya Japani\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Rieli ya Kambodia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Faranga ya Komoro\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinari ya Kuwait\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge ya Kazakistani\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Pauni ya Lebanoni\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Diramu ya Moroko\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariari ya Madagaska\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Dinari ya Masedonia\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kiati ya Myama\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataka ya Macau\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa ya Maldivi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso ya Meksiko\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgiti ya Malesia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira ya Naijeria\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Cordoba ya Nikaragwa\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Kroni ya Norwe\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupia ya Nepali\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Dola ya Nyuzilandi\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Riali ya Omani\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupia ya Pakistani\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloti ya Polandi\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani ya Paragwai\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Riali ya Katari\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinari ya Serbia\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyali ya Saudia\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Dola ya Visiwa vya Solomoni\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Pauni ya Sudani\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Dola ya Singapoo\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leoni ya Siera Leoni\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Pauni ya Sudani Kusini\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni ya Uswazi\"
        ],
        \"THB\": [
            \"฿\",
            \"Bahti ya Tailandi\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni ya Tajikistani\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manati ya Turkmenistani\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Dola ya Trinidadi na Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Dola ya Taiwani\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia ya Ukraini\"
        ],
        \"USD\": [
            \"\$\",
            \"Dola ya Marekani\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso ya Urugwai\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som ya Uzbekistani\"
        ],
        \"VES\": [
            \"VES\",
            \"Boliva ya Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Dong ya Vietnamu\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Faranga ya CFA ya Afrika ya Kati\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Dola ya Karibi Mashariki\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Faranga ya CFA ya Afrika Magharibi\"
        ],
        \"YER\": [
            \"YER\",
            \"Riali ya Yemeni\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/sw_KE.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/sw_KE.json");
    }
}
