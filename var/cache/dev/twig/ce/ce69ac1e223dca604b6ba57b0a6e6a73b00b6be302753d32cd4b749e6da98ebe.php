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

/* vendor/symfony/intl/Resources/data/currencies/zh_HK.json */
class __TwigTemplate_fc5523103970f78a885845d583ea91b17abebee2892c84ba73d1c271216cdd5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/zh_HK.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/zh_HK.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AED\": [
            \"AED\",
            \"阿拉伯聯合酋長國迪爾汗\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"澳元\"
        ],
        \"AWG\": [
            \"AWG\",
            \"阿魯巴盾\"
        ],
        \"AZN\": [
            \"AZN\",
            \"亞塞拜疆馬納特\"
        ],
        \"BAD\": [
            \"BAD\",
            \"波斯尼亞-赫塞哥維納第納爾\"
        ],
        \"BAM\": [
            \"BAM\",
            \"波斯尼亞-赫塞哥維納可轉換馬克\"
        ],
        \"BBD\": [
            \"BBD\",
            \"巴巴多斯元\"
        ],
        \"BEC\": [
            \"BEC\",
            \"比利時法郎（可兌換）\"
        ],
        \"BIF\": [
            \"BIF\",
            \"布隆迪法郎\"
        ],
        \"BMD\": [
            \"BMD\",
            \"百慕達元\"
        ],
        \"BWP\": [
            \"BWP\",
            \"博茨瓦納普拉\"
        ],
        \"BZD\": [
            \"BZD\",
            \"伯利茲元\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"加拿大元\"
        ],
        \"CRC\": [
            \"CRC\",
            \"哥斯達黎加科郎\"
        ],
        \"CVE\": [
            \"CVE\",
            \"佛得角埃斯庫多\"
        ],
        \"DJF\": [
            \"DJF\",
            \"吉布提法郎\"
        ],
        \"DOP\": [
            \"DOP\",
            \"多米尼加披索\"
        ],
        \"ETB\": [
            \"ETB\",
            \"埃塞俄比亞比爾\"
        ],
        \"GEL\": [
            \"GEL\",
            \"格魯吉亞拉里\"
        ],
        \"GHS\": [
            \"GHS\",
            \"加納塞地\"
        ],
        \"GMD\": [
            \"GMD\",
            \"岡比亞達拉西\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"危地馬拉格查爾\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"港元\"
        ],
        \"HRK\": [
            \"HRK\",
            \"克羅地亞庫納\"
        ],
        \"ITL\": [
            \"ITL\",
            \"意大利里拉\"
        ],
        \"KES\": [
            \"KES\",
            \"肯雅先令\"
        ],
        \"KHR\": [
            \"KHR\",
            \"柬埔寨里爾\"
        ],
        \"KPW\": [
            \"KPW\",
            \"北韓圜\"
        ],
        \"KRW\": [
            \"₩\",
            \"韓元\"
        ],
        \"KZT\": [
            \"KZT\",
            \"哈薩克坦吉\"
        ],
        \"LAK\": [
            \"LAK\",
            \"老撾基普\"
        ],
        \"LRD\": [
            \"LRD\",
            \"利比利亞元\"
        ],
        \"MDL\": [
            \"MDL\",
            \"摩爾多瓦列伊\"
        ],
        \"MRO\": [
            \"MRO\",
            \"毛里塔尼亞烏吉亞 (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"毛里塔尼亞烏吉亞\"
        ],
        \"MUR\": [
            \"MUR\",
            \"毛里裘斯盧布\"
        ],
        \"MVR\": [
            \"MVR\",
            \"馬爾代夫盧非亞\"
        ],
        \"MZN\": [
            \"MZN\",
            \"莫桑比克梅蒂卡爾\"
        ],
        \"NGN\": [
            \"NGN\",
            \"尼日利亞奈拉\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"紐西蘭元\"
        ],
        \"OMR\": [
            \"OMR\",
            \"阿曼里奧\"
        ],
        \"PGK\": [
            \"PGK\",
            \"巴布亞新幾內亞基那\"
        ],
        \"QAR\": [
            \"QAR\",
            \"卡塔爾里亞爾\"
        ],
        \"RSD\": [
            \"RSD\",
            \"塞爾維亞第納爾\"
        ],
        \"RWF\": [
            \"RWF\",
            \"盧旺達法郎\"
        ],
        \"SAR\": [
            \"SAR\",
            \"沙特阿拉伯里亞爾\"
        ],
        \"SBD\": [
            \"SBD\",
            \"所羅門群島元\"
        ],
        \"SCR\": [
            \"SCR\",
            \"塞舌爾盧比\"
        ],
        \"SGD\": [
            \"SGD\",
            \"新加坡元\"
        ],
        \"SLL\": [
            \"SLL\",
            \"塞拉利昂利昂\"
        ],
        \"SOS\": [
            \"SOS\",
            \"索馬里先令\"
        ],
        \"SRD\": [
            \"SRD\",
            \"蘇里南元\"
        ],
        \"STD\": [
            \"STD\",
            \"聖多美和普林西比多布拉 (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"聖多美和普林西比多布拉\"
        ],
        \"SYP\": [
            \"SYP\",
            \"敍利亞鎊\"
        ],
        \"SZL\": [
            \"SZL\",
            \"斯威士蘭里朗吉尼\"
        ],
        \"TOP\": [
            \"TOP\",
            \"湯加潘加\"
        ],
        \"TTD\": [
            \"TTD\",
            \"千里達和多巴哥元\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"新台幣\"
        ],
        \"TZS\": [
            \"TZS\",
            \"坦桑尼亞先令\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VUV\": [
            \"VUV\",
            \"瓦努阿圖瓦圖\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"中非法郎\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"東加勒比元\"
        ],
        \"XOF\": [
            \"CFA\",
            \"多哥非洲共同體法郎\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"太平洋法郎\"
        ],
        \"YER\": [
            \"YER\",
            \"也門里雅\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"贊比亞克瓦查\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/zh_HK.json";
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
            \"阿拉伯聯合酋長國迪爾汗\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"澳元\"
        ],
        \"AWG\": [
            \"AWG\",
            \"阿魯巴盾\"
        ],
        \"AZN\": [
            \"AZN\",
            \"亞塞拜疆馬納特\"
        ],
        \"BAD\": [
            \"BAD\",
            \"波斯尼亞-赫塞哥維納第納爾\"
        ],
        \"BAM\": [
            \"BAM\",
            \"波斯尼亞-赫塞哥維納可轉換馬克\"
        ],
        \"BBD\": [
            \"BBD\",
            \"巴巴多斯元\"
        ],
        \"BEC\": [
            \"BEC\",
            \"比利時法郎（可兌換）\"
        ],
        \"BIF\": [
            \"BIF\",
            \"布隆迪法郎\"
        ],
        \"BMD\": [
            \"BMD\",
            \"百慕達元\"
        ],
        \"BWP\": [
            \"BWP\",
            \"博茨瓦納普拉\"
        ],
        \"BZD\": [
            \"BZD\",
            \"伯利茲元\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"加拿大元\"
        ],
        \"CRC\": [
            \"CRC\",
            \"哥斯達黎加科郎\"
        ],
        \"CVE\": [
            \"CVE\",
            \"佛得角埃斯庫多\"
        ],
        \"DJF\": [
            \"DJF\",
            \"吉布提法郎\"
        ],
        \"DOP\": [
            \"DOP\",
            \"多米尼加披索\"
        ],
        \"ETB\": [
            \"ETB\",
            \"埃塞俄比亞比爾\"
        ],
        \"GEL\": [
            \"GEL\",
            \"格魯吉亞拉里\"
        ],
        \"GHS\": [
            \"GHS\",
            \"加納塞地\"
        ],
        \"GMD\": [
            \"GMD\",
            \"岡比亞達拉西\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"危地馬拉格查爾\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"港元\"
        ],
        \"HRK\": [
            \"HRK\",
            \"克羅地亞庫納\"
        ],
        \"ITL\": [
            \"ITL\",
            \"意大利里拉\"
        ],
        \"KES\": [
            \"KES\",
            \"肯雅先令\"
        ],
        \"KHR\": [
            \"KHR\",
            \"柬埔寨里爾\"
        ],
        \"KPW\": [
            \"KPW\",
            \"北韓圜\"
        ],
        \"KRW\": [
            \"₩\",
            \"韓元\"
        ],
        \"KZT\": [
            \"KZT\",
            \"哈薩克坦吉\"
        ],
        \"LAK\": [
            \"LAK\",
            \"老撾基普\"
        ],
        \"LRD\": [
            \"LRD\",
            \"利比利亞元\"
        ],
        \"MDL\": [
            \"MDL\",
            \"摩爾多瓦列伊\"
        ],
        \"MRO\": [
            \"MRO\",
            \"毛里塔尼亞烏吉亞 (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"毛里塔尼亞烏吉亞\"
        ],
        \"MUR\": [
            \"MUR\",
            \"毛里裘斯盧布\"
        ],
        \"MVR\": [
            \"MVR\",
            \"馬爾代夫盧非亞\"
        ],
        \"MZN\": [
            \"MZN\",
            \"莫桑比克梅蒂卡爾\"
        ],
        \"NGN\": [
            \"NGN\",
            \"尼日利亞奈拉\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"紐西蘭元\"
        ],
        \"OMR\": [
            \"OMR\",
            \"阿曼里奧\"
        ],
        \"PGK\": [
            \"PGK\",
            \"巴布亞新幾內亞基那\"
        ],
        \"QAR\": [
            \"QAR\",
            \"卡塔爾里亞爾\"
        ],
        \"RSD\": [
            \"RSD\",
            \"塞爾維亞第納爾\"
        ],
        \"RWF\": [
            \"RWF\",
            \"盧旺達法郎\"
        ],
        \"SAR\": [
            \"SAR\",
            \"沙特阿拉伯里亞爾\"
        ],
        \"SBD\": [
            \"SBD\",
            \"所羅門群島元\"
        ],
        \"SCR\": [
            \"SCR\",
            \"塞舌爾盧比\"
        ],
        \"SGD\": [
            \"SGD\",
            \"新加坡元\"
        ],
        \"SLL\": [
            \"SLL\",
            \"塞拉利昂利昂\"
        ],
        \"SOS\": [
            \"SOS\",
            \"索馬里先令\"
        ],
        \"SRD\": [
            \"SRD\",
            \"蘇里南元\"
        ],
        \"STD\": [
            \"STD\",
            \"聖多美和普林西比多布拉 (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"聖多美和普林西比多布拉\"
        ],
        \"SYP\": [
            \"SYP\",
            \"敍利亞鎊\"
        ],
        \"SZL\": [
            \"SZL\",
            \"斯威士蘭里朗吉尼\"
        ],
        \"TOP\": [
            \"TOP\",
            \"湯加潘加\"
        ],
        \"TTD\": [
            \"TTD\",
            \"千里達和多巴哥元\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"新台幣\"
        ],
        \"TZS\": [
            \"TZS\",
            \"坦桑尼亞先令\"
        ],
        \"VES\": [
            \"VES\",
            \"VES\"
        ],
        \"VUV\": [
            \"VUV\",
            \"瓦努阿圖瓦圖\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"中非法郎\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"東加勒比元\"
        ],
        \"XOF\": [
            \"CFA\",
            \"多哥非洲共同體法郎\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"太平洋法郎\"
        ],
        \"YER\": [
            \"YER\",
            \"也門里雅\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"贊比亞克瓦查\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/zh_HK.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/zh_HK.json");
    }
}
