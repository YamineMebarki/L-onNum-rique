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

/* vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json */
class __TwigTemplate_48361d91bc6481a7b9f719136910bf2f9ccb5003776850c17a6efe9c460d3a73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AE\": \"阿拉伯聯合酋長國\",
        \"AG\": \"安提瓜和巴布達\",
        \"AW\": \"阿魯巴\",
        \"AZ\": \"亞塞拜疆\",
        \"BA\": \"波斯尼亞和黑塞哥維那\",
        \"BB\": \"巴巴多斯\",
        \"BF\": \"布基納法索\",
        \"BI\": \"布隆迪\",
        \"BJ\": \"貝寧\",
        \"BL\": \"聖巴泰勒米\",
        \"BV\": \"鮑威特島\",
        \"BW\": \"博茨瓦納\",
        \"BZ\": \"伯利茲\",
        \"CC\": \"科科斯 (基林) 群島\",
        \"CI\": \"科特迪瓦\",
        \"CR\": \"哥斯達黎加\",
        \"CV\": \"佛得角\",
        \"CY\": \"塞浦路斯\",
        \"DJ\": \"吉布提\",
        \"DO\": \"多米尼加共和國\",
        \"EC\": \"厄瓜多爾\",
        \"ER\": \"厄立特里亞\",
        \"ET\": \"埃塞俄比亞\",
        \"GA\": \"加蓬\",
        \"GD\": \"格林納達\",
        \"GE\": \"格魯吉亞\",
        \"GH\": \"加納\",
        \"GM\": \"岡比亞\",
        \"GS\": \"南佐治亞島與南桑威奇群島\",
        \"GT\": \"危地馬拉\",
        \"GW\": \"幾內亞比紹\",
        \"GY\": \"圭亞那\",
        \"HN\": \"洪都拉斯\",
        \"HR\": \"克羅地亞\",
        \"IM\": \"馬恩島\",
        \"IT\": \"意大利\",
        \"KE\": \"肯尼亞\",
        \"KM\": \"科摩羅\",
        \"KN\": \"聖基茨和尼維斯\",
        \"LA\": \"老撾\",
        \"LC\": \"聖盧西亞\",
        \"LI\": \"列支敦士登\",
        \"LR\": \"利比里亞\",
        \"ME\": \"黑山\",
        \"ML\": \"馬里\",
        \"MR\": \"毛里塔尼亞\",
        \"MS\": \"蒙特塞拉特\",
        \"MT\": \"馬耳他\",
        \"MU\": \"毛里裘斯\",
        \"MV\": \"馬爾代夫\",
        \"MW\": \"馬拉維\",
        \"MZ\": \"莫桑比克\",
        \"NE\": \"尼日爾\",
        \"NG\": \"尼日利亞\",
        \"NR\": \"瑙魯\",
        \"PF\": \"法屬波利尼西亞\",
        \"PG\": \"巴布亞新幾內亞\",
        \"PN\": \"皮特凱恩島\",
        \"PS\": \"巴勒斯坦領土\",
        \"QA\": \"卡塔爾\",
        \"RW\": \"盧旺達\",
        \"SA\": \"沙地阿拉伯\",
        \"SB\": \"所羅門群島\",
        \"SC\": \"塞舌爾\",
        \"SI\": \"斯洛文尼亞\",
        \"SJ\": \"斯瓦爾巴特群島及揚馬延島\",
        \"SL\": \"塞拉利昂\",
        \"SO\": \"索馬里\",
        \"SR\": \"蘇里南\",
        \"ST\": \"聖多美和普林西比\",
        \"SZ\": \"斯威士蘭\",
        \"TC\": \"特克斯和凱科斯群島\",
        \"TD\": \"乍得\",
        \"TF\": \"法屬南部領地\",
        \"TG\": \"多哥共和國\",
        \"TO\": \"湯加\",
        \"TT\": \"千里達和多巴哥\",
        \"TV\": \"圖瓦盧\",
        \"TZ\": \"坦桑尼亞\",
        \"VC\": \"聖文森特和格林納丁斯\",
        \"VG\": \"英屬維爾京群島\",
        \"VI\": \"美屬維爾京群島\",
        \"VU\": \"瓦努阿圖\",
        \"YE\": \"也門\",
        \"YT\": \"馬約特\",
        \"ZM\": \"贊比亞\",
        \"ZW\": \"津巴布韋\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json";
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
        \"AE\": \"阿拉伯聯合酋長國\",
        \"AG\": \"安提瓜和巴布達\",
        \"AW\": \"阿魯巴\",
        \"AZ\": \"亞塞拜疆\",
        \"BA\": \"波斯尼亞和黑塞哥維那\",
        \"BB\": \"巴巴多斯\",
        \"BF\": \"布基納法索\",
        \"BI\": \"布隆迪\",
        \"BJ\": \"貝寧\",
        \"BL\": \"聖巴泰勒米\",
        \"BV\": \"鮑威特島\",
        \"BW\": \"博茨瓦納\",
        \"BZ\": \"伯利茲\",
        \"CC\": \"科科斯 (基林) 群島\",
        \"CI\": \"科特迪瓦\",
        \"CR\": \"哥斯達黎加\",
        \"CV\": \"佛得角\",
        \"CY\": \"塞浦路斯\",
        \"DJ\": \"吉布提\",
        \"DO\": \"多米尼加共和國\",
        \"EC\": \"厄瓜多爾\",
        \"ER\": \"厄立特里亞\",
        \"ET\": \"埃塞俄比亞\",
        \"GA\": \"加蓬\",
        \"GD\": \"格林納達\",
        \"GE\": \"格魯吉亞\",
        \"GH\": \"加納\",
        \"GM\": \"岡比亞\",
        \"GS\": \"南佐治亞島與南桑威奇群島\",
        \"GT\": \"危地馬拉\",
        \"GW\": \"幾內亞比紹\",
        \"GY\": \"圭亞那\",
        \"HN\": \"洪都拉斯\",
        \"HR\": \"克羅地亞\",
        \"IM\": \"馬恩島\",
        \"IT\": \"意大利\",
        \"KE\": \"肯尼亞\",
        \"KM\": \"科摩羅\",
        \"KN\": \"聖基茨和尼維斯\",
        \"LA\": \"老撾\",
        \"LC\": \"聖盧西亞\",
        \"LI\": \"列支敦士登\",
        \"LR\": \"利比里亞\",
        \"ME\": \"黑山\",
        \"ML\": \"馬里\",
        \"MR\": \"毛里塔尼亞\",
        \"MS\": \"蒙特塞拉特\",
        \"MT\": \"馬耳他\",
        \"MU\": \"毛里裘斯\",
        \"MV\": \"馬爾代夫\",
        \"MW\": \"馬拉維\",
        \"MZ\": \"莫桑比克\",
        \"NE\": \"尼日爾\",
        \"NG\": \"尼日利亞\",
        \"NR\": \"瑙魯\",
        \"PF\": \"法屬波利尼西亞\",
        \"PG\": \"巴布亞新幾內亞\",
        \"PN\": \"皮特凱恩島\",
        \"PS\": \"巴勒斯坦領土\",
        \"QA\": \"卡塔爾\",
        \"RW\": \"盧旺達\",
        \"SA\": \"沙地阿拉伯\",
        \"SB\": \"所羅門群島\",
        \"SC\": \"塞舌爾\",
        \"SI\": \"斯洛文尼亞\",
        \"SJ\": \"斯瓦爾巴特群島及揚馬延島\",
        \"SL\": \"塞拉利昂\",
        \"SO\": \"索馬里\",
        \"SR\": \"蘇里南\",
        \"ST\": \"聖多美和普林西比\",
        \"SZ\": \"斯威士蘭\",
        \"TC\": \"特克斯和凱科斯群島\",
        \"TD\": \"乍得\",
        \"TF\": \"法屬南部領地\",
        \"TG\": \"多哥共和國\",
        \"TO\": \"湯加\",
        \"TT\": \"千里達和多巴哥\",
        \"TV\": \"圖瓦盧\",
        \"TZ\": \"坦桑尼亞\",
        \"VC\": \"聖文森特和格林納丁斯\",
        \"VG\": \"英屬維爾京群島\",
        \"VI\": \"美屬維爾京群島\",
        \"VU\": \"瓦努阿圖\",
        \"YE\": \"也門\",
        \"YT\": \"馬約特\",
        \"ZM\": \"贊比亞\",
        \"ZW\": \"津巴布韋\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/zh_Hant_HK.json");
    }
}
