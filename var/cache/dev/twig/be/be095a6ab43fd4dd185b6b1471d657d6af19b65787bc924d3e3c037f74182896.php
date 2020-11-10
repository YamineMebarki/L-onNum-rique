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

/* vendor/symfony/intl/Resources/data/locales/ru_UA.json */
class __TwigTemplate_7150cc572632e7f9ea34c91ef09bec69299639ffb347bdceb73a1b7cc1846f37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ru_UA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/ru_UA.json"));

        // line 1
        echo "{
    \"Names\": {
        \"ar_AE\": \"арабский (Объединенные Арабские Эмираты)\",
        \"en_AE\": \"английский (Объединенные Арабские Эмираты)\",
        \"en_CK\": \"английский (О-ва Кука)\",
        \"en_CX\": \"английский (О-в Рождества)\",
        \"en_NF\": \"английский (О-в Норфолк)\",
        \"en_UM\": \"английский (Малые Тихоокеанские Отдаленные Острова США)\",
        \"pt_TL\": \"португальский (Тимор-Лесте)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/ru_UA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"ar_AE\": \"арабский (Объединенные Арабские Эмираты)\",
        \"en_AE\": \"английский (Объединенные Арабские Эмираты)\",
        \"en_CK\": \"английский (О-ва Кука)\",
        \"en_CX\": \"английский (О-в Рождества)\",
        \"en_NF\": \"английский (О-в Норфолк)\",
        \"en_UM\": \"английский (Малые Тихоокеанские Отдаленные Острова США)\",
        \"pt_TL\": \"португальский (Тимор-Лесте)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/ru_UA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/ru_UA.json");
    }
}
