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

/* vendor/symfony/intl/Resources/data/locales/ar_SA.json */
class __TwigTemplate_07f49f0f90d59b960b3a5fb175e1f012090daedac4cac6e1f93e4f7c1059b553 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ar_SA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ar_SA.json"));

        // line 1
        echo "{
    \"Names\": {
        \"en_MO\": \"الإنجليزية (ماكاو الصينية [منطقة إدارية خاصة])\",
        \"en_MS\": \"الإنجليزية (مونتيسيرات)\",
        \"es_UY\": \"الإسبانية (أوروغواي)\",
        \"lo\": \"اللاوو\",
        \"lo_LA\": \"اللاوو (لاوس)\",
        \"pt_MO\": \"البرتغالية (ماكاو الصينية [منطقة إدارية خاصة])\",
        \"sh\": \"الكرواتية الصربية\",
        \"sh_BA\": \"الكرواتية الصربية (البوسنة والهرسك)\",
        \"sw\": \"السواحيلية\",
        \"sw_CD\": \"السواحيلية (الكونغو - كينشاسا)\",
        \"sw_KE\": \"السواحيلية (كينيا)\",
        \"sw_TZ\": \"السواحيلية (تنزانيا)\",
        \"sw_UG\": \"السواحيلية (أوغندا)\",
        \"te\": \"التيلوجو\",
        \"te_IN\": \"التيلوجو (الهند)\",
        \"ti\": \"التيغرينية\",
        \"ti_ER\": \"التيغرينية (إريتريا)\",
        \"ti_ET\": \"التيغرينية (إثيوبيا)\",
        \"zh_Hans_MO\": \"الصينية (المبسطة، ماكاو الصينية [منطقة إدارية خاصة])\",
        \"zh_Hant_MO\": \"الصينية (التقليدية، ماكاو الصينية [منطقة إدارية خاصة])\",
        \"zh_MO\": \"الصينية (ماكاو الصينية [منطقة إدارية خاصة])\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/ar_SA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"en_MO\": \"الإنجليزية (ماكاو الصينية [منطقة إدارية خاصة])\",
        \"en_MS\": \"الإنجليزية (مونتيسيرات)\",
        \"es_UY\": \"الإسبانية (أوروغواي)\",
        \"lo\": \"اللاوو\",
        \"lo_LA\": \"اللاوو (لاوس)\",
        \"pt_MO\": \"البرتغالية (ماكاو الصينية [منطقة إدارية خاصة])\",
        \"sh\": \"الكرواتية الصربية\",
        \"sh_BA\": \"الكرواتية الصربية (البوسنة والهرسك)\",
        \"sw\": \"السواحيلية\",
        \"sw_CD\": \"السواحيلية (الكونغو - كينشاسا)\",
        \"sw_KE\": \"السواحيلية (كينيا)\",
        \"sw_TZ\": \"السواحيلية (تنزانيا)\",
        \"sw_UG\": \"السواحيلية (أوغندا)\",
        \"te\": \"التيلوجو\",
        \"te_IN\": \"التيلوجو (الهند)\",
        \"ti\": \"التيغرينية\",
        \"ti_ER\": \"التيغرينية (إريتريا)\",
        \"ti_ET\": \"التيغرينية (إثيوبيا)\",
        \"zh_Hans_MO\": \"الصينية (المبسطة، ماكاو الصينية [منطقة إدارية خاصة])\",
        \"zh_Hant_MO\": \"الصينية (التقليدية، ماكاو الصينية [منطقة إدارية خاصة])\",
        \"zh_MO\": \"الصينية (ماكاو الصينية [منطقة إدارية خاصة])\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/ar_SA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/ar_SA.json");
    }
}
