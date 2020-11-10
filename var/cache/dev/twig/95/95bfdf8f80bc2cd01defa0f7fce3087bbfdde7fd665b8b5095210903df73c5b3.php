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

/* vendor/symfony/intl/Resources/data/regions/fa_AF.json */
class __TwigTemplate_b7bf9189cbb0890b473e50f4b427546e7f01c14b2cae83572d5980feb04eaa09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fa_AF.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/fa_AF.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"اندورا\",
        \"AG\": \"انتیگوا و باربودا\",
        \"AL\": \"البانیا\",
        \"AO\": \"انگولا\",
        \"AQ\": \"انترکتیکا\",
        \"AR\": \"ارجنتاین\",
        \"BA\": \"بوسنیا و هرزه‌گوینا\",
        \"BD\": \"بنگله‌دیش\",
        \"BE\": \"بلجیم\",
        \"BG\": \"بلغاریا\",
        \"BN\": \"برونی\",
        \"BO\": \"بولیویا\",
        \"BR\": \"برازیل\",
        \"BS\": \"بهاماس\",
        \"CD\": \"کانگو - کینشاسا\",
        \"CG\": \"کانگو - برازویل\",
        \"CH\": \"سویس\",
        \"CL\": \"چلی\",
        \"CO\": \"کولمبیا\",
        \"CR\": \"کاستریکا\",
        \"CU\": \"کیوبا\",
        \"DK\": \"دنمارک\",
        \"EE\": \"استونیا\",
        \"ER\": \"اریتریا\",
        \"ES\": \"هسپانیه\",
        \"ET\": \"ایتوپیا\",
        \"FI\": \"فنلند\",
        \"FM\": \"میکرونزیا\",
        \"GD\": \"گرینادا\",
        \"GH\": \"گانا\",
        \"GN\": \"گینیا\",
        \"GQ\": \"گینیا استوایی\",
        \"GT\": \"گواتیمالا\",
        \"GW\": \"گینیا بیسائو\",
        \"GY\": \"گیانا\",
        \"HK\": \"هانگ کانگ، ناحیهٔ ویژهٔ حکومتی چین\",
        \"HN\": \"هاندوراس\",
        \"HR\": \"کروشیا\",
        \"HT\": \"هایتی\",
        \"ID\": \"اندونیزیا\",
        \"IE\": \"آیرلند\",
        \"IS\": \"آیسلند\",
        \"JP\": \"جاپان\",
        \"KE\": \"کینیا\",
        \"KH\": \"کمپوچیا\",
        \"KP\": \"کوریای شمالی\",
        \"KR\": \"کوریای جنوبی\",
        \"LK\": \"سریلانکا\",
        \"LS\": \"لیسوتو\",
        \"LT\": \"لتوانیا\",
        \"LV\": \"لاتویا\",
        \"LY\": \"لیبیا\",
        \"MG\": \"مادغاسکر\",
        \"MN\": \"منگولیا\",
        \"MR\": \"موریتانیا\",
        \"MT\": \"مالتا\",
        \"MX\": \"مکسیکو\",
        \"MY\": \"مالیزیا\",
        \"MZ\": \"موزمبیق\",
        \"NG\": \"نیجریا\",
        \"NI\": \"نیکاراگوا\",
        \"NL\": \"هالند\",
        \"NO\": \"ناروی\",
        \"NP\": \"نیپال\",
        \"NZ\": \"زیلاند جدید\",
        \"PA\": \"پانامه\",
        \"PE\": \"پیرو\",
        \"PG\": \"پاپوا نیو گینیا\",
        \"PL\": \"پولند\",
        \"PT\": \"پرتگال\",
        \"PY\": \"پاراگوای\",
        \"RO\": \"رومانیا\",
        \"SE\": \"سویدن\",
        \"SG\": \"سینگاپور\",
        \"SI\": \"سلونیا\",
        \"SJ\": \"اسوالبارد و جان ماین\",
        \"SK\": \"سلواکیا\",
        \"SL\": \"سیرالیون\",
        \"SN\": \"سینیگال\",
        \"SO\": \"سومالیه\",
        \"SV\": \"السلوادور\",
        \"TJ\": \"تاجکستان\",
        \"UG\": \"یوگاندا\",
        \"UY\": \"یوروگوای\",
        \"VC\": \"سنت وینسنت و گرنادین‌ها\",
        \"VE\": \"ونزویلا\",
        \"ZW\": \"زیمبابوی\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/fa_AF.json";
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
        \"AD\": \"اندورا\",
        \"AG\": \"انتیگوا و باربودا\",
        \"AL\": \"البانیا\",
        \"AO\": \"انگولا\",
        \"AQ\": \"انترکتیکا\",
        \"AR\": \"ارجنتاین\",
        \"BA\": \"بوسنیا و هرزه‌گوینا\",
        \"BD\": \"بنگله‌دیش\",
        \"BE\": \"بلجیم\",
        \"BG\": \"بلغاریا\",
        \"BN\": \"برونی\",
        \"BO\": \"بولیویا\",
        \"BR\": \"برازیل\",
        \"BS\": \"بهاماس\",
        \"CD\": \"کانگو - کینشاسا\",
        \"CG\": \"کانگو - برازویل\",
        \"CH\": \"سویس\",
        \"CL\": \"چلی\",
        \"CO\": \"کولمبیا\",
        \"CR\": \"کاستریکا\",
        \"CU\": \"کیوبا\",
        \"DK\": \"دنمارک\",
        \"EE\": \"استونیا\",
        \"ER\": \"اریتریا\",
        \"ES\": \"هسپانیه\",
        \"ET\": \"ایتوپیا\",
        \"FI\": \"فنلند\",
        \"FM\": \"میکرونزیا\",
        \"GD\": \"گرینادا\",
        \"GH\": \"گانا\",
        \"GN\": \"گینیا\",
        \"GQ\": \"گینیا استوایی\",
        \"GT\": \"گواتیمالا\",
        \"GW\": \"گینیا بیسائو\",
        \"GY\": \"گیانا\",
        \"HK\": \"هانگ کانگ، ناحیهٔ ویژهٔ حکومتی چین\",
        \"HN\": \"هاندوراس\",
        \"HR\": \"کروشیا\",
        \"HT\": \"هایتی\",
        \"ID\": \"اندونیزیا\",
        \"IE\": \"آیرلند\",
        \"IS\": \"آیسلند\",
        \"JP\": \"جاپان\",
        \"KE\": \"کینیا\",
        \"KH\": \"کمپوچیا\",
        \"KP\": \"کوریای شمالی\",
        \"KR\": \"کوریای جنوبی\",
        \"LK\": \"سریلانکا\",
        \"LS\": \"لیسوتو\",
        \"LT\": \"لتوانیا\",
        \"LV\": \"لاتویا\",
        \"LY\": \"لیبیا\",
        \"MG\": \"مادغاسکر\",
        \"MN\": \"منگولیا\",
        \"MR\": \"موریتانیا\",
        \"MT\": \"مالتا\",
        \"MX\": \"مکسیکو\",
        \"MY\": \"مالیزیا\",
        \"MZ\": \"موزمبیق\",
        \"NG\": \"نیجریا\",
        \"NI\": \"نیکاراگوا\",
        \"NL\": \"هالند\",
        \"NO\": \"ناروی\",
        \"NP\": \"نیپال\",
        \"NZ\": \"زیلاند جدید\",
        \"PA\": \"پانامه\",
        \"PE\": \"پیرو\",
        \"PG\": \"پاپوا نیو گینیا\",
        \"PL\": \"پولند\",
        \"PT\": \"پرتگال\",
        \"PY\": \"پاراگوای\",
        \"RO\": \"رومانیا\",
        \"SE\": \"سویدن\",
        \"SG\": \"سینگاپور\",
        \"SI\": \"سلونیا\",
        \"SJ\": \"اسوالبارد و جان ماین\",
        \"SK\": \"سلواکیا\",
        \"SL\": \"سیرالیون\",
        \"SN\": \"سینیگال\",
        \"SO\": \"سومالیه\",
        \"SV\": \"السلوادور\",
        \"TJ\": \"تاجکستان\",
        \"UG\": \"یوگاندا\",
        \"UY\": \"یوروگوای\",
        \"VC\": \"سنت وینسنت و گرنادین‌ها\",
        \"VE\": \"ونزویلا\",
        \"ZW\": \"زیمبابوی\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/fa_AF.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/fa_AF.json");
    }
}
