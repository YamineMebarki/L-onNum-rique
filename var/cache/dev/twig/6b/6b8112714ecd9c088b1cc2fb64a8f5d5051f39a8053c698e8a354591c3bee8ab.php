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

/* vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json */
class __TwigTemplate_c56e5f8730d2d3463fb678978dfd20775082c5261e8ce46a40342177557362db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"aa\": \"阿法爾文\",
        \"az\": \"阿塞拜疆文\",
        \"az_Arab\": \"南阿塞拜疆文\",
        \"ba\": \"巴什基爾文\",
        \"br\": \"布里多尼文\",
        \"bs\": \"波斯尼亞文\",
        \"ca\": \"加泰隆尼亞文\",
        \"crh\": \"克里米亞韃靼文\",
        \"crs\": \"塞舌爾克里奧爾法文\",
        \"de_AT\": \"奧地利德文\",
        \"de_CH\": \"瑞士德語\",
        \"den\": \"斯拉夫文\",
        \"en_AU\": \"澳洲英文\",
        \"en_CA\": \"加拿大英文\",
        \"en_GB\": \"英國英文\",
        \"en_US\": \"美國英文\",
        \"eo\": \"世界語\",
        \"es_419\": \"拉丁美洲西班牙文\",
        \"es_ES\": \"歐洲西班牙文\",
        \"es_MX\": \"墨西哥西班牙文\",
        \"fr_CA\": \"加拿大法文\",
        \"fr_CH\": \"瑞士法文\",
        \"gil\": \"吉爾伯特文\",
        \"gl\": \"加里西亞文\",
        \"gsw\": \"瑞士德文\",
        \"hmn\": \"苗語\",
        \"hr\": \"克羅地亞文\",
        \"it\": \"意大利文\",
        \"jpr\": \"猶太波斯文\",
        \"ka\": \"格魯吉亞文\",
        \"kiu\": \"扎扎其文\",
        \"kn\": \"坎納達文\",
        \"kri\": \"克裡奧爾文\",
        \"lo\": \"老撾文\",
        \"luo\": \"盧歐文\",
        \"mfe\": \"毛里裘斯克里奧爾文\",
        \"mg\": \"馬拉加斯文\",
        \"ml\": \"馬拉雅拉姆文\",
        \"mt\": \"馬耳他文\",
        \"nl_BE\": \"比利時荷蘭文\",
        \"nqo\": \"西非書面語言（N’ko）\",
        \"or\": \"奧里雅文\",
        \"pcm\": \"尼日利亞皮欽文\",
        \"pt_BR\": \"巴西葡萄牙文\",
        \"pt_PT\": \"歐洲葡萄牙文\",
        \"ro_MD\": \"摩爾多瓦羅馬尼亞文\",
        \"rup\": \"阿羅馬尼亞語\",
        \"rw\": \"盧旺達文\",
        \"sl\": \"斯洛文尼亞文\",
        \"sn\": \"修納文\",
        \"so\": \"索馬里文\",
        \"sw_CD\": \"剛果史瓦希里文\",
        \"syr\": \"敍利亞文\",
        \"ta\": \"泰米爾文\",
        \"tn\": \"突尼西亞文\",
        \"to\": \"湯加文\",
        \"ur\": \"烏爾都文\",
        \"wbp\": \"瓦爾皮里文\",
        \"yue\": \"廣東話\",
        \"zgh\": \"摩洛哥標準塔馬齊格特文\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json";
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
        \"aa\": \"阿法爾文\",
        \"az\": \"阿塞拜疆文\",
        \"az_Arab\": \"南阿塞拜疆文\",
        \"ba\": \"巴什基爾文\",
        \"br\": \"布里多尼文\",
        \"bs\": \"波斯尼亞文\",
        \"ca\": \"加泰隆尼亞文\",
        \"crh\": \"克里米亞韃靼文\",
        \"crs\": \"塞舌爾克里奧爾法文\",
        \"de_AT\": \"奧地利德文\",
        \"de_CH\": \"瑞士德語\",
        \"den\": \"斯拉夫文\",
        \"en_AU\": \"澳洲英文\",
        \"en_CA\": \"加拿大英文\",
        \"en_GB\": \"英國英文\",
        \"en_US\": \"美國英文\",
        \"eo\": \"世界語\",
        \"es_419\": \"拉丁美洲西班牙文\",
        \"es_ES\": \"歐洲西班牙文\",
        \"es_MX\": \"墨西哥西班牙文\",
        \"fr_CA\": \"加拿大法文\",
        \"fr_CH\": \"瑞士法文\",
        \"gil\": \"吉爾伯特文\",
        \"gl\": \"加里西亞文\",
        \"gsw\": \"瑞士德文\",
        \"hmn\": \"苗語\",
        \"hr\": \"克羅地亞文\",
        \"it\": \"意大利文\",
        \"jpr\": \"猶太波斯文\",
        \"ka\": \"格魯吉亞文\",
        \"kiu\": \"扎扎其文\",
        \"kn\": \"坎納達文\",
        \"kri\": \"克裡奧爾文\",
        \"lo\": \"老撾文\",
        \"luo\": \"盧歐文\",
        \"mfe\": \"毛里裘斯克里奧爾文\",
        \"mg\": \"馬拉加斯文\",
        \"ml\": \"馬拉雅拉姆文\",
        \"mt\": \"馬耳他文\",
        \"nl_BE\": \"比利時荷蘭文\",
        \"nqo\": \"西非書面語言（N’ko）\",
        \"or\": \"奧里雅文\",
        \"pcm\": \"尼日利亞皮欽文\",
        \"pt_BR\": \"巴西葡萄牙文\",
        \"pt_PT\": \"歐洲葡萄牙文\",
        \"ro_MD\": \"摩爾多瓦羅馬尼亞文\",
        \"rup\": \"阿羅馬尼亞語\",
        \"rw\": \"盧旺達文\",
        \"sl\": \"斯洛文尼亞文\",
        \"sn\": \"修納文\",
        \"so\": \"索馬里文\",
        \"sw_CD\": \"剛果史瓦希里文\",
        \"syr\": \"敍利亞文\",
        \"ta\": \"泰米爾文\",
        \"tn\": \"突尼西亞文\",
        \"to\": \"湯加文\",
        \"ur\": \"烏爾都文\",
        \"wbp\": \"瓦爾皮里文\",
        \"yue\": \"廣東話\",
        \"zgh\": \"摩洛哥標準塔馬齊格特文\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/zh_Hant_HK.json");
    }
}
