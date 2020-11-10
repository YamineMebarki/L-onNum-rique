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

/* vendor/symfony/intl/Resources/data/languages/ar_SA.json */
class __TwigTemplate_3b6940af8db30e62b64dcb7a73c75d0a0144fd99cc000a6d6b85dd039805372d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ar_SA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ar_SA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ar_001\": \"العربية الرسمية الحديثة\",
        \"arn\": \"المابودونجونية\",
        \"de_AT\": \"الألمانية النمساوية\",
        \"de_CH\": \"الألمانية العليا السويسرية\",
        \"en_AU\": \"الإنجليزية الأسترالية\",
        \"en_CA\": \"الإنجليزية الكندية\",
        \"en_GB\": \"الإنجليزية البريطانية\",
        \"en_US\": \"الإنجليزية الأمريكية\",
        \"es_419\": \"الإسبانية أمريكا اللاتينية\",
        \"es_ES\": \"الإسبانية الأوروبية\",
        \"es_MX\": \"الإسبانية المكسيكية\",
        \"fr_CA\": \"الفرنسية الكندية\",
        \"fr_CH\": \"الفرنسية السويسرية\",
        \"gn\": \"الغورانية\",
        \"hsb\": \"صوربيا العليا\",
        \"lo\": \"اللاوو\",
        \"nds_NL\": \"السكسونية السفلى\",
        \"nl_BE\": \"الفلمنكية\",
        \"pt_BR\": \"البرتغالية البرازيلية\",
        \"pt_PT\": \"البرتغالية الأوروبية\",
        \"sh\": \"الكرواتية الصربية\",
        \"sma\": \"سامي الجنوبية\",
        \"sw\": \"السواحيلية\",
        \"sw_CD\": \"السواحيلية الكونغولية\",
        \"te\": \"التيلوجو\",
        \"ti\": \"التيغرينية\",
        \"zh_Hans\": \"الصينية المبسطة\",
        \"zh_Hant\": \"الصينية التقليدية\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ar_SA.json";
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
        \"ar_001\": \"العربية الرسمية الحديثة\",
        \"arn\": \"المابودونجونية\",
        \"de_AT\": \"الألمانية النمساوية\",
        \"de_CH\": \"الألمانية العليا السويسرية\",
        \"en_AU\": \"الإنجليزية الأسترالية\",
        \"en_CA\": \"الإنجليزية الكندية\",
        \"en_GB\": \"الإنجليزية البريطانية\",
        \"en_US\": \"الإنجليزية الأمريكية\",
        \"es_419\": \"الإسبانية أمريكا اللاتينية\",
        \"es_ES\": \"الإسبانية الأوروبية\",
        \"es_MX\": \"الإسبانية المكسيكية\",
        \"fr_CA\": \"الفرنسية الكندية\",
        \"fr_CH\": \"الفرنسية السويسرية\",
        \"gn\": \"الغورانية\",
        \"hsb\": \"صوربيا العليا\",
        \"lo\": \"اللاوو\",
        \"nds_NL\": \"السكسونية السفلى\",
        \"nl_BE\": \"الفلمنكية\",
        \"pt_BR\": \"البرتغالية البرازيلية\",
        \"pt_PT\": \"البرتغالية الأوروبية\",
        \"sh\": \"الكرواتية الصربية\",
        \"sma\": \"سامي الجنوبية\",
        \"sw\": \"السواحيلية\",
        \"sw_CD\": \"السواحيلية الكونغولية\",
        \"te\": \"التيلوجو\",
        \"ti\": \"التيغرينية\",
        \"zh_Hans\": \"الصينية المبسطة\",
        \"zh_Hant\": \"الصينية التقليدية\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ar_SA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ar_SA.json");
    }
}
