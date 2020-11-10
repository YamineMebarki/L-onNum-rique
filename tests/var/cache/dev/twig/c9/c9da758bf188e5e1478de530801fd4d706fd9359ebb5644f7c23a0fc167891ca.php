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

/* vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json */
class __TwigTemplate_d43003c3b849599a124b5c8106f49b0121502acd0190d3f5cfee150ed4a78161 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ANG\": [
            \"ANG\",
            \"Голланд Антил гульдени\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Аргентина песоси\"
        ],
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Аруба флорини\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Барбадос доллари\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Бермуда доллари\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Боливия болвиани\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Бразил реали\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Багама доллари\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Белиз доллари\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Канада доллари\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Чили песоси\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Хитой юани\"
        ],
        \"COP\": [
            \"COP\",
            \"Колумбия песоси\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Коста-Рика колони\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Куба Айирбошлаш песоси\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Куба песоси\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Доминикан песоси\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Жазоир динори\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Миср фунти\"
        ],
        \"EUR\": [
            \"€\",
            \"Евро\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Фолькленд ороли фунти\"
        ],
        \"GBP\": [
            \"£\",
            \"Инглиз фунт\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Гватемала кветзали\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Гаяна доллари\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"HKD\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Гондурас лемпираси\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Гаити гурдаси\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"Ҳинд рупияси\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Ямайка доллари\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Япон йенаси\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Кайман ороли Доллари\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Ливия динори\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Марокаш дирҳами\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Мексика песоси\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Никарагуа кордобаси\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Панама бальбоаси\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Перу сол\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Парагвай гуарани\"
        ],
        \"RON\": [
            \"RON\",
            \"RON\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Рус рубли\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Суринам доллари\"
        ],
        \"THB\": [
            \"฿\",
            \"THB\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Тринидад ва Тобаго доллари\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"USD\": [
            \"US\$\",
            \"АҚШ доллари\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Уругвай песоси\"
        ],
        \"UZS\": [
            \"сўм\",
            \"Ўзбекистон сўм\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Венесуэла боливари (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Венесуэла боливари\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Шарқий Кариб доллари\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json";
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
        \"ANG\": [
            \"ANG\",
            \"Голланд Антил гульдени\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Аргентина песоси\"
        ],
        \"AUD\": [
            \"A\$\",
            \"AUD\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Аруба флорини\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Барбадос доллари\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Бермуда доллари\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Боливия болвиани\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Бразил реали\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Багама доллари\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Белиз доллари\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Канада доллари\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Чили песоси\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Хитой юани\"
        ],
        \"COP\": [
            \"COP\",
            \"Колумбия песоси\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Коста-Рика колони\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Куба Айирбошлаш песоси\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Куба песоси\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Доминикан песоси\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Жазоир динори\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Миср фунти\"
        ],
        \"EUR\": [
            \"€\",
            \"Евро\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Фолькленд ороли фунти\"
        ],
        \"GBP\": [
            \"£\",
            \"Инглиз фунт\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Гватемала кветзали\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Гаяна доллари\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"HKD\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Гондурас лемпираси\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Гаити гурдаси\"
        ],
        \"ILS\": [
            \"₪\",
            \"ILS\"
        ],
        \"INR\": [
            \"₹\",
            \"Ҳинд рупияси\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Ямайка доллари\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Япон йенаси\"
        ],
        \"KRW\": [
            \"₩\",
            \"KRW\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Кайман ороли Доллари\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Ливия динори\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Марокаш дирҳами\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Мексика песоси\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Никарагуа кордобаси\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"NZD\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Панама бальбоаси\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Перу сол\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Парагвай гуарани\"
        ],
        \"RON\": [
            \"RON\",
            \"RON\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Рус рубли\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Суринам доллари\"
        ],
        \"THB\": [
            \"฿\",
            \"THB\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Тринидад ва Тобаго доллари\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"TWD\"
        ],
        \"USD\": [
            \"US\$\",
            \"АҚШ доллари\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Уругвай песоси\"
        ],
        \"UZS\": [
            \"сўм\",
            \"Ўзбекистон сўм\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Венесуэла боливари (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Венесуэла боливари\"
        ],
        \"VND\": [
            \"₫\",
            \"VND\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"XAF\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Шарқий Кариб доллари\"
        ],
        \"XOF\": [
            \"CFA\",
            \"XOF\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"XPF\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/uz_Cyrl.json");
    }
}
