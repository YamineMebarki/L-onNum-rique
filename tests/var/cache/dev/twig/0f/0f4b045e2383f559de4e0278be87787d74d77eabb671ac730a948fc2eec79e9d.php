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

/* vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json */
class __TwigTemplate_76c2852a7f3db76f076dbebf1b9cf13b529022f75d4e7ee756e115e1028f662d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"CG\": \"Конго\",
        \"CV\": \"Кабо Верде\",
        \"CZ\": \"Чешка Република\",
        \"HK\": \"САР Хонгконг\",
        \"KN\": \"Свети Китс и Невис\",
        \"MO\": \"САР Макао\",
        \"PM\": \"Свети Пјер и Микелон\",
        \"RE\": \"Реунион\",
        \"UM\": \"Мања удаљена острва САД\",
        \"VC\": \"Свети Винсент и Гренадини\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json";
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
        \"CG\": \"Конго\",
        \"CV\": \"Кабо Верде\",
        \"CZ\": \"Чешка Република\",
        \"HK\": \"САР Хонгконг\",
        \"KN\": \"Свети Китс и Невис\",
        \"MO\": \"САР Макао\",
        \"PM\": \"Свети Пјер и Микелон\",
        \"RE\": \"Реунион\",
        \"UM\": \"Мања удаљена острва САД\",
        \"VC\": \"Свети Винсент и Гренадини\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/sr_Cyrl_XK.json");
    }
}
