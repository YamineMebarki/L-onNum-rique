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

/* vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json */
class __TwigTemplate_6c39eb056bb1aff7ba78da12262f3c290440094cb77c0cad4fce05beb2bda746 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Cyrl\": \"西里爾文\",
        \"Ethi\": \"埃塞俄比亞文\",
        \"Geor\": \"格魯吉亞文\",
        \"Guru\": \"古木基文\",
        \"Hans\": \"簡體字\",
        \"Hant\": \"繁體字\",
        \"Knda\": \"坎納達文\",
        \"Laoo\": \"老撾文\",
        \"Latn\": \"拉丁字母\",
        \"Mlym\": \"馬拉雅拉姆文\",
        \"Newa\": \"尼瓦爾文\",
        \"Orya\": \"奧里雅文\",
        \"Sinh\": \"僧伽羅文\",
        \"Taml\": \"泰米爾文\",
        \"Thaa\": \"它拿字母\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json";
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
        \"Cyrl\": \"西里爾文\",
        \"Ethi\": \"埃塞俄比亞文\",
        \"Geor\": \"格魯吉亞文\",
        \"Guru\": \"古木基文\",
        \"Hans\": \"簡體字\",
        \"Hant\": \"繁體字\",
        \"Knda\": \"坎納達文\",
        \"Laoo\": \"老撾文\",
        \"Latn\": \"拉丁字母\",
        \"Mlym\": \"馬拉雅拉姆文\",
        \"Newa\": \"尼瓦爾文\",
        \"Orya\": \"奧里雅文\",
        \"Sinh\": \"僧伽羅文\",
        \"Taml\": \"泰米爾文\",
        \"Thaa\": \"它拿字母\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/zh_Hant_HK.json");
    }
}
