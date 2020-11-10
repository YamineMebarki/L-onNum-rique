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

/* vendor/symfony/intl/Resources/data/languages/fa_AF.json */
class __TwigTemplate_3c6e23e34385db854d67c983d5828c0704b3cee7a8c56a2d26763e074187ec29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/fa_AF.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/fa_AF.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ab\": \"افریکانس\",
        \"ar_001\": \"عربی فصیح\",
        \"as\": \"اسامی\",
        \"ast\": \"اتریشی\",
        \"az\": \"آذربایجانی\",
        \"ckb\": \"کردی سورانی\",
        \"dv\": \"مالدیوی\",
        \"es\": \"هسپانوی\",
        \"fi\": \"فنلندی\",
        \"ga\": \"آیرلندی\",
        \"hr\": \"کروشیایی\",
        \"id\": \"اندونیزیایی\",
        \"is\": \"آیسلندی\",
        \"it\": \"ایتالوی\",
        \"ja\": \"جاپانی\",
        \"ko\": \"کوریایی\",
        \"ksh\": \"کلنی\",
        \"kw\": \"کورنی\",
        \"ky\": \"قرغزی\",
        \"lus\": \"میزویی\",
        \"mai\": \"مایتیلی\",
        \"mn\": \"مغلی\",
        \"nb\": \"نروژی کتابی\",
        \"ne\": \"نیپالی\",
        \"nl\": \"هالندی\",
        \"nl_BE\": \"فلمیش\",
        \"nn\": \"نروژی نو\",
        \"no\": \"نارویژی\",
        \"pl\": \"پولندی\",
        \"pt\": \"پرتگالی\",
        \"sq\": \"البانیایی\",
        \"srn\": \"زبان سرانان\",
        \"sv\": \"سویدنی\",
        \"sw\": \"سواحلی\",
        \"tg\": \"تاجکی\",
        \"zh_Hans\": \"چینی ساده شده\",
        \"zza\": \"زازاکی\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/fa_AF.json";
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
        \"ab\": \"افریکانس\",
        \"ar_001\": \"عربی فصیح\",
        \"as\": \"اسامی\",
        \"ast\": \"اتریشی\",
        \"az\": \"آذربایجانی\",
        \"ckb\": \"کردی سورانی\",
        \"dv\": \"مالدیوی\",
        \"es\": \"هسپانوی\",
        \"fi\": \"فنلندی\",
        \"ga\": \"آیرلندی\",
        \"hr\": \"کروشیایی\",
        \"id\": \"اندونیزیایی\",
        \"is\": \"آیسلندی\",
        \"it\": \"ایتالوی\",
        \"ja\": \"جاپانی\",
        \"ko\": \"کوریایی\",
        \"ksh\": \"کلنی\",
        \"kw\": \"کورنی\",
        \"ky\": \"قرغزی\",
        \"lus\": \"میزویی\",
        \"mai\": \"مایتیلی\",
        \"mn\": \"مغلی\",
        \"nb\": \"نروژی کتابی\",
        \"ne\": \"نیپالی\",
        \"nl\": \"هالندی\",
        \"nl_BE\": \"فلمیش\",
        \"nn\": \"نروژی نو\",
        \"no\": \"نارویژی\",
        \"pl\": \"پولندی\",
        \"pt\": \"پرتگالی\",
        \"sq\": \"البانیایی\",
        \"srn\": \"زبان سرانان\",
        \"sv\": \"سویدنی\",
        \"sw\": \"سواحلی\",
        \"tg\": \"تاجکی\",
        \"zh_Hans\": \"چینی ساده شده\",
        \"zza\": \"زازاکی\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/fa_AF.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/fa_AF.json");
    }
}
